<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: log_reg.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje konto</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        font-size: 18px;
    }
    .container{
        width: 100%;
        height: 50px;
        background-color: #343a40;
        display: flex;
        align-items: center;
    }
    a{
        color: white;
        margin-left: 60px;
        text-decoration: none;
    }
    .container-data{
        width: 80%;
        display: flex;
        justify-content: space-between;
    }
    </style>
</head>
<body>
<div class="container">
    <a href="home.php">Strona główna</a>
</div>
<div class="container-data">
        <h2><a href="update.php" style="color: black;">Moje dane!</a></h2>
        <table border="2" style="display: flex;text-align: center;">
            <th>email</th>
            <th>Usuń konto</th>
        </tr>
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'szymon_projekt');
            $email = $_SESSION['email'];

            $select = "SELECT *
                       FROM users
                       WHERE email LIKE '$email'";

            $result = mysqli_query($con, $select);

            while($act_con = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                <td>".$act_con['email']."</td>
                <td><a href='delete.php?rn=$act_con[email]' style='color: black; margin-left: 5px;'>Usuń</a></td>
                </tr>
                ";
            }
        ?>
        </table>
    
</div>
</body>
</html>