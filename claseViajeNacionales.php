<?php

include_once("viaje.php");

class viajesNacionales extends viaje{

    private $descuento;

    public function __construct($destino,$horaLlegada,$horaPartida,$nroViaje,$montoBase,$fecha,$cantAsientosDisp,$cantAsientosTotales,$responsableViaje,$descuento)
    {
        parent::__construct($destino,$horaPartida,$horaLlegada,$nroViaje,$montoBase,$fecha,$cantAsientosDisp,$cantAsientosTotales,$responsableViaje);
        $this->descuento = $descuento;
    }

/*************************************************************************************************************************************************************************** */

    public function get_descuento_viaje(){
        return $this->descuento;
    }

    public function set_descuento_viaje($descuento){
        $this->descuento = $descuento;
    }

/*************************************************************************************************/

    public function calcularImporteViaje(){

        $montoBase = parent::calcularImporteViaje();

        $importe = $montoBase - (($this->get_descuento_viaje()/100) * $montoBase);

        return $importe;

    }

}