<?php
require_once 'FiguraGeometrica.php';
class Circulo extends FiguraGeometrica
{
    private $radio;
    private $pi=3.1416; 

    function __construct($r)
    {
        $this->radio=$r;
    }
    function getRadio()
    {
        return $this->radio;
    }
    function setRadio($r)
    {
        $this->radio=$r;
    }
    function calcularArea()
    {
      return pow($this->radio ,2)*$this->pi;;
    }
    function calcularPerimetro()
    {
        return 2*$this->radio*$this->pi;
    }

}
$circulo = new Circulo(5);
print $circulo->calcularArea()."<br>";
print $circulo->calcularPerimetro()."<br>";
//echo pow(3,2);

echo "hola circulo";



?>