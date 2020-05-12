<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
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
