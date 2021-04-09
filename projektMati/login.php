<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'password'){
            $errorCom = 'Niepoprawne hasło!';
        }elseif($_GET['error'] == 'email'){
            $errorCom = 'Zły adres email!';
        }elseif($_GET['error'] == 'taken'){
            $errorCom = 'Ten email jest już zajęty!';
        }elseif($_GET['error'] == 'weakpassword'){
            $errorCom = 'Hasło musi posiadać wielką i małą literę, numer, znak specjalny a minimalna długość to 8 znaków!';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się lub zarejestruj!</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container p-2">
    <button id='backmain' type="button" class="btn btn-primary" onclick="window.location.href = 'home.php'; console.log('chuj');">Strona główna</button>

</div>
<div class="container">
    <div class="login-box">
        <div class="row">
        <div class="container">
        </div>
            <div class="col-md-6 login-left">
                <h2>Zaloguj się!</h2>
                <form action="validation.php" method="POST">
                    <div class="form-group">
                        <label>Email </label>
                        <input type="text" name="email" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Imię </label>
                        <input type="text" name="user" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Hasło</label>
                        <input type="password" name="password" class="form-control" required> 
                    </div>
                    <div class="container-fluid d-flex">
                        <div class="container">
                        <input type="submit" class="btn btn-primary" value="Zaloguj się!" required>
                        </div>
                        <div class="container">
                        <input type="submit" class="btn btn-primary" value="Zrestartuj hasło!" id='restart' required>

                        <script>
                            $(() => {
                                $('#restart').click(() => {
                                    window.open('restart.php', '_self');
                                })
                            })
                        </script>

                        </div>
                    </div>
                    <div class="container" style="color: red;">
                        <?php
                            if(isset($errorCom) && $errorCom == 'Niepoprawne hasło!'){
                                echo $errorCom;
                            }
                        ?>
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-left">
                <h2>Zarejestruj się!</h2>
                <form action="registration.php" method="POST">
                    <div class="form-group">
                        <label>Email </label>
                        <input type="text" name="email" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Imię </label>
                        <input type="text" name="user" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label>Hasło </label>
                        <input type="password" name="password" class="form-control" required> 
                    </div>
                    <button type="submit" class="btn btn-primary">Zarejestruj się!</button>
                    <div class="container-fluid" style="color: red">
                    <?php
                        if(isset($errorCom) && $errorCom == 'Zły adres email!'){
                            echo $errorCom;
                        }elseif(isset($errorCom) && $errorCom == 'Ten email jest już zajęty!'){
                            echo $errorCom;
                        }elseif(isset($errorCom) && $errorCom == 'Hasło musi posiadać wielką i małą literę, numer, znak specjalny a minimalna długość to 8 znaków!'){
                            echo $errorCom;
                        }
                ?>
                    </div>
                </form>
            </div>   
        </div>
    </div>
  </div>
</body>
</html>