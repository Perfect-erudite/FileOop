<?php
    interface Cars{     //Interface are like skeletons
        public function windscreen();
        public function tires($size, $number);
        public function steering();
        public function color();
    }

    //Extending interface: interface extends interfaces
    interface SportCar extends Cars{
        public function height();
    }

    //Has the property of both the car and sportcar interface
    //Classes implements interfaces
    class Toyota implements SportCar{
        public function windscreen(){
            echo "windscreen";
        }
        public function tires($size, $number){
            echo "size and number";
        }
        public function steering(){
            echo "steering ";
        }
        public function color(){
            echo "purple";
        }

        public function height(){
            echo "4ft";
        }
    }
?>