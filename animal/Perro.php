<?php
require "Animal.php";
class Perro extends Animal
{
    var $nombre;

    function inf_perro()
    {
      return $this->nombre="Boby";
    }
    function ladrar()
    {
        return $this->accion="Guao Guaooooo ";    
    }
}
// Llamar a la presentacion del perro
$boby = new Perro();
print "Hola, soy un perro y me llamo : ".$boby->inf_perro();
print " tengo ".$boby->getPatas()." patas tambien se ladrar escucha : ".$boby->ladrar();
?>