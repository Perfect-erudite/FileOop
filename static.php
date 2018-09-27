<?php
    class Computers{
        //Declaring static variable
        public static $keyboard = "Querty";

        //Declaring a static function
        public static function mouse(){
            echo "<br/> This is a static function for mouse";
        }

        public function keyboardFun(){
            return self::$keyboard;  // to access a static variable with instantiation
        }


        //Method cannot be overridden when the final keyword is used
        //Class cannot be inherited nor extended when the final keyword is used
        final function screen(){
            echo "This is a final keyword display";
        }
    }

    echo Computers::$keyboard;
    echo Computers::mouse();

    //Instantiation doesn't work with a static function or variable
    $laptop = new Computers;
    echo $laptop->keyboardFun();
?>