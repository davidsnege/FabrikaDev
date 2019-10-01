<?php

  $host="localhost";
  $login="root";
  $senha="";
  $banco="";

  $conecta = new mysqli ($host, $login, $senha, $banco);

  $res = mysqli_query($conecta, "SHOW DATABASES");

  while ($row = mysqli_fetch_assoc($res)) {
  echo "db: ".$row['Database'] . "<br>";
  }

  $conecta->close();
?>
