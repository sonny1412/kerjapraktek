<?php
session_start();
require 'db.php';
if($_GET["act"] == "login") {
    $uname = addslashes($_POST["Username"]);
    $upass = addslashes(md5($_POST["Password"]));
    $sql = "select * from user where username = '".$uname."'";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result)) {
        $row = mysqli_fetch_object($result);
        if(trim($row->password) == $upass) {
            $_SESSION["logkaryawan"] = $uname;
            header("Location: index.php");
        }
        else {
            header("Location: login.php?msg=wrongpassword");
        }
    } else {
        header("Location: login.php?msg=notfound");
    }
}
else if($_GET["act"] == "logout") {
    unset($_SESSION["logkaryawan"]);
    header("Location: login.php");
}
?>