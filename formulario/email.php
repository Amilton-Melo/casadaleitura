<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['enviar'])) {

    //Create an instance; passing true enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'casadaleitura2020@hotmail.com';                     //SMTP username
        $mail->Password   = '2403elisamara';                               //SMTP password (senha de aplicativo)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           //Enable implicit TLS encryption
        $mail->Port = 587;                                          //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

        //Recipients
        $mail->setFrom('casadaleitura2020@hotmail.com', $_POST['email']);
        $mail->addAddress('casadaleitura2020@hotmail.com', 'Casa da Leitura');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Pré-Inscrição para o curso';

        $body = "Dados da Pré-Inscrição abaixo:<br><br>
        <b>Nome:</b> ". $_POST['nome']."</span><br>
        <b>Email:</b> ". $_POST['email']."<br>
        <b>Telefone:</b> ". $_POST['telefone']."<br>
        <b>Escola que trabalha:</b> ". $_POST['trabalho']."<br>
        <b>Expectativa para o curso:</b> ". $_POST['curso'];

        $mail->Body    = $body;

        $mail->send();
        header('Location: enviado.php');
        exit(); 

    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}else{
    echo "Erro ao enviar e-mail, acesso não foi via formulário";
}
?>