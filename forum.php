<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name ="viewport" content="width = device-width, initial-scale=1.0">
    <meta http-euiv ="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href ="css/style.css">
    <link rel ="stylesheet" href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Kasmas.MM</title>
</head>
<body>
    <?php require "blocks/header.php"?>
	
<hr>
<form action = "checks/check_forum.php" class="container" method ="POST">
        <input type = "text" name="username" placeholder = "Ваше имя"><br><br>
        <textarea name = "comment" placeholder ="Ваш комментарий"></textarea><br>
        <input type = "submit">
    </form>

    <?php require "blocks/footer.php"?>
</body>
</html>