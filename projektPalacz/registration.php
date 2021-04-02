<?php
    session_start();

    $con = mysqli_connect('localhost', 'root', '', 'palacz_projekt');

    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $name = $_POST['user_name'];
    $surname = $_POST['user_surname'];

    $select = "select * from users 
               where email LIKE '$email'";
    
    $result = mysqli_query($con, $select);
    $num = mysqli_num_rows($result);

    if($num == 1){
        //error
    }else{
        $reg = "insert into users(email, password, name, surname) 
                values('$email', '$password', '$name', '$surname')";

        mysqli_query($con, $reg);

        echo 'Registration sucessful!';
        header('Location: home.php');

    }

?>