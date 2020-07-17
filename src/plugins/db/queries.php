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

    function QueryAlbumsCollection( $collectionId ) {
        $connection = OpenConnection();
        $query = $connection->prepare(
            "SELECT alb.id,alb.title,alb.label,alb.artist,fo.name as format,gen.name as genre,cou.name as country,alb.released,sta.value as status
            FROM 
                Collection col join Album alb on col.id=alb.collection 
                    join Country cou on alb.country=cou.id 
                    join Format fo on fo.id=alb.formar 
                    join Status sta on sta.id=alb.diskStatus 
                    join Genre gen on gen.id=alb.genre 
            WHERE col.id=?;"
        );
        $query->bind_param('i', $collectionId);
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function QueryAlbum( $albumId ) {
        $connection = OpenConnection();
        $query = $connection->prepare(
            "SELECT 
                alb.id,alb.title,alb.label,alb.artist, 
                fo.id as formatId,fo.name as format, 
                gen.id as genreId,gen.name as genre,
                cou.id as countryId, cou.name as country,
                alb.released,
                sta.id as statusId, sta.value as status,
                col.id as collectionId, col.name as collection
            FROM 
                Collection col join Album alb on col.id=alb.collection
                    join Country cou on alb.country=cou.id 
                    join Format fo on fo.id=alb.formar 
                    join Status sta on sta.id=alb.diskStatus 
                    join Genre gen on gen.id=alb.genre 
            WHERE alb.id=?;"
        );
        $query->bind_param('i', $albumId);
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function QueryAlbumCountry() {
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT id, name as country FROM Country;");
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function QueryAlbumFormat() {
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT id, name as format FROM Format;");
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function QueryAlbumStatus() {
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT id, value as status FROM Status;");
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function QueryAlbumGenre() {
        $connection = OpenConnection();
        $query = $connection->prepare("SELECT id, name as genre FROM Genre;");
        $query->execute();
        $result = $query->get_result();
        $connection -> close();
        return $result;
    }

    function MutationUpdateAlbum( $albumId, $title, $label, $artist, $format, $genre, $country, $released, $status ){
        $connection = OpenConnection();
        $query = $connection->prepare(
            "UPDATE Album SET title=?,label=?,artist=?,formar=?,genre=?,country=?,released=?,diskStatus=?
            WHERE id=?;"
        );
        $query->bind_param('sssiiiiii', $title, $label, $artist, $format, $genre, $country, $released, $status, $albumId);
        $query->execute();
        $result = $query->affected_rows;
        $connection -> close();
        return $result;
    }

    function MutationCreateAlbum( $collectionId, $title, $label, $artist, $format, $genre, $country, $released, $status ){
        $connection = OpenConnection();
        $query = $connection->prepare(
            "INSERT INTO Album(title,label,artist,formar,genre,country,released,diskStatus,collection) VALUES(?,?,?,?,?,?,?,?,?);"
        );
        $query->bind_param('sssiiiiii', $title, $label, $artist, $format, $genre, $country, $released, $status, $collectionId);
        $query->execute();
        $result = $query->affected_rows;
        $connection -> close();
        return $result;
    }

    function MutationDeleteAlbum( $albumId ){
        $connection = OpenConnection();
        $query = $connection->prepare("DELETE FROM Album WHERE id=?;");
        $query->bind_param('i', $albumId);
        $query->execute();
        $result = $query->affected_rows;
        $connection -> close();
        return $result;
    }
?>