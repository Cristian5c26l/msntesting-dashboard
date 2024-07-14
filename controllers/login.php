<?php
//init class
class c_user{
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
        $this->model = $model = new m_user();
    }

    public function selectUser($id){
        $res = $this->model->selectUser($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function selectAllUsers($mode=null){
        $res = $this->model->selectAllUsers($this->host,$this->user,$this->pass,$this->db,$mode);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $last = $row['last'];
            $email = $row['email'];
            $phone = $row['phone'];
            $mobile = $row['mobile'];
            $job = $row['job'];
            $date_in = $row['date_in'];
            $date_out = $row['date_out'];
            $stats = $row['nstats'];

            if($stats=='Delete'){
                $class = "btn-outline-danger";
                $budget = "badge badge-danger";
                $disabled = "disabled";
            }else if($stats=='Ready'){
                $class = "btn-outline-success";
                $budget = "badge badge-success";
                $disabled = "";
            }else{
                $class = "";
                $budget = "";
                $disabled = "";
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $last; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $mobile; ?></td>
                    <td><?php echo $job; ?></td>
                    <td><?php echo $date_in; ?></td>
                    <td><?php echo $date_out; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div class="<?php echo $budget; ?>"><?php echo $stats ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="edit('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="del('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function addUser($name,$last,$email,$phone,$mobile,$birthday,$street,$num_ext,$num_int,$cp){
        $res = $this->model->addUser($this->host,$this->user,$this->pass,$this->db,$name,$last,$email,$phone,$mobile,$birthday,$street,$num_ext,$num_int,$cp);
    }
    public function editUser($data){
        $res = $this->model->editUser($this->host,$this->user,$this->pass,$this->db,$data);
    }
    public function delUser($id){
        $res = $this->model->delUser($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }
    public function loginUser($username,$password){
        //check if user exist
        $res = $this->model->loginUser($this->host,$this->user,$this->pass,$this->db,$username,$password);
        $array = array(); 
        $row = mysqli_fetch_array($res);
        $array = $row;
        
        return $array;
    }
    public function setSession($id,$area,$name,$email,$image,$level,$captcha,$type){
        //session is started if you don't write this line can't use $_Session  global variable
        session_start();
        //session created
        $_SESSION["idSession"]=$id;
        $_SESSION["areaSession"]=$area;
        $_SESSION["userSession"]=$name;
        $_SESSION["emailSession"]=$email;
        $_SESSION["imageSession"]=$image;
        $_SESSION["levelSession"]=$level;
        $_SESSION["captchaSession"]=$captcha;
        $_SESSION["type"]=$type;
        $_SESSION['start'] = array(0=> 'active', 'registered' => time());
        $_SESSION['start'] = time();
    }
    
    public function logOut(){
        //Unset and clean session vars
        session_start();
        $_SESSION['idSession'] = '';
        $_SESSION['idSession'] = null;
        $_SESSION['areaSession'] = '';
        $_SESSION['areaSession'] = null;
        $_SESSION["userSession"]= '';
        $_SESSION['userSession'] = null;
        $_SESSION['levelSession'] = '';
        $_SESSION['levelSession'] = null;
        $_SESSION["captchaSession"]= '';
        $_SESSION['captchaSession'] = null;
        $_SESSION["type"]='';
        $_SESSION["type"]= null;
        $_SESSION = array();
        session_unset();
        session_destroy();
    }

    public function recoveryPass($email){
        $salt = hash("sha256",time());
        $res = $this->model->setRecovery($this->host,$this->user,$this->pass,$this->db,$email,$salt);
        if($res){
            //Check if email exist and get the salt or key
            $res2 = $this->model->recoveryPass($this->host,$this->user,$this->pass,$this->db,$email);
            $count2 = mysqli_num_rows($res2);
            $row2 = mysqli_fetch_array($res2);
            $secret = $row2['recoveryk'];
            if($count2>=1){
                $this->sendEmail($email,$secret);
            }else{
                return 0;
            }
            return $res;
        }else{
            return 0;
        }
    }

    public function revk($k){
        $res = $this->model->revk($this->host,$this->user,$this->pass,$this->db,$k);
        $count = mysqli_num_rows($res);
        //$row = mysqli_fetch_array($res);
        
        if($count>=1){
            return 1;
        }
    }

    public function getEmail($key){
        $res = $this->model->revk($this->host,$this->user,$this->pass,$this->db,$key);
        $row = mysqli_fetch_array($res);
        $email = $row['email'];
        return $email;
    }

    public function changePass($email,$key,$password){
        $res = $this->model->changePass($this->host,$this->user,$this->pass,$this->db,$key,$password);
        if($res){
            $this->unsetRecovery($email);
        }
    }

    public function unsetRecovery($email){
        $res = $this->model->unsetRecovery($this->host,$this->user,$this->pass,$this->db,$email);
        return $res;
    }
    
    public function sendEmail($email,$secret){
        include '../includes/config.php';
        include '../includes/phpmailer/class.phpmailer.php';
        include '../includes/phpmailer/class.smtp.php';
        $emailSubject = "Recuperación de Contraseña Admin Rand";
        
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
            $mail->AddAddress($email, 'Recuperación de Contraseña');
            $mail->AddAddress('developer@rand.com.mx', 'Pass');
            $mail->Subject = $emailSubject;
            $mail->isHTML(true);
            $mail->MsgHTML('Link de Recuperación de Password');
        
            $body = 'Link de Recuperación de Contraseña:<br>
                    '.$link.$secret.'';
        
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
}
//end class
?>