<?php
    class Connection{
        private $username;
        private $password;
        private $database;
        private $servername;

        protected function connect(){
            $this->username = "root";
            $this->password = "";
            $this->database = "oop_file";
            $this->servername = "localhost";


            $con = new mysqli( $this->servername, $this->username, $this->password, $this->database);
            return $con;
        }
    }
?>