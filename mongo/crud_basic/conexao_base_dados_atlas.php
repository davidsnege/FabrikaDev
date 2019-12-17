<?php
require_once '../vendor/autoload.php';

		$db = 'sample_airbnb';
		$colection = 'sample_airbnb.listingsAndReviews';
		$db_Colection = $db.'.'.$colection;


$client = new MongoDB\Client("mongodb+srv://davidsnege:3005226800@cluster0-ysldn.mongodb.net");

$db = $client->selectDatabase($db_Colection);

$collection = (new MongoDB\Client)->sample_airbnb->listingsAndReviews;
