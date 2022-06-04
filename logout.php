<?php

session_start();
session_destroy();
if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];
    setcookie('email', $email, time()-1);
    setcookie('pass', $pass, time()-1);
}
echo "You Successfully Logged out! To Login in again <a href = 'login.php'>Click Here</a>"


?>