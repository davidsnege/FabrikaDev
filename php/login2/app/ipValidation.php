<?php

        // Cual es el IP del cliente.
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