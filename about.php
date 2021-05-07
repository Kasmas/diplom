<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name ="viewport" content="width = device-width, initial-scale=1.0">
    <meta http-euiv ="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href ="css/style.css">
    <link rel ="stylesheet" href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Support</title>
</head>
<body>
    <?php require "Z:/home/localhost/www/blocks/header.php"?>
    <div class ="container">
    <h5>Поддержка</h5>
    <form action ="Z:/home/localhost/www/checks/check_email.php" method="post">
        <input type ="email" name ="email" placeholder="Введите ваш email" class ="form-control"><br>
        <textarea name ="massage" class ="form-control" placeholder ="Введите ваше ссообщение"></textarea><br>
        <button type ="submit" name ="send" class ="btn btn-success">Отправить</button>
    </form> 


    <?php require "Z:/home/localhost/www/blocks/footer.php"?>
</body>
</html>