<?php

  session_start();
  $_SESSION['nomesessao'] = "valorsessao";
  echo $_SESSION['nomesessao'];

  setcookie("nomecookie","valorcookie", time()+3600);
  echo $_COOKIE["nomecookie"];

  // Usar para destruir a sessão 
  // unset($_SESSION["nomesessao"]);
  // session_destroy(); //fecha a sessão que esta aberta

?>
