<?php
//An Abstract class can only be inherited and not instantiated or implemented
    abstract class Building{
        abstract function roof();

        public function bricks($number){

        }
    }

    class Bungalow extends Building{
        public function roof(){

            echo "Ayomide is my name";
        }
    }

    $house = new Bungalow;  //Instantiation
    $house->roof();
?>