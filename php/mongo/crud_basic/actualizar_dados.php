<?php
//NECESITAMOS AQUI DO AUTOLOAD PARA MONGO Y A CONEXAO A BASE
require_once '../vendor/autoload.php';
include 'conexao_base_dados_atlas.php';

$id = '';
$name = 'David Snege';
$value_new = 'David Belleti';



$updateResult = $collection->updateOne(
	 [ 'name' => $name ],
	 [ '$set' => [ 'name' => $value_new ]]
);
	 printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
	 printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
?>
