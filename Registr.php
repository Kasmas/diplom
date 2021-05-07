<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name ="viewport" content="width = device-width, initial-scale=1.0">
    <meta http-euiv ="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href ="css/style.css">
    <link rel ="stylesheet" href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Check in</title>
</head>
<body>
    <?php require "blocks/header.php"?>
    <div class="container mt-4">
        <h1>Форма регистрации</h1>
        <form action = "checks/check_reg.php" method= "post">
            <input type ="text" class="form-control" name ="login" id="login" placeholder ="Введите логин"><br>
            <input type ="text" class="form-control" name ="name" id="name" placeholder ="Введите имя"><br>
            <input type ="password" class="form-control" name ="pass" id="pass" placeholder ="Введите пароль"><br>
            <button class ="btn btn-success">Зарегистрироваться</button>
        </form>
    </div>

    <?php require "blocks/footer.php"?>
</body>
</html>