<?php
//Llamada al modelo
require_once("models/campings_model.php");
$per=new campings_model();
$datos=$per->get_campings();

//Llamada a la vista
require_once("views/campings_view.phtml");
?>
