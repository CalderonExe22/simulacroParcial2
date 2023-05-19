<?php 


class empresa {

    private $nombreEmpresa;
    private $idEmpresa;
    private $viajesQueRealiza;

    public function __construct($nombreEmpresa,$idEmpresa,$viajesQueRealiza)
    {
        $this->nombreEmpresa = $nombreEmpresa;
        $this->idEmpresa = $idEmpresa;
        $this->viajesQueRealiza = $viajesQueRealiza;
    }

/******************************************************************************************************************************** */

    public function get_nombre_empresa(){
        return $this->nombreEmpresa;
    }

    public function get_id_empresa(){
        return $this->idEmpresa;
    }

    public function get_viajesQueRealiza(){
      return $this-> viajesQueRealiza;
    }

/******************************************************************************************************************************** */

    public function set_nombre_empresa($nombreEmpresa){
        $this->nombreEmpresa = $nombreEmpresa;
    }

    public function set_id_empresa($idEmpresa){
        $this->idEmpresa = $idEmpresa;
    }

    public function set_viajesQueRealiza($viajesQueRealiza){
        $this->viajesQueRealiza = $viajesQueRealiza;
    }

/********************************************************************************************************************************* */

    public function mostrarViajes(){

        $viajes = $this->get_viajesQueRealiza();

        $cadena = "";

        for ( $i = 0; $i < count($viajes); $i++){

            $cadena = $cadena . $viajes[$i];

        }

        return $cadena;

    }

    public function __toString()
    {
        return
        "\n"."---------------DATOS EMPRESA---------------"."\n".
        "Nombre empresa: ". $this->get_nombre_empresa()."\n".
        "Id empresa: ". $this->get_id_empresa()."\n".
        "---------------VIAJES---------------"."\n".
        $this->mostrarViajes()."\n";
    }

/********************************************************************************************************************************** */

    public function darCostoViaje($codViaje){

        $viajes = $this->get_viajesQueRealiza();

        $i = 0; 

        $seEncontro = false;

        $importeViaje = 0;

        while ( $i < count($viajes) && !$seEncontro){

            $objViaje = $viajes[$i];

            if ( $objViaje->get_nro_viaje() == $codViaje){

                $importeViaje = $importeViaje + $objViaje->calcularImporteViaje();

                $seEncontro = true;

            }

            $i++;

        }

        return $importeViaje;

    }


    public function buscarViaje($codViaje){

        $viajes = $this->get_viajesQueRealiza();

        $i = 0;

        $seEncontro = false;

        $viajeEncontrado = null;

        while ( $i < count($viajes) && !$seEncontro){

            $objViaje = $viajes[$i];

            if ( $objViaje->get_nro_viaje() == $codViaje){

                $viajeEncontrado = $viajes[$i];;

                $seEncontro = true;

            }

            $i++;

        }

        return $viajeEncontrado;

    }

/********************************************************************************************************************************** */

}