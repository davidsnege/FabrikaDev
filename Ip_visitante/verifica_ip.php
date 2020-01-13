<?php

//Metodo Simples

// function getRealIP() {

        if (isset($_SERVER['HTTP_CLIENT_IP'])){
            return $_SERVER['HTTP_CLIENT_IP'];
            echo $_SERVER['HTTP_CLIENT_IP'];
					}

        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
            echo $_SERVER['HTTP_X_FORWARDED_FOR'];
					}

				if (isset($_SERVER['REMOTE_ADDR'])){
            return $_SERVER['REMOTE_ADDR'];
            echo $_SERVER['REMOTE_ADDR'];
					}

	// }

// getRealIP();


//Metodo Avançado

// function getRealIP(){

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

// }

// getRealIP();

?>
