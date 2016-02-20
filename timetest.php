<?php 

$name = 'Artem';
$email = 'artem.grimuta@hotmail.com';
$message = 'Добрый день. Cписок СПО Фортуна http://spo-fortuna.hol.es/Spisok.xlsx';
$formcontent="M: $message";
$recipient = "rso_fortune@outlook.com";
$subject = "SPO Fortuna";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Ошибка!");
echo "Спасибо! Ваша заявка отправлена.";

?>