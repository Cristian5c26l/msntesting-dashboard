<?php

//init class
class c_eval{
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
        $this->model = $model = new m_eval();
    }

    public function selectUser($id){
        $res = $this->model->selectUser($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function nameUser($id){
        $res = $this->model->selectUser($this->host,$this->user,$this->pass,$this->db,$id);
        $row = mysqli_fetch_array($res);
        $name = $row['name'];
        $last = $row['last'];
        $fullname = $name.' '.$last;
        
        return $fullname;
    }

    public function selectAllUsers($mode=null){
        $res = $this->model->selectAllUsers($this->host,$this->user,$this->pass,$this->db,$mode);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $last = $row['last'];
            $fullname = $name.' '.$last;

            ?>
                <option value="<?php echo $id; ?>"><?php echo $fullname; ?></option>
            <?php
        }
    }

    public function selectedUser($idUser){
        $res = $this->model->selectAllUsers($this->host,$this->user,$this->pass,$this->db,$idUser);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $last = $row['last'];
            $fullname = $name.' '.$last;

            if($idUser==$id){
                $selected = "selected";
            }else{
                $selected = "";
            }

            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?> ><?php echo $fullname; ?></option>
            <?php
        }
    }

    public function userArea($id){
        $res = $this->model->userArea($this->host,$this->user,$this->pass,$this->db,$id);
        $row = mysqli_fetch_array($res);

        $id = $row['idarea'];
        $area = $row['area'];

        return $id.','.$area;

    }

    public function addEval($idUser,$date_eval,$duration,$dateini,$dateend,$area,$job,$special){
        $res = $this->model->addEval($this->host,$this->user,$this->pass,$this->db,$idUser,$date_eval,$duration,$dateini,$dateend,$area,$job,$special);
    }

    public function editEval($id,$idUser,$date_eval,$duration,$dateini,$dateend,$area,$job,$special){
        $res = $this->model->editEval($this->host,$this->user,$this->pass,$this->db,$id,$idUser,$date_eval,$duration,$dateini,$dateend,$area,$job,$special);
    }

    public function listAllEvals(){
        $res = $this->model->listAllEvals($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $user = $row['user'];
            $name = $row['name'];
            $description = $row['description'];
            $comment = $row['comment'];
            $area = $row['area'];
            $qty = $row['qty'];
            
            $res2 = $this->model->listStoInsume($this->host,$this->user,$this->pass,$this->db,$id,$iduser);

            $nqty = 0;
            
            while($row2 = mysqli_fetch_array($res2)){
                $type = $row2['type'];
                $qty = $row2['qty'];

                if($type=='1' OR $type=='2'){
                    $nqty = $nqty + $qty;
                }else if($type=='3'){
                    $nqty = $nqty - $qty;
                }
            }
           
            $total = $row['total'];
            $status = $row['status'];

            if($status==1){
                $disabled = '';
            }else{
                $disabled = 'disabled';
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><?php echo $comment; ?></td>
                    <td><?php echo $area; ?></td>
                    <td><?php echo $nqty; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableInsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delinsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                            <button onclick="modalInsume('<?php echo $id; ?>',1)" type="button" class="btn btn-outline-success btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-success">add</i>
                            </button>
                            <button onclick="modalInsume('<?php echo $id; ?>',2)" type="button" class="btn btn-outline-gray btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-gray">remove</i>
                            </button>
                            <button onclick="detailInsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-stoped btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-stoped">assignment</i>
                            </button>
                        </div>    
                    </td>
                </tr>    
            <?php
        }    

    }

    public function sendEmail($fullname,$date_cap,$area,$age,$birthday,$job,$obj,$agejob,$agesite,$study,$whatstudy,$education,$r,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10,$r11,$t1,$t2,$t3,$t4,$t5,$t6,$t7){
        include '../includes/config.php';
        include '../includes/phpmailer/class.phpmailer.php';
        include '../includes/phpmailer/class.smtp.php';

        $emailSubject = "Necesidades de Capacitación";
        $email = "d.santiago@rand.com.mx";

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
            $mail->AddAddress($email, 'Evaluaciones Rand RH');
            $mail->AddCC('developer@rand.com.mx', 'Evaluaciones');
            $mail->AddCC('camsat@rand.com.mx', 'Evaluaciones');
            $mail->Subject = $emailSubject;
            $mail->isHTML(true);
            $mail->MsgHTML('Link de Recuperación de Password');
        
            $body = '
            <style>
            th{
                text-align: left;
              }
            </style>
            <table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-table-striped dcf-w-100%">
                <thead>
                    <tr>
                        <td>DETECCION DE NECESIDADES DE CAPACITACIÓN 2021</td>
                    </tr>
                    <tr>
                        <td>Nombre: '.$fullname.'</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Fecha: </th>
                        <th scope="row">'.$date_cap.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Área: </th>
                        <th scope="row">Área: '.$area.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Edad: </th>
                        <th scope="row">'.$age.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Cumpleaños: </th>
                        <th scope="row">'.$birthday.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Puesto: </th>
                        <th scope="row">'.$job.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Objetivo del Puesto: </th>
                        <th scope="row">'.$obj.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Antiguedad en el Puesto: </th>
                        <th scope="row">'.$agejob.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Antiguedad en el Despacho: </th>
                        <th scope="row">'.$agesite.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Estudia?: </th>
                        <th scope="row">'.$study.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Qué Estudia?: </th>
                        <th scope="row">'.$whatstudy.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Experiencia en el área (mencione los puestos desempeñados hasta la actualidad en la empresa  asi como años de servicio en cada uno de ellos)</th>
                        <th scope="row">'.$r.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Conoce el perfil y descripción de su puesto?</th>
                        <th scope="row">'.$r2.'</th>
                    </tr>
                    <tr>
                        <th scope="row">De acuerdo a su criterio, indique las 3 responsabilidades / actividades más importantes de su puesto</th>
                        <th scope="row">'.$r3.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Describa cuáles son los conocimientos, habilidades y aptitudes para cumplir adecuadamente con las responsabilidades de su puesto actual?</th>
                        <th scope="row">'.$r4.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Indique la función  que más le gusta de su puesto. ¿Por qué?</th>
                        <th scope="row">'.$r5.'</th>
                    </tr>
                    <tr>
                        <th scope="row">Indique la función menos agradable de su puesto. ¿Por qué?</th>
                        <th scope="row">'.$r6.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Qué conocimientos generales necesitaria para su buen desempeño laboral? (relaciones humanas en el trabajo, conocimientos técnicos, seguridad e higiene, calidad en el igiene, calidad en el servicio u otro) ¿por qué?</th>
                        <th scope="row">'.$r7.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Qué conocimientos y habilidades especifcas de su puesto considera necesitaría desarrollar?</th>
                        <th scope="row">'.$r8.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Qué problemas tiene para realizar su trabajo satisfactoriamente?</th>
                        <th scope="row">'.$r9.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Si la respuesta anterior es positiva, indique a que cree que se deben los problemas que no le permiten realizar su trabajo satisfactoriamente?</th>
                        <th scope="row">'.$r10.'</th>
                    </tr>
                    <tr>
                        <th scope="row">¿Qué sugiere para mejorar el desempeño general de su área y del despacho?</th>
                        <th scope="row">'.$r11.'</th>
                    </tr>
                </tbody>
            </table>

            <table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-table-striped dcf-w-100%">
            <thead>
                <tr>
                    <td>Nombre: '.$fullname.'</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Evaluaciones de desempeño</th>
                    <th scope="row">Valuación de puestos</th>
                </tr>
                <tr>
                    <th scope="row">'.$t1.'</th>
                    <th scope="row">'.$t2.'</th>
                </tr>
                </tbody>
            </table>


            <table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-table-striped dcf-w-100%">
            <thead>
                <tr>
                    <td>Nombre: '.$fullname.'</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Análisis y conocimiento del método de evaluación por puntos</th>
                    <th scope="row">Evaluciones de desempeño 2022</th>
                    <th scope="row">Evaluaciones objetivas en base a un método específico</th>
                    <th scope="row">Primer trimestre</th>
                    <th scope="row">Evaluaciones y tabuladores salariales actualizados</th>
                </tr>
                <tr>
                    <th scope="row">'.$t3.'</th>
                    <th scope="row">'.$t4.'</th>
                    <th scope="row">'.$t5.'</th>
                    <th scope="row">'.$t6.'</th>
                    <th scope="row">'.$t7.'</th>
                </tr>
                </tbody>
            </table>
          ';
        
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

    public function editableInsume($id){
        $res = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);
        $name = $row['name'];
        $area = $row['idarea'];
        $description = $row['description'];
        $qty = $row['qty'];
        $expire = $row['expire'];
        if(empty($expire)){
            $expire = date("Y-m-d");
            $selected = "";
        }else{
            $selected = "selected";
        }
        ?>
            <form class="row" onsubmit="editInsume(); return false;">
                <div class="form-group col-lg-6">
                    <input id="id" class="form-control" type="hidden" value="<?php echo $id; ?>" required>
                    <input id="name" class="form-control" type="text" value="<?php echo $name; ?>" placeholder="Nombre Insumo" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="idarea" required>
                        <?php echo $this->selectedInsumeArea($area); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <input id="description" class="form-control" type="text" value="<?php echo $description; ?>" placeholder="Descripción" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="qty" class="form-control" type="text" value="<?php echo $qty; ?>" placeholder="Cantidad" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="expiration" required>
                        <option value="0">No Perecedero</option>
                        <option value="1" <?php echo $selected; ?> >Perecedero</option>
                    </select>
                </div>
                <div id="exp" style="display:none" class="form-group col-lg-6">
                    <input id="expire" class="form-control datepicker" type="text" value="<?php echo $expire; ?>" required>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
        <?php
    }

    public function delInsume($id){
        $res = $this->model->delInsume($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function editableDetail($id){
        $res = $this->model->getInsumeDetail($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);
        $comment = $row['comment'];
        $qty = $row['qty'];
        $expire = $row['expire'];
        if(empty($expire)){
            $expire = date("Y-m-d");
            $selected = "";
        }else{
            $selected = "selected";
        }
        ?>
            <form class="form-group col-lg-12 row" onsubmit="editDetail(); return false;">
                <div class="col-lg-12 row">
                    <div class="form-group col-lg-4">
                        <select class="form-control" id="sumrest" required>
                            <option value="2">Agregar a Inventario</option>
                            <option value="3">Disminuir del Inventario</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <input id="modify" type="number" min="1" class="form-control border-dark" value="<?php echo $qty; ?>" placeholder="">
                    </div>
                    <div class="form-group col-lg-4">
                        <input id="comment" type="text" class="form-control border-dark" value="<?php echo $comment; ?>" placeholder="Comentario">
                        <input id="idInsume" type="hidden" value="<?php echo $id; ?>">
                    </div>
                </div>
                <div class="col-lg-12 row">
                    <div class="form-group col-lg-6">
                        <select class="form-control" id="expiration" required>
                            <option value="0">No Perecedero</option>
                            <option value="1" <?php echo $selected; ?>>Perecedero</option>
                        </select>
                    </div>
                    <div id="exp" style="display:none" class="form-group col-lg-6">
                        <input id="expire" class="form-control datepicker" type="text" value="<?php echo date("Y-m-d") ?>" required>
                    </div>
                </div>
                
                <div class="form-group col-lg-6">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn btn-white" onclick="menu('inventory/newinsume')">Regresar a Insumos</button>
                </div>
            </form>
        <?php
    }

    public function sumInsume($id,$iduser,$qty,$comment,$expire){
        $res = $this->model->sumInsume($this->host,$this->user,$this->pass,$this->db,$id,$iduser,$qty,$comment,$expire);
        return $res;
    }

    public function restInsume($id,$iduser,$qty,$comment){
        $res = $this->model->restInsume($this->host,$this->user,$this->pass,$this->db,$id,$iduser,$qty,$comment);
        return $res;
    }

    public function modifyInsume($id,$qty,$comment,$expire,$sumrest){
        $res = $this->model->modifyInsume($this->host,$this->user,$this->pass,$this->db,$id,$qty,$comment,$expire,$sumrest);
        return $res;
    }

    public function delDetail($id){
        $res = $this->model->delDetail($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function getInsume($id){
        $res = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function listStoInsume($id,$iduser){
        $res = $this->model->listStoInsume($this->host,$this->user,$this->pass,$this->db,$id,$iduser);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            //$name = $row['name'];
            $user = $row['user'];
            $comment = $row['comment'];
            $qty = $row['qty'];
            $date = $row['opdate'];
            $type = $row['type'];
            $expire = $row['expire'];

            if(empty($expire)){
                $expire = "N/A";
            }

            $status = $row['status'];

            $in = array("1","2","3");
            $out   = array("Stock Inicial", "Entrada", "Salida");

            $newtype = str_replace($in, $out, $type);

            if($status==1){
                $disabled = '';
            }else{
                $disabled = 'disabled';
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $user; ?></td>
                    <!--td><?php //echo $name; ?></td-->
                    <td><?php echo $comment; ?></td>
                    <td><?php echo $qty; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $newtype; ?></td>
                    <td><?php echo $expire; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableDetail('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delDetail('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>    
            <?php
        }
    }

    public function addInsumeArea($name){
        $res = $this->model->addInsumeArea($this->host,$this->user,$this->pass,$this->db,$name);
    }

    public function editInsumeArea($id,$name){
        $res = $this->model->editInsumeArea($this->host,$this->user,$this->pass,$this->db,$id,$name);
    }

    public function editableInsumeArea($id){
        $res = $this->model->editableInsumeArea($this->host,$this->user,$this->pass,$this->db,$id);

        $row = mysqli_fetch_array($res);
        $name = $row['name'];
            
        ?>
            <form class="row" onsubmit="editAreaInsume(<?php echo $id; ?>); return false;">
            
                <div class="form-group col-lg-12">
                    <input id="name" class="form-control" type="text" value="<?php echo $name; ?>" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
        <?php
    }

    public function allInsumeAreas(){
        $res = $this->model->allInsumeAreas($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $status = $row['status'];

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableAreaInsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>    
                            <button onclick="delAreaInsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function delInsumeArea($id){
        $res = $this->model->delInsumeArea($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function selectInsumeArea(){
        $res = $this->model->selectInsumeArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
            <?php
        }
    }

    public function selectedInsumeArea($area){
        $res = $this->model->selectInsumeArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            
            if($id==$area){
                $selected = 'selected';
            }else{
                $selected = '';
            }

            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $name; ?></option>
            <?php
        }
    }
    
}
//end class
?>