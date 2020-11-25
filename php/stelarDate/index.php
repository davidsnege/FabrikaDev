<?php
// Creamos las variables que podemos utilizar
$dia = date("d");
$ano = date("Y");
$diaNum = date("z");
// Segun Star Trek las fechas stelares son el año mas el dia del año en numero
$stelardate = $ano.".".$diaNum;
// Lo printamos en la pantalla
echo $stelardate;