
<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

$hashed_password = crypt('mypassword', '20191202'); // dejar que el salt se genera automáticamente
$user_input = "mypassword"; //Si pongo lo correcto que esta en $hashed_password es eio_true

/* Se deben pasar todos los resultados de crypt() como el salt para la comparación de una
   contraseña, para evitar problemas cuando diferentes algoritmos hash son utilizados. (Como
   se dice arriba, el hash estándar basado en DES utiliza un salt de 2
   caracteres, pero el hash basado en MD5 utiliza 12.) */

if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
   echo "¡Contraseña verificada!<br>";
}
?>




<?php
// Establece la contraseña
$password = 'mypassword';

// Obtiene el hash, dejando que el salt sea generado be automáticamente
$hash = crypt($password, $hashed_password);
echo $hash.'<br><br><br>';
?>




<?php

/* Estas sales son solamente ejemplos, y no deberían usarse textualmente en su código.
   Debería generar una sal distinta correctamente formada para cada contraseña.
*/

if (CRYPT_STD_DES == 1) {
    echo 'Standard DES: ' . crypt('rasmuslerdorf', 'rl') . "<br><br>";
}

if (CRYPT_EXT_DES == 1) {
    echo 'Extended DES: ' . crypt('rasmuslerdorf', '_J9..rasm') . "<br><br>";
}

if (CRYPT_MD5 == 1) {
    echo 'MD5:          ' . crypt('rasmuslerdorf', '$1$rasmusle$') . "<br><br>";
}

if (CRYPT_BLOWFISH == 1) {
    echo 'Blowfish:     ' . crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$') . "<br><br>";
}

if (CRYPT_SHA256 == 1) {
    echo 'SHA-256:      ' . crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$') . "<br><br>";
}

if (CRYPT_SHA512 == 1) {
    echo 'SHA-512:      ' . crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$') . "<br><br>";
}
?>



<?php
$user_input =  '12+#æ345';
$pass = urlencode($user_input);
$pass_crypt = crypt($pass, '');

if ($pass_crypt == crypt($pass, $pass_crypt)) {
  echo "Success! Valid password<br><br>";
} else {
  echo "Invalid password<br><br>";
}
?>



<?php
/**
 * Queremos crear un hash de nuestra contraseña uando el algoritmo DEFAULT actual.
 * Actualmente es BCRYPT, y producirá un resultado de 60 caracteres.
 *
 * Hay que tener en cuenta que DEFAULT puede cambiar con el tiempo, por lo que debería prepararse
 * para permitir que el almacenamento se amplíe a más de 60 caracteres (255 estaría bien)
 */
echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."<br><br>";
?>



<?php
/**
 * En este caso, queremos aumentar el coste predeterminado de BCRYPT a 12.
 * Observe que también cambiamos a BCRYPT, que tendrá siempre 60 caracteres.
 */
$opciones = [
    'cost' => 5,
];
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $opciones)."<br><br>";
?>




<?php
/**
 * Este código evaluará el servidor para determinar el coste permitido.
 * Se establecerá el mayor coste posible sin disminuir demasiando la velocidad
 * del servidor. 8-10 es una buena referencia, y más es bueno si los servidores
 * son suficientemente rápidos. El código que sigue tiene como objetivo un tramo de
 * ≤ 50 milisegundos, que es una buena referencia para sistemas con registros interactivos.
 */
$timeTarget = 0.05; // 50 milisegundos

$coste = 8;
do {
    $coste++;
    $inicio = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, ["cost" => $coste]);
    $fin = microtime(true);
} while (($fin - $inicio) < $timeTarget);

echo "Coste apropiado encontrado: " . $coste . "<br><br>";
?>



<?php
// Ver el ejemplo de password_hash() para ver de dónde viene este hash.
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}

echo "<br><br>";
?>


<li>
This Is The Most Secure Way To Keep Your Password Safe With PHP 7 ,<br>
Even When Your DataBase Has Been Hacked ,<br>
It Will Be Almost Impossible To Retrieve Your Password .<br>
--------------------------------------------------------<br>
--- When A User Wants To Sign Up ---<br>
1 ---> Get Input From User Which Is The User`s Password<br>
1 ---> Hash The Password<br>
2 ---> Store The Hashed Password In Your DataBase<br>
--------------------------------------------------------<br>
</li>
<br><br>
<?php
// $hashed_password = password_hash($_POST["password"],PASSWORD_DEFAULT);
$hashed_password = password_hash("123",PASSWORD_DEFAULT);

// $_POST["password"] ---> Is The User`s Input
// $hashed_password ---> Is The Hashed Password You Can Store In Your DataBase
?>
<li>
--------------------------------------------------------<br>
--- When A User Wants To Sign In ---<br>
1 ---> Get Input From User Which Is The User`s Password<br>
2 ---> Fetch The Hashed Password From Your Database<br>
3 ---> Compare The User`s Input And The Hashed Password<br>
--------------------------------------------------------<br>
</li>
<br><br>
<?php
    // if(password_verify($_POST["password"],$hashed_password))
    if(password_verify("1234",$hashed_password)){
    		echo "Welcome<br><br>";
		}
		    else{
		    echo "Wrong Password<br><br>";
		}
// $_POST["password"] ---> Is The User`s Input
// $hashed_password ---> Is The Hashed Password You Have Fetched From DataBase
?>
