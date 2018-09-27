<?php
    include("includes/connection.inc.php");    
    include("includes/posts.inc.php");
    include("includes/viewPost.inc.php");    
?>
<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <h1>Mini Calculator </h1>
        <form action="processing/process.php" method="POST">
            <input type="text" name="num1" placeholder="First Number"/><br/><br/>
            <input type="text" name="num2" placeholder="Second Number"/><br/><br/>

            <select name="operator">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>                                
            <br/><br/>
            <input type="submit" value="calculate" name="submit"/>
        </form>

        <?php
            $posts = new ViewPost();

            $posts->displayPosts();
        ?>
            
    </body>
</html>