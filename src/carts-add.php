<?php
    include 'connection.php';

    $connection = OpenConnection();
    if(isset($_POST['name'])){
        $photo = $_POST['photo'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $plate = $_POST['plate'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $date = $_POST['date'];
        $query = "INSERT into carts(photo, brand, model, color, plate, name, lastname, date) 
                VALUES ('$photo', '$brand', $model, '$color', '$plate', '$name', '$lastname', '$date')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query Failed');
        }

        echo "Task Added Successfully";
    }
    CloseConnection($connection);
?>