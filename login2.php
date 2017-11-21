<?php
    session_start();
    if(isset($_SESSION["login"])) {
            require 'connect.php';
        
            $sql = "select * from user";
            $result = mysqli_query($link, $sql);
            if(!$result) {
                die("SQL Error: ".$sql);
            }

            ?>
            <?php
        }
        else {
        } 
?>
<form action="manage.php?act=login" method="POST">
    <label class="username">Username : </label><br>
    <input type="text" name="Username" placeholder="Username"/><br/>
    <label class="username">Password : </label><br>
    <input type="password" name="Password" placeholder="Password"/><br/>
    <button type="submit" name="submit">Submit</button>
</form>
