
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$tel = $_POST['tel'];
$name = htmlspecialchars($name);
$text = htmlspecialchars($text);
$tel = htmlspecialchars($tel);
$name = urldecode($name);
// $text = urldecode($text);
// $tel = urldecode($tel);
$name = trim($name);
$text = trim($text);
$tel = trim($tel);
//echo $fio;
//echo "<br>";
//echo $email;
// if(!empty($_POST['ButtonSend'])) {
//     if (mail("admin@xn--b1ali0a3coj.xn--p1ai", "Заявка с сайта", "Имя: ".$name.". E-mail: ".$email.". Тел.: " .$tel.". Сообщение: ".$text,"From: admin@xn--b1ali0a3coj.xn--p1ai \r\n"))
//     {     echo "сообщение успешно отправлено";
//     } else {
//         echo "при отправке сообщения возникли ошибки";
//     }
// }
$message =  "Имя: ".$name.". Тел.: ".$tel.". Сообщение: ".$text;

if(mail("admin@xn--b1ali0a3coj.xn--p1ai", "Заявка с сайта", $message,"From: admin@xn--b1ali0a3coj.xn--p1ai \r\n"))
    {     echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
