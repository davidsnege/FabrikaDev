<?php

$host="localhost";
$login="root";
$senha="";
$banco="fabrika";

$conecta = new mysqli ($host, $login, $senha, $banco);

$sql="CREATE TABLE fabrikaUsers (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
User VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL,
Telefone VARCHAR(30) NOT NULL,
Endereco VARCHAR(30) NOT NULL,
Login VARCHAR(30) NOT NULL,
Senha VARCHAR(30) NOT NULL,
Level VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conecta->query($sql) === TRUE){
echo '<div class="alert alert-success"><strong>Parabéns, </strong> Tabela foi criada! </div>';
}else{
echo '<div class="alert alert-danger"><strong>Que pena, </strong> Tabela Não foi criada! </div>';
}

$conecta->close();
?>
