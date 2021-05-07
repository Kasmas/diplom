<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $pass = md5($pass=="zdagljsadgfaer");

    $mysql = new mysqli('localhost','kasmas','root','users_kasmas_bd');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` ='$login' AND `pass` ='$pass'");
    $user=$result->fetch_assoc();
    while(count($user) == 0)
        {
            header('Location: /login.php');
            exit();
        }
    setcookie('user', $user['name'], time()+3600*24, "/");
    $mysql->close();

    /*print_r($user);
    exit();*/

    header('Location: /index.php');

?>