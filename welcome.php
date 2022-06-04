<?php
session_start();

if(!empty($_SESSION['email'])){
    echo "Welcome ". $_SESSION['email'];
    echo"<a href='logout.php'>Log Out</a>";
}else{
    header("location: login.php");
}

?>