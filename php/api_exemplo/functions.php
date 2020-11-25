<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║  API - Functions Generales para Busca de Campings por Seleccion
	//║  Actualizado en: 13/01/20
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║  Verificamos la IP de acesso
	//║  La IP del Cliente
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗

			if (isset($_SERVER["HTTP_CLIENT_IP"]))
			{
					echo 'Su IP de acesso és: ' . $_SERVER["HTTP_CLIENT_IP"];
			}
			elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
			{
					echo 'Su IP de acesso és: ' . $_SERVER["HTTP_X_FORWARDED_FOR"];
			}
			elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
			{
					echo 'Su IP de acesso és: ' . $_SERVER["HTTP_X_FORWARDED"];
			}
			elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
			{
					echo 'Su IP de acesso és: ' . $_SERVER["HTTP_FORWARDED_FOR"];
			}
			elseif (isset($_SERVER["HTTP_FORWARDED"]))
			{
					echo 'Su IP de acesso és: ' . $_SERVER["HTTP_FORWARDED"];
			}
			else
			{
					echo 'Su IP de acesso és: ' . $_SERVER["REMOTE_ADDR"];
			}

	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║  Protegemos la API verificando el Methodo utilizado y desde donde viene, impedimos que se aceda desde la
	//║  URL de su sitio web
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
			if( $_SERVER['REQUEST_METHOD'] != 'POST' ){
				echo "\n Error 1 - This method is not allowed or you are not authorized to access this API. Please refer to the documentation or contact the administrator.";
				header("HTTP/1.0 405 Method Not Allowed");

			}elseif( !isset($_POST['Authorization']) ){
				echo "\n Error 2 - You do not have permission to access this API or your call is missing parameters.";
				header("HTTP/1.0 203 Non-Authoritative Information");

			}elseif( $_POST['Authorization'] != 'AdminUser' ){
				echo "\n Error 3 - You do not have permission to access this API, your username or password is not allowed from where the call to the API came from, please contact Admin for access.";
				header("HTTP/1.0 401 Unauthorized");

			}elseif( isset($_POST['Documentation']) ){
				echo "\n Option 4 - Mode Documentation Activated. (FR / ES / PT)";
				header("HTTP/1.0 200 OK");

				documentation();
			}else{
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║  Conexion a la Base de Dados - Cerrar conexion siempre
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			$time_start = microtime(true);
			$host="localhost";
			$login="seu_login_mysql";
			$senha="sua_senha";
			$banco="seu_banco_de_dados";
			$connection = new mysqli ($host, $login, $senha, $banco);
			if ($connection->connect_error){
			die("Conexao falhou:" .$connection->connect_error);
			} else {
			// echo "Conectado";	
			}
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║  Pillamos las variables que necesitamos pra cualquer pesquisa
	//║  Con los parametros basicos decidimos por lo que vamos buscar en la base
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
			if(isset($_POST['tipoPesquisa']) && isset($_POST['id_pesquisa'])){

				$tipo = $_POST['tipoPesquisa'];
				    switch($tipo){
	            case "pais": // PAIS
											$pais = $_POST['id_pesquisa'];
											queryPais($connection, $time_start);
	                break;
	            case "region": // REGION
	                    $region = $_POST['id_pesquisa'];
											queryRegion($connection, $time_start);
	                break;
	            case "departamento": // DEPARTAMENTO
	                    $departamento = $_POST['id_pesquisa'];
											queryDepartamento($connection, $time_start);
	                break;
	            case "poblacion": // POBLACION
	                    $poblacion = $_POST['id_pesquisa'];
											queryPoblacion($connection, $time_start);
	                break;
	            case "camping": // CAMPING
	                    $camping = $_POST['id_pesquisa'];
											queryCamping($connection, $time_start);
	                break;
	            case 5: // Case vacia que se puede usar para lo que queira.
	                    echo "5";
	                break;
	            case 6: // Case vacia que se puede usar para lo que queira.
	                    echo "6";
	                break;
				    }
			}
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
			} // Fim de la verificacion de autorizacion....
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║ Query Seleccion de Campings por Pais
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			function queryPais($connection, $time_start){
				$pais = $_POST['id_pesquisa'];
				$queryPais =
			"SELECT * FROM campings
			    LEFT JOIN contacts ON contacts.camping = campings.id_camping
			    LEFT JOIN adresses ON adresses.contact = contacts.id_contact
			    LEFT JOIN personnes ON personnes.adresse = adresses.id_adresse
			    LEFT JOIN moyenscommunications ON moyenscommunications.id_moyenscommunication = personnes.id_personne
			    LEFT JOIN moyenscommunications_translations ON moyenscommunications_translations.moyencommunication = moyenscommunications.id_moyenscommunication
			    LEFT JOIN communes ON communes.id_commune = adresses.commune
			    LEFT JOIN thesaurus AS thrCom ON communes.thesaurusCode = thrCom.Code
			    LEFT JOIN departements ON departements.id_departement = communes.departement
			    LEFT JOIN regions ON regions.id_region = departements.region
			    LEFT JOIN pays ON pays.id_pays = regions.country
			    WHERE pays.id_pays = '$pais'
			";
					$result = mysqli_query($connection, $queryPais);
				  while ($row = mysqli_fetch_object($result)){
					echo $row = json_encode($row, true);
				  }

			$connection->close();
			$time_end = microtime(true);
			$execution_time = ($time_end - $time_start);
			echo " \n".'Total Execution Time: '.$execution_time.' s';
			}
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║ Query Seleccion de Campings por Region
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			function queryRegion($connection, $time_start){
				$region = $_POST['id_pesquisa'];
				$queryRegion =
			"SELECT * FROM campings
			    LEFT JOIN contacts ON contacts.camping = campings.id_camping
			    LEFT JOIN adresses ON adresses.contact = contacts.id_contact
			    LEFT JOIN personnes ON personnes.adresse = adresses.id_adresse
			    LEFT JOIN moyenscommunications ON moyenscommunications.id_moyenscommunication = personnes.id_personne
			    LEFT JOIN moyenscommunications_translations ON moyenscommunications_translations.moyencommunication = moyenscommunications.id_moyenscommunication
			    LEFT JOIN communes ON communes.id_commune = adresses.commune
			    LEFT JOIN thesaurus AS thrCom ON communes.thesaurusCode = thrCom.Code
			    LEFT JOIN departements ON departements.id_departement = communes.departement
			    LEFT JOIN regions ON regions.id_region = departements.region
			    LEFT JOIN pays ON pays.id_pays = regions.country
			    WHERE regions.id_region = '$region'
			";
			$result = mysqli_query($connection, $queryRegion);
			while ($row = mysqli_fetch_object($result)){
			echo $row = json_encode($row, true);
			}
			$connection->close();
			$time_end = microtime(true);
			$execution_time = ($time_end - $time_start);
			echo " \n".'Total Execution Time: '.$execution_time.' s';
			}
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║ Query Seleccion de Campings por Departamento
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			function queryDepartamento($connection, $time_start){
				$departamento = $_POST['id_pesquisa'];
			$queryDepartamento =
			"SELECT * FROM campings
			    LEFT JOIN contacts ON contacts.camping = campings.id_camping
			    LEFT JOIN adresses ON adresses.contact = contacts.id_contact
			    LEFT JOIN personnes ON personnes.adresse = adresses.id_adresse
			    LEFT JOIN moyenscommunications ON moyenscommunications.id_moyenscommunication = personnes.id_personne
			    LEFT JOIN moyenscommunications_translations ON moyenscommunications_translations.moyencommunication = moyenscommunications.id_moyenscommunication
			    LEFT JOIN communes ON communes.id_commune = adresses.commune
			    LEFT JOIN thesaurus AS thrCom ON communes.thesaurusCode = thrCom.Code
			    LEFT JOIN departements ON departements.id_departement = communes.departement
			    LEFT JOIN regions ON regions.id_region = departements.region
			    LEFT JOIN pays ON pays.id_pays = regions.country
			    WHERE departements.id_departement = '$departamento'
			";
			$result = mysqli_query($connection, $queryDepartamento);
			while ($row = mysqli_fetch_object($result)){
			echo $row = json_encode($row, true);
			}
			$connection->close();
			$time_end = microtime(true);
			$execution_time = ($time_end - $time_start);
			echo " \n".'Total Execution Time: '.$execution_time.' s';
			}
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║ Query Seleccion de Campings por Poblacion
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			function queryPoblacion($connection, $time_start){
				$poblacion = $_POST['id_pesquisa'];
			$queryPoblacion =
			"SELECT * FROM campings
			    LEFT JOIN contacts ON contacts.camping = campings.id_camping
			    LEFT JOIN adresses ON adresses.contact = contacts.id_contact
			    LEFT JOIN personnes ON personnes.adresse = adresses.id_adresse
			    LEFT JOIN moyenscommunications ON moyenscommunications.id_moyenscommunication = personnes.id_personne
			    LEFT JOIN moyenscommunications_translations ON moyenscommunications_translations.moyencommunication = moyenscommunications.id_moyenscommunication
			    LEFT JOIN communes ON communes.id_commune = adresses.commune
			    LEFT JOIN thesaurus AS thrCom ON communes.thesaurusCode = thrCom.Code
			    LEFT JOIN departements ON departements.id_departement = communes.departement
			    LEFT JOIN regions ON regions.id_region = departements.region
			    LEFT JOIN pays ON pays.id_pays = regions.country
			    WHERE communes.id_commune = '$poblacion'
			";
			$result = mysqli_query($connection, $queryPoblacion);
			while ($row = mysqli_fetch_object($result)){
			echo $row = json_encode($row, true);
			}
			$connection->close();
			$time_end = microtime(true);
			$execution_time = ($time_end - $time_start);
			echo " \n".'Total Execution Time: '.$execution_time.' s';
			}
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║ Query Seleccion de Campings por id_camping
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			function queryCamping($connection, $time_start){
				$camping = $_POST['id_pesquisa'];
			$queryCamping =
			"SELECT * FROM campings
			    LEFT JOIN contacts ON contacts.camping = campings.id_camping
			    LEFT JOIN adresses ON adresses.contact = contacts.id_contact
			    LEFT JOIN personnes ON personnes.adresse = adresses.id_adresse
			    LEFT JOIN moyenscommunications ON moyenscommunications.id_moyenscommunication = personnes.id_personne
			    LEFT JOIN moyenscommunications_translations ON moyenscommunications_translations.moyencommunication = moyenscommunications.id_moyenscommunication
			    LEFT JOIN communes ON communes.id_commune = adresses.commune
			    LEFT JOIN thesaurus AS thrCom ON communes.thesaurusCode = thrCom.Code
			    LEFT JOIN departements ON departements.id_departement = communes.departement
			    LEFT JOIN regions ON regions.id_region = departements.region
			    LEFT JOIN pays ON pays.id_pays = regions.country
			    WHERE campings.id_camping = '$camping'
			";
			$result = mysqli_query($connection, $queryCamping);
			while ($row = mysqli_fetch_object($result)){
			echo $row = json_encode($row, true);
			}
			$connection->close();
			$time_end = microtime(true);
			$execution_time = ($time_end - $time_start);
			echo " \n".'Total Execution Time: '.$execution_time.' s';
			}
	//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
	//║  DOCUMENTACION API Camping
	//║  By: David Belleti Snege
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
	//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
			function documentation(){
				echo "
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ FR - FR - DOCUMENTATION
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Comment utiliser cette API?
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║	L'application POS POSTMAN est nécessaire pour tester avant de créer votre appel en utilisant
			║ C'est votre langage de programmation préféré. Nous vous recommandons vivement d'apprendre à
			║ utiliser POSTMAN.
			║
			║ API Le but de cette API est de faciliter la liste des campings par pays, région, département et
			║ aussi par Commune, et même voir les détails des campings.
			║
			║ Les paramètres attendus par l'API sont:
			║
			║	* tipoPesquisa
			║	* id_pesquisa
			║	* Authorization
			║	# Documentation
			║
			║ Admettre Le type d'appel accepté est toujours 'POST' et n'accepte aucun autre type d'appel.
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ * tipoPesquisa (paramètre requis)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Dans le tipoPesquisa, vous pouvez choisir parmi les types suivants:
			║
			║	pais
			║	region
			║	departamento
			║	poblacion
			║	camping
			║
			║ En fonction de ce que vous voulez rechercher
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ * id_pesquisa (paramètre requis)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Dans id_pesquisa, vous pouvez choisir parmi les types suivants:
			║
			║ Id de type Recherche précédemment choisie pour obtenir ses détails.
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Authorization * Authorization (Paramètre requis)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Dans Authorization, vous devez entrer le code d’autorisation actuel transmis par votre administrateur ou
			║ par les données Sua_Empresa_Criador_da_API, propriétaire de l'API et le seul à autoriser l'accès à l'API
			║
			║ Sans ce paramètre, l'accès à l'API est bloqué.
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ # Documentation (paramètre d'aide)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Vous pouvez consulter votre documentation de temps à autre pour vérifier qu'il n'y a pas eu de
			║ changement.
			║ ou mise à jour des paramètres d'accès ou même s'il y a de nouvelles fonctionnalités.
			║
			║ Des doutes ou des suggestions entrent en contact avec l’équipe de développement SUA_EMPRESA_DESENVOLVEDOR_DA API.
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝


			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ ES - ES - DOCUMENTACIÓN
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ ¿Cómo usar esta API?
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║
			║	Se requiere la aplicación POSTMAN para realizar pruebas antes de crear su llamada usando
			║	tu lenguaje de programación favorito. Le recomendamos que aprenda a utilizar POSTMAN.
			║
			║ El objetivo de esta API es facilitar la pesquisa de campings por país, región, departamento y
			║ también por Poblacion, e incluso ver detalles de campings.
			║
			║ Los parámetros esperados por la API son:
			║
			║	* tipoPesquisa
			║	* id_pesquisa
			║	* Authorization
			║	# Documentation
			║
			║ Admitir El tipo de llamada aceptado siempre es 'POST', no acepta ningún otro tipo de llamada
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ * tipoPesquisa (parámetro requerido)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ En el tipo de búsqueda, puede elegir entre los siguientes tipos:
			║
			║	pais
			║	region
			║	departamento
			║	poblacion
			║	camping
			║
			║ Dependiendo de lo que quieras buscar
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ * id_pesquisa (parámetro requerido)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Search En id_pesquisa puede elegir entre los siguientes tipos:
			║
			║ Id del tipo de búsqueda elegido previamente para obtener sus detalles.
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ * Authorization (parámetro requerido)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ En Authorization, debe ingresar el código de autorización actual que le pasó su administrador o
			║ por los datos de Sua_Empresa_Criador_da_API, propietario de la API y el único que puede permitir el acceso a la API
			║
			║ Sin este parámetro, el acceso a la API está bloqueado.
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ # Documentation (parámetro de ayuda)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Puede consultar su documentación de vez en cuando para verificar que no haya habido cambios.
			║ o actualización de los parámetros de acceso o incluso si hay nuevas características.
			║
			║ Las dudas o sugerencias se ponen en contacto con el equipo de desarrollo de SUA_EMPRESA_DESENVOLVEDOR_DA API.
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝




			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ PT - BR - DOCUMENTAÇÃO
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Como utilizar esta API?
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║
			║	É necessário o uso do aplicativo POSTMAN para fazer testes antes de criar sua chamada usando
			║	sua linguagem de programação preferida. Recomendamos muito que você aprenda a usar POSTMAN.
			║
			║	O Objetivo desta API é facilitar a listagem de campings por Pais, Região, Departamento, e
			║	também por Poblacion ou Commune, e até mesmo ver detalhes de campings.
			║
			║	Os parâmetros esperados pela API são:
			║
			║	* tipoPesquisa
			║	* id_pesquisa
			║	* Authorization
			║	# Documentation
			║
			║	O tipo de chamada admitido é sempre 'POST' não aceitando nenhum outro tipo de chamada
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ * tipoPesquisa (Parâmetro Obrigatório)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Em tipoPesquisa se pode optar pelos seguintes tipos:
			║
			║	pais
			║	region
			║	departamento
			║	poblacion
			║	camping
			║
			║ Dependendo do que você deseja buscar
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ * id_pesquisa (Parâmetro Obrigatório)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Em id_pesquisa se pode optar pelos seguintes tipos:
			║
			║	Id do tipoPesquisa escolhido anteriormente, para obter seus detalhes.
			║
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ * Authorization (Parâmetro Obrigatório)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Em Authorization deve-se colocar o código de autorização vigente passado pelo seu admin ou
			║ por Sua_Empresa_Criador_da_API data, proprietária da API e única que pode permitir acesso a API
			║
			║ Sem este parâmetro o acesso a API é bloqueado.
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ # Documentation (Parâmetro de Ajuda)
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			╔════════════════════════════════════════════════════════════════════════════════════════════════╗
			║ Você pode consultar a documentação de tempos em tempos para verificar que não houve mudança
			║ ou atualização dos parametros de acesso ou até mesmo se existem funcionalidades novas.
			║
			║ Duvidas ou sugestões entrar em contato com a Equipe de desenvolvimento SUA_EMPRESA_DESENVOLVEDOR_DA API.
			╚════════════════════════════════════════════════════════════════════════════════════════════════╝
						 ";
			}
	//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
?>
