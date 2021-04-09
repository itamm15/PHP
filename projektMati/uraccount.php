<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje konto</title>
</head>
<body>

<div class="container-fluid bg-secondary d-flex justify-content-center align-items-center" style="height: 50px">
        <div class="container d-flex aligin-items-center">
            <a href="home.php" style="color: white;">Strona główna</a>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="container-fluid d-flex justify-content-center">
        <div class="container">
            <img src="pictures/user_icon.jpg" alt="zdjecie_uzytkownika">
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <h4><a href="data_update.php" style="color: black;">Zaktualizuj dane!</a></h4>
        </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <h1>Informacje na temat użytkownika</h1>
            </div>
            <div class="row">
            <table border="2" style="display: flex;text-align: center;padding: 20px;">
            <tr>
            <th>Adres email</th>
            <th>Hasło</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Kod pocztowy</th>
            <th>Województwo</th>
            <th>Miasto</th>
            <th>Ulica</th>
            <th>Numer domu</th>
            <th>Numer telefonu</th>
            <th>Usuń konto</th>
            </tr>
                <?php
                    $con = mysqli_connect('localhost', 'root', '', 'sklep_test');
                    $email = $_SESSION['useremail'];
                    $selected = "select * from usertable where email LIKE '$email'";

                    $result = mysqli_query($con, $selected);

                    while($sc = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                        <td>".$sc['email']."</td>
                        <td>********</td>
                        <td>".$sc['name']."</td>
                        <td>".$sc['surname']."</td>
                        <td>".$sc['post_code']."</td>
                        <td>".$sc['voivodeship']."</td>
                        <td>".$sc['city']."</td>
                        <td>".$sc['street']."</td>
                        <td>".$sc['home_number']."</td>
                        <td>".$sc['phone_number']."</td>
                        <td><a href= 'delete.php?rn=$sc[email]'> Usuń konto </a> </td>
                        </tr>
                        ";
                        //echo $sc['email'].' '.$sc['name'].' '.$sc['password'];
                    }
                ?>
            </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>