<?php
require 'FiguraGeometrica.php';
//use \FiguraGeometrica;

class Rectangulo extends FiguraGeometrica
{
   private $alto;
   private $ancho;

   function __construct($al,$an)
   {
       $this->alto=$al;
       $this->ancho=$an;
   }

   function getAlto()
   {
      return $this->alto;
   }
   function setAlto($al)
   {
      $this->alto=$al;
   }
   function getAncho()
   {
      return $this->ancho;
   }
   function setAncho($an)
   {
      $this->ancho = $an;
   }
   function calcularArea()
   {
      return $this->alto*$this->ancho;
      
   }
   function calcularPerimetro()
   {
      return 2*($this->alto+$this->ancho);
   }

}
$rectangulo= new Rectangulo(10,20);
print "El Alto es: ".$rectangulo->getAlto()."<br>"; 
print "El Ancho es: ".$rectangulo->getAncho()."<br>";
print "CALCULADO<BR>";
print "El AREA del Rectangulo es: ".$rectangulo ->calcularArea()."<br>";

print "El PERIMETRO del Resctangulo es: ".$rectangulo->calcularPerimetro()."<br>";

?>
<html>
<ul>
<li>
        <a href="FiguraGeometrica.php">Inicio</a>
    </li>
</ul>
</html>