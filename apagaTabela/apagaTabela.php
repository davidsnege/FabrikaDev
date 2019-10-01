<?php

$host="localhost";
$login="root";
$senha="";
$banco="fabrika";

$conecta = new mysqli ($host, $login, $senha, $banco);

$sql="DROP TABLE fabrikaUsers";

if ($conecta->query($sql) === TRUE){
echo '<div class="alert alert-success"><strong>Parabéns, </strong> a Tabela foi apagada! </div>';
}else{
echo '<div class="alert alert-danger"><strong>Que pena, </strong> a Tabela Não foi apagada! </div>';
}

$conecta->close();
?>
