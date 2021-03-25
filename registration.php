<?php
    session_start();
    //header('Location: login.php');
    $conn = mysqli_connect('localhost', 'root', '', 'sklep_test');

    $name = $_POST['user'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location: login.php?error=email');
    }else{
        $upperCase = preg_match('@[A-Z]@', $pass);
        $lowerCase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);
        $specialChars = preg_match('@[^\w]@', $pass);

        if(!$upperCase || !$lowerCase || !$number || !$specialChars){
            header('Location: login.php?error=weakpassword');
        }else{
            
        $selected = "select * from usertable where email LIKE '$email'";
        $result = mysqli_query($conn, $selected);
    
        $num = mysqli_num_rows($result);
        if($num == 1){
            header('Location: login.php?error=taken');
        }else{
            $pass = md5($pass);
            $reg = "insert into usertable(email ,name, password) values ('$email','$name', '$pass')";
            mysqli_query($conn, $reg);
            //header('Location: nazwa_strony');
            echo 'Registration sucessful!';
            header('Refresh: 3; URL=http://localhost/registrationlogin/home.php');
        }   
        }
    }
?>