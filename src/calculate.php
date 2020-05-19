
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
    <title>Calculate</title>
</head>
<body>
    <div class='h-100 row'>
        <div class="col-sm-12 my-auto">
            <div class="card card-block w-25 mx-auto align-items-center">
                <img src="https://image.flaticon.com/icons/svg/2921/2921782.svg" style="height: 50%; width: 50%;" class="card-img-top" alt="...">
                <div class="card-body">
                    <?php
                        $number = $_POST["number"];
                        if( is_numeric($number) ){
                            $table = "<label for='tableNumber'>Table of $number</label>";

                            for($i = 1; $i <= 12; $i++){
                                $mul = $number*$i;
                                $table = "
                                    $table
                                    <tr>
                                        <td>$number</td>
                                        <td>X</td>
                                        <td>$i</td>
                                        <td>=</td>
                                        <td>$mul</td>
                                    </tr>
                                ";
                            }

                            echo "
                                <table class='table'>
                                <tbody>
                                    $table
                                </tbody>
                                </table>
                            ";
                        } else {
                            echo '<script> alert("Error: You must enter a numerical value") </script>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>