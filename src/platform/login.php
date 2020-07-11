<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once "../template/head.php"; ?>
    <body class="body">
        <?php
            if( isset($_SESSION['userId']) ) {
                header('location: collect.php');
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
                        header('location: collect.php');
                        exit();
                    }
                ?>
            </form>
            <p class="text-center small">Don't have an account? <a href="signup.php">Sign up here!</a></p>
        </div>
    </body>
    <?php include "../template/scripts.php"; ?>
</html>
