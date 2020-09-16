<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$name = urldecode($name);
$name = trim($name);
$tel = trim($tel);

$message =  "Имя: ".$name.". Тел.: ".$tel;

if(mail("admin@bubnova-psy.ru", "Заявка с сайта", $message,"From: admin@bubnova-psy.ru \r\n")){
    header('location: /thankyou.html');
}
else{
    header('location: /error.html');
}
