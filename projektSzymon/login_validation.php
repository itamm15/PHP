<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'szymon_projekt');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * 
               FROM users WHERE 
               email LIKE '$email' &&
               password LIKE '$password'";
    
    $result = mysqli_query($con, $select);

    $num_rows = mysqli_num_rows($result);
    if($num_rows == 1){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: home.php');
    }else{
        header('Location: log_reg.php?error=pass');
    }
?>