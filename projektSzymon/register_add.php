<?php
    $con = mysqli_connect('localhost', 'root', '', 'szymon_projekt');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * 
               FROM users WHERE 
               email LIKE '$email'";
               
    $result = mysqli_query($con, $select);
    $num_rows = mysqli_num_rows($result);

    if($num_rows == 1){
        header('Location: log_reg.php?error=taken');
    }else{
        $select_true = "INSERT INTO users(email, password)
                        values('$email', '$password')";
        mysqli_query($con, $select_true);

        header('Location: home.php');
    }

?>