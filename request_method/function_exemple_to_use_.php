<?php
$time_start = microtime(true);
			//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
			//║  API - Functions Generales para Busca de Campings por Seleccion
			//║  Actualizado en: 22/11/19
			//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
			//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
								//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
								//║  Conexion a la Base de Dados - Cerrar conexion siempre
								//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
								//╔════════════════════════════════════════════════════════════════════════════════════════════════╗
										$host="localhost";
										$login="root";
										$senha="";
										$banco="";
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
											  while ($row = mysqli_fetch_array($result)){
															echo $row['id_camping']; echo "---";
															echo $row['raisonSociale']; echo "---";
															echo $row['id_pays']; echo "---";
															echo $row['id_region']; echo "---";
															echo $row['id_departement']; echo "---";
															echo $row['id_commune']; echo " \n";
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
										while ($row = mysqli_fetch_array($result)){
													echo $row['id_camping']; echo "---";
													echo $row['raisonSociale']; echo "---";
													echo $row['id_pays']; echo "---";
													echo $row['id_region']; echo "---";
													echo $row['id_departement']; echo "---";
													echo $row['id_commune']; echo " \n";
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
										while ($row = mysqli_fetch_array($result)){
													echo $row['id_camping']; echo "---";
													echo $row['raisonSociale']; echo "---";
													echo $row['id_pays']; echo "---";
													echo $row['id_region']; echo "---";
													echo $row['id_departement']; echo "---";
													echo $row['id_commune']; echo " \n";
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
										while ($row = mysqli_fetch_array($result)){
													echo $row['id_camping']; echo "---";
													echo $row['raisonSociale']; echo "---";
													echo $row['id_pays']; echo "---";
													echo $row['id_region']; echo "---";
													echo $row['id_departement']; echo "---";
													echo $row['id_commune']; echo " \n";
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
										while ($row = mysqli_fetch_array($result)){
													echo $row['id_camping']; echo "---";
													echo $row['raisonSociale']; echo "---";
													echo $row['id_pays']; echo "---";
													echo $row['id_region']; echo "---";
													echo $row['id_departement']; echo "---";
													echo $row['id_commune']; echo " \n";
										}
										$connection->close();
										$time_end = microtime(true);
										$execution_time = ($time_end - $time_start);
										echo " \n".'Total Execution Time: '.$execution_time.' s';
										}
								//╚════════════════════════════════════════════════════════════════════════════════════════════════╝
			//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

?>
