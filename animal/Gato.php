<?php
require "Animal.php";
class Gato extends Animal
{
    function inf_gato()
    {
        return $this->nombre="Nayrovi";
    }
    function maullar()
    {
        return $this->accion="miau miau miau";
    }
}
$Nayrovi = new Gato();
print "Hola, soy un gato y me llamo ".$Nayrovi->inf_gato();
print " tengo ".$Nayrovi->getPatas()." patas tambien se maullar escucha : ".$Nayrovi->maullar();
?>