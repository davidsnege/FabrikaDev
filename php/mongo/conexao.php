<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
require_once 'vendor/autoload.php';

		$db = 'sample_airbnb';
		$colection = 'sample_airbnb.listingsAndReviews';
		$db_Colection = $db.'.'.$colection;


$client = new MongoDB\Client("mongodb+srv://davidsnege:3005226800@cluster0-ysldn.mongodb.net");

$db = $client->selectDatabase($db_Colection);

$collection = (new MongoDB\Client)->sample_airbnb->listingsAndReviews;
