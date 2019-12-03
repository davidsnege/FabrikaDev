<?php

if(isset($_POST['url'])){
	$url = $_POST['url'];
}else{
	$url = "Hola David";
}


include('phpqrcode/qrlib.php');
QRcode::png("$url");
?>
