<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
        crossorigin="anonymous"
    >
    <style>
        html body {
            height: 100%;
            background: rgb(9,9,121);
            background: linear-gradient(90deg, rgba(9,9,121,1) 0%, rgba(9,9,121,1) 5%, rgba(2,0,36,1) 20%, rgba(41,0,33,1) 80%, rgba(216,0,17,1) 95%, rgba(255,0,14,1) 100%);
        }
        h1{
            text-align: center;
        }
        img{
            width: 40%;
            height: 40%;
        }
        .form-container {
            padding: 2%;
            margin: 5%;
        }
    </style>
    <title>Carts Registration</title>
</head>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="https://img.icons8.com/color/96/000000/valet-parking.png"/>
            Parking
        </a>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline mx-right my-2 my-lg-0" action="./plugins/user-logout.php" method="POST">
                        <button class="btn btn-outline-primary mx-right my-2 my-sm-0" type="submit">
                            <img src="https://img.icons8.com/android/48/000000/logout-rounded-left.png"/>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="form-container shadow p-3 mb-5 bg-white rounded" >
        <?php
            if( !isset($_SESSION['userId']) ) {
                header('location: ./pages/login.php');
                exit();
            }
        ?>
        <h1>Parking Carts Registration </h1>
        <form id="carts-form" >
            <div class="form-group">
                <label for="photoLabel">Photo</label>
                <input type="file" class="form-control-file" name="photo" id="photo">
            </div>
            <div class="form-group">
            <label for="brandLabel">Brand</label>
            <select class="form-control" name="brand" id="brand">
                <option>...</option>
                <option>Mazda</option>
                <option>Chevrolet</option>
                <option>Toyota</option>
                <option>BMW</option>
                <option>Suzuky</option>
                <option>Ferrari</option>
                <option>Mercedes Benz</option>
                <option>Jeep</option>
                <option>Other</option>
            </select>
            </div>
            <div class="form-group">
                <label for="modelLabel">Model</label>
                <input type="number" class="form-control" class="form-control" name="model" id="model">
            </div>
            <div class="form-group">
                <label for="colorLabel">Color</label>
                <input type="color" class="form-control" name="color" id="color">
            </div>
            <div class="form-group">
                <label for="licensePlate">License Plate</label>
                <input type="text" class="form-control" name="licensePlate" id="licensePlate">
            </div>
            <div class="form-group">
                <label for="proprietorNameLabel">Proprietor Name</label>
                <input type="text" class="form-control" name="proprietorName" id="proprietorName">
            </div>
            <div class="form-group">
                <label for="proprietorLastnameLabel">Proprietor Lastname</label>
                <input type="text" class="form-control" name="proprietorLastname" id="proprietorLastname">
            </div>
            <input type="hidden" name="form_submitted" value="1" />
            <button type="reset" class="btn btn-primary">Register</button>
        </form>
    </div>
    <div class="form-container shadow p-3 mb-5 bg-white rounded">
        <h1 style='margin-bottom: 5%'>Registered Carts</h1>
        <div id="carts-list" class='row row-cols-4'></div>
    </div>

    <!--  -->
    <script src="index.js"></script>
    </body>
</body>
</html>