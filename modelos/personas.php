


<?php
require 'Conexion.php';

class Persona extends Conexion{
    public $per_nombre;
    public $per_apellido;
    public $per_procedencia;
    public $per_fechain;
    public $per_fechasal;
    public $per_razon;
    public function __construct($args = [])
    {
        $this->per_nombre = $args['per_nombre'] ?? null;
        $this->per_apellido = $args['per_apellido'] ?? '';
        $this->per_procedencia = $args['per_procedencia'] ?? '';
        $this->per_fechain = $args['per_fechain'] ?? '' ;
        $this->per_fechasal = $args['per_fechasal'] ?? '' ;
        $this->per_razon = $args['per_razon'] ?? '' ;
    }

    // METODO PARA INSERTAR
    public function guardar(){
        $sql = "INSERT into persona (per_nombre, per_apellido, per_procedencia, per_fechain, per_fechasal, per_razon) values ('$this->per_nombre','$this->per_apellido','$this->per_procedencia','$this->per_fechain','$this->per_fechasal','$this->per_razon')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }
    
    
    
}