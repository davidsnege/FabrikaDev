<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "fabrika");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
