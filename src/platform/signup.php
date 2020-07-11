<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign Up</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

        <!-- import css styles -->
        <link rel="stylesheet" href="../styles/login.css"/>
    </head>
    <body>
        <div class="login-form">
            <form id="sign-up-form" action="../plugins/user-register.php" method="POST">

                <div class="avatar">
                    <img src="../assets/img/logo.svg"/>
                </div>
                <h2 class="text-center">Registry Form</h2>   
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>        
                <div class="form-group">
                    <button type="submit" name="signup-submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                </div>
                <?php 
                    if(isset($_GET['error'])) {
                        if($_GET['error'] == 'EmptyFields'){
                            echo "<p style='color: red;'>Empty Fields: Fill in all fields!</p>";
                        } else if($_GET['error'] == 'InvalidEmail') {
                            echo "<p style='color: red;'>Invalid Email: Fill email with the correct format</p>";
                        } else if($_GET['error'] == 'InvalidUsername') {
                            echo "<p style='color: red;'>Invalid Username: Fill username without special characters</p>";
                        } else if($_GET['error'] == 'UserTaken') {
                            echo "<p style='color: red;'>User Taken: The user is registered</p>";
                        }
                    } else if(isset($_GET['signup']) == 'Success'){
                        header('location: login.php');
                        exit();
                    }
                ?>
            </form>
        </div>
    </body>
</html>