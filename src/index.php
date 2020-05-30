<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
        crossorigin="anonymous"
    >
    <style>
        html body {
            height: 100%;
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
            margin: 8%;
        }
    </style>
    <title>Carts Registration</title>
</head>
<body>
    <?php if (isset($_POST['form_submitted'])): ?>
        <!-- Save information in a csv file -->
        <?php
            $handle = fopen("data/carts.csv", "a+");
            $photo = $_POST['photo'];
            $newCart = array(
                "assets/img/$photo",
                $_POST["brand"],
                $_POST["model"],
                $_POST["color"],
                $_POST["licensePlate"],
                $_POST["proprietorName"],
                $_POST["proprietorLastname"],
                $_POST["date"],
            );
            fputcsv($handle, $newCart);
            fclose($handle);
        ?>
        <div class="alert alert-success form-container" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p> <?php echo $_POST['proprietorName'] ?>, your cart <?php echo $_POST['brand'] ?> have been registered successfull</p>
            <hr>
            <h5>Go <a href="/index.php">back</a> to the form</h5>
        </div>
    <?php else: ?>
        <div class="form-container shadow p-3 mb-5 bg-white rounded" >
            <h1>Parking Carts Registration </h1>
            <form action="index.php" method="POST" >
                <!-- <div class="form-group">
                    <img src="https://www.equaphon.net/wp-content/plugins/ecommerce-product-catalog/img/no-default-thumbnail.png" class="rounded mx-auto d-block" alt="..."/>
                </div> -->
                <div class="form-group">
                    <label for="photoLabel">Photo</label>
                    <input type="file" class="form-control-file" name="photo">
                </div>
                <div class="form-group">
                <label for="brandLabel">Brand</label>
                <select class="form-control" name="brand">
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
                    <input type="number" class="form-control" class="form-control" name="model">
                </div>
                <div class="form-group">
                    <label for="colorLabel">Color</label>
                    <input type="color" class="form-control" name="color">
                </div>
                <div class="form-group">
                    <label for="licensePlate">License Plate</label>
                    <input type="text" class="form-control" name="licensePlate">
                </div>
                <div class="form-group">
                    <label for="proprietorNameLabel">Proprietor Name</label>
                    <input type="text" class="form-control" name="proprietorName">
                </div>
                <div class="form-group">
                    <label for="proprietorLastnameLabel">Proprietor Lastname</label>
                    <input type="text" class="form-control" name="proprietorLastname">
                </div>
                <div class="form-group">
                    <label for="dateLabel">Admission Date</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <input type="hidden" name="form_submitted" value="1" />
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <!-- List of registered carts -->
        <?php 
            $template = "
            <div class='form-container shadow p-3 mb-5 bg-white rounded'> 
                <h1 style='margin-bottom: 5%'>Registered Carts </h1>";
            $flag = true;        
            $controlRows = 0;
            $row = "<div class='card-deck' style='margin-bottom: 2%'>";   
            if(($handle = fopen("data/carts.csv", "r")) !== FALSE){
                while (($cart = fgetcsv($handle, 1000, ',')) !== FALSE) {
                    if( $flag ){ $flag = false; continue; }
                    if( $controlRows > 2) {
                        $template = "$template $row </div>";
                        $row = "<div class='card-deck' margin-bottom: 5%>";
                        $controlRows = 0;
                    }
                    $card = "
                    <div class='card'>
                        <img class='card-img-top' src='$cart[0]' alt='Card image cap'>
                        <div class='card-body'>
                            <h5 class='card-title'>$cart[1] model: $cart[2] plate: $cart[4]</h5>
                            <p class='card-text'> Owner: $cart[5] $cart[6] </p>
                            <p class='card-text'><small class='text-muted'>Date: $cart[7]</small></p>
                        </div>
                    </div>";
                  $row = "$row $card";
                  $controlRows++;
                }
                $template = "$template $row </div>";
                fclose($handle);
            }
            ini_set('auto_detect_line_endings',FALSE);
            $template = "$template </div>";
            echo $template
        ?>
    <?php endif; ?>
</body>
</html>
