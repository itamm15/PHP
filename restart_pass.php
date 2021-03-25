<?php   
/*
        $conn = mysqli_connect('localhost', 'root', '', 'sklep_test');
        $email = $_POST['email'];
        //$password = $_GET['password'];
        if(mysqli_connect_errno()){
            echo "Failed to connect ".mysqli_connect_errno();
        }

        $select = mysqli_query($conn, "SELECT * FROM usertable WHERE email = '$email'");

        if(mysqli_num_rows($select) == 1){
            $code = rand(100,999);

            $message = "Twój kod aktywacyjny = http://localhost/registrationlogin/restart_pass.php?email=$email&code=$code";
            mail($email, "Kod aktywacyjny", $message);

            $select_update = mysqli_query($conn, "UPDATE password SET password ='$password' WHERE email LIKE '$email' ");

        }*/
?>