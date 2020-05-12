<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

include("cliente-class.php");

$tempCliente = new Cliente();
$tempCliente->nome = "WESLEY";
$tempCliente->saldo = 100;
$tempCliente->confirmarrecebimento();
$tempCliente->pagarconta(300);

echo "<br/>Nome do Cliente : ".$tempCliente->nome;
echo "<br/>Nome do Saldo : ".$tempCliente->saldo;

// https://www.devmedia.com.br/criando-classe-em-php/24371
// https://www.devmedia.com.br/como-criar-minha-primeira-classe-em-php/38895
?>
