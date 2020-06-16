<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign In</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

        <!-- import css styles -->
        <link rel="stylesheet" href="../styles/login.css">
        <style>
            body {
                background: rgb(9,9,121);
                background: linear-gradient(90deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 5%, rgba(2,0,36,1) 20%, rgba(41,0,33,1) 80%, rgba(216,0,17,1) 95%, rgba(255,0,14,1) 100%);
            }
        </style>
    </head>
    <body class="body">
        <div class="login-form">
            <form id="sign-in-form" action="../plugins/user-login.php" method="POST">
                <div class="avatar">
                    <img src="https://img.icons8.com/ios-glyphs/90/000000/user--v1.png"/>
                </div>
                <h2 class="text-center">User Login</h2>   
                <div class="form-group">
                    <input type="test" class="form-control" name="user" placeholder="Email/Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>        
                <div class="form-group">
                    <button type="submit" name="login-submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>
            </form>
            <p class="text-center small">Don't have an account? <a href="signup.php">Sign up here!</a></p>
        </div>
    </body>
</html>