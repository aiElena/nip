<?php

define("__IN_NIP__", true);

require_once ('class.database.php');
require_once ('PHPMailer.php');
require_once ('SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function generateRandomNumbers($length = 8) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function getBaseUri() {
    $host = $_SERVER['HTTP_HOST'];
    $protocol=$_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
    return $protocol . $host;
}

if (isset($_POST['method']) && $_POST['method'] == 'register') {
    $database = new DataProvider();

    $password = randomPassword();
    $unumbers = generateRandomNumbers();
    $uconfirm = generateRandomNumbers();

    $database->insertRegister($unumbers, $_POST['email'], $password, $_POST['phone'], $_POST['notify'], $_POST['reports'], $_POST['news'], $uconfirm);
    $baseUri = getBaseUri();
    $linkUri = $baseUri . "?confirm=$unumbers";

    $subject = "Регистрация на сайте Народной Инвестиционной Платформы.<br/>";
    $message = "Приветствуем нового пользователя сайта <a href='" . $baseUri . "' target='_blank'>pip.in.ua</a>!<br/>";
    $message .= "Подтвердите регистрацию перейдя по <a href='" . $linkUri ."' target='_blank'>ссылке</a> или введите код подтверждения " . $uconfirm . " на сайте.<br/>";
    $message .= "Ваш пароль для входа на сайт в дальнейшем: " . $password . ".<br/>";
    $message .= "<br/><br/>";
    $message .= "<b>Обратите внимание, что только в течении нескольких дней есть уникальная возможность сэкономить на оформлении пакета 201 грн.</b>";
    $message .= "<br/><br/>";
    $message .= "До открытия расчетных счетов оформление пакетов временно происходит через аффилированного представителя.";
    $message .= "<br/><br/>";
    $message .= "Надеемся Вы примете активное участие в создании Народной Инвестиционной Платформы!";
    $message .= "<br/><br/><br/>";
    $message .= "Команда НИП.";
    $message .= "<hr/>";
    $message .= "<a href='" . $baseUri . "' target='_blank'></a><br/>";
    $message .= "<a href='mailto:contacts@pip.in.ua'>contacts@pip.in.ua</a><br/>";
    $message .= "<a href='tel:+380732641130'>+38 (073) 264-11-30</a></br>";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "mail.adm.tools";
    $mail->SMTPAuth = true;
    $mail->Username = "contacts@pip.in.ua";
    $mail->Password = "y4JS2uRfNz22";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->From = "contacts@pip.in.ua";
    $mail->FromName = "PIP";

    $mail->setLanguage("ru");
    $mail->CharSet = "utf-8";

    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    try {
        $mail->send();
        exit('OK');
    } catch (Exception $e) {
        $error = "Mailer Error: " . $mail->ErrorInfo;
    }

    exit(0);
}

if (isset($_POST['method']) && $_POST['method'] == 'confirm') {
    $database = new DataProvider();
    $userInfo = $database->getTheUserByCode($_POST['code']);
    $responce = json_encode($userInfo);
    exit($responce);
}

if (isset($_POST['method']) && $_POST['method'] == 'complete') {
    $database = new DataProvider();
    $result = $database->completeRegister($_POST['refCode'], $_POST['parentCode'], $_POST['lastName'], $_POST['firstName'], $_POST['thirdName'], $_POST['confirmCode']);
    if ($result == "__PARENT_NOT_EXISTS__") {
        exit("NOT");
    }
    if ($result == "__INCORRECT_CODE__") {
        exit("INCORRECT");
    }

    exit("COMPLETE");
}

if (isset($_POST['method']) && $_POST['method'] == 'login') {
    $database = new DataProvider();
    if ($database->getUserPerEmail($_POST['email'], $_POST['password'])) {
        exit('TRUE');
    } else {
        exit('FALSE');
    }
}

?>
















