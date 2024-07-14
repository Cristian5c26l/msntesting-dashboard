<?php

//init class
class c_panel{
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
        $this->model = $model = new m_panel();
    }

    public function comunication(){
        $res = $this->model->comunication($this->host,$this->user,$this->pass,$this->db);
        
        $idemploye = $_SESSION["idSession"];
        
        if($idemploye==18 OR $idemploye==1){
            $dislike = "Me Vale Trozo";
        }else{
            $dislike = "No me importa";
        }

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $title = $row['title'];
            $author = $row['author'];
            $subtitle = $row['subtitle'];
            $text = $row['text'];
            $vote = $row['vote'];
            
            if(strlen($text)>800){
                $short = substr($text, 0, 600);

                $tidy = new Tidy();
                $clean = $tidy->repairString($short, array(
                    'output-xml' => true,
                    'input-xml' => true
                ));
                
                $short = $clean;
            }else{
                $short = $text;
            }
            
            $link = $row['link'];
            $img = $row['background'];
            if(empty($img)){
                $img = "default.jpg";
            }
            $date_publish = $row['date_publish'];
            ?>

                <div class="col-lg-4 pb-4">
                    <article class="card2 card--2">
                        <?php
                        if($vote==1){
                        ?>
                            <div class="card__info-hover">
                                <a href="#" onclick="like(<?php echo $id; ?>,1);">
                                    <img src="assets/images/heart.png" alt="" width="32px">
                                    Me Gusta
                                </a>
                                <div class="card__clock-info">
                                    <a href="#" onclick="like(<?php echo $id; ?>,0);">
                                        <img src="assets/images/dislike.png" alt="" width="32px">
                                        <?php echo $dislike; ?>
                                    </a>    
                                </div>
                                
                            </div>
                        <?php
                        }
                        ?>
                        <div class="card__img" style="background-image: url('./assets/images/<?php echo $img; ?>');"></div>
                        <a href="#" class="card_link">
                            <div class="card__img--hover" style="background-image: url('./assets/images/<?php echo $img; ?>');"></div>
                        </a>
                        <div class="card__info">
                            <span class="card__category"></span>
                            <h3 class="card__title"><?php echo $title; ?></h3>
                            
                            <span class="card__by"><a href="#" class="card__author" title="author"><?php echo $author; ?></a></span>
                             | <span><?php echo $date_publish; ?></span>
                            <hr>
                            <div class="text-justify"><?php echo $short; ?>... <a href="#" onclick="more('<?php echo $id; ?>');">Ver Más</a></div>
                        </div>
                    </article>
                </div>
            <?php
        }

    }

    public function viewblog($id){
        $res = $this->model->viewblog($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);
        $title = $row['title'];
        $author = $row['author'];
        $subtitle = $row['subtitle'];
        $text = $row['text'];
        if(strlen($text)>800){
            $short = substr($text, 0, 600);
        }else{
            $short = $text;
        }
        
        $link = $row['link'];
        $img = $row['background'];
        if(empty($img)){
            $img = "default.jpg";
        }
        $date_publish = $row['date_publish'];
        ?>
            <h3><?php echo $title; ?></h3>
            <p><?php echo $author; ?></p>
            <hr>
            <div class="text-justify">
                <?php echo $text; ?>
            </div>
        <?php

    }

    public function addblog($title,$author,$data,$type){
        $res = $this->model->addblog($this->host,$this->user,$this->pass,$this->db,$title,$author,$data,$type);
        return $res;
    }

    public function editblog($id,$title,$author,$data,$type=NULL){
        $res = $this->model->editblog($this->host,$this->user,$this->pass,$this->db,$id,$title,$author,$data,$type);
        return $res;
    }

    public function changeblog($id,$type){
        $res = $this->model->changeblog($this->host,$this->user,$this->pass,$this->db,$id,$type);
        return $res;
    }

    public function delblog($id){
        $res = $this->model->delblog($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function addimg($id,$name){
        $res = $this->model->addimg($this->host,$this->user,$this->pass,$this->db,$id,$name);
        return $res;
    }

    public function editableblog($id){
        $res = $this->model->viewblog($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);
        $title = $row['title'];
        $author = $row['author'];
        $subtitle = $row['subtitle'];
        $text = $row['text'];
        ?>
            <form class="row" id="blog" onsubmit="editblog(); return false;">
                <div class="form-group col-lg-6">
                    <input id="id" type="hidden" class="form-control border-dark" value="<?php echo $id; ?>" required>
                    <input id="title" type="text" class="form-control border-dark" value="<?php echo $title; ?>" placeholder="Titulo" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="author" type="text" class="form-control border-dark" value="<?php echo $author; ?>" placeholder="Autor" required>
                </div>
                <div class="form-group col-lg-12">
                    <textarea id="basic-conf" placeholder="Agrega aquí tu texto">
                        <?php echo $text; ?>
                    </textarea>
                </div>
                <div class="form-group col-lg-6">
                
                </div>
                <div class="form-group col-lg-6">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
        <?php
    }

    public function selectfullblog(){
        $res = $this->model->selectfullblog($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $title = $row['title'];
            $author = $row['author'];
            $date_publish = $row['date_publish'];
            $type = $row['type'];
            $status = $row['status'];

            if($type==1){
                $selection1 = "selected";
                $selection2 = "";
            }else if($type==4){
                $selection1 = "";
                $selection2 = "selected";
            }else{
                $selection1 = "";
                $selection2 = "";
            }

            if($status==1){
                $dis = '';
            }else{
                $dis = 'disabled';
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $author; ?></td>
                    <td><?php echo $date_publish; ?></td>
                    <td>
                        <form onsubmit="">
                            <div class="form-group">
                                <select class="form-control" class="selection" id="t<?php echo $id; ?>" onchange="changeBlog(this.id,this.value);" required>
                                        <option value="">Selecciona donde Publicar</option>
                                        <option value="1" <?php echo $selection1; ?>>Blog Rand</option>
                                        <option value="4" <?php echo $selection2; ?>>Blog Interno Gedes</option>
                                </select>
                            </div>
                        </form>
                    </td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableBlog('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $dis; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delBlog('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $dis; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                            <button onclick="addImgBlog('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $dis; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">panorama</i>
                            </button>
                        </div>    
                    </td>
                </tr>    
            <?php
        }
    }

    public function addVote($id,$employee,$vote){
        $res0 = $this->model->findVote($this->host,$this->user,$this->pass,$this->db,$id,$employee);
        $result = mysqli_num_rows($res0);

        if(empty($result)){
            $res = $this->model->addVote($this->host,$this->user,$this->pass,$this->db,$id,$employee,$vote);
            //return $res;
        }else{
    
        }

        return $result;
    }

    public function votations($id){
        $res = $this->model->votations($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function selectfullVotations(){
        $res = $this->model->selectfullblog($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];

            $res1 = $this->votations($id);
            $row1 = mysqli_fetch_array($res1);
            $positives = $row1['positives'];
            $negatives = $row1['negatives'];

            $title = $row['title'];
            $author = $row['author'];
            $date_publish = $row['date_publish'];
            $type = $row['type'];
            $status = $row['status'];

            if($status==1){
                $dis = '';
            }else{
                $dis = 'disabled';
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $author; ?></td>
                    <td><?php echo $positives; ?></td>
                    <td><?php echo $negatives; ?></td>
                    <td><?php echo $date_publish; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="delVotations('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $dis; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>    
            <?php
        }
    }
    
    public function sendMessage($id,$idemploye,$resp){
        include '../includes/config.php';
        include '../includes/phpmailer/class.phpmailer.php';
        include '../includes/phpmailer/class.smtp.php';

        $email = "jaluna@rand.com.mx";
        $email2 = "claudiar@rand.com.mx";
        $email3 = "a.colin@rand.com.mx";
        $emailSubject = "Dudas o Sugerencias de Personal";
        
        try{
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
            $mail->AddAddress($email, 'Lic. Josué Alejandro	Luna Monroy');
            $mail->AddAddress($email2, 'Claudia Alicia Rosas');
            $mail->AddAddress($email3, 'Adriana Colin');
            $mail->AddBCC('rockmugen@hotmail.com', '');
            $mail->Subject = $emailSubject;
            $mail->isHTML(true);
            $mail->MsgHTML('Link de Recuperación de Password');
        
            $body = 'Duda o sugerencia:<br>
                    '.$resp;
        
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

    /*End*/
}
//end class
?>