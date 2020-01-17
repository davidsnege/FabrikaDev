<?php
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
