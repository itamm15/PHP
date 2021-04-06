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
    .container-contact{
        width: 100%;
        height: 500px;
        background-color: #343a40;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
    .kontakt{
        width: 100%;
        height: 400px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: flex-start;
    }
    .mapa{
        color: white;
        width: 100%;
        height: 400px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        margin-left: 50px;
    }
    .kontakt a{
        color: white;
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
            <a href="#contact">Kontakt</a>
            <?php
                if(isset($_SESSION['email'])){
                    echo "
                    <a href='logout.php'>Wyloguj się</a>
                    ";
                }else{
                    echo <<<LOGIN
                    <a href='log_reg.php'>Zaloguj się</a>
                    LOGIN;
                }
            ?>
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
        <form method="POST" action="home.php">
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
            <th><input type="number" name="quantity" placeholder="0"></th>
            </tr>
            <input type="hidden" name="hidden_name">
            <input type="hidden" name="hidden_price">
            <tr>
            <th><input type="submit" name="add_to_cart_1"></th>
            </tr>
        </table>
        <?php
                if(isset($_POST['add_to_cart_1'])){
                    $nazwa = 'Intel Core 5';
                    $ilosc = $_POST['quantity'];
                    $price = 1000;
                    //echo $nazwa."<br>".$ilosc."<br>".$price;
                    $select = "INSERT INTO `zamowienia`(`nazwa`, `ilosc`, `cena`) 
                               VALUES ('$nazwa','$ilosc','$price')";
                    $result = mysqli_query($con, $select);

                }
            ?>
        </form>
        </div>
        <div class="container-articles-second">
        <form method="POST" action="home.php">
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
            <th><input type="number" name="quantity" placeholder="0"></th>
            </tr>
            <input type="hidden" name="hidden_name">
            <input type="hidden" name="hidden_price">
            <tr>
            <th><input type="submit" name="add_to_cart_2"></th>
            </tr>
            </table>
            <?php
                if(isset($_POST['add_to_cart_2'])){
                    $nazwa = 'Dysk SSD';
                    $ilosc = $_POST['quantity'];
                    $price = 450;
                    //echo $nazwa."<br>".$ilosc."<br>".$price;
                    $select = "INSERT INTO `zamowienia`(`nazwa`, `ilosc`, `cena`) 
                               VALUES ('$nazwa','$ilosc','$price')";
                    $result = mysqli_query($con, $select);

                }
            ?>
            </form>
        </div>
        <div class="container-articles-third">
        <form method="POST" action="home.php">
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
            <th><input type="number" name="quantity" placeholder="0"></th>
            </tr>
            <input type="hidden" name="hidden_name">
            <input type="hidden" name="hidden_price">
            <tr>
            <th><input type="submit" name="add_to_cart_3"></th>
            </tr>
            </table>
            <?php
                if(isset($_POST['add_to_cart_3'])){
                    $nazwa = 'Płyta główna MSI';
                    $ilosc = $_POST['quantity'];
                    $price = 550;
                    //echo $nazwa."<br>".$ilosc."<br>".$price;
                    $select = "INSERT INTO `zamowienia`(`nazwa`, `ilosc`, `cena`) 
                               VALUES ('$nazwa','$ilosc','$price')";
                    $result = mysqli_query($con, $select);

                }
            ?>
            </form>
        </div>
    </div>

<!--Kontakt-->
<h1 style="text-align: center; background-color:  #343a40;color: white;font-size: 22px;">Kontakt oraz ulokowanie</h1>
<div class="container-contact" id="contact">
    <div class="mapa">
        <p>Nasza lokalizacja</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19530.367488195963!2d16.69078916906385!3d52.27432914665074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47044bf7d3481a4b%3A0x455c4f3a4ac5951e!2s62-060%20St%C4%99szew!5e0!3m2!1spl!2spl!4v1617717598870!5m2!1spl!2spl" width="600" height="380" style="border:0; margin-top: 50px;"allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="kontakt">
        <p><a href="tel:123-456-789">Numer telefonu 123-456-789</a></p>
        <p><a href="mailto:wojcik.szymon@gmail.com">Adres email wojcik.szymon@gmail.com</a> </p>
    </div>
</div>
</body>
</html>