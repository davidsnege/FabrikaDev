<?php 
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     GPL
 */
        require 'ipValidation.php';

        // Tenemos autorizacion por post
            if( $_SERVER['REQUEST_METHOD'] != 'POST' ){
				echo "\n Error 1 - This method is not allowed or you are not authorized to access this API. Please refer to the documentation or contact the administrator.";
				header("HTTP/1.0 405 Method Not Allowed");

			}elseif( !isset($_POST['Authorization']) ){
				echo "\n Error 2 - You do not have permission to access this API or your call is missing parameters.";
				header("HTTP/1.0 203 Non-Authoritative Information");

			}else{
                $time_start = microtime(true);
                
                require 'loginValidation.php';

                $time_end = microtime(true);
                $execution_time = ($time_end - $time_start);
                echo " \n".'Total Execution Time: '.$execution_time.' s';
            }    

?>