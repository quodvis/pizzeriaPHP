<?php


abstract class Persona {
 
    private $nombre; 
    private $telefono;
    
    
    public function __construct($nombre, $telefono)
    {
        $this-> setNombre($nombre);
        $this-> setTelefono($telefono);
    }
    public function getNombre()
    {
        return $this->$nombre;
    }
    
    public function setNombre($nombre)
    {
        if(isset($nombre))
        {
            if(strlen($nombre) > 2)
            {
                $this->nombre = $nombre;
            }
            
        }
        
    }
    
    public function getTelefono()
    {
        return $this->telefono;
    }
    
    public function setTelefono($telefono)
    {
        if(isset($telefono))
        {
            if(strlen($telefono) == 9)
            {
                $this->telefono = $telefono;
            }
        }
        
    }
}
