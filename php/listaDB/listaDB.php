<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Lista as Bases de dados de MySql
//║
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Parametros de conexao
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $host="localhost";
    $login="root";
    $senha="";
    $banco="";
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Criamos a variavel de conexao
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $conecta = new mysqli ($host, $login, $senha, $banco);
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Definimos a query para listar as base de dados e armazenamos na variavel $res
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $res = mysqli_query($conecta, "SHOW DATABASES");
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Fazemos um loop while para recorrer a Array da variavel $res e printar na tela
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    while ($row = mysqli_fetch_assoc($res)) {
    echo "db: ".$row['Database'] . "<br>";
    }
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Encerramos a conexao com o mysql para nao consumir mais recursos
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $conecta->close();
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
?>
