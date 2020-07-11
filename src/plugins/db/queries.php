<?php
    include_once 'connection.php';

    function QueryValidateUserTaken( $username ) {
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT username, email FROM `User` WHERE username = ?");
        $query->bind_param('s', $username);
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function MutationUserRegister( $name, $username, $email, $password ) {
        $connection = OpenConnection();
        $query = $connection->prepare("INSERT INTO `User` (name, username, email, password) VALUES (?,?,?,?)");
        $query->bind_param('ssss', $name, $username, $email, $hashedPwd);
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function QueryUserLogin( $user ) {
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT * FROM `User` WHERE  username=? OR email = ?;");
        $query->bind_param('ss', $user, $user);
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function QueryCollectionsLists( $userId ) {
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT c.id,c.name,c.description from `User` u join `Collection` c on u.id=c.`user` where u.id=?;");
        $query->bind_param('i', $userId);
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function QueryAlbumsList( $userId ) {
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT l.id,l.name from `User` u join `List` l on u.id=l.`user` where u.id=?;");
        $query->bind_param('i', $userId);
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }
?>