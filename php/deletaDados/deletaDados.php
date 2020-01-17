<?php

  $host="localhost";
  $login="root";
  $senha="";
  $banco="fabrika";

  $conecta = new mysqli ($host, $login, $senha, $banco);

  $sqli = "DELETE FROM fabrikaUsers WHERE email='meuemail@email.com'";

  if ($conecta->query($sqli) === TRUE){
  echo '<div class="alert alert-success"><strong>Parabéns, </strong> Dados apagados com sucesso! </div>';
  }else{
  echo '<div class="alert alert-danger"><strong>Que pena, </strong> não foi possível apagar os dados </div>';
  }

  $conecta->close();
?>
