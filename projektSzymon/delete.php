<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'szymon_projekt');
    $rollno = $_GET['rn'];
    $selected = "DELETE FROM users WHERE email LIKE '$rollno'";

    $data = mysqli_query($con, $selected);

    if($data){
        header('Location: logout.php');
    }else{
        "<script type='text/javascript'>alert('Nie udało się usunąć danego rekordu!');</script>";
    }
?>