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


if(isset($_POST["base"])|| isset($_POST["altura"]) || isset($_POST["lado"]))
{
   $ba = $_POST["base"];
   $al = $_POST["altura"];
   $la = $_POST["lado"];
   $triangulo = new Triangulo($ba,$al,$la);
   
}else
{
   $triangulo = new Triangulo(10,10,3);
   
}
print  "La Base es: ".$triangulo->getBase()."<br>";
print "La ALtura es: ".$triangulo->getAltura()."<br>";
print "CALCULADO<br>";
print "El AREA del Triangulo es: ". $triangulo ->calcularArea()."<br>";
print "El PERIMETRO es: ". $triangulo->calcularPerimetro()."<br>";

if($_POST["base"]){
   var_dump($_POST["base"]);
   }
?>
<html>
<body>
<form name="formulario" method="POST" action="Triangulo.php">
   Base: <input type="text" name="base"> <br>
   Altura: <input type="text" name="altura"> <br>
   lado: <input type="text" name="lado"> <br>
    <input value="calcular" type="submit">
</form>
</body>
<ul>
<li>
        <a href="FiguraGeometrica.php">Inicio</a>
    </li>
</ul>
</html>