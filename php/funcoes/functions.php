<?php

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
