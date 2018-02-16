<?php 
 $to = "vibenstofen@gmail.com";
 $email = $_POST['email'];

 $err = "";
 if (trim ($_POST['name']) == "" && trim ($_POST['email']) == "" && trim ($_POST['message']) == "")
  $err = "Заповніть всі поля";
 else if (trim ($_POST['name']) == "")
  $err = "Ім'я не вказано";
 else if (trim ($_POST['message']) == "")
  $err = "Повідомлення не вказано";
 else if (!((strpos($email, ".") > 0) && (strpos($email, "@") > 0)))
  $err = "Неправильний e-mail";

 if ($err != "") { //есть какие либо ошибки
  echo $err;
  exit;
 }

 $msg = "Повідомлення відправив(-ла) <b>".$_POST['name']."</b>.<br><br><b>Текст сообщения:</b><br>".$_POST['message'];

 $subject = "=?utf-8?B?".base64_encode("Повідомлення з сайту Music Festival")."?=";
 $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
 $success = mail ($to, $subject, $msg, $headers);
 echo $success;
?>﻿
