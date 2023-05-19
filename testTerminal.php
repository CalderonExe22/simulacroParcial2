<?php

include_once("responsable.php");
include_once("viaje.php");
include_once("claseViajeInternacionales.php");
include_once("claseViajeNacionales.php");
include_once("claseEmpresa.php");
include_once("claseTerminal.php");


$responsable = new responsable("pepe","lopez",0000,"av argentina","pepe@gmail.com",99999);
$responsable2 = new responsable("tomas","lera",1111,"av godoy","tomas@gmail.com",8888);

$coleccionViajes =
[
    new viajesNacionales("bariloche","14:30","16:00",1,2000,"14/02/2023",12,24,$responsable,10),
    new viajesNacionales("bolson","15:30","17:20",2,1000,"03/10/2023",12,14,$responsable,10),
    new viajeInternacional("polonia","10:20","16:40",3,150000,"23/11/2023",12,15,$responsable2,"si",45),
    new viajeInternacional("brasil","12:20","15:40",4,20000,"03/11/2023",2,5,$responsable2,"si",45),
    new viajeInternacional("bolivia","09:20","13:50",5,350000,"04/09/2023",10,12,$responsable2,"si",45)
];

$coleccionViajes2 =
[
    new viajesNacionales("rosario","14:30","16:00",6,2000,"14/02/2023",12,24,$responsable,10),
    new viajesNacionales("neuquen","15:30","17:20",7,1000,"03/10/2023",12,14,$responsable,10),
    new viajeInternacional("estados unidos","10:20","16:40",8,150000,"23/11/2023",12,15,$responsable2,"si",45),
    new viajeInternacional("uruguay","12:20","15:40",9,20000,"03/11/2023",2,5,$responsable2,"si",45),
    new viajeInternacional("japon","09:20","13:50",10,350000,"04/09/2023",10,12,$responsable2,"si",45)
];

$empresa1 = new empresa("Flecha Bus",011000,$coleccionViajes);



$empresa2 = new empresa("Via Bariloche",00222,$coleccionViajes2);

$coleccionEmpresas = [$empresa1,$empresa2];

$terminal = new terminal("terminal 1","av noseque",$coleccionEmpresas);


for ( $i = 0; $i < count($terminal->darViajeMenorValor()); $i++){

    echo $terminal->darViajeMenorValor()[$i];

}



echo $empresa1->darCostoViaje(1);

echo $empresa1->buscarViaje(2);