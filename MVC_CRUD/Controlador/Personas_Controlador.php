<?php

    require_once("Modelo/Personas_Modelo.php");

    $persona = new Personas_Modelo();

    $matrizPersona = $persona->get_personas();

    require_once("Vista/Personas_View.php");


   

?>