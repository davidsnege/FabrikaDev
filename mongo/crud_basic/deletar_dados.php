<?php
//NECESITAMOS AQUI DO AUTOLOAD PARA MONGO Y A CONEXAO A BASE
require_once '../vendor/autoload.php';
include 'conexao_base_dados_atlas.php';

$deletar = 'David Belleti';

$deleteResult = $collection->deleteOne(['name' => "$deletar"]);
        printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());

?>
