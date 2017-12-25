<?php
    session_start();
    if(is_numeric($_POST["answer"])){
        if($_SESSION['first'] + $_SESSION['second'] == $_POST["answer"]){
            $_SESSION['score'] ++;
            $_SESSION['games']++;
            header("Location: index.php?right=Correct");
        } else if($_SESSION['first'] - $_SESSION['second'] == $_POST["answer"]){
            $_SESSION['score'] ++;
            $_SESSION['games']++;
            header("Location: index.php?right=Correct");
        } else {
            //urldecode($titulo)
            $_SESSION['games']++;
            if(strcmp($_SESSION['operator'], "+") == 0){
                $_SESSION['answer'] = $_SESSION['first'] + $_SESSION['second'];
                header("Location: index.php?wrong=INCORRECT, the answer is: " .$_SESSION['answer']);
            }else {
                $_SESSION['answer'] = $_SESSION['first'] - $_SESSION['second'];
                header("Location: index.php?wrong=INCORRECT, the answer is: " .$_SESSION['answer']);
            }
        }
    }else{ 
        header("Location: index.php?error=Please enter a numeric value.");
    }
?>