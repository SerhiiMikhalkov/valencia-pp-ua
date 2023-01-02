<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    requide "PHPMailer/src/PHPMailer.php";
    requide "PHPMailer/src/Exception.php";

    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    $name = $_POST["name"];
    $phone = $_POST["phone"];

    $body = $name . ' ' . $phone;
    $theme = "[заявка с формы]";

    $mail->addAddress("sergejmihalkov327@gmail.com");

    $mail->Subject = $theme;
    $mail->Body = $body;

    $mail->send();