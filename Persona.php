<?php 

class Persona{

    //!ATRIBUTOS
    private $num_doc;
    private $nombre;
    private $apellido;

    //!CONSTRUCTOR

    public function __construct($num_doc, $nombre, $apellido){
        $this->num_doc = $num_doc;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO GETTER ****************************
     * ! **********************************************************************
     */

     public function get_dni(){
        return $this->num_doc;
     }

     public function get_nombre(){
        return $this->nombre;
     }

     public function get_apellido(){
        return $this->apellido;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO SETTER ****************************
     * ! **********************************************************************
     */

     public function set_dni($dni){
        $this->num_doc = $dni;
     }

     public function set_nombre($nombre){
        $this->nombre = $nombre;
     }

     public function set_apellido($apellido){
        $this->apellido = $apellido;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */

     public function __toString(){
        
        return "DNI: " . $this->get_dni() . "\n" . 
        "Nombre: " . $this->get_nombre() . "\n" . 
        "Apellido: " . $this->get_apellido() . "\n";
     }
}