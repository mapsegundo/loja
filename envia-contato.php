<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require("class.phpmailer.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug  = 1; 
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = "";

$mail->setFrom("", "Marshall");
$mail->addAddress("");
$mail->Subject = "Email de Contato da Loja";
$mail->msgHTML("<html>de: {$nome}<br />email: {$email}<br />mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if($mail->send()){
    $_SESSION["success"] = "Mensagem enviada com sucesso.";
    header("Location: index.php");
} else{
    $_SESSION["danger"] = "Erro ao enviar mensagem para ". $mail->ErrorInfo ;
    header("Location: contato.php");
}
die();
