<?php
// Nostras variables para conexion con la base de dados estan aqui
$host="localhost";
$login="root";
$senha="";
$banco="fabrika";
// Nostra conexion esta aqui en esta linea
$connection = new mysqli ($host, $login, $senha, $banco);
// Verificamos por se acaso la conexion falla, y le enseñamos la mensagem de error de mysql
if ($connection->connect_error){
die("Conexao falhou:" .$connection->connect_error);
} else {
// Si tu quieres comprobar su conexion podes poner un echo "su texto de sucesso"; aqui
}
