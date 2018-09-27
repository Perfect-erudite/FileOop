<?php
    class viewPost extends posts {
        public function displayPosts(){
            $posts = $this->getAllPosts();

            foreach($posts as $post){
                echo "<h1/>".$post['title']."</h1><br/>";
                echo $post['body']."<br/>";
                echo $post['created_at']."<br/>";                                                
            }
        }
    }
?>