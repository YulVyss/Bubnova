
<?php
$result;
// $nameP = $_POST['nameP'];
// $email = $_POST['email'];
// $textP = $_POST['textP'];
// $telP = $_POST['telP'];
// $nameP = htmlspecialchars($nameP);
// $textP = htmlspecialchars($textP);
// $telP = htmlspecialchars($telP);
// $nameP = urldecode($nameP);
// $nameP = trim($nameP);
// $textP = trim($textP);
// $telP = trim($telP);

// $messageP =  "Имя: ".$nameP.". Тел.: ".$telP.". Сообщение: ".$textP;

// if(mail("admin@bubnova-psy.ru", "Заявка с сайта", $messageP,"From: admin@bubnova-psy.ru \r\n")){
//     $response = "сообщение успешно отправлено";
// }

$nameF = $_POST['nameF'];
$telF = $_POST['telF'];
$nameF = htmlspecialchars($nameF);
$telF = htmlspecialchars($telF);
$nameF = urldecode($nameF);
$nameF = trim($nameF);
$telF = trim($telF);

$messageF =  "Имя: ".$nameF.". Тел.: ".$telF;

if(mail("admin@bubnova-psy.ru", "Заявка с сайта", $messageF,"From: admin@bubnova-psy.ru \r\n")){
    $response = "сообщение успешно отправлено";
}