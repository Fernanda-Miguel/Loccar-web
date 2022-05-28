<?php

//Cabecalhos obrigatorios
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Incluir a conexao
include_once 'conexao.php';

$query_veiculos = "SELECT * FROM `veiculos` ORDER BY id DESC";
$result_veiculos = $conn->prepare($query_veiculos);
$result_veiculos->execute();

if(($result_veiculos) AND ($result_veiculos->rowCount() != 0)){
    while($row_veiculos = $result_veiculos->fetch(PDO::FETCH_ASSOC)){
        extract($row_veiculos);

        $lista_veiculos["veiculos"][$id] = [
            'id' => $id,
            'marca' => $marca,
            'modelo' => $modelo,
            'cor' => $cor,
            'placa' => $placa,
            'qportas' => $qportas,
        ];
    }

    //Resposta com status 200
    http_response_code(200);

    //Retornar os produtos em formato json
    echo json_encode($lista_veiculos);
}