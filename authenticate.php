<?php
    $credential = file_get_contents("credentials.config.txt");
    $temp = explode(",", $credential);
    $accountOne = explode(" ", $temp[0]);
    $accountTwo = explode(" ", $temp[1]);
    if(empty($_POST["email"]) || empty($_POST["password"])){  
        header("Location:login.php?wrong=Invalid Login Credentials");
    }
    if(strcmp($_POST['email'], $accountOne[0]) == 0){
        if(strcmp($_POST['password'], $accountOne[1]) == 0){
            session_start();
            session_regenerate_id(true);
            setcookie("login", session_id(), time()+ (600));
            header("Location:index.php");   
        }else{
            header("Location:login.php?wrong=Invalid Login Credentials");
        }
    }else if(strcmp($_POST['email'], $accountTwo[1]) == 0){
        if(strcmp($_POST['password'], $accountTwo[2]) == 0){
            session_start();
            session_regenerate_id(true);
            setcookie("login", session_id(), time()+ (600));
            header("Location:index.php"); 
        }else{
            header("Location:login.php?wrong=Invalid Login Credentials");
        }
    }else{
        header("Location:login.php?wrong=Invalid Login Credentials");
    }
?>