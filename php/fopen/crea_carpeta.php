<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

//creamos la carpeta si no existe
$carpeta = $_POST['carpeta'];
if (!file_exists($carpeta)) {
mkdir('carpetas/'.$carpeta, 0777, true); //poner la ruta correcta
}

header('Location: send_carpeta.php');
?>
