<?php 
    include_once "../db/queries.php";

    session_start();
    if( !isset($_SESSION['userId']) ) {
        header('location: ../platform/login.php');
        exit();
    }
    $result = QueryCollectionsList( $_SESSION['userId'] );
    $json= array();
    while($row = $result.fetch()) {
        $json[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
        );
    }
    CloseConnection();
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>