<?php 

class Banco{

    //!ATRIBUTOS    
    private $col_cuenta_corriente;
    private $col_caja_de_ahorro;
    private $ult_valor_cuenta_asig;
    private $col_cliente;

    //!CONSTRUCTOR 

    public function __construct($col_cuenta_corriente, $col_caja_de_ahorro, $ult_valor_cuenta_asig, $col_cliente){
        
        $this->col_cuenta_corriente = $col_cuenta_corriente;
        $this->col_caja_de_ahorro = $col_caja_de_ahorro;
        $this->ult_valor_cuenta_asig = $ult_valor_cuenta_asig;
        $this->col_cliente = $col_cliente;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO GETTER ****************************
     * ! **********************************************************************
     */

     public function get_colCuentaCorriente(){
        return $this->col_cuenta_corriente;
     }

     public function get_colCajaDeAhorro(){
        return $this->col_caja_de_ahorro;
     }

     public function get_ultValorCuentaAsig(){
        return $this->ult_valor_cuenta_asig;
     }

     public function get_colCliente(){
        return $this->col_cliente;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO SETTER ****************************
     * ! **********************************************************************
     */

     public function set_colCuentaCorriente($col_cuenta_corriente){
        $this->col_cuenta_corriente = $col_cuenta_corriente;
     }

     public function set_colCajaDeAhorro($col_caja_de_ahorro){
        $this->col_caja_de_ahorro = $col_caja_de_ahorro;
     }

     public function set_ultValorCuentaAsig($ult_valor_cuenta_asig){
        $this->ult_valor_cuenta_asig = $ult_valor_cuenta_asig;
     }

     public function set_colCliente($col_cliente){
        $this->col_cliente = $col_cliente;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */

     public function __toString(){
        return "------[BANCO]-----\n" 
        . "Cuentas Corrientes: \n" . $this->arrayToString($this->get_colCuentaCorriente()) . "\n"
        . "Cajas de Ahorro: \n" . $this->arrayToString($this->get_colCajaDeAhorro()) . "\n"
        . "Ultimo Valor Cuenta Asignada: " . $this->get_ultValorCuentaAsig() . "\n"
        . "Clientes: \n⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓\n\n" . $this->arrayToString($this->get_colCliente()) . "\n";
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODOS **********************************
     * ! **********************************************************************
     */

     /**
      * Este metodo convierte la colección a una cadena de string
      */
     public function arrayToString($array){

        $string = "";

        foreach ($array as $cadena) {
            $string .=  $cadena;
        }
        return $string;
     }

     /**
      * incorporarCliente(objCliente): permite agregar un nuevo cliente al Banco
      */

      public function incorporarCliente($objCliente){

        $existe = false;
        $dipl_clientes = $this->get_colCliente();
        // print_r($dipl_clientes);
        foreach ($dipl_clientes as $cliente) {
            $dni = $cliente->get_dni() . "\n"; //TODO: Obtengo el numero DNI
            if ($dni == $objCliente->get_dni()) { //TODO: Si dni es igual al dni del objCliente $existe cambia a true
                $existe = true; 
            }
        }

        if ($existe == false) { //TODO:Si el objCliente no existe se lo agrega a la colec de clientes
            array_push($dipl_clientes, $objCliente);
            $this->set_colCliente($dipl_clientes);
        }
        
      }

      /**
       * Busca un cliente por su numero de cliente 
       */

       public function buscarCliente($numCliente){

            $existe = false;
            $dupl_clientes = $this->get_colCliente();
            foreach ($dupl_clientes as $cliente) {
                
                $num_cliente = $cliente->get_nroCliente();
                if ($num_cliente == $numCliente) {
                    $existe = true;
                }
            }
            return $existe;
       }

      /**
       * incorporarCuentaCorriente(numeroCliente, montoDescubierto): Agregar una nueva 
       * Cuenta a la colección de cuentas, verificando que el cliente dueño de la cuenta es cliente 
       * del Banco.
       */

       public function incorporarCuentaCorriente($num_cliente, $monto_Descubierto){

            $existe = false; 
            $dupl_clientes = $this->get_colCliente();
            $dupl_cuentaCorriente = $this->get_colCuentaCorriente();
            $ver_cliente =$this->buscarCliente($num_cliente);

            foreach ($dupl_clientes as $cliente) { //TODO: Foreach para poder obtener el nombre del cliente y pasarlo por parametro en la nueva cuenta corrientes
                $numero_cliente = $cliente->get_nroCliente();
                if ($numero_cliente == $num_cliente) {
                    $obj_cliente = $cliente;
                }
            }

            if ($ver_cliente) {
                $numero_cuenta = $this->get_ultValorCuentaAsig() + 1;
                $nueva_cuenta_corriente = new CuentaCorriente($numero_cuenta, 0, $obj_cliente, $monto_Descubierto);
                array_push($dupl_cuentaCorriente, $nueva_cuenta_corriente);
                $this->set_colCuentaCorriente($dupl_cuentaCorriente);
                $this->set_ultValorCuentaAsig($numero_cuenta);
                $existe = true;
            }
            return $existe;
       }

       /**
        * incorporarCajaAhorro(numeroCliente):Agregar una nueva Caja de Ahorro a la colección de cajas 
        * de ahorro, verificando que el cliente dueño de la cuenta es cliente del Banco.
        */

        public function incorporarCajaAhorro($num_cliente){

            $existe = false;
            $dupl_clientes = $this->get_colCliente();
            $dupl_cajaDeAhorro = $this->get_colCajaDeAhorro();
            $ver_cliente = $this->buscarCliente($num_cliente);

            foreach ($dupl_clientes as $cliente) { //TODO: Foreach para poder obtener el nombre del cliente y pasarlo por parametro en la nueva cuenta corrientes
                $numero_cliente = $cliente->get_nroCliente();
                if ($numero_cliente == $num_cliente) {
                    $obj_cliente = $cliente;
                }
            }

            if ($ver_cliente) {
                $numero_cuenta = $this->get_ultValorCuentaAsig() + 1;
                $nueva_caja_de_ahorro = new CajaDeAhorro($numero_cuenta, 0, $obj_cliente);
                array_push($dupl_cajaDeAhorro, $nueva_caja_de_ahorro);
                $this->set_colCajaDeAhorro($dupl_cajaDeAhorro);
                $this->set_ultValorCuentaAsig($numero_cuenta);
                $existe = true;
            }
            return $existe;
        }

        /**
         * Busca una cuenta con el numero de cuenta
         */

         public function buscarCuenta($num_cuenta){
            
            $colec_cuentas_ahorro = $this->get_colCajaDeAhorro();
            $colec_cuentas_corri = $this->get_colCuentaCorriente();
            $colec_cuentas_gral = [$colec_cuentas_ahorro, $colec_cuentas_corri];
            $cuenta_encontrada = null;
            foreach ($colec_cuentas_gral as $cuentas) {
                foreach ($cuentas as $cuenta){
                    
                    $info_nro_cuenta = $cuenta->get_nroCuenta();
                    
                    if ($info_nro_cuenta == $num_cuenta) {
                        
                        $cuenta_encontrada = $cuenta;
                    }
                }
            }
            return $cuenta_encontrada;
         }

        /**
         * realizarDeposito(numCuenta,monto): Dado un número de Cuenta y un monto, realizar depósito.
         */

         public function realizarDeposito($num_cuenta, $monto){

            $cuenta_existente = $this->buscarCuenta($num_cuenta); 

                if ($cuenta_existente != null) {
                    
                    $cuenta_existente->realizarDeposito($monto);

                    $this->set_colCajaDeAhorro($this->get_colCajaDeAhorro());
                    $this->set_colCuentaCorriente($this->get_colCuentaCorriente());
                }
         }

         /**
          * realizarRetiro(numCuenta,monto): Dado un número de Cuenta y un monto, realizar retiro
          */

          public function realizarRetiro($num_cuenta, $monto){

            $cuenta_existente = $this->buscarCuenta($num_cuenta);

                if ($cuenta_existente != null) {
                    
                    $cuenta_existente->realizarRetiro($monto);

                    $this->set_colCajaDeAhorro($this->get_colCajaDeAhorro());
                    $this->set_colCuentaCorriente($this->get_colCuentaCorriente());
                }
                return $cuenta_existente;
          }
}