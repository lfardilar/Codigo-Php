<?php

  class Compra_Vehiculo
  {
    private $precio_base;
    private static $ayuda = 0;

    function  Compra_Vehiculo($gama){
      if ($gama == "Urbano") {
        $this->precio_base = 10000;
      }else if ($gama == "Compacto") {
        $this->precio_base = 20000;
      }else if ($gama == "Berlina") {
        $this->precio_base = 32000;
      }
    }

    static function Descuento_Gobierno(){
      if (date("m-d-y")>"02-27-2019") {
        self::$ayuda = 4500;
      }

    }

    function Climatizador()
    {
      $this->precio_base+=2000;
    }

    function Navegador_Gps()
    {
      $this->precio_base+=2500;
    }

    function Tapiceria_Cuero($color)
    {
      if($color == "Blanco"){
        $this->precio_base+=2000;
      }elseif ($color == "beige"){
        $this->precio_base+=3500;
      }else {
        $this->precio_base+=5000;
      }
    }

    function Precio_Final()
    {
      $valorfinal = $this->precio_base - self::$ayuda;
      return  $this->precio_base." / ".$valorfinal;
    }

  }

 ?>
