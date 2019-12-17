<?php
//NECESITAMOS AQUI DO AUTOLOAD PARA MONGO Y A CONEXAO A BASE
require_once '../vendor/autoload.php';
include 'conexao_base_dados_atlas.php';

$id = '';
$name = 'David Snege';

//INSERIR UN DADO
$insertOneResult = $collection->insertOne([
    'name_id' => $id,
    'name' => $name,
]);

?>
