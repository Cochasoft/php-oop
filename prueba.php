
<?php

class Auto
{
  public $numeroPuerta;
  public $color;
  public $modelo;
  private $placa;

   function __construct($nP, $c, $m)
   {
       $this->numeroPuerta = $nP;
       $this->color = $c;
       $this->modelo = $m;
   }

  function nuevoDetalle()
  {
      print "tengo el auto ". $this->modelo ." de color ". $this->color. " con ". $this->numeroPuerta ." puertas <br>";

  }
   
   public function getDetalle()
   { 
      return $this->modelo. " tiene " . $this->numeroPuerta. " puertas Y es de color: " .$this->color;
   }

}
$autoUno = new Auto(4,"rojo","toyota");
$autoDos = new Auto(2, "verde", "suzuki");
$autoTres = new Auto(5, "naranja", "jeep");
//$autoNuevo -> getColor("rojo");
//$autoUno -> modelo = "toyota";
//$autoDos -> modelo = "suzuki";
//$autoTres -> modelo= "jeep";

//$autoUno -> numeroPuerta = 4;
//$autoDos -> numeroPuerta = 2;
//$autoTres -> numeroPuerta = 5;

//$autoUno -> color = "rojo";
//$autoDos -> color = "AMARILLO";
//$autoTres -> color= "verde";

print $autoUno -> nuevoDetalle(); 
print $autoDos -> nuevoDetalle(); 
print $autoTres -> nuevoDetalle(); 



?>


