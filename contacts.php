<?php

define("__IN_NIP__", true);

require_once ('class.database.php');
require_once ('PHPMailer.php');
require_once ('SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = "mail.adm.tools";
$mail->SMTPAuth = true;
$mail->Username = "contacts@pip.in.ua";
$mail->Password = "y4JS2uRfNz22";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";
//Set TCP port to connect to
$mail->Port = 465;
$mail->From = "contacts@pip.in.ua";
$mail->FromName = "PIP";

$mail->setLanguage("ru");
$mail->CharSet = "utf-8";

if (isset($_POST['method']) && $_POST['method'] == 'contacts') {

    $user = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $database = new DataProvider();
    $result = $database->insertQuestios($user, $email, $phone, $message);

    $to = 'contacts@pip.in.ua';
    $headers = 'From: contacts@pip.in.ua' . "\r\n" .
        'Reply-To: no-reply@pip.in.ua' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

// Body message
    $body = "<strong>Вопрос с сайта PIP.IN.UA</strong>";
    $body .= "<br/>";
    $body .= "<p>Пользователь: " . $user . "</p>";
    $body .= "<p>E-Mail: <a href='mailto:" . $email . "'>" . $email . "</a></p>";
    $body .= "<p>Телефон: " . $phone . "</p>";
    $body .= "<p>Текст сообщения:</p><br/>";
    $body .= "<span>" . $message . "</span><br/>";

    $mail->addAddress("contacts@pip.in.ua", "Контакты");
    $mail->isHTML(true);

    $mail->Subject = 'Вам задали вопрос с сайта PIP.IN.UA';
    $mail->Body = $body;

    $GLOBALS['debugOutput'] = [];
    $mail->Debugoutput = function ($debugOutputLine, $level) {
        $GLOBALS['debugOutput'][] = $debugOutputLine;
    };

    try {
        $mail->send();
        exit('OK');
    } catch (Exception $e) {
        $error = "Mailer Error: " . $mail->ErrorInfo;
    }
}

?>