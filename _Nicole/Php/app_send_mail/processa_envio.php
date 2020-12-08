<?php   

    require "./arq_seguro/bibliotecas/PHPMailer/Exception.php";
    require "./arq_seguro/bibliotecas/PHPMailer/OAuth.php";
    require "./arq_seguro/bibliotecas/PHPMailer/PHPMailer.php";
    require "./arq_seguro/bibliotecas/PHPMailer/POP3.php";           //protocolo de recebimento de email
    require "./arq_seguro/bibliotecas/PHPMailer/SMTP.php";          //protocolo de envio de email


    require './app_arquivos/processa_envio.php';
?>