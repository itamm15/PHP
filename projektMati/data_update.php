<?php
    session_start();
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
    <title>Zaktualizuj dane!</title>
    <style>
        body{
    background: linear-gradient(rgba(0,0,50,0.5),rgb(0,0,50,0.5));
    }
    .login-box{
        margin-top: 125px;
    }
    .login-left{
        background: rgba(211,211,211,0.5);
    }
    .form-control{
        background-color: transparent !important;
        display: flex;
        justify-content: center;
    }
    </style>
</head>
<body>
<div class="container-fluid bg-secondary d-flex justify-content-center align-items-center" style="height: 50px">
        <div class="container d-flex aligin-items-center">
            <a href="home.php" style="color: white;">Strona główna</a>
        </div>
    </div>
<div class="container d-flex justify-content-center">
    <div class="login-box">
        <div class="row">
            <div class="login-left" style="padding: 40px">
            <h1 style="text-align: center;">Zaktualizuj dane</h1>
            <form action="" method="POST">
            <div class="container-fluid d-flex">
                <div class="container">
                <div class="form-group">
                        <label>Nazwisko </label>
                        <input type="text" name="surname" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Kod pocztowy </label>
                        <input type="text" name="post_code" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Wojewodztwo </label>
                        <input type="text" name="voivo" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Miasto </label>
                        <input type="text" name="city" class="form-control" required> 
                    </div>
                </div>
                <div class="container">
                <div class="form-group">
                        <label>Ulica </label>
                        <input type="text" name="street" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Numer domu </label>
                        <input type="text" name="home_number" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Numer telefonu </label>
                        <input type="text" name="phone_number" class="form-control" required> 
                    </div>
                    <input type="submit" class="btn btn-primary" name="update" value="Zakutalizuj dane" style="margin-top: 32px;">
                </div>  
            </div>
                </form>
            </div>
         </div>
    </div>
</div>
</body>
</html>


<?php
    $con = mysqli_connect('localhost', 'root', '', 'sklep_test');

        $current_email =  $_SESSION['useremail'];
        if(isset($_POST['update'])){


        $query = "UPDATE `usertable` SET surname='$_POST[surname]',
                                        post_code='$_POST[post_code]', 
                                        voivodeship='$_POST[voivo]', 
                                        city='$_POST[city]', street='$_POST[street]', 
                                        home_number='$_POST[home_number]', 
                                        phone_number='$_POST[phone_number]' 
                    WHERE email LIKE '$current_email'";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            header('Location: uraccount.php');
        }
    }
?>
    