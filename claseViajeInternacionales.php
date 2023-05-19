<?php

include_once("viaje.php");

class viajeInternacional extends viaje{

    private $docAdicional;
    private $porcentajeCosto;

    public function __construct($destino,$horaLlegada,$horaPartida,$nroViaje,$montoBase,$fecha,$cantAsientosDisp,$cantAsientosTotales,$responsableViaje,$docAdicional,$porcentajeCosto)
    {
        parent::__construct($destino,$horaPartida,$horaLlegada,$nroViaje,$montoBase,$fecha,$cantAsientosDisp,$cantAsientosTotales,$responsableViaje);

        $this->docAdicional = $docAdicional;

        $this->porcentajeCosto = $porcentajeCosto;

    }

/********************************************************************************************************************************************************************************************** */


    public function get_doc_adicional(){
        return $this->docAdicional;
    }

    public function get_porcentaje_costo(){
        return $this->porcentajeCosto;
    }

/************************************************************************************************* */


    public function set_doc_adicional($docAdicional){
        $this->docAdicional = $docAdicional;
    }

    public function set_porcentaje_costo($porcentajeCosto){
        $this->porcentajeCosto = $porcentajeCosto;
    }

/********************************************************************************************** */

    public function __toString()
    {
        return
        parent::__toString();
        "Documentacion adicional?: ". $this->get_doc_adicional()."\n". 
        "Porcentaje aplicado al costo: ". $this->get_porcentaje_costo()."\n";
    }

/************************************************************************************************ */

    public function calcularImporteViaje(){

        $montoBase = parent::get_monto_viaje();

        $valorTotal = $montoBase + ($this->get_porcentaje_costo()/100) * $montoBase;

        parent::set_monto_viaje($valorTotal);

        $importe = parent::calcularImporteViaje();

       return  $importe;

    }

}
