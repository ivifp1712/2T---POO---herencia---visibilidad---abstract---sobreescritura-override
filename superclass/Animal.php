<?php
    abstract class Animal{
        public function comer()
        {
            echo "<p>Animal comiendo</p>";
        }
        protected function dormir($animal)
        {
            echo "<p>$animal durmiendo</p>";
        }
    }
?>