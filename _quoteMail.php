<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

if(!empty($_POST['other'])) { die('cockroach'); }

$to = "quotes@adddit.eu"; 
$from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$headers  = "From: " . filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) . "\r\n";
$headers .= "Reply-To: " . filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) . "\r\n";
$headers .= "CC: ".$from."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$subject = strip_tags($_POST['nome'])." ".strip_tags($_POST['cognome'])." - Richiesta preventivo stampa";

$message = 'questa è una prova!<br><br>';
$message .= '<table width="100%" bgcolor="#fff"><tr><td align="center">';

$message .= '<table width="100%" bgcolor="#164383" cellpadding="15" cellspacing="0"><tr><td width="230" height="26" valign="middle" align="left">';
$message .= '<img src="https://www.adddit.eu/assets/img/ADDDIT-logo.svg" width="230" height="26" alt="ADDDIT Logo">';
$message .= '</td></tr></table>';

$message .= '<table width="100%" bgcolor="#f5f5f5" cellpadding="15" cellspacing="5">';
$message .= '<tr><td align="left" width="33%"><b>File inviato:</b></td><td align="left" width="66%"><a href="'.filter_var($_POST["picurl"], FILTER_SANITIZE_URL).'">Download</a></td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Quantità:</b></td><td>'.filter_var($_POST["quantita"], FILTER_SANITIZE_NUMBER_INT).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Note Aggiuntive:</b></td><td align="left" width="66%">'.$_POST["note_cliente"].'</td></tr>';

$message .= '<tr><td align="left" width="33%"><b>Nome:</b></td><td align="left" width="66%">'.strip_tags($_POST["nome"]).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Cognome:</b></td><td align="left" width="66%">'.strip_tags($_POST["cognome"]).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Email:</b></td><td align="left" width="66%">'.filter_var($_POST["email"], FILTER_SANITIZE_EMAIL).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Tel:</b></td><td align="left" width="66%">'.filter_var($_POST["phone"], FILTER_SANITIZE_EMAIL).'</td></tr>';

$message .= '<tr><td align="left" width="33%"><b>Azienda:</b></td><td align="left" width="66%">'.strip_tags($_POST["azienda"]).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>P.iva/vat:</b></td><td align="left" width="66%">'.strip_tags($_POST["partita_iva"]).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Indirizzo:</b></td><td align="left" width="66%">'.strip_tags($_POST["indirizzo"]).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Citt&agrave;:</b></td><td align="left" width="66%">'.strip_tags($_POST["citta"]).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>cap:</b></td><td align="left" width="66%">'.filter_var($_POST["cap"], FILTER_SANITIZE_NUMBER_INT).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Provincia:</b></td><td align="left" width="66%">'.strip_tags($_POST["provincia"]).'</td></tr>';
$message .= '<tr><td align="left" width="33%"><b>Stato:</b></td><td align="left" width="66%">'.strip_tags($_POST["stato"]).'</td></tr>';
$message .= '</table>';

$message .= '</td></tr></table>';

mail($to, $subject, $message, $headers);
//echo 'Email inviata a '.$to;

echo $message;


?>
