<?php
    include_once "connection.php";

    if (isset($_POST["signup-submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(empty($username) || empty($email) || empty($password)){
            header("location: ../pages/signup.php?error=EmptyFields&".$username."email=".$email);
            exit();
        } else if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            header("location: ../pages/signup.php?error=InvalidEmail&username=".$username);
            exit();
        } else if( !preg_match("/^[a-zA-Z0-9]*$/", $username) ) {
            header("location: ../pages/signup.php?error=InvalidUsername&email=".$email);
            exit();
        } else {
            $connection = OpenConnection();
            $query = $connection->prepare("SELECT username, email FROM users WHERE username = ?");
            $query->bind_param('s', $username);
            $query->execute();
            $result = $query->get_result();

            if ( $result->num_rows > 0 ) {
                header("location: ../pages/signup.php?error=UserTaken&email=".$email);
                exit();
            } else {
                $query = $connection->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
                $query->bind_param('sss', $username, $email, $hashedPwd);
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                $query->execute();
                header("location: ../pages/signup.php?signup=Success");
            }
            $query->close();
            CloseConnection($connection);
        }

    } else {
        header("location: ../pages/signup.php");
        exit();
    }
?>