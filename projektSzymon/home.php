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
    <title>Części do komputera</title>
    <style>
    html{
        scroll-behavior: smooth !important;
    }
    *{
        margin: 0;
        padding: 0;
        font-size: 18px;
    }
    .container{
        width: 100%;
        height: 75px;
        background-color: #343a40;
        display: flex;
        justify-content: center;
    }
    .container-menu{
        width: 50%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    a{
        color: grey;
        text-decoration: none;
        font-weight: bold;
    }
    a:hover{
        color: white;
        text-decoration: underline;
    }
    .container-picture{
        width: 100%;
        height: 700px;
        background-color: #343a40;
        display: flex;
        justify-content: center;
    }
    .container-picture-picture{
        width: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container-articles{
        width: 100%;
        height: 700px;
        background-color: #343a40;
        display: flex;
        justify-content: space-between;
    }
    .container-articles-first{
        width: 33%;
        display: flex;
        justify-content: center;
        color: white;
    }
    .container-articles-second{
        width: 33%;
        display: flex;
        justify-content: center;
        color: white;
    }
    .container-articles-third{
        width: 33%;
        display: flex;
        justify-content: center;
        color: white;
    }
    #img_to_change{
        max-width: 430px;
        max-height: 310px;
        min-width: 430px;
        min-height: 310px;
    }
    </style>
</head>
<body>
<!--MENU-->
    <div class="container">
        <div class="container-menu">
            <a href="home.php" style="color: white; text-decoration: underline;">Strona główna</a>
            <a href="#container-articles">Artykuły</a>
            <a href="myaccount.php">Moje konto</a>
            <a href="shopping_cart.php">Koszyk</a>
            <a href="">Kontakt</a>
            <a href="logout.php">Wyloguj się</a>
        </div>
    </div>
<!--PICTURE-->
    <div class="container-picture">
        <div class="container-picture-picture">
            <img style="width: 80%; height: 70%;" src="basic_computer_parts_monitor.jpg" alt="">
        </div>
    </div>
<!--ARTICLES-->
    <div id="container-articles"></div>
    <div class="container-articles">
        <div class="container-articles-first">
        <form method="POST" action="shopping_cart.php">
        <table>
            <tr>
            <th>Procesory intel</th>
            </tr>
            <?php
                $select = "SELECT *
                           FROM products
                           WHERE id LIKE '1'";
                $result = mysqli_query($con, $select);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                        <th>".$row['name']."</th>
                        </tr>
                        ";
                }
            ?>
            <tr>
            <th><img src="procesor.jpg" alt="" id="img_to_change"></th>
            </tr>
            <?php
                $select = "SELECT *
                           FROM products
                           WHERE id LIKE '1'";
                $result = mysqli_query($con, $select);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                        <th>".$row['price']."</th>
                        </tr>
                        ";
                }
            ?>
            <tr>
            <th><input type="text" name="quantity" value="1"></th>
            </tr>
            <input type="hidden" name="hidden_name" value="<?php echo $row['name'] ;?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row['price'] ;?>">
            <tr>
            <th><input type="submit" name="add_to_cart_1"></th>
            </tr>
        </table>
        </div>
        <div class="container-articles-second">
        <table>
            <tr>
            <th>Dysk SSD</th>
            </tr>
            <?php
                $select = "SELECT *
                           FROM products
                           WHERE id LIKE '2'";
                $result = mysqli_query($con, $select);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                        <th>".$row['name']."</th>
                        </tr>
                        ";
                }
            ?>
            <tr>
            <th><img src="dysk_ssd.jpg" alt="" id="img_to_change"></th>
            </tr>
            <?php
                $select = "SELECT *
                FROM products
                WHERE id LIKE '2'";
            $result = mysqli_query($con, $select);
            while($row = mysqli_fetch_array($result)){
                echo "
                    <tr>
                    <th>".$row['price']."</th>
                    </tr>
                    ";
            }
            ?>
            <tr>
            <th><input type="text" name="quantity" value="1"></th>
            </tr>
            <input type="hidden" name="hidden_name" value="<?php echo $row['name'] ;?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row['price'] ;?>">
            <tr>
            <th><input type="submit" name="add_to_cart_2"></th>
            </tr>
            </table>
        </div>
        <div class="container-articles-third">
        <table>
            <tr>
            <th>Płyta główna</th>
            </tr>
            <?php
                $select = "SELECT *
                           FROM products
                           WHERE id LIKE '3'";
                $result = mysqli_query($con, $select);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                        <th>".$row['name']."</th>
                        </tr>
                        ";
                }
            ?>
            <tr>
            <th><img src="motherboard.jpg" alt="" id="img_to_change"></th>
            </tr>
            <?php
                $select = "SELECT *
                           FROM products
                           WHERE id LIKE '3'";
                $result = mysqli_query($con, $select);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                        <th>".$row['price']."</th>
                        </tr>
                        ";
                }
            ?>
            <tr>
            <th><input type="text" name="quantity" value="1"></th>
            </tr>
            <input type="hidden" name="hidden_name">
            <input type="hidden" name="hidden_price" value="<?php echo $row['price'] ;?>">
            <tr>
            <th><input type="submit" name="add_to_cart_3"></th>
            </tr>
            </table>
            </form>
        </div>
    </div>
</body>
</html>