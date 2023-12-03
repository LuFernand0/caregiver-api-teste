<?php

require_once "vendor/autoload.php";

use App\Entities\Cliente;

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$cliente = new Cliente();
$request = json_decode(file_get_contents("php://input"));
$arrayRequest = get_object_vars($request);


$geradorId = date('y') . rand(10, 99);
$cliente->setId($geradorId);

foreach ($arrayRequest as $key => $value) {
    $metodo = "set" . ucfirst($key);
    $excessoes = ["Email", "Senha", "Cpf", "Celular", "Data_nasc"];

    if (in_array(ucfirst($key), $excessoes)) {
        $classe = "App\\ValueObjects\\" . ucfirst($key);
        if (ucfirst($key) === "Senha") {
            $value = password_hash($value, PASSWORD_DEFAULT);
            $value = new $classe($value);
        } else {
            $value = new $classe($value);
        }
    }
    if (method_exists($cliente, $metodo)) {
        $cliente->$metodo($value);
    }
}

$cadastrar = new \App\Controllers\ClienteController();
if ($cadastrar->salvar($cliente)) {
    http_response_code(200);
    $response = [
        "status" => "success",
        "message" => "Cadastrado com sucesso"
    ];
    echo json_encode($response);
} else {
    http_response_code(500);
    $response = [
        "status" => "error",
        "message" => "Erro ao cadastrar"
    ];
    echo json_encode($response);
}

?>