<?php

  $host="localhost";
  $login="root";
  $senha="";
  $banco="";

  $conecta = new mysqli ($host, $login, $senha, $banco);

  $sql = "DROP DATABASE fabrika";

  if ($conecta->query($sql)===TRUE){
  echo '<div class="alert alert-success"><strong>Parabéns, </strong> a base de dados foi apagada com sucesso!</div>';
  }else{
  echo '<div class="alert alert-danger"><strong>Que pena, </strong> a base de dados não foi apagada!</div>';
  }

  $conecta->close();
?>
