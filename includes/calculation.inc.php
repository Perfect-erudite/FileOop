<?php
    class Calculation{
        public $calcnum1;
        public $calcnum2;
        public $calcoperator;
        
        public function __construct($no1, $no2, $op){
            $this->calcnum1 =$no1;
            $this->calcnum2 =$no2;
            $this->caloperator =$op;
        }

        public function actualCal(){
            if($this->caloperator == 'add'){
                return ($this->calcnum1 + $this->calcnum2);
            }
            elseif($this->caloperator == 'subtract'){
                return ($this->calcnum1 - $this->calcnum2);
            }
            elseif($this->caloperator == 'multiply'){
                return ($this->calcnum1 * $this->calcnum2);
            }
            elseif($this->caloperator == 'divide'){
                return ($this->calcnum1 / $this->calcnum2);
            }
            else{
                return "error no operator selected";
            }
        }
    }
?>