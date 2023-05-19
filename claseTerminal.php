<?php


class terminal {

    private $denominacion;
    private $direccionTerminal;
    private $empresasTerminal;

    public function __construct($denominacion,$direccionTerminal,$empresasTerminal)
    {
        $this->denominacion = $denominacion;
        $this->direccionTerminal = $direccionTerminal;
        $this->empresasTerminal = $empresasTerminal;
    }

/********************************************************************************************************************************* */

    public function get_denominacion(){
        return $this->denominacion;
    }

    public function get_direccion_terminal(){
        return $this->direccionTerminal;
    }

    public function get_empresas_terminal(){
        return $this->empresasTerminal;
    }

/********************************************************************************************************************************** */

    public function set_denominacion($denominacion){
        $this->denominacion = $denominacion;
    }

    public function set_direccion_terminal($direccionTerminal){
        $this->direccionTerminal = $direccionTerminal;
    }

    public function set_empresas_terminal($empresasTerminal){
        $this->empresasTerminal = $empresasTerminal;
    }

/********************************************************************************************************************************** */

    public function mostrarEmpresas(){

        $empresas = $this->get_empresas_terminal();

        $cadena = "";

        for ( $i = 0; $i < count($empresas); $i++){

            $cadena = $cadena. $empresas[$i];

        }

        return $cadena;

    }


    public function __toString()
    {
        return
        "\n"."-------------DATOS TERMINAL-------------"."\n". 
        "Denominacion terminal: ". $this->get_denominacion()."\n". 
        "Direccion terminal: ". $this->get_direccion_terminal()."\n". 
        "-------------EMPRESAS-------------"."\n". 
        $this->mostrarEmpresas()."\n";

    }

/********************************************************************************************************************************* */

    public function darViajeMenorValor(){

        $empresas = $this->get_empresas_terminal();
        
        $viajesMenorValor = [];

        $menorCosto = 9999999;

        for ( $i = 0; $i < count($empresas); $i++){

          $objEmpresa = $empresas[$i];
          
          $viajes = $objEmpresa->get_viajesQueRealiza();

          for ( $e = 0; $e < count($viajes); $e++){

            $objViaje = $viajes[$e];

            if($objViaje->get_monto_viaje() < $menorCosto){
                 
                $menorCosto = $objViaje->get_monto_viaje();

                $indiceMenorCosto = $e;
            }
           
          }
          
          $viajesMenorValor[] = $viajes[$indiceMenorCosto];

        }

        return $viajesMenorValor;

    }


}