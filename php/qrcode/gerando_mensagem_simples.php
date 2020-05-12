<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

if(isset($_POST['url'])){
	$url = $_POST['url'];
}else{
	$url = "Hola David";
}


include('phpqrcode/qrlib.php');
QRcode::png("$url");
?>
