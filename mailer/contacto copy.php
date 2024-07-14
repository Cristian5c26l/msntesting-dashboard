<?php
//includes 
include '../includes/config.php';
include '../includes/phpmailer/class.phpmailer.php';
include '../includes/phpmailer/class.smtp.php';

//check if its an ajax request, exit if not
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    $output = json_encode(array( //create JSON data
        'type'=>'error',
        'text' => 'Sorry Request must be Ajax POST'
    ));
    die($output);
}

//post vars
$email = $_POST['email'];
$subject = $_POST['subject'];


switch ($subject) {
    case '1':
        $emailSubject = "Ticket Realizado/Cerrado";
    break;
    case '2':
        $name = $_POST['name'];
        $emailSubject = "Tu Ticket ha sido asignado a ".$name;
    break;    
    default:
        # code...
    break;
}


try{
    $email= str_replace('%40',"@",$email);
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug  = 0;
    $mail->Host       = $emailHost;
    $mail->Port       = $emailPort;
    //$mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth   = true;
    
    //email account to use
    $mail->Username   = $emailUser;
    //password and other settings 
    $mail->Password = $emailPass;
    $mail->From = $email;
    $mail->FromName = $email;
    $mail->AddAddress($emailUser, 'Contacto');
    //$mail->AddAddress($email2, ' ');
    //$mail->AddAddress($email3, ' ');
    $mail->AddAddress('developer@rand.com.mx', 'WM');
    $mail->Subject = $emailSubject;
    $mail->isHTML(true);
    $mail->MsgHTML($message);

    $body = '
    <style>
    .header,
    .title,
    .subtitle,
    .footer-text {
        font-family: Helvetica, Arial, sans-serif;
    }

    .header {
        font-size: 24px;
        font-weight: bold;
        padding: 15px;
        color: #fff;
        background: #2c333c;
    }

    .footer-text {
        font-size: 12px;
        line-height: 16px;
        color: #aaaaaa;
    }

    .footer-text a {
        color: #aaaaaa;
    }

    .container {
        width: 600px;
        max-width: 600px;
    }

    .container-padding {
        padding-left: 24px;
        padding-right: 24px;
    }

    .content {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #ffffff;
    }

    code {
        background-color: #eee;
        padding: 0 4px;
        font-family: Menlo, Courier, monospace;
        font-size: 12px;
    }

    hr {
        border: 0;
        border-bottom: 1px solid #cccccc;
    }

    .hr {
        height: 1px;
        border-bottom: 1px solid #cccccc;
    }

    .title {
        font-size: 18px;
        font-weight: 600;
        color: #374550;
    }

    .subtitle {
        font-size: 16px;
        font-weight: 600;
        color: #2469A0;
    }

    .subtitle span {
        font-weight: 400;
        color: #999999;
    }

    .body-text {
        font-family: Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 20px;
        text-align: left;
        color: #333333;
    }

    a[href^="x-apple-data-detectors:"],
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    body {
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    table {
        border-spacing: 0;
    }

    table td {
        border-collapse: collapse;
    }

    table {
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
    }
    
    img {
        -ms-interpolation-mode: bicubic;
    }

    @media screen and (max-width: 599px) {
        .force-row,
        .container {
            width: 100% !important;
            max-width: 100% !important;
        }
    }

    @media screen and (max-width: 400px) {
        .container-padding {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
    }

    .ios-footer a {
        color: #aaaaaa !important;
        text-decoration: underline;
    }
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <!--[if gte mso 9]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <!-- fix outlook zooming on 120 DPI windows devices -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- So that mobile will display zoomed in -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- enable media queries for windows phone 8 -->
        <meta name="format-detection" content="date=no">
        <!-- disable auto date linking in iOS 7-9 -->
        <meta name="format-detection" content="telephone=no">
        <!-- disable auto telephone linking in iOS 7-9 -->
        <title>Contacto Web Rand</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="responsive.css">
    </head>
    <body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
        <!-- 100% background wrapper (grey background) -->
        <table style="font-family: Helvetica, Arial, sans-serif;" border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
            <tr>
            <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">
                <br>
                <!-- 600px container (white background) -->
                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container">
                    <tr>
                        <td class="container-padding header" align="left" style="font-family: Helvetica, Arial, sans-serif; background: #2c333c; color: #fff; font-size: 18px; font-weight: bold; padding: 15px;">
                        Rand
                        </td>
                    </tr>
                    <tr style="background: #fff;" bgcolor="#fff">
                        <td class="container-padding content" align="left">
                        <br>
                        <div class="title">'.$emailSubject.'</div>
                        <br>
                        <div class="body-text">
                            
                            <br>
                            <br>
                        </div>
                        </td>
                    </tr>
                </table>
                <!--/600px container -->
            </td>
            </tr>
        </table>
        <!--/100% background wrapper-->
    </body>
</html>
    ';

    $mail->Body = $body;
    
    $sendMail = $mail->Send();
    //echo !extension_loaded('openssl')?"Not Available":"Available";
    if($sendMail){
        echo 'Message has been sent / Mensaje Enviado';
        
    }else{
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
return $mail;

?>
