<?php

$check_email = "abc@gmail.com";
$check_pass ="qwerty123";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if($email == $check_email && $pass == $check_pass){
        if(isset($_POST['remember'])){
            setcookie('email', $email, time()+60*60*10);
            setcookie('pass', $pass, time()+60*60*10);
        }
        session_start();
        $_SESSION['email'] = $email;
        header("location: welcome.php");
    }else{
        echo('Invalid Email And Password!!, Click here to <a href="login.php"> login </a>.');
    }
}else{
    header("location: login.php");
}

?>