<?php

namespace App\Helpers\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class To
{
    /**
     * @param $toEmail - Кому письмо
     * @param $toName - Как зовут получателя
     * @param $body - Текст письма
     * @return array|null - Список ошибок или null если
     */
    public static function send($toEmail, $toName, $body) : ?array
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = \Config\Mail::$smtpServer;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = \Config\Mail::$smtpUser;                     //SMTP username
            $mail->Password   = \Config\Mail::$smtpPassword;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom(\Config\Mail::$smtpUser, 'Pv021');
            $mail->addAddress($toEmail, $toName);     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = $body;
            $mail->AltBody = $body;

            $mail->send();
        } catch (Exception $e) {
            return [
                "exception" => $e,
                "errorInfo" => $mail->ErrorInfo
            ];
        }

        return null;

    }

}