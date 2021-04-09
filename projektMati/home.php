<?php
    session_start();
    /*if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }*/
    $con = mysqli_connect('localhost', 'root', '', 'sklep_test');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <style>
    html{
        scroll-behavior: smooth;
    }
        #container-carousel{
            width: 40%;
            height: 500px;
        }
        a{
            color: white;
        }
        a:hover{
            color: white;
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
    <!--https://plumbingsuppliesdirect.co.uk/-->
    <!--https://www.youtube.com/watch?v=6xdHq2YE0g8-->
    <!--HEADER-->
    <div class="container-fluid bg-primary d-flex align-items-center text-white">
        <!--LEFT-->
        <div class="d-flex justify-content-center" style="width: 50%;">
            <div class="p-2 ml-2"><a href="subpages/aboutus.html">O nas</a></div>
            <div class="p-2 ml-2"><a href="subpages/news.html">Nowości</a></div>
            <div class="p-2 ml-2"><a href="subpages/contact.html">Kontakt</a></div>
            <div class="p-2 ml-2"><a href="subpages/wishlist.html">Lista życzeń</a></div>
        </div>
        <!--RIGHT-->
        <div class="d-flex justify-content-center" style="width: 50%;">
            <div class="p-2 ml-2">osinski.sklep@wp.pl</div>
            <div class="p-2 ml-4">
                503168308
            </div>
            <?php
                if(!isset($_SESSION['useremail'])){
                    echo <<< LOGIN
                    <div class="p-2 ml-4" style="color: white;">
                    <a href="login.php" style="color: white;">Zaloguj się</a> 
                    </div>
                    LOGIN;
                }else{
                    echo <<< LOGOUT
                    <div class="p-2 ml-4" style="color: white;">
                    <a href="logout.php" style="color: white;">Wyloguj się</a> 
                    </div>
                    LOGOUT;
                }
            ?>
            
        </div>
    </div>

    <!--NAV-->
    <div class="container-fluid d-flex" style="height: 150px">
        <div class="container-fluid d-flex justify-content-center" style="width: 33.4%">
            <div class="p-2 ml-2"><img src="pictures/4.jpg" alt=""> </div>
        </div>
        <div class="container-fluid d-flex justify-content-center" style="width: 33.2%">
            <div class="p-2 ml-2">
            <!--Searcher-->
            <div id="container">
                <input id="inputID" type="text" style="width: 100%;">
            </div>

            <script>
            var dir = 1;
            const sentences = [
                'Czego szukasz?',
                'Wyszukaj podaną frazę!',
            ];
            let sentIndex = 0;
            nextStep = () =>{
                const input = document.getElementById("inputID");
                let val = input.getAttribute("placeholder") || "";
                val = sentences[sentIndex].substring(0,val.length+dir);
                if(val.length === sentences[sentIndex].length)dir=-1;
                if(val.length === 0){
                    dir = 1;
                    sentIndex = (sentIndex+1)%sentences.length;
                }
                input.setAttribute("placeholder", val);
            }

            window.setInterval(nextStep,200);
            </script>

            </div>
        </div>
        <div class="container-fluid d-flex justify-content-baseline" style="width: 33.4%">
            <div class="p-2">
            <div class="container d-flex justify-content-center">
            <img src="pictures/login.jpg" alt="login" style="width: 50px; height:50px;" id="login">

            <script>
            $(() => {
                $('#login').on({
                    mouseenter: () => {
                        $(event.currentTarget).css('width', '60px');
                        $(event.currentTarget).css('height', '60px');
                     },
                     mouseleave: () => {
                        $(event.currentTarget).css('width', '50');
                        $(event.currentTarget).css('height', '50px');
                     }
                })
                $('#login').click(() => {
                    window.open('uraccount.php', '_self');
                })
            })
            </script>

            </div>
             <br>
            <a href="uraccount.php" style="color: black;">Twoje konto</a>
            </div>
            <div class="p-2">
            <div class="container d-flex justify-content-center">
            <img src="pictures/shoppingcart.jpg" alt="cart" style="width: 50px; height:50px;" id='cart'>

            <script>
            $(() => {
                $('#cart').on({
                    mouseenter: () => {
                        $(event.currentTarget).css('width', '60px');
                        $(event.currentTarget).css('height', '60px');
                     },
                     mouseleave: () => {
                        $(event.currentTarget).css('width', '50px');
                        $(event.currentTarget).css('height', '50px');
                     }
                })
                $('#cart').click(() => {
                    window.open('cart.php', '_self');
                })
            })
            </script>

            </div>
            <br>
            <a href="cart.php" style="color: black;padding-left: 19px;">Koszyk</a>
            </div>
        </div>
    </div>

    <!--NAVBAR-->

    <div class="container-fluid bg-primary d-flex align-items-center text-white" style="height: 75px;">
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2">Narzędzia</div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2">Łazienka</div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2">Kuchania</div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2">Kanalizacja</div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2">Ogrzewanie</div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2"><a href="subpages/houseforsell.html">Domy na sprzedaż</a></div>
        </div>
    </div>
    <div class="container-fluid d-flex border-bottom align-items-centers" style="background-color:#F1F2F2">
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2">Wyprzedaże</div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2"><a href="#producenci" style="color: black;">Producenci</a></div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2 ml-2">Darmowa dostawa przy zakupie 250+</div>
        </div>
    </div>

    <!--Carusel-->
    <div class="container-fluid" style="background-color:#F1F2F2;">
    <div class="container-fluid d-flex justify-content-center p-5" id="container-carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="pictures/c1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="pictures/c2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="pictures/c3.jpg" alt="Third slide">
              </div>
            </div>
            <!--Buttons-->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Wcześniejsze</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Natępne</span>
            </a>
          </div>
    </div>
    </div>
    

    <!--Pictures-->
    <div class="container-fluid d-flex justify-content-center" id='producenci' style="margin: 160px 0px 170px 0px;">
            <h2>Producenci</h2>
    </div>
    <div class="container-fluid d-flex justify-content-center">
    <div class="p-2 ml-2 d-flex justify-content-center" style="width: 25%"><img src="pictures/5.jpg" alt=""></div>
    <div class="p-2 ml-2 d-flex justify-content-center" style="width: 25%"><img src="pictures/8.jpg" alt=""></div>
    <div class="p-2 ml-2 d-flex justify-content-center" style="width: 25%"><img src="pictures/7.jpg" alt=""></div>
    </div>
    <div class="container-fluid d-flex justify-content-center" style="margin-top: 20px;">
    <div class="p-2 ml-2 d-flex justify-content-center" style="width: 25%"><h3>BIMS PLUS</h3></div>
    <div class="p-2 ml-2 d-flex justify-content-center" style="width: 25%"><h3>TECE</h3></div>
    <div class="p-2 ml-2 d-flex justify-content-center" style="width: 25%"><h3>SANPOL</h3></div>
    </div>

    <!--ARTICLES-->
    <div class="container-fluid d-flex justify-content-center" style="margin-bottom: 50px;">
            <div class="container-fluid" style="width: 30%; text-align: center;">
            <form action="home.php" method="POST">
                <?php
                    $select = "SELECT *
                               FROM articles
                               WHERE id LIKE '1'";
                    $result = mysqli_query($con, $select);
                    $fetched = mysqli_fetch_assoc($result);
                    echo <<< NAME
                    $fetched[Nazwa_produktu]
                    NAME;
                ?>
                <img src="pictures/bojler.jpg" alt="" style="max-width: 400px;min-width:400px;max-height:400px;min-height: 400px;">
                <?php
                    echo <<< PRICE
                    $fetched[Cena] zł <br>
                    PRICE;
                ?>
                <input type="number" name="quantity" placeholder="0">
                <input type="submit" name="add_cart_1" value="Dodaj do kosza">
                <?php
                    if(isset($_POST['add_cart_1'])){
                        $id = "1";
                        $email = $_SESSION['useremail'];
                        $quantity = $_POST['quantity'];
                        $name = "Bojler";
                        $price = 1250;

                        $select = "INSERT INTO `orders`(`email`, `Nazwa_produktu`, `Cena`, `quantity`) 
                                   VALUES ('$email','$name',$price, '$quantity')";
                        $result = mysqli_query($con, $select);
                        
                        if($result){
                            echo <<< CORRECT
                            <script>
                            alert("Dodano do koszyka!");
                            </script>
                            CORRECT;
                        }else{
                            echo <<< INCORRECT
                            <script>
                            alert("Nie dodano do koszyka!");
                            </script>
                            INCORRECT;
                        }
                    }
                ?>
                </form>
            </div>
            <div class="container-fluid" style="width: 30%; text-align: center;">
            <form action="home.php" method="POST">
                <?php
                $select = "SELECT *
                           FROM articles
                           WHERE id LIKE '2'"; 
                $result = mysqli_query($con, $select);
                $fetched = mysqli_fetch_assoc($result);
                echo <<< NAME
                $fetched[Nazwa_produktu]
                NAME;
                ?>
                <img src="pictures/grzejnik.jpg" alt="" style="max-width: 400px;min-width:400px;max-height:400px;min-height: 400px;">
                <?php
                    echo <<< PRICE
                    $fetched[Cena] zł <br>
                    PRICE;
                ?>
                <input type="number" name="quantity" placeholder="0">
                <input type="submit" name="add_cart_2" value="Dodaj do kosza">
                <?php
                    if(isset($_POST['add_cart_2'])){
                        $id = "1";
                        $email = $_SESSION['useremail'];
                        $quantity = $_POST['quantity'];
                        $name = "Grzejnik elektryczny";
                        $price = 650;

                        $select = "INSERT INTO `orders`(`email`, `Nazwa_produktu`, `Cena`, `quantity`) 
                                   VALUES ('$email','$name',$price, '$quantity')";
                        $result = mysqli_query($con, $select);
                        
                        if($result){
                            echo <<< CORRECT
                            <script>
                            alert("Dodano do koszyka!");
                            </script>
                            CORRECT;
                        }else{
                            echo <<< INCORRECT
                            <script>
                            alert("Nie dodano do koszyka!");
                            </script>
                            INCORRECT;
                        }
                    }
                ?>
             </form>
            </div>
            <div class="container-fluid" style="width: 30%; text-align: center;">
            <form action="home.php" method="POST">
                <?php
                $select = "SELECT *
                           FROM articles
                           WHERE id LIKE '3'"; 
                $result = mysqli_query($con, $select);
                $fetched = mysqli_fetch_assoc($result);
                echo <<< NAME
                $fetched[Nazwa_produktu]
                NAME;
                ?>
                <img src="pictures/pompa_ciepla.jpg" alt="" style="max-width: 400px;min-width:400px;max-height:400px;min-height: 400px;">
                <?php
                    echo <<< PRICE
                    $fetched[Cena] zł <br>
                    PRICE;
                ?>
                <input type="number" name="quantity" placeholder="0">
                <input type="submit" name="add_cart_3" value="Dodaj do kosza">
                <?php
                    if(isset($_POST['add_cart_3'])){
                        $id = "1";
                        $email = $_SESSION['useremail'];
                        $quantity = $_POST['quantity'];
                        $name = "Pompa ciepła";
                        $price = 5500;

                        $select = "INSERT INTO `orders`(`email`, `Nazwa_produktu`, `Cena`, `quantity`) 
                                   VALUES ('$email','$name',$price, '$quantity')";
                        $result = mysqli_query($con, $select);
                        
                        if($result){
                            echo <<< CORRECT
                            <script>
                            alert("Dodano do koszyka!");
                            </script>
                            CORRECT;
                        }else{
                            echo <<< INCORRECT
                            <script>
                            alert("Nie dodano do koszyka!");
                            </script>
                            INCORRECT;
                        }
                    }
                ?>
                </form>
            </div>
    </div>
</body>
</html>