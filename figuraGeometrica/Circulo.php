<?php
require_once 'FiguraGeometrica.php';

class Circulo extends FiguraGeometrica
{
    private $radio;
    private $pi=3.1416; 

    function __construct($r) {
        $this->radio=$r;
    }

    function getRadio() {
        return $this->radio;
    }
    function setRadio($r) {
        $this->radio=$r;
    }

    function calcularArea() {
      return pow($this->radio ,2)*$this->pi;;
    }

    function calcularPerimetro() {
        return 2*$this->radio*$this->pi;
    }

}
$circulo = new Circulo(5);
print "Radio del Circulo es: " . $circulo->getRadio() . "<br>";
print "CALCULADO<BR>";
print "El AREA del circulo: " . $circulo->calcularArea() . "<br>";
print "El PERIMETRO del Circulo es: " . $circulo->calcularPerimetro() . "<br>";

?>
<html>
<ul>
    <li>
        <a href="FiguraGeometrica.php">Inicio</a>
    </li>
</ul>
</html>
