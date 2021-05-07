<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name ="viewport" content="width = device-width, initial-scale=1.0">
    <meta http-euiv ="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href ="css/style.css">
    <link rel ="stylesheet" href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <?php require "Z:/home/localhost/www/blocks/header.php"?>
    <div class="container mt-4">
        <h1>Форма авторизации</h1>
        <form action = "Z:/home/localhost/www/checks/check_auth.php" method= "post">
            <input type ="text" class="form-control" name ="login" id="login" placeholder ="Введите логин"><br>
            <input type ="password" class="form-control" name ="pass" id="pass" placeholder ="Введите пароль"><br>
            <button class ="btn btn-success">Авторизоваться</button>
    </div>


    <?php require "Z:/home/localhost/www/blocks/footer.php"?>
</body>
</html>