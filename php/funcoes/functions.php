<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

// Criando sua primeira função para imprimir dados de um BD na tela ou o que você quiser

		function admin(){
				$sql = "SELECT * FROM admin ORDER BY id DESC LIMIT 0, 30";
				$result = mysqli_query($connection, $sql);
				while ($row = mysqli_fetch_array($result)){
				echo '<pre>';
				echo $row['login'];
				echo '</pre>';
				}
			}

?>
