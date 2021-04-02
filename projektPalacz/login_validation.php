<?php
    session_start();

    $con = mysqli_connect('localhost', 'root', '', 'palacz_projekt');

    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    
    $select = "select * from users where email LIKE '$email' && password LIKE '$password'";

    $result = mysqli_query($con, $select);
    if(!$result){
        echo $conn->error;
    }
    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: home.php');
    }else{
        //header(' Location: index.php');
    }
?>

