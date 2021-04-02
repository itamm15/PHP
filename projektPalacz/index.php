<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and registration</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            display: flex;
            height: 750px;
            width: 100%;
            background-color: beige;
            align-items: center;
        }
        .form{
            display: flex;
            width: 100%;
            justify-content: center;
        }
        .form-group{
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
                <form action="login_validation.php" method="POST">
                    <h3 style="text-align: center;">Zaloguj się</h3>
                    <div class="form-group">
                        <label>Adres email</label> <br>
                        <input type="text" name="user_email" required> <br>
                    </div>
                    <div class="form-group">
                        <label>Hasło</label> <br>
                        <input type="password" name="user_password" required> <br>
                    </div>
                    <div class="form-group">
                        <button type="submit" style="align-items: flex-end;">Zaloguj się!</button>
                    </div>
                </form>
            <form action="registration.php" method="POST">
                <h3 style="text-align: center;">Zarejestruj się</h3>
                <div class="form-group">
                    <label>Adres email</label> <br>
                    <input type="text" name="user_email" required> <br>
                </div>
                <div class="form-group">
                    <label>Hasło</label> <br>
                    <input type="password" name="user_password" required> <br>
                </div>
                <div class="form-group">
                    <label>Imię</label> <br>
                    <input type="text" name="user_name" required> <br>
                </div>
                <div class="form-group">
                    <label>Nazwisko</label> <br>
                    <input type="text" name="user_surname" required> <br>
                </div>
                <div class="form-group">
                    <button type="submit">Zarejestruj się!</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>