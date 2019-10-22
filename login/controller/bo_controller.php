<!-- Incluimos la conexion para la base de dados en este archivo -->
<?php include "connection.php"; ?>

<?php
// Verificamos que tenemos un POST si no tenemos lo ponemos en vacio
if(isset($_POST['tipo']) ){
    $tipo = $_POST['tipo'];
}else{
    $tipo = '';
}
// Aqui tenemos un Switch Case para saber lo que viene desde la home, la idea es que este case controle todo, y tu lo podes poner hasta en un archivo separado de este y solo hacer un include aqui, para dejar lo archivo mas limpio, cada case tiene una funccion que esta associada a el, en este caso tenemos solo 2 cases, el case '0' verifica i recibimos los campos, user, password, y determinamos que si tenemos esto entonces pasamos estes parametros a la funccion login(), si no tenemos esto, entonces destruiemos la session y redefinimos su value para 0 en success, esto evita que si prosiga con el login. En otro case '1' tenemos solo la funccion de logoff() que hace lo mismo de destruir la session.
    switch($tipo)
            {
            case 0: // Case que determina login y llama la function de login()
                    if(isset($_POST['user']) || isset($_POST['password'])){
                        $user = $_POST['user'];
                        $password = $_POST['password'];

                        if($user != '' && $password != '' && $user != null && $password != null){
                            login($user, $password, $connection);
                        }else{
                            if(isset($_SESSION)){
                            session_destroy();
                            session_start();
                            $_SESSION['success'] = "0";
                            }
                            $statusLogin = "0";
                        }
                    }else{           }
                break;
            case 1: // Case que determina que deseamos hacer logoff()
                    logoff();
                break;
            case 2: // Case vacia que se puede usar para lo que queira.
                    echo "2";
                break;
            case 3: // Case vacia que se puede usar para lo que queira.
                    echo "3";
                break;
            case 4: // Case vacia que se puede usar para lo que queira.
                    echo "4";
                break;
            case 5: // Case vacia que se puede usar para lo que queira.
                    echo "5";
                break;
            case 6: // Case vacia que se puede usar para lo que queira.
                    echo "6";
                break;
            }

// Aqui abajo tenemos las funcciones login y logoff, separadas, y tu puedes añadir otras funcciones en este fichero mientras configuras mas cases para hacer llamadas a las funcciones.

// Function LOGIN
    function login($user, $password, $connection){
        // Recibimos los parametros desde el case y los utilizamos para hacer nostro select a la base de dados.
        $sql = "SELECT * FROM fabrikausers WHERE Login = '$user' AND Senha = '$password'";
        // Hacemos la conexion y executamos la query
        $result = mysqli_query($connection, $sql);
        // Si tenemos dados en result
        if($result){
            // Recogemos la variable
            while ($row = mysqli_fetch_array($result)){
                // Comparamos para ver si el login y password estan correctos y existen en la base de dados
                if($row['Login'] == $user && $row['Senha'] == $password){
                    // En este caso veradero iniciamos la session y damos los valores que determinamos como session valida
                    session_start();
                    $_SESSION['login'] = $row['Login'];
                    $_SESSION['level'] = $row['Level'];
                    $_SESSION['success'] = "1";
                }
            }
        // Si la comparacion de dados no esta bien, limpiamos cualquer session que hay y redefinimos una session con valores no validos
        }else{
            echo 'por favor revise seus dados de login!';
            session_destroy();
            session_start();
            $_SESSION['success'] = "0";
            $statusLogin = "0";
            header('Location: index.php'); // Si cambiar su directorio se atente para esta direccion
            exit;
        }
        // cerramos la conexion
        $connection->close();
    }

// Function LOGOFF
    function logoff(){
        // Si no tenemos session valida
        if(isset($_SESSION)){
            // Destruimos la session
            session_destroy();
        }
    }
