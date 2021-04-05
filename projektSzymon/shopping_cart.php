<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'szymon_projekt');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk</title>
</head>
<body>
    <?php
        $product = $_POST['hidden_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['hidden_price'];
        if(isset($_POST['add_to_cart_3'])){
            $submit = $_POST['add_to_cart_3'];
            echo '3';
        }elseif(isset($_POST['add_to_cart_2'])){
            $submit = $_POST['add_to_cart_2'];
            echo '2';
        }elseif(isset($_POST['add_to_cart_1'])){
            $submit = $_POST['add_to_cart_1'];
            echo '1';
        }
        echo $submit;
        echo $quantity;
    ?>
</body>
</html>