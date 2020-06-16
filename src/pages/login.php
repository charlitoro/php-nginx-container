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
    </head>
    <body class="body">
        <?php
            if( isset($_SESSION['userId']) ) {
                header('location: ../index.php');
                exit();
            }
        ?>
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
                <!-- <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div> -->
                <?php 
                    if(isset($_GET['error'])) {
                        if($_GET['error'] == 'EmptyFields'){
                            echo "<p style='color: red;'>Empty Fields: Fill in all fields!</p>";
                        } else if($_GET['error'] == 'NoFoundUser') {
                            echo "<p style='color: red;'>Not Found User!</p>";
                        } else if($_GET['error'] == 'WrongPwd') {
                            echo "<p style='color: red;'>Wrong Password!</p>";
                        }
                    } else if(isset($_GET['login']) == 'Success'){
                        header('location: ../index.php');
                        exit();
                    }
                ?>
            </form>
            <p class="text-center small">Don't have an account? <a href="signup.php">Sign up here!</a></p>
        </div>
    </body>
</html>