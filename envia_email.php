<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$Mailer = new PHPMailer();
//Define que será usado SMTP
$Mailer->isSMTP();
//Aceitar caracteres especiais
$Mailer->CharSet = 'UFT-8';
//Enviar e-mail em HTML
$Mailer->isHTML(true);
//configurações
$Mailer->SMTPAuth = true;
$Mailer->SMTPSecure = 'ssl';

//nome do servidor
$Mailer->Host = 'contato@snackbartio.com.br';
//Porta de saida
$Mailer->Port = '465';
//Dados do email de saida
$Mailer->Username = 'contato@snackbartio.com.br';
$Mailer->Password = 'Corech@260';

//E-mail remetente
$Mailer->From = 'contato@snackbartio.com.br';
//Nome do remetente
$Mailer->FromName = 'Claudemir';

//Assunto
$Mailer->Subject = 'Snack Bar Lanches - E-mail De Confirmação';

//Corpo da mensagem
$Mailer->Body = 'Conteudo do E-mail';

//Corpo da mensagem em texto
$Mailer->AltBody = 'conteudo do email em texto';

//Destinatário
$Mailer->addAddress('co.rech@hotmail.com');

if($Mailer->send()) {
    echo "E-mail enviado com sucesso";
}else{
    echo "Erro no envio do e-mail" . $Mailer->ErrorInfo;
}