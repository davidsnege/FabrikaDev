<?php

  $host="localhost";
  $login="root";
  $senha="";
  $banco="";

  $conecta = new mysqli ($host, $login, $senha, $banco);

  if ($conecta->connect_error){
  die("Conexão falhou:" .$conecta->connect_error);
  } else {
  echo "Conectado<br>";
  }

  $conecta->close();
?>
