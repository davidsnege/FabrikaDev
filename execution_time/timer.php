<?php
				$time_start = microtime(true);

// Coloque todo seu código e queryes aqui e saiba ao final quanto demorou para executar o arquivo


// Você pode usar o contador final no Fim do arquivo ou depois de cada function dentro para saber os tempos separados de cada função

				$time_end = microtime(true);
				$execution_time = ($time_end - $time_start);
				echo " \n".'Total Execution Time: '.$execution_time.' s';
?>
