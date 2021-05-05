<?php
require 'FiguraGeometrica.php';
//use \FiguraGeometrica;

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

   function getBase()
   {
      return $this->base;
   }
   function setBase($b)
   {
      $this-> base=$b;
   }
   function getAltura()
   {
      return $this->altura;
   }
   function setAltura($a)
   {
      $this->altura = $a;
   }
   function calcularArea()
   {
      return ($this->base*$this->altura)/2;
   }
   function getLado()
   {
      return $this->lado;
   }
   function setLado($l)
   {
      $this->lado = $l;
   }

   //es para triangulo equilatero.
   function calcularPerimetro()
   {
      return 3*$this->lado;
   }


}
$triangulo = new Triangulo(10,20,30);

print $triangulo ->calcularArea()."<br>";


print $triangulo->calcularPerimetro();

echo "hola"

?>