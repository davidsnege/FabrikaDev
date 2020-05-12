<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

// Documentation: https://www.php.net/manual/en/soapserver.soapserver.php

////////////- Ejemplo 1 -////////////

// server.php
// public SoapServer ( mixed $wsdl [, array $options ] )

$options = array(
    'uri' => 'http://localhost/soap/server.php'
);
$server = new SoapServer(null, $options);
class MinhaInterfaceSoap
{
    public function somar($valor1, $valor2)
    {
        return $valor1 + $valor2;
    }
}

// $server->setClass('MinhaInterfaceSoap');
$server->setObject(new MinhaInterfaceSoap());
$server->handle();



