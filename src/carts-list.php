<?php 
    include 'connection.php';

    $query = "SELECT * FROM `carts`";
    $connection = OpenConnection();
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed'. mysqli_error($connection));
    }
    $json= array();
    while($row = mysqli_fetch_array($result)){
        // echo '<script>console.log('. $row .') </script>';
        $json[] = array(
            'photo' => $row['photo'],
            'brand' => $row['brand'],
            'model' => $row['model'],
            'color' => $row['color'],
            'plate' => $row['plate'],
            'name' => $row['name'],
            'lastname' => $row['lastname'],
            'date' => $row['date']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
    CloseConnection($connection);
?>