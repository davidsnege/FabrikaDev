<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

 
				$time_start = microtime(true);

// Coloque todo seu código e queryes aqui e saiba ao final quanto demorou para executar o arquivo

// 1. Se você colocar seu time_start dentro de uma função termine ele dentro de uma função
// 2. Se você colocar ele no começo de um script termine ele no final do arquivo

// Obs. Muito util para saber tempos de execução de querys ou whiles e foreach longos, use também para leitura de json

// Você pode usar o contador final no Fim do arquivo ou depois de cada function dentro para saber os tempos separados de cada função

				$time_end = microtime(true);
				$execution_time = ($time_end - $time_start);
				echo " \n".'Total Execution Time: '.$execution_time.' s';
?>
