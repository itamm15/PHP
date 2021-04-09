<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'sklep_test');
    error_reporting(0);

    $rollno = $_GET['rn'];
    $selected = "DELETE FROM usertable WHERE email LIKE '$rollno'";

    $data = mysqli_query($con, $selected);

    if($data){
        //echo "<font color='green'>Usunięto rekord!";
        header('Location: home.php');
    }else{
        "<script type='text/javascript'>alert('Nie udało się usunąć danego rekordu!');</script>"
        //echo "<font color='red'>Nie udało się usunąć danego rekordu";
    }
?>