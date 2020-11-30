<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$opcoes = $_POST['escolhas'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


$from = $_SESSION['email_cliente'];
$email_destino = "teste@teste.com";
$subject = "Assunto";
$messagem = "Isto é uma mensagem enviada por php";
$headers = "From: $from <$from>\r\n".
           "MIME-Version: 1.0" . "\r\n" .
           "Content-type: text/html; charset=UTF-8" . "\r\n"; 
mail($email_destino, $subject,$message,$headers);