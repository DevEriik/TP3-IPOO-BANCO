<?php 

class Cuenta{

    //!ATRIBUTOS
    private $nro_cuenta;
    private $saldo;
    private $obj_duenio;

    //!CONSTRUCTOR

    public function __construct($nro_cuenta, $saldo, $obj_duenio){
        $this->nro_cuenta = $nro_cuenta;
        $this->saldo = $saldo;
        $this->obj_duenio = $obj_duenio;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO GETTER ****************************
     * ! **********************************************************************
     */

     public function get_nroCuenta(){
        return $this->nro_cuenta;
     }

     public function get_saldo(){
        return $this->saldo;
     }

     public function get_objDuenio(){
        return $this->obj_duenio;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO SETTER ****************************
     * ! **********************************************************************
     */

     public function set_nroCuenta($nro_cuenta){
        $this->nro_cuenta = $nro_cuenta;
     }

     public function set_saldo($saldo){
        $this->saldo = $saldo;
     }

     public function set_objDuenio($obj_duenio){
        $this->obj_duenio = $obj_duenio;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */

     public function __toString(){
        
        return "-----[CUENTA]-----\n" . 
        "Nro. Cuenta: " . $this->get_nroCuenta() . "\n" .
        "Saldo: $" . $this->get_saldo() . "\n" .
        "Cliente: \n" . $this->get_objDuenio() . "\n";
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODOS **********************************
     * ! **********************************************************************
     */

     public function saldoCuenta(){
      //TODO: Retorna el saldo de la cuenta
        return $this->get_saldo();
     }

     public function realizarDeposito($monto){
      //TODO: Realiza una suma del saldo que tiene la cuenta + el deposito ingresado

         $dinero_en_cuenta = $this->get_saldo();
         $dinero_total = $dinero_en_cuenta + $monto; 
         $this->set_saldo($dinero_total); //Setea para tener la suma del nuevo monto ingresado. 
         return $dinero_total;
     }

     public function realizarRetiro($monto){
      //TODO: Realiza una resta del saldo que tiene la cuenta - el retiro ingresado

         $dinero_total = -1;
         $dinero_en_cuenta = $this->get_saldo();
         if ($monto > $dinero_en_cuenta) {
            $dinero_total;
         } else {
            $dinero_total = $dinero_en_cuenta - $monto;
            $this->set_saldo($dinero_total);
         }

         return $dinero_total;
     }
}