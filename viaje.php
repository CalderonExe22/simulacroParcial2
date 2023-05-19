<?php

include_once("responsable.php");

class viaje {

    private $destinoViaje;
    private $horaPartida;
    private $horaLlegada;
    private $nroViaje;
    private $montoBase;
    private $fecha;
    private $cantAsientosTotales;
    private $cantAsientosDisp;
    private $responsableViaje;

    public function __construct( $destinoViaje,$horaPartida,$horaLlegada,$nroViaje,$montoBase,$fecha,$cantAsientosDisp,$cantAsientosTotales,$responsableViaje)
    {
        $this->destinoViaje = $destinoViaje;
        $this->horaPartida = $horaPartida;
        $this->horaLlegada = $horaLlegada;
        $this->nroViaje = $nroViaje;
        $this->montoBase = $montoBase;
        $this->fecha = $fecha;
        $this->cantAsientosTotales = $cantAsientosTotales;
        $this->cantAsientosDisp = $cantAsientosDisp;
        $this->responsableViaje = $responsableViaje;
    }

/*********************************************************************************************************************** */

    public function get_destino_viaje(){
        return $this->destinoViaje;
    }

    public function get_horaPartida_viaje(){
        return $this->horaPartida;
    }

    public function get_horaLlegada_viaje(){
        return $this->horaLlegada;
    }

    public function get_nro_viaje(){
        return $this->nroViaje;
    }

    public function get_monto_viaje(){
        return $this->montoBase;
    }

    public function get_fecha_viaje(){
        return $this->fecha;
    }

    public function get_cantAsientosTotales_viaje(){
        return $this->cantAsientosTotales;
    }

    public function get_cantAsientosDisp_viaje(){
        return $this->cantAsientosDisp;
    }

    public function get_responsable_viaje(){
        return $this->responsableViaje;
    }

/****************************************************************************************************************************** */

    public function set_destino_viaje($destinoViaje){
        $this->destinoViaje = $destinoViaje;
    }

    public function set_horaPartida_viaje($horaPartida){
        $this->horaPartida = $horaPartida;
    }

    public function set_horaLlegada_viaje($horaLlegada){
        $this->horaLlegada = $horaLlegada;
    }

    public function set_nro_viaje($nroViaje){
        $this->nroViaje = $nroViaje;
    }
    
    public function set_monto_viaje($montoBase){
        $this->montoBase = $montoBase;
    }

    public function set_fecha_viaje($fecha){
        $this->fecha = $fecha;
    }

    public function set_cantAsientosTotales_viaje($cantAsientosTotales){
        $this->cantAsientosTotales = $cantAsientosTotales;
    }

    public function set_cantAsientosDisp_viaje($cantAsientosDisp){
        $this->cantAsientosDisp = $cantAsientosDisp;
    }

    public function set_responsable_viaje($responsableViaje){
        $this->responsableViaje = $responsableViaje;
    }

/********************************************************************************************************************************** */

    public function __toString()
    {
        return
        "\n"."------------------DATOS VIAJES------------------"."\n".
        "Destino viaje: ". $this->get_destino_viaje()."\n".
        "Hora partida: ". $this->get_horaPartida_viaje()."\n".
        "Hora llegada: ". $this->get_horaLlegada_viaje()."\n".
        "Nro del viaje: ". $this->get_nro_viaje()."\n".
        "Monto base del viaje: ". $this->get_monto_viaje()."\n".
        "Fecha del viaje: ". $this->get_fecha_viaje()."\n".
        "Cantidad de asientos totales: ". $this->get_cantAsientosTotales_viaje()."\n".
        "Cantidad de asientos disponibles: ". $this->get_cantAsientosDisp_viaje()."\n".
        "Responsable del viaje: ". $this->get_responsable_viaje()."\n";
    }

/********************************************************************************************************************************** */

    public function calcularImporteViaje(){

        $cantAsientosDisp = $this->get_cantAsientosDisp_viaje();
        $cantAsientosTotales = $this->get_cantAsientosTotales_viaje();
        $montoBase = $this->get_monto_viaje();

        $asientosVendidos = $cantAsientosTotales - $cantAsientosDisp;

        $importe = $montoBase + ($montoBase * $asientosVendidos/$cantAsientosTotales);

        return $importe;

    }

}


/*$responsable = new responsable("pepe","lopez",0000,"av argentina","pepe@gmail.com",99999);
$viaje = new viaje("bariloche","14:30","16:00",1,2000,"14/02/2023",12,14,$responsable);


echo $viaje->calcularImporteViaje();*/