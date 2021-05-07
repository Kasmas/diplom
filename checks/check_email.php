<?php

 $email = $_POST['email'];
 $massage = $_POST['massage'];
 $error = '';
 if (trim($email) == '')
    $error = 'Введите ваш email';
    else if (trim($massage) == '')
        $error = 'Введите ваше ссообщение';
        else if (strlen($massage) < 10)
            $error = 'Сообщение должно быть больше 10 символов';

if ($error != '')
    {
        echo $error;
        exit();
    }   
$subject ="=?utf-8?B?".base64_encode("тестовове сообщение")."?=";
$headers ="From: $email\r\mReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('admin@Kasmas.com', $subject, $massage, $headers);

header('Location: /about.php');
 ?>