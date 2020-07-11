<?php 
    include_once "db/queries.php";

    if ( isset($_POST["login-submit"]) ) {

        $user = $_POST["user"];
        $password = $_POST["password"];

        if (empty($user) || empty($password)) {
            header("location: ../platform/login.php?error=EmptyFields");
            exit();
        }

        $result = QueryUserLogin( $user );
        if($result->num_rows < 1) {
            header("location: ../platform/login.php?error=NoFoundUser");
            exit();
        }
        if($row = $result->fetch_assoc()){
            $pwdCheck = password_verify($password, $row['password']);

            if($pwdCheck == false){
                header("location: ../platform/login.php?error=WrongPwd");
                exit();
            }
            session_start();
            $_SESSION['userId'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header("location: ../platform/login.php?login=Success");
            exit();
        }

    } else {
        header("location: ../platform/login.php");
        exit();
    }
?>