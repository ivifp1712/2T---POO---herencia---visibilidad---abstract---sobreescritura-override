<?php
require_once("superclass/Animal.php");
class Perro extends Animal{
    public function comer()
    {
        echo "<p>El perro, come huesos.</p>";
    }

    public function dormirperro()
    {
        $animal = "Perro";
        $this->dormir($animal);
    }
}