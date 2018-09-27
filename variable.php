<?php
    class Books{
        //Declare varriable
        protected $price;  
        var $title;   //By default this variable is declared public

        //Creating a constructor function
        //The first function to run in the class
        function __construct($newTitle, $newPrice){
            // $this->title= "This page contains no book title yet";
            // $this->price= 0;

            $this->title= $newTitle;
            $this->price= $newPrice;
        }

        //Define a set function
        public function setTitle($newVar){
            $this->title = $newVar;
        }

        public function setPrice($newVar){
            $this->price = $newVar;
        }

        //Define a get function
        public function getTitle(){
           echo "<b>Title:</b> ".$this->title . "<br>";
        }

        public function getPrice(){
            echo "<b>Price:</b> $".$this->price. "<br>";
        }

        //Creating a destructor function
        //The last function to run in the class
        function __destruct(){
            echo "Your class has ended";
        }
    }

    //Creating instances of the class
    // $physics= new Books("Ayo", 99); //Check more on this-------------
    // $physics->setTitle("Introduction to electrical physics");
    // $physics->setPrice(30);

    //Getting title and price to display on the browser
   
    
    // echo "The title is ".$physics->title;
    // echo "<br>The price is ".$physics->price."<br>";


    // //Chemistry
    // $chemistry = new Books("Tola", 34);
    // // $chemistry->setTitle("Random Chemisty by bill gate");
    // // $chemistry->setPrice(400);
    // $chemistry->getTitle();
    // $chemistry->getPrice();


    //Inheritance(Child class)
    class Novels extends Books{
        public $publisher;
        public $newPrice;

        public function setPublisher($newPublisher){
            $this->publisher = $newPublisher;
        }

        public function getPublisher(){
            echo "The name of the publisher is ".$this->publisher. "<br>";
        }

        public function getTitle(){
            echo "<b>This is the child class(overriding) title:</b> ".$this->title . "<br>";
            $this->newPrice = $this->price;
         }
    }

    //Testing for inheritance
    $flower = new Novels("Purple Hibiscus", 99); //Instantiation of the class
    $flower->getTitle();
    //$flower->getPrice();
    $flower->setPublisher("Shakespear");
    $flower->getPublisher();
    //The getTitle function in the child class overrides that of the parent class
    echo $flower->newPrice."<br/>";
?>