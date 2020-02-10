<?php 
    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    //║  Envia os logs pela função enviaLog() para o arquivo que grava no TXT
    //║  Created By David Snege
    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
        function enviaLog($mensagem){

            $content = http_build_query(array(
            'mensagem_log' => $mensagem
            ));
            

            $context = stream_context_create(array(
            'http' => array(
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                                "Content-Length: ".strlen($content)."\r\n".
                                "User-Agent:MyAgent/1.0\r\n",
            'method' => 'POST',
            'type' => 'application/x-www-form-urlencoded',
            'content' => $content,
            )
            ));
        
        // Poner la ruta intera para que funcione, y tenga en cuenta que debe tener permissos de escritura.
        $result = file_get_contents('http://localhost/github/FabrikaDev/php/cria_logs/generador_logs.php', null, $context);
        

        }

        // Teste de passar mensagem para a funcao de gravar no generador
        // enviaLog("testando passar mensagem pra funcao");

        // Incluir este arquivo com include dentro de seu projeto no inicio
        // Depois chamar a função enviaLog(); quando for necessario

    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝