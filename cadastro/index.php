<?php

require_once "vendor/autoload.php";


use App\Domain\Entities\Cliente;
use App\infra\Controllers\ClienteController;

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_GET['tipo'] === 'cliente') {
    $cliente = new Cliente();
    $clienteController = new ClienteController();
    $request = json_decode(file_get_contents("php://input"));
    $arrayRequest = get_object_vars($request ?? new stdClass());


    $geradorId = date('y') . rand(10, 99);
    while ($clienteController->verificarId($geradorId) != []) {
        $geradorId = date('y') . rand(10, 99);
    }
    $cliente->setId($geradorId);

    foreach ($arrayRequest as $key => $value) {
        $metodo = "set" . ucfirst($key);
        $excessoes = ["Email", "Senha", "Cpf", "Celular", "Data_nasc"];

        if (in_array(ucfirst($key), $excessoes)) {
            $classe = "App\\Domain\\ValueObjects\\" . ucfirst($key);
            $value = new $classe($value);
        }
        if (method_exists($cliente, $metodo)) {
            $cliente->$metodo($value);
        }
    }


    if ($clienteController->salvar($cliente)) {
        http_response_code(200);
        $response = [
            "status" => "success",
            "message" => "Cadastrado com sucesso"
        ];
        echo json_encode($response);
    } else {
        http_response_code(400);
        $response = [
            "status" => "error",
            "message" => "Erro ao cadastrar"
        ];
        echo json_encode($response);
    }
}

?>