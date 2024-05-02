<?php 

class Cliente extends Persona{

    //!ATRIBUTOS
    private $nro_cliente;

    //!CONSTRUCTOR 

    public function __construct($nro_doc, $nombres, $apellidos, $nro_cliente){
        
        parent::__construct($nro_doc, $nombres, $apellidos);
        $this->nro_cliente = $nro_cliente;
    }


    /** 
     * ! **********************************************************************
     * ! *************************** METODO GETTER ****************************
     * ! **********************************************************************
     */

     public function get_nroCliente(){
        return $this->nro_cliente;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO SETTER ****************************
     * ! **********************************************************************
     */

     public function set_nroCliente($nro_cliente){
        $this->nro_cliente = $nro_cliente;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */

     public function __toString(){
        
        return parent::__toString() 
        . "Nro. de cliente: " . $this->nro_cliente . "\n\n";
     }
}