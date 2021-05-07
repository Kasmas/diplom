<?php

    if(isset($_POST['username']))
    {
        $username = $_POST['username'];
        $comment = $_POST['comment'];
        $date = date('Y-m-d H-i');
        $mysqlforum = new mysqli('localhost','kasmas','root','users_kasmas_bd');
        $mysqlforum-> query("INSERT INTO `forump` (`username`, `comment`, `date`) VALUES('$username', '$comment', '$date')");
        $mysqlforum-> close();
    }
    header('Location:/forum.php');
    
?>