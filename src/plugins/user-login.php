<?php 
    include_once "connection.php";

    if ( isset($_POST["login-submit"]) ) {

        $user = $_POST["user"];
        $password = $_POST["password"];
        if (empty($user) || empty($password)) {
            header("location: ../pages/login.php?error=emptyFields");
            exit();
        }
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT * FROM users WHERE  username=? OR email = ?;");
        $query->bind_param('ss', $user, $user);

        $query->execute();
        $result = $query->get_result();
        if($result->num_rows < 0) {
            header("location: ../pages/login.php?error=noFoundUser");
            exit();
        }
        if($row = $result->fetch_assoc()){
            $pwdCheck = password_verify($password, $row['password']);

            if($pwdCheck == false){
                header("location: ../pages/login.php?error=wrongPwd");
                exit();
            }
            session_start();
            $_SESSION['userId'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header("location: ../index.php");
            exit();
        }

    } else {
        header("location: ../pages/login.php");
        exit();
    }
?>