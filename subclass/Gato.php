<?php
require_once("superclass/Animal.php");
class Gato extends Animal{
    public function comer()
    {
        echo "<p>Gato comiendo</p>";
    }
    public function dormirgato()
    {
        $animal = "Gato";
        $this->dormir($animal);
    }

}