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

$start = '0';
$limit = '60';

$find =
[
// "_id" => "10006546",
];
$options = [
'skip' => intval($start),
'limit' => intval($limit),
];

$cursor = $collection->find($find, $options);

$contador = '0';
foreach ($cursor as $airbresults) {

	echo '<pre>';
	$contador = $contador+1;
	echo '</pre>';

};

echo $contador;

?>
