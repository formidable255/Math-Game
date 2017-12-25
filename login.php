<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet/style.css?version=1">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h3>Please login to play our math game</h3>
                </div>
            </div>
            <br />
            <form  action="authenticate.php" method="post">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
                        Email:
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <input type="text" name="email" placeholder="Email" >
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
                        Password: 
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <input type="text" name="password" placeholder="Password">
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-ls-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <input type="submit" class="btn btn-default" value="Login">
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-ls-12 col-md-12 col-sm-12 col-xs-12 text-center">
                       <?php 
                            echo "<p class=\"error\">$_GET[wrong]</p>";
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>