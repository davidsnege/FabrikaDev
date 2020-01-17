<?php

  $host="localhost";
  $login="root";
  $senha="";
  $banco="mysql";

  $conecta = new mysqli ($host, $login, $senha, $banco);

  $res = mysqli_query($conecta, "SHOW TABLES FROM $banco");

  while ($row = mysqli_fetch_assoc($res)) {

      foreach($row as $tablas){
          echo $tablas;
          echo "<br>";
      }
  }

  $conecta->close();
?>
