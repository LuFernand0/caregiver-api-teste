<?php 

namespace App\ValueObjects;

use DateTimeImmutable;

class Data_nasc
{

    private string $data_nasc;

    public function __construct(string $data_nasc)
    {
        $dataObj = new DateTimeImmutable($data_nasc);
        $data_nasc = $dataObj->format('Y-m-d');
        return $this->data_nasc = $data_nasc;
    }

    public function __toString(): string
    {
        return $this->data_nasc;
    }
}





?>