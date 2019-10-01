<?php

  $host="localhost";
  $login="root";
  $senha="";
  $banco="fabrika";

  $conecta = new mysqli ($host, $login, $senha, $banco);

  $sql = "SELECT * FROM fabrikaUsers ORDER BY id DESC LIMIT 0, 30";
  $result = mysqli_query($conecta, $sql);

  while ($row = mysqli_fetch_array($result)){
  echo '<pre>';
    echo $row['User'];
    echo $row['Email'];
    echo $row['Telefone'];
    echo $row['Endereco'];
  echo '</pre>';
  }

  $conecta->close();
?>
