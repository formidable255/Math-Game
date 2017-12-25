<?php
    if(!isset($_COOKIE["login"])){
        header("Location:login.php");
        echo "123";
    }
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Math Game</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet/style.css?version=1">
    </head>
    <body>
        <div class="container">
            <form action="math.php" method="post">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2>Math Game</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <?php 
                            $_SESSION['first'] = rand(1,20);
                            $_SESSION['second'] = rand(1,20);
                            $myOperator = rand(0,1);
                            if($myOperator % 2 == 1){
                                $_SESSION['operator'] = "+";
                            }else{
                                $_SESSION['operator'] = "-";
                            }
                            echo "<h4>".$_SESSION['first']. " " .$_SESSION['operator'] ." " .$_SESSION['second']."</h4>";
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <input type="text" name="answer" placeholder="Enter Answer" id="answer">
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <input type="submit" class="btn btn-default" name="submit" value="Submit">
                    </div>
                </div>
                <hr />
            </form>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <?php
                                echo "<p class=\"error\">$_GET[error]<p>";
                                echo "<p class=\"error\">$_GET[wrong]<p>";
                                echo "<p class=\"right\">$_GET[right]<p>";
                            ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <!--make starting 0/0, is empty-->
                        <?php
                            if($_SESSION['score'] == null && $_SESSION['games'] == null){
                                $_SESSION['score'] = 0;
                                $_SESSION['games'] = 0;
                                $_SESSION['slash'] = "/";
                                
                            }
                            echo "Score: ".$_SESSION['score'] ." " .$_SESSION['slash'] ." ".$_SESSION['games'];
                        ?>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <br />
                    <a href="logout.php" class="btn btn-default">Logout</a>
                </div>
            </div> 
        </div>
    </body>
</html>
