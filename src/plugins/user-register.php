<?php
    include_once "db/queries.php";

    if (isset($_POST["signup-submit"])) {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(empty($name) || empty($username) || empty($email) || empty($password)){
            header("location: ../platform/signup.php?error=EmptyFields&".$username."email=".$email);
            exit();
        } else if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            header("location: ../platform/signup.php?error=InvalidEmail&username=".$username);
            exit();
        } else if( !preg_match("/^[a-zA-Z0-9]*$/", $username) ) {
            header("location: ../platform/signup.php?error=InvalidUsername&email=".$email);
            exit();
        } else {
            $result = QueryValidateUserTaken( $username );
            if ( $result->num_rows > 0 ) {
                header("location: ../platform/signup.php?error=UserTaken&email=".$email);
                exit();
            } else {
                $result = MutationUserRegister( $name, $username, $email, $password );
                // TODO Validar el resultado de la query
                header("location: ../platform/signup.php?signup=Success");
            }
            // CloseConnection();
        }

    } else {
        header("location: ../platform/signup.php");
        exit();
    }
?>