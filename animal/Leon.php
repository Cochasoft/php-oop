<?php
require "Animal.php";
class Leon extends Animal
{
    function rugir()
    {
        return $this->accion= "Rrrrarr rrrrar";
    } 
    function inf_leon()
    {
        return $this->nombre="Simba";
    }
}
$simba = new Leon();
print "Hola, soy un leon y me llamo ".$simba->inf_leon();
print " tengo ".$simba->getPatas()." patas tambien se rugir escucha : ".$simba->rugir();
?>