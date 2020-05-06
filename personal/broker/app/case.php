<?php

// Recibimos por Ajax y lo damos forma.
$cases = $_POST['cases'];
$opcao = $_POST['opcao'];




	// Funcao recebe de switch
	include_once 'functions.php';

	// Decidimos cual function llamamos por aqui
	switch($cases){
		case 'home':
			echo "data es : en home";
			return imprimehome($cases);
			return $cases;
			break;
		case 'cartera':
			echo "data es : en cartera";
			return imprimecartera($cases);
			break;
		case 'operacoes':
			echo "data es : en operacoes";
			return $cases;
			break;
		case 'indicadores':
			// echo "data es : en indicadores";
			return imprimeindicadores($cases);
			return $cases;
			break;
		case 'admuser':
			echo "data es : en admin user";
			return $cases;
			break;
	}
	
