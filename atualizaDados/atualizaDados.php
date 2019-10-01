<?php

  $host="localhost";
  $login="root";
  $senha="";
  $banco="fabrika";

  $conecta = new mysqli ($host, $login, $senha, $banco);

  $sqli = "UPDATE fabrikaUsers
  SET User='Novo User', Email='meuemail@email.com', Telefone='6665552222', Endereco='Outra Rua', Senha='aindanaosei'
  WHERE email='meuemail@email.com'";

  if ($conecta->query($sqli) === TRUE){
  echo '<div class="alert alert-success"><strong>Parabéns, </strong> Dados atualizados com sucesso! </div>';
  }else{
  echo '<div class="alert alert-danger"><strong>Que pena, </strong> não foi possível atualizar os dados </div>';
  }

  $conecta->close();
?>
