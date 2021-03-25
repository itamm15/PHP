<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'sklep_test');

    $name = $_POST['user'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $pass = md5($pass);

    $selected = "select * from usertable where name LIKE '$name' && password LIKE '$pass' && email LIKE '$email'";

    $result = mysqli_query($conn, $selected);
    if(!$result){
        echo $conn->error;
    }
    $num = mysqli_num_rows($result);
    if($num == 1){
        $_SESSION['username'] = $name;
        $_SESSION['useremail'] = $email;
        $_SESSION['userpassword'] = $pass;
        header('Location: home.php');
    }else{
        if($pass != $selected['pass']){
            header('Location: login.php?error=password');   
        }else{
            header('Location: login.php?error=email');
        }
    }
?>