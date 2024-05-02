<?php 

class CuentaCorriente extends Cuenta{


    //!ATRIBUTOS
    private $monto_max_de_ext;

    //!CONSTRUCTOR

    public function __construct($nro_cuenta, $saldo, $obj_duenio, $monto_max_de_ext){
        
        parent::__construct($nro_cuenta, $saldo, $obj_duenio);
        $this->monto_max_de_ext = $monto_max_de_ext;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO GETTER ****************************
     * ! **********************************************************************
     */

     public function get_montoMaxDeExt(){
        return $this->monto_max_de_ext;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO SETTER ****************************
     * ! **********************************************************************
     */

     public function set_montoMaxDeExt($monto_max_de_ext){
        $this->monto_max_de_ext = $monto_max_de_ext;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ****************************
     * ! **********************************************************************
     */

     public function __toString(){
        return parent::__toString() . 
        "-----{MONTO MAX. DE EXTRACCIÓN}----\n" .
        "El monto maximo de extracción es: $" . $this->get_montoMaxDeExt() . "\n\n" . 
        "-----------------------------------------\n";
     }

}

