<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author n
 */
class Cliente extends Persona{
    //put your code here
    
    public function __construct($nombre, $telefono) {
        parent::__construct($nombre, $telefono);
    }
}
