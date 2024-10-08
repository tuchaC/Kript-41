<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form login and password</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <script>
        function redirect() {
            window.location.href="index3.php";
        }
    </script>
<body>
    <div class="wrapper">
        <form action="">
            <h1>Вход</h1>
            <div class="input-box">
                <input type="text" placeholder="Логин" required>
                <i class='bx bx-user'></i>
            </div>
            
            <div class="input-box">
                <input type="password" placeholder="Пароль" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember">
                <label for=""><input type="checkbox">Запомнить меня </label>
                <a href="#">Забыли пароль?</a>
            
            </div>
                <button  type="submit" class="btn" onclick="redirect()" >Вход</button>
                
                <div class="registr-link">
                    <p>Нету аккаунта? <a href="index2.php">Регистрация</a> </p>
                </div>
        </form>
    </div>
</body>
</html>