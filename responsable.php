<?php


class responsable {

    private $nombreR;
    private $apellidoR; 
    private $dniR;
    private $direccionR;
    private $mailR;
    private $telefonoR;

    public function __construct($nombreR,$apellidoR,$dniR,$direccionR,$mailR,$telefonoR)
    {
        $this->nombreR = $nombreR;
        $this->apellidoR = $apellidoR;
        $this->dniR = $dniR;
        $this->direccionR = $direccionR;
        $this->mailR = $mailR;
        $this->telefonoR = $direccionR;
    }

/**************************************************************************************************/

    public function get_nombre_responsable(){
        return $this->nombreR;
    }

    public function get_apelido_responsable(){
        return $this->apellidoR;
    }

    public function get_dni_responsable(){
        return $this->dniR;
    }

    public function get_direccion_responsable(){
        return $this->direccionR;
    }

    public function get_mail_responsable(){
        return $this->mailR;
    }

    public function get_telefono_responsable(){
        return $this->telefonoR;
    }

/****************************************************************************************************/

    public function set_nombre_responsable($nombreR){
        $this->nombreR = $nombreR;
    }

    public function set_apellido_responsable($apellidoR){
        $this->apellidoR = $apellidoR;
    }

    public function set_dni_responsable($dniR){
        $this->dniR = $dniR;
    }

    public function set_direccion_responsable($direccionR){
        $this->direccionR = $direccionR;
    }

    public function set_mail_responsable($mailR){
        $this->mailR = $mailR;
    }

    public function set_telefono_responsable($telefonoR){
        $this->telefonoR = $telefonoR;
    }

/****************************************************************************************************/

    public function __toString()
    {
        return
        "\n"."-------------DATOS RESPONSABLE-------------"."\n".
        "Nombre del responsable: ". $this->get_nombre_responsable()."\n".
        "Apellido del responsable: ". $this->get_apelido_responsable()."\n".
        "Dni responsable: ". $this->get_dni_responsable()."\n".
        "Mail del responsable: ". $this->get_mail_responsable()."\n".
        "Telefono del responsable: ". $this->get_telefono_responsable()."\n";
    }

}