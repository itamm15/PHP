<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'pass'){
            $errorCom = 'Niepoprawne hasło!';
        }elseif($_GET['error'] == 'taken'){
            $errorCom = 'Użytkownik zajęty!';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie i rejestracja</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        font-size: 16px;
    }
    .container{
        width: 100%;
        height: 700px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: beige;
    }
    .container-form{
        margin: 20px;
    }
    button{
        padding: 2px;
        margin-top: 10px;
        margin-left: 28%;
    }
    .main-page{
        background-color: beige;
        width: 100%;
        height: 50px;
        float: left;
    }
    a{
        color: black;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="main-page">
        <button style="margin-right: 100px;"><a href="home.php">Strona główna</a></button>
    </div>
    <div class="container">
        <div class="container-form">
            <form action="login_validation.php" method="POST">
                <h1 style="text-align: center; font-size: 22px; padding-bottom: 30px;">Logowanie</h1>
                <label style="margin: 10px;">Email</label> <br>
                <input type="text" name="email" style="margin: 10px;"> <br>
                <label style="margin: 10px;">Hasło</label> <br>
                <input type="password" name="password" style="margin: 10px;"> <br>
                <div class="container-error" style="color: red;">
                    <?php
                        if(isset($errorCom) && $errorCom == 'Niepoprawne hasło!'){
                            echo $errorCom.'<br>';
                        }
                    ?>
                </div>
                <button type="submit">Logowanie</button>
            </form>
        </div>
        <div class="container-form">
            <form action="register_add.php" method="POST">
                <h3 style="text-align: center; font-size: 22px; padding-bottom: 30px;">Rejestracja</h3>
                <label style="margin: 10px;">Email</label> <br>
                <input type="text" name="email" style="margin: 10px;"> <br>
                <label style="margin: 10px;">Hasło</label> <br>
                <input type="password" name="password" style="margin: 10px;"> <br>
                <div class="container-error" style="color: red;">
                    <?php
                        if(isset($errorCom) && $errorCom == 'Użytkownik zajęty!'){
                            echo $errorCom.'<br>';
                        }
                    ?>
                </div>
                <button type="submit">Rejestracja</button>
            </form>
        </div>
    </div>
</body>
</html>