<?php

//init class
class c_exe{
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct($host,$user,$pass,$db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->model = $model = new m_exe();
    }

    //notifications
    public function notifify(){
        $res = $this->model->alerts($this->host,$this->user,$this->pass,$this->db);

        include '../includes/config.php';
        include '../includes/phpmailer/class.phpmailer.php';
        include '../includes/phpmailer/class.smtp.php';

        $emailSubject = "Notificaciones";
        $email = "aux.sistemas@rand.com.mx";

        while ($row=mysqli_fetch_array($res)){
            $id = $row['id'];
            $service = $row['service'];
            $title = $row['title'];
            $comment = $row['comment'];
            $shortCmt = substr($comment, 0, 25).'...';
            $priority = $row['priority'];
            $npriority = $row['npriority'];
            $period = $row['paytype'];
            $date_end = $row['date_end'];
            $assignated = $row['assignated'];

            $now = time();
            $finaldate = strtotime($date_end);
            $diff = $finaldate - $now;
            $diff = round($diff/(60*60*24));
            $sending = "";
            $half = "";

            if($diff<=7){
                $sending = 1;
                $style = "background: #000; padding:10px; color: red";
            }else if($diff>7 AND $diff<=15){
                $sending = 1;
                $style = "background: #000; padding:10px; color: #FFD700";
            }

            if($sending==1){
                try{
                    $email= str_replace('%40',"@",$email);
                    $mail = new PHPMailer();
                    $mail->IsSMTP();
                    $mail->SMTPDebug  = 0;
                    $mail->Host       = $emailHostT;
                    $mail->Port       = $emailPortT;
                    //$mail->SMTPSecure = 'ssl';
                    $mail->SMTPAuth   = true;
                    
                    //email account to use
                    $mail->Username   = $emailUserT;
                    //password and other settings 
                    $mail->Password = $emailPassT;
                    $mail->From = $emailUserT;
                    $mail->FromName = $emailUserT;
                    $mail->AddAddress($email, 'Notificación Servicio por vencer');
                    $mail->AddAddress('developer@rand.com.mx', 'Servicios por Vencer');
                    $mail->Subject = $emailSubject;
                    $mail->isHTML(true);
                    $mail->MsgHTML('Servicio por vencer, favor de comunicarte con el proveedor o hacer los pagos correspondientes');
                
                    $body = '<div style="'.$style.'">El siguiente Servicio esta por vencer: '.$id.'-'.$title.' El día: '.$date_end.'<br>
                            Si quiere dejar de recibir estas notificaciones de este servicio realice el pago y/o marquelo en el sistema Gedes</div>' ;
                
                    $mail->Body = $body;
                    
                    $sendMail = $mail->Send();
        
                    //echo !extension_loaded('openssl')?"Not Available":"Available";
                    if($sendMail){
                        echo 'Message has been sent / Mensaje Enviado';
                        
                    }else{
                        echo "Message could not be sent/ Mensaje no Enviado por... Mailer Error: {$mail->ErrorInfo}";
                    }
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                return $mail;
            }


        }//end While

    }

}
//end class
?>