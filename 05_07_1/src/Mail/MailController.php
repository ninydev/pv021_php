<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailController
{
    /**
     * Покажет форму
     */
    public function showForm()
    {
        if(isset($_GET['doSendForm'])) { // Если есть такая переменная - отправим почту
            $this->sendMail();
        }
        ?>

        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <input type="email" name="email">
            <input type="submit" name="doSendForm">
        </form>

        <?php
        // echo "Тут будет форма";
    }

    /**
     * Отправит форму на почту
     */
    public function sendMail()
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.ukr.net';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'nika_web@ukr.net';                     //SMTP username
            $mail->Password   = 'Pxi3Log4tZjdtPbI';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('nika_web@ukr.net', 'Mailer');
            $mail->addAddress('nika_web@ukr.net', 'Joe User');     //Add a recipient
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
            $mail->Body    = '
            <style type="text/css">
    /* FONTS */
    @media screen {
        @font-face {
            font-family: \'Lato\';
            font-style: normal;
            font-weight: 400;
            src: local(\'Lato Regular\'), local(\'Lato-Regular\'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format(\'woff\');
        }

        @font-face {
            font-family: \'Lato\';
            font-style: normal;
            font-weight: 700;
            src: local(\'Lato Bold\'), local(\'Lato-Bold\'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format(\'woff\');
        }

        @font-face {
            font-family: \'Lato\';
            font-style: italic;
            font-weight: 400;
            src: local(\'Lato Italic\'), local(\'Lato-Italic\'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format(\'woff\');
        }

        @font-face {
            font-family: \'Lato\';
            font-style: italic;
            font-weight: 700;
            src: local(\'Lato Bold Italic\'), local(\'Lato-BoldItalic\'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format(\'woff\');
        }
    }
    /* CLIENT-SPECIFIC STYLES */
    table, td, a {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    table, td {
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
    }

    img {
        -ms-interpolation-mode: bicubic;
    }
    /* RESET STYLES */
    img {
        border: 0;
        height: auto;
        line-height: 100%;
        outline: none;
        text-decoration: none;
    }

    table {
        border-collapse: collapse !important;
    }
    
    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    /* MOBILE STYLES */
    @media screen and (max-width:600px) {
        h1 {
            font-size: 32px !important;
            line-height: 32px !important;
        }
    }
    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] {
        margin: 0 !important;
    }
</style>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <!– LOGO –>
    <tr>
        <td bgcolor="#000000" align="center">
            <!–[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
                        <![endif]–>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                                    <!--<a href="http://litmus.com" target="_blank">--> <!--  -->
                                    <!--<img alt="Logo" src="http://litmuswww.s3.amazonaws.com/community/template-gallery/ceej/logo.png" width="40" height="40" style="display: block; width: 40px; max-width: 40px; min-width: 40px; font-family: \'Lato\', Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px;" border="0" />
                                </a>-->
                                </td>
                            </tr>
                        </table>
                        <!–[if (gte mso 9)|(IE)]>
                    </td>
                </tr>
            </table>
            <![endif]–>
        </td>
    </tr>
    <!– HERO –>
    <tr>
        <td bgcolor="#000000" align="center" style="padding: 0px 10px 0px 10px;">
            <!–[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
                        <![endif]–>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#181818" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #f4f4f4; font-family: \'Lato\', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                                    <h1 style="font-size: 48px; font-weight: 400; margin: 0;">Welcome!</h1>
                                </td>
                            </tr>
                        </table>
                        <!–[if (gte mso 9)|(IE)]>
                    </td>
                </tr>
            </table>
            <![endif]–>
        </td>
    </tr>
    <!– COPY BLOCK –>
    <tr>
        <td bgcolor="#000000" align="center" style="padding: 0px 10px 0px 10px;">
            <!–[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
                        <![endif]–>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <!– COPY –>
                            <tr>
                                <td bgcolor="#181818" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: \'Lato\', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    Thank you for choosing us, wait 1 minute till our operators will contact with you
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td bgcolor="#181818" align="center" style="padding: 20px 30px 60px 30px;">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td align="center" style="border-radius: 3px;" bgcolor="#000000">
                                                            <a href="BUTTONURL" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #f4f4f4; display: inline-block;">
                                                                Home
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <br />
                                    <p>
                                    
</p>
                                    <br>
<p>
            Triangle
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <!–[if (gte mso 9)|(IE)]>
                    </td>
                </tr>
            </table>
            <![endif]–>
        </td>
    </tr>
    <!– FOOTER –>
    <tr>
        <td bgcolor="#000000" align="center" style="padding: 0px 10px 0px 10px;">
            <!–[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
                        <![endif]–>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <!– NAVIGATION –>
                            <tr>
                                <td bgcolor="#181818" align="left" style="padding: 30px 30px 30px 30px; color: #f4f4f4; font-family: \'Lato\', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;">
                                    <p style="margin: 0;">
                                        <a href="#" target="_blank" style="color: #f4f4f4; font-weight: 700;">Home</a> –
                                        <a href="#" target="_blank" style="color: #f4f4f4; font-weight: 700;">Privacy</a> –
                                        <a href="#" target="_blank" style="color: #f4f4f4; font-weight: 700;">Help</a>
                                    </p>
                                </td>
                            </tr>

                            <!– ADDRESS –>
                            <tr>
                                <td bgcolor="#181818" align="left" style="padding: 0px 30px 30px 30px; color: #666666; font-family: \'Lato\', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px; ">
                                    <p style="margin: 0;">Triangle – 1234 Main Street – Anywhere, MA – 56789</p>
                                </td>
                            </tr>
                        </table>
                        <!–[if (gte mso 9)|(IE)]>
                    </td>
                </tr>
            </table>
            <![endif]–>
        </td>
    </tr>
</table>
            ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        echo "<div style='background: gray'>Тут будет отправка</div>";
    }
}