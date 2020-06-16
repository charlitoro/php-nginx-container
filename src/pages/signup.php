<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign Up</title>

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
    <body>
        <div class="login-form">
            <form id="sign-up-form" action="../plugins/user-register.php" method="POST">

                <div class="avatar">
                    <img src="https://img.icons8.com/ios-glyphs/90/000000/user--v1.png"/>
                </div>
                <h2 class="text-center">Registry Form</h2>   
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>        
                <div class="form-group">
                    <button type="submit" name="signup-submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                </div>
            
            </form>
        </div>
    </body>
    <!--  -->
    <script src="index.js"></script>
</html>