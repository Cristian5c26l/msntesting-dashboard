<?php

//init class
class c_task{
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
        $this->model = $model = new m_task();
    }

    public function addTask($idarea,$idemploye,$task,$object,$coju,$type,$auth,$messenger,$desc){
        $res = $this->model->addTask($this->host,$this->user,$this->pass,$this->db,$idarea,$idemploye,$task,$object,$coju,$type,$auth,$messenger,$desc);
        return $res;
    }

    public function editTask($id,$idarea,$idemploye,$task,$object,$coju,$type,$auth,$messenger,$desc){
        $res = $this->model->editTask($this->host,$this->user,$this->pass,$this->db,$id,$idarea,$idemploye,$task,$object,$coju,$type,$auth,$messenger,$desc);
        return $res;
    }

    public function selectCoju(){
        $res = $this->model->selectCoju($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $coju = $row['object'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $coju; ?></option>
            <?php
        }
    }

    public function selectType(){
        $res = $this->model->selectType($this->host,$this->user,$this->pass,$this->db);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $clave = $row['clave'];
            ?>
                <option value="<?php echo $id; ?>"><?php echo $clave.' | '.$name; ?></option>
            <?php
        }
    }

    public function selectAuth(){
        $res = $this->model->selectAuth($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $auth = $row['authority'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $auth; ?></option>
            <?php
        }
    }

    public function selectMessenger(){
        $res = $this->model->selectMessenger($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
            <?php
        }
    }

    public function selectArea(){
        $res = $this->model->selectArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $area; ?></option>
            <?php
        }
    }

    public function selectTaskArea(){
        $res = $this->model->selectTaskArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $task = $row['task'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $area; ?></option>
            <?php
        }
    }

    public function selectedTaskArea($idarea){
        $res = $this->model->selectTaskArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $task = $row['task'];

            if($idarea == $id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?> ><?php echo $area; ?></option>
            <?php
        }
    }

    public function selectTask($id,$area,$type=null){
        $res = $this->model->selectTask($this->host,$this->user,$this->pass,$this->db,$id);

        if($type==1 OR $type==2){

            $row = mysqli_fetch_array($res);
            $task = $row['task'];
            $idcoju = $row['idcoju'];
            $idtype = $row['idtype'];
            $idauth = $row['idauth'];
            $idmessenger = $row['idmessenger'];
            $object = $row['object'];
            $desc = $row['description'];
            
                ?>
                    <form class="row" onsubmit="editTask(<?php echo $id; ?>); return false;">
                    
                        <div class="form-group col-lg-12">
                            <input id="task" class="form-control" type="text" value="<?php echo $task; ?>" placeholder="Título Tarea" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea id="object" class="form-control" placeholder="Objeto" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required><?php echo $object; ?></textarea>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="coju" required >
                                <option value="">Selecciona un Control Interno</option>
                                <?php echo $this->selectCoju($idcoju); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="type" required >
                                <option value="">Selecciona un Tipo de Control Interno</option>
                                <?php echo $this->selectType($idtype); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="auth" required >
                                <option value="">Selecciona una Autoridad</option>
                                <?php echo $this->selectAuth($idauth); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="messenger" required >
                                <option value="">Selecciona un Mensajero</option>
                                <?php echo $this->selectMessenger($idmessenger); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea id="desc" class="form-control" placeholder="Descripción" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required><?php echo $desc; ?></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                        </div>
                    </form>
                <?php
        }else{

        }
    }

    public function selectAllTask($status,$type){
        $res = $this->model->selectAllTask($this->host,$this->user,$this->pass,$this->db,$status);
        if(empty($area)){
            $employeArea = "";
        }else{
            $employeArea = $area;
        }

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $task = $row['task'];
            $desc = $row['description'];
            $shortCmt = substr($desc, 0, 25).'...';
            $priority = $row['priority'];
            $npriority = $row['npriority'];
            $date_ini = $row['date_ini'];
            $date_end = $row['date_end'];
            $idemploye = $row['idemp'];
            $employe = $row['employe'];
            $assignated = $row['assignated'];
            $priorClass = $row['class'];
            $email = $row['email'];
            //$doc = $row['doc'];
            $status = $row['status'];

            if(empty($assignated)){
                $assignated = "¡Sin Asignar!";
            }
        
            
            //$date_ini = $row['date_ini'];
            //$date_end = $row['date_end'];
            $stats = $row['nstats'];

            if($stats=='Eliminado'){
                $class = "btn-outline-danger";
                $budget = "badge badge-danger";
                $disabled = "disabled";
            }else if($stats=='Listo'){
                $class = "btn-outline-success";
                $budget = "badge badge-success";
                $disabled = "";
            }else if($stats=="Pendiente"){
                $class = "btn-outline-info";
                $budget = "badge badge-info";
                $disabled = "";
            }else if($stats=="Retrasado"){
                $class = "btn-outline-warning";
                $budget = "badge badge-warning";
                $disabled = "";                
            }else if($stats=="Detenido"){
                $class = "btn-outline-stoped";
                $budget = "badge badge-stoped";
                $disabled = "";                
            }else if($status==6){
                $class = "btn-outline-gray";
                $budget = "badge badge-gray";
                $disabled = "";                    
            }else if($status==7){
                $class = "btn-outline-stoped";
                $budget = "badge badge-stoped";
                $disabled = "";                    
            }else if($status==8){
                $class = "btn-outline-stoped";
                $budget = "badge badge-stoped";
                $disabled = "";                    
            }else if($status==9){
                $class = "btn-outline-danger";
                $budget = "badge badge-danger";
                $disabled = "";                    
            }else{
                $class = "";
                $budget = "";
                $disabled = "";
            }
            
            if($stats=='Listo'){
                $disabled = "disabled";
            }else{
                $date_end='';
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $area; ?></td>
                    <td>
                        <?php echo $employe; ?>
                        <span style="display:none" id="e<?php echo $id; ?>"><?php echo $email; ?></span>
                    </td>
                    <td><?php echo $task; ?></td>
                    <td>
                        <button onclick="modalTask('<?php echo $task; ?>','<?php echo $id; ?>','<?php echo $idemploye; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                            <i class="material-icons md-14 align-middle mb-1 text-primary">speaker_notes</i>
                        </button>
                        <?php echo htmlspecialchars_decode($shortCmt); ?>
                    </td>
                    <td>
                        <div id="p<?php echo $id; ?>" class="<?php echo $priorClass; ?>">
                            <?php echo $priority.'-'.$npriority; ?> 
                        </div>    
                    </td>
                    <td>
                        <div id="a<?php echo $id; ?>" class="badge badge-primary">
                            <?php echo $assignated; ?>
                        </div>    
                    </td>
                    <td><?php echo $date_ini; ?></td>
                    <td><?php echo $date_end; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div id="s<?php echo $id; ?>" class="<?php echo $budget; ?>"><?php echo $stats; ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <div class="btn-group">
                                <?php
                                    if($type==1 OR $type==2){
                                ?>
                                    <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>
                                    <i class="material-icons md-14 align-middle mb-1 text-succes">done</i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div onclick="editStatusTask('<?php echo $id; ?>',1,1); sendEs('<?php echo $email; ?>',1,'<?php echo $task; ?>');" class="dropdown-item">Teminada</div>
                                        <div onclick="editStatusTask('<?php echo $id; ?>',2,2); sendEs('<?php echo $email; ?>',3,'<?php echo $task; ?>');" class="dropdown-item">Reabrir</div>
                                        <div onclick="editStatusTask('<?php echo $id; ?>',7,3); sendEs('<?php echo $email; ?>',4,'<?php echo $task; ?>');" class="dropdown-item">Detenida u otro Problema</div>
                                    </div>
                                <?php
                                    }else if($type>2){
                                ?>
                                    <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons md-14 align-middle mb-1 text-succes">done</i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div onclick="editStatusTask('<?php echo $id; ?>',1,1); sendEs('<?php echo $email; ?>',1,'<?php echo $task; ?>');" class="dropdown-item">Terminada</div>
                                        <div onclick="editStatusTask('<?php echo $id; ?>',2,2); sendEs('<?php echo $email; ?>',3,'<?php echo $task; ?>');" class="dropdown-item">Reabrir</div>
                                        <div onclick="editStatusTask('<?php echo $id; ?>',7,3); sendEs('<?php echo $email; ?>',4,'<?php echo $task; ?>');" class="dropdown-item">Detenida u otro Problema</div>
                                    </div>
                                <?php                                        
                                    }else{
                                    
                                    }
                                ?>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>
                                    <i class="material-icons md-14 align-middle mb-1 text-primary">person_add</i>
                                </button>
                                <div class="dropdown-menu">
                                    <?php echo $this->employe($employeArea,$id); ?>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>
                                    <i class="material-icons md-14 align-middle mb-1 white-text">alarm</i>
                                </button>
                                <div class="dropdown-menu">
                                    <?php echo $this->selectAllStatus($id); ?>
                                </div>
                            </div>
                            <?php
                            if($type==1 OR $type==2){
                            ?>
                                <button onclick="delTask('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                    <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                                </button>
                            <?php                                        
                                }else{
                                
                                }
                            ?>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function selectUserTask($iduser=null){
        $res = $this->model->selectUserTask($this->host,$this->user,$this->pass,$this->db,$iduser);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $task = $row['task'];
            $desc = $row['description'];
            $shortCmt = substr($desc, 0, 25).'...';
            $priority = $row['priority'];
            $npriority = $row['npriority'];
            $date_ini = $row['date_ini'];
            $date_end = $row['date_end'];
            $idemploye = $row['idemp'];
            $employe = $row['employe'];
            $assignated = $row['assignated'];
            $priorClass = $row['class'];
            $status = $row['status'];
            //$doc = $row['doc'];

            if(empty($assignated)){
                $assignated = "¡Sin Asignar!";
            }
        
            
            $stats = $row['nstats'];

            if($stats=='Eliminado'){
                $class = "btn-outline-danger";
                $budget = "badge badge-danger";
                $disabled = "disabled";
            }else if($stats=='Listo'){
                $class = "btn-outline-success";
                $budget = "badge badge-success";
                $disabled = "disabled";
            }else if($stats=="Pendiente"){
                $class = "btn-outline-info";
                $budget = "badge badge-info";
                $disabled = "";
            }else if($stats=="Retrasado"){
                $class = "btn-outline-warning";
                $budget = "badge badge-warning";
                $disabled = "";
            }else if($stats=="Detenido"){
                $class = "btn-outline-stoped";
                $budget = "badge badge-stoped";
                $disabled = "";                    
            }else if($status==6){
                $class = "btn-outline-gray";
                $budget = "badge badge-gray";
                $disabled = "";                    
            }else if($status==7){
                $class = "btn-outline-stoped";
                $budget = "badge badge-stoped";
                $disabled = "";                    
            }else if($status==8){
                $class = "btn-outline-stoped";
                $budget = "badge badge-stoped";
                $disabled = "";                    
            }else if($status==9){
                $class = "btn-outline-danger";
                $budget = "badge badge-danger";
                $disabled = "";                    
            }else{
                $class = "";
                $budget = "";
                $disabled = "";
            }
            
            if($stats=='Listo'){
                
            }else{
                $date_end='';
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $area; ?></td>
                    <td><?php echo $employe; ?></td>
                    <td><?php echo $task; ?></td>
                    <td>
                        <button onclick="modalTask('<?php echo $task; ?>','<?php echo $id; ?>','<?php echo $idemploye; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                            <i class="material-icons md-14 align-middle mb-1 text-primary">speaker_notes</i>
                        </button>
                        <?php echo $shortCmt; ?>
                    </td>
                    <td>
                        <div id="p<?php echo $id; ?>" class="<?php echo $priorClass; ?>">
                            <?php echo $priority.'-'.$npriority; ?> 
                        </div>    
                    </td>
                    <td>
                        <div id="a<?php echo $id; ?>" class="badge badge-primary">
                            <?php echo $assignated; ?>
                        </div>    
                    </td>
                    <td><?php echo $date_ini; ?></td>
                    <td><?php echo $date_end; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div class="<?php echo $budget; ?>"><?php echo $stats; ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <?php  
                            if($status=='Aceptado'){
                                $disabled = "disabled";
                            }else{
                            ?>
                                <button onclick="editableTask('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                    <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                                </button>    
                                <button onclick="delTask('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                    <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                                </button>
                                <!--button onclick="uploadView('<?php echo $id; ?>','<?php echo $employe; ?>','<?php echo $task; ?>')" type="button" class="btn btn-outline-success btn-sm" <?php echo $disabled; ?>>
                                    <i class="material-icons md-14 align-middle mb-1 text-success">file_upload</i>
                                </button-->
                            <?php
                            }
                            ?>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function selectAllStatus($idTask){
        $res = $this->model->selectAllStatus($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $priority = $row['name'];
            
            ?>
                <div id="<?php echo $id; ?>" onclick="assignPriority('<?php echo $idTask; ?>','<?php echo $id; ?>','<?php echo $priority; ?>');" class="dropdown-item"><?php echo $priority; ?></div>
            <?php
        }
    }

    public function reports($dini,$dend,$area,$emp){
        $res = $this->model->reports($this->host,$this->user,$this->pass,$this->db,$dini,$dend,$area,$emp);
        
        $rows = array();
        while($row = mysqli_fetch_assoc($res)) {
            $rows[] = $row;
        }
        
        $json = json_encode($rows, JSON_UNESCAPED_UNICODE);
        echo $json;
    }

    public function assignpriority($id,$idTask){
        $res = $this->model->assignpriority($this->host,$this->user,$this->pass,$this->db,$id,$idTask);
    }

    public function editStatusTask($id,$status){
        $res = $this->model->editStatusTask($this->host,$this->user,$this->pass,$this->db,$id,$status);
        return $res;
    }

    public function delTask($id){
        $res = $this->model->delTask($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function numTask($priority=null,$status=null,$area=null){
        $res = $this->model->numTask($this->host,$this->user,$this->pass,$this->db,$priority,$status,$area);
        $row = mysqli_fetch_array($res);
        $response = $row['num'];
        return $response;
    }

    public function employe($area,$idTask){
        $res = $this->model->employe($this->host,$this->user,$this->pass,$this->db,$area);
        if($res){
            while($row = mysqli_fetch_array($res)){
                $id = $row['id'];
                $employe = $row['name'];
                
                ?>
                    <div id="<?php echo $id; ?>" onclick="assignTask('<?php echo $idTask; ?>','<?php echo $id; ?>','<?php echo $employe; ?>');" class="dropdown-item"><?php echo $employe; ?></div>
                <?php
            }
        }else{
            ?>
                <div class="dropdown-item">Sin Registros Aún</div>
            <?php
        }
        
    }

    public function employees($area){
        $res = $this->model->employe($this->host,$this->user,$this->pass,$this->db,$area);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $employe = $row['name'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $employe; ?></option>
            <?php
        }
    }

    public function assignTask($id,$idTask){
        $res = $this->model->assignTask($this->host,$this->user,$this->pass,$this->db,$id,$idTask);
    }

    public function msgTask($idUser,$idTask){
        $resIni = $this->model->initMsg($this->host,$this->user,$this->pass,$this->db,$idTask);
        $res = $this->model->msgTask($this->host,$this->user,$this->pass,$this->db,$idUser,$idTask);
        
        $rowIni = mysqli_fetch_array($resIni);
        $commentIni = $rowIni['description'];

        ?>
            <p>
                <div class="alert alert-success">
                    <?php echo $commentIni; ?>
                </div>
            </p>
            <br>
        <?php

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $user = $row['user'];
            $comment = $row['comment'];
            $date = $row['date'];
            $type = $row['type'];

            //set other color if is admin or super user
            if($type == 0 OR $type == 1){
                $alertClass = 'alert alert-primary';
            }else{
                $alertClass = 'alert alert-dark';
            }

            ?>
                <p>
                    <div class="<?php echo $alertClass; ?>" role="alert">
                        <?php echo $user.' | '.$comment; ?>
                        <hr>
                        <?php echo $date; ?>
                    </div>
                </p>
            <?php
        }
    }

    public function msgTaskResp($idTask,$msg){
        session_start();
        //session settings
        $idUser = $_SESSION["idSession"];
        $name = $_SESSION["userSession"];
        $level = $_SESSION['levelSession'];
        $type = intval($level);

        if(!empty($type) AND $type>1){
            $type = 2;
        }

        $res = $this->model->msgTaskResp($this->host,$this->user,$this->pass,$this->db,$idUser,$idTask,$msg,$type);
        return $res;
    }

    public function addDoc($id,$doc){
        $res = $this->model->addDoc($this->host,$this->user,$this->pass,$this->db,$id,$doc);
    }

    public function sendEmail($email=null,$msg){
        include '../includes/config.php';
        include '../includes/phpmailer/class.phpmailer.php';
        include '../includes/phpmailer/class.smtp.php';
        
        if(empty($email)){
            $email = "sistemas@rand.com.mx";
        }

        $emailSubject = "Actualización de Regulaciones";
        
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
            $mail->AddAddress($email, 'Regulación');
            $mail->AddAddress('developer@rand.com.mx', 'Regulación');
            $mail->Subject = $emailSubject;
            $mail->isHTML(true);
            $mail->MsgHTML('Actualización de estado de Regulación');
        
            $body = ''.$msg.'';
        
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
