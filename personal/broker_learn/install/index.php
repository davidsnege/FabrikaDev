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

    while ($row = mysqli_fetch_array($res)) {
        if($row['Database'] == 'broker_learn'){
            $install = '0';
        }else{
            $install = '1';
            $sql = "CREATE DATABASE broker_learn";
            $conecta->query($sql);
        }
    }
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Encerramos a conexao com o mysql para mudar os parametros porque agora temos $banco
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $conecta->close();
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Se criamos a base de dados então começamos a criar as tabelas
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $conecta = new mysqli ($host, $login, $senha, 'broker_learn');
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
    if($install == '1'){
        // Criamos a tabela de usuario
        $sql="CREATE TABLE user_broker (
		id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		_user VARCHAR(30) NOT NULL,
		_email VARCHAR(30) NOT NULL,
		_phone VARCHAR(30) NOT NULL,
		_address VARCHAR(30) NOT NULL,
		_login VARCHAR(30) NOT NULL,
		_passw VARCHAR(30) NOT NULL,
		_level VARCHAR(30) NOT NULL,
		reg_date TIMESTAMP
        )";
        $conecta->query($sql);
        // Criamos o portfolio de usuario para os registros
        $sql="CREATE TABLE portfolio_user (
		id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		_id_user VARCHAR(30) NOT NULL,
		_abrv VARCHAR(30) NOT NULL,
		_tipo_mercado VARCHAR(30) NOT NULL,
		_nome_empresa VARCHAR(30) NOT NULL,
		_segmento_mercado VARCHAR(30) NOT NULL,
		_info_desc VARCHAR(30) NOT NULL,
		_risco VARCHAR(30) NOT NULL,
		reg_date TIMESTAMP
        )";
        $conecta->query($sql);
        // Criamos o registro de entradas, saidas, valores
        $sql="CREATE TABLE put_out_user (
		id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		_id_user VARCHAR(30) NOT NULL,
		_id_portfolio VARCHAR(30) NOT NULL,
		_abrv VARCHAR(30) NOT NULL,
		_put_paper_value VARCHAR(30) NOT NULL,
		_put_value VARCHAR(30) NOT NULL,
		_put_data VARCHAR(30) NOT NULL,
		_put_hora VARCHAR(30) NOT NULL,
		_out_paper_value VARCHAR(30) NOT NULL,
		_out_value VARCHAR(30) NOT NULL,
		_out_data VARCHAR(30) NOT NULL,
		_out_hora VARCHAR(30) NOT NULL,
		_result_paper_value VARCHAR(30) NOT NULL,
		_result_value VARCHAR(30) NOT NULL,
		_comentarios VARCHAR(30) NOT NULL,
		_objetivo VARCHAR(30) NOT NULL,
		reg_date TIMESTAMP
        )";
        $conecta->query($sql);
    }
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Encerramos a conexao com o mysql para nao consumir mais recursos
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $conecta->close();
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝