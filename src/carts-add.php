<?php
    include_once 'connection.php';

    $connection = OpenConnection();
    if(isset($_POST['name'])){
        // Sentencia preparada
        $query = $connection->prepare("INSERT INTO carts(photo, brand, model, color, plate, name, lastname, date) VALUES(?,?,?,?,?,?,?,?)");
        $query->bind_param('ssisssss', $photo, $brand, $model, $color, $plate, $name, $lastname, $date);
        // data
        $photo = $_POST['photo'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $plate = $_POST['plate'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $date = $_POST['date'];

        $result = $query->execute();
        $query->close();
        
        if (!$result) {
            die('Query Failed');
        }
        echo "Ok";
    }
    CloseConnection($connection);
?>