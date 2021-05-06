<?php
require 'FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica
{
   private $base;
   private $altura;
   private $lado;

   function __construct($b,$a,$l)
   {
       $this->base=$b;
       $this->altura=$a;
       $this->lado=$l;
   }

   function getBase() {
      return $this->base;
   }

   function setBase($b) {
      $this-> base=$b;
   }

   function getAltura() {
      return $this->altura;
   }

   function setAltura($a) {
      $this->altura = $a;
   }

   function calcularArea() {
      return ($this->base*$this->altura)/2;
   }

   function getLado() {
      return $this->lado;
   }

   function setLado($l) {
      $this->lado = $l;
   }

   // Es para triangulo equilatero.
   function calcularPerimetro()
   {
      return 3 * $this->lado;
   }


}
$triangulo = new Triangulo(1,2,3);

print "La Base es: ".$triangulo->getBase()."<br>";
print "La Altura es: ".$triangulo->getAltura()."<br>";
print "CALCULADO<br>";
print "El AREA del Triangulo es: ". $triangulo ->calcularArea()."<br>";
print "El PERIMETRO es: ". $triangulo->calcularPerimetro()."<br>";

?>
<html>
<ul>
    <li>
        <a href="FiguraGeometrica.php">Inicio</a>
    </li>
</ul>
</html>
