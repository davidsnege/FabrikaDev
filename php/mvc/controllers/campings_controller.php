<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
//Llamada al modelo
require_once("models/campings_model.php");
$per=new campings_model();
$datos=$per->get_campings();

//Llamada a la vista
require_once("views/campings_view.phtml");
?>
