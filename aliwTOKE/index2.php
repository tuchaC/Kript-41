<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login and password</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="register.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="ФИО" name="FIO" required>
                <i class='bx bx-user'></i>
            </div>

            <div class="input-box">
                <input type="tel" placeholder="Номер телефона" name="NUMBER" required pattern="[+]{1}[0-9]{11,14}" title="Номер телефона должен начинаться с + и содержать от 11 до 14 цифр.">
                <i class='bx bxs-phone'></i>
            </div>
            
            <div class="input-box">
                <input type="password" placeholder="Пароль" name="PASS" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Подтвердите пароль" name="REPEATPASS" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
                <button type="submit" class="btn" href="register.php" >Регистрации</button>
                <div class="registr-link">
                    <p>Есть аккаунт? <a href="index.php">Вход</a> </p>
                </div>
        </form>
    </div>
</body>
</html>