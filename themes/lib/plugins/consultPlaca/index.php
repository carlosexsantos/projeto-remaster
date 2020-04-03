<?php

require 'vendor/autoload.php';

use Sinesp\Sinesp;

$placa = $_GET['placa'];

$veiculo = new Sinesp;
$veiculo->proxy('170.84.68.69', '8080');

try {
    $veiculo->buscar($placa);
    if ($veiculo->existe()) {
        echo json_encode($veiculo->dados());
        

    }
} catch (\Exception $e) {
    echo '<script>alert("'.$e->getMessage().'")</script>';
}