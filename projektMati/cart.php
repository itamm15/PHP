<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'sklep_test');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk</title>
</head>
<body>
    <!--NAVBAR-->
    <div class="container-fluid bg-secondary d-flex justify-content-center align-items-center" style="height: 50px">
        <div class="container d-flex aligin-items-center">
            <a href="home.php" style="color: white;">Strona główna</a>
        </div>
    </div>
    <div class="container" style="margin: 20px;">
        <h2>Twoje produkty, <?php
                $email = $_SESSION['useremail'];
                $select = "SELECT *
                           FROM usertable
                           WHERE email LIKE '$email'";
                $result = mysqli_query($con, $select);
                $tmp = mysqli_fetch_assoc($result);

                echo <<< NAME
                $tmp[name]
                NAME;
            ?>
        </h2>
        <div class="container-fluid">
            <table>
                <tr>
                    <td style="border: 1px solid black;">Nazwa produktu</td>
                    <td style="border: 1px solid black;">Cena</td>
                    <td style="border: 1px solid black;">Ilość</td>
                </tr>
                <?php
                $select = "SELECT *
                           FROM orders
                           WHERE email LIKE '$email'";

                $result = mysqli_query($con, $select);
                while($tmp = mysqli_fetch_assoc($result)){
                    echo <<< orders
                    <tr>
                    <td style='border: 1px solid black;'>$tmp[Nazwa_produktu]</td>
                    <td style='border: 1px solid black;'>$tmp[Cena]</td>
                    <td style='border: 1px solid black;'>$tmp[quantity]</td>
                    </tr>
                    orders;
                }
                $sum = "SELECT Sum(Cena)
                        FROM orders";
                $result = mysqli_query($con, $sum);
                $row = mysqli_fetch_array($result);
                echo <<< SUM
                <tr>
                <td>Łączna suma $row[0] </td>
                </tr>
                SUM;
                
                ?>
            </table>
        </div>
    </div>
</body>
</html>