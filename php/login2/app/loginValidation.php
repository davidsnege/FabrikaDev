<?php

        if(isset($_POST['inputEmail']) && isset($_POST['inputPassword'])){
        // este es el login que debe venir del DB
        $loginDB = "david@david.com";
        $pwdDB = "123456";
        // 1 decriptamos la contraseña que debe venir de la base con criptografia
        // 2 atribuimos a una nueva variable 
        // ahora podemos comparar con los if encadenados

        // Conferimos los 2 por separados en camadas
        if($loginDB == $_POST['inputEmail']){
            if($pwdDB == $_POST['inputPassword']){
                $login = 1;
                    echo " login succcess!";
            }else{
                echo "password or code fail!";
            }
        }else{
            echo "username or email fail!";
        }

        // Si por acaso el login y la contraseña esta OK
        // Creamos una session pero, no utilizamos los datos del usuario
        // criptografamos la info de la cookie tambien

        }
        