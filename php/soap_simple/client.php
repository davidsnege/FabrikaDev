<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

// Documentation: https://www.php.net/manual/en/class.soapclient.php

////////////- Ejemplo 1 -////////////

// client.php
// public SoapClient ( mixed $wsdl [, array $options ] )

$options = array(
    'uri' => 'http://localhost/soap/server.php',
    'location' => 'http://localhost/soap/server.php'
);

$client = new SoapClient(null, $options);

// Já estamos conectados, vamos usar o método "somar" do servidor:
var_dump($client->somar(10, 15)); // 25

?>
