<?php

$host="localhost";
$login="root";
$senha="";
$banco="fabrika";

$conecta = new mysqli ($host, $login, $senha, $banco);

$sqli = "INSERT INTO fabrikaUsers (User, Email, Telefone, Endereco, Senha)".
"VALUES ('Meu Nome de Usuario','meuemail@email.com', '1155555555', 'Rua do meu user', 'Soeusei')";

if ($conecta->query($sqli) === TRUE){
echo '<div class="alert alert-success"><strong>Parabéns, </strong> Dados inseridos com sucesso! </div>';
}else{
echo '<div class="alert alert-danger"><strong>Que pena, </strong> não foi possível inserir os dados </div>';
}

$conecta->close();
?>
