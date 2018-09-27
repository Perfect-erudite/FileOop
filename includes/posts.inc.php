<?php
    class posts extends Connection{
        protected function getAllPosts(){
            $sqlQuery = "SELECT * FROM posts";
            $result = $this->connect()->query($sqlQuery);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
                return $data;
            }
        }
    }
?>