<?php

	// Recibimos por Ajax y lo damos forma.
	$cases = $_POST['cases'];
	$opcao = $_POST['opcao'];
	// *********************

	// Funcao recebe de switch
	include_once 'functions.php';
	// *********************

	// Decidimos cual function llamamos por aqui
	switch($cases){
		// *********************
		case 'home':
			return imprimehome($cases);
			break;
		// *********************
		case 'cartera':
			return imprimecartera($cases);
			break;
		// *********************
		case 'operacoes':
			break;
		// *********************
		case 'iqoption':
			return imprimeiqoption($cases);
			break;
		// *********************
		case 'indicadores':
			return imprimeindicadores($cases);
			break;
		// *********************
		case 'admuser':
			break;
		// *********************
	}
	// *********************