<?php 

class CajaDeAhorro extends Cuenta{

    //!ATRIBUTOS 

    //!CONSTRUCTOR

    public function __construct($nro_cuenta, $saldo, $obj_duenio){
        
        parent:: __construct($nro_cuenta, $saldo, $obj_duenio);
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */

     public function __toString(){

        return parent::__toString();
     }
}