<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
class campings_model{
    private $db;
    private $campings;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->campings=array();
    }
    public function get_campings(){
        $consulta=$this->db->query("SELECT * FROM campings;");
        while($filas=$consulta->fetch_assoc()){
            $this->campings[]=$filas;
        }
        return $this->campings;
    }
}
?>
