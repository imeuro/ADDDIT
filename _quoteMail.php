<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Prova email</title>
</head><body>
<?php
$to = "mauro.fioravanzi@gmail.com"; 
$from = "hello@meuro.dev";
$subject = "prova invio email";
$message = "questa è una prova";
mail($to, $subject, $message, 'From: '.$from);
echo 'Email inviata a '.$to;
?>
</body></html>