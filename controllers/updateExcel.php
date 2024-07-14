<?php

//init class
class c_sysinv{
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
        $this->model = $model = new m_sysinv();
    }

    public function addInsume($idmark,$idsize,$name,$description,$st,$mac,$code,$sku,$ubication,$type){
        $res = $this->model->addInsume($this->host,$this->user,$this->pass,$this->db,$idmark,$idsize,$name,$description,$st,$mac,$code,$sku,$ubication,$type);
        return $res;
    }

    public function editInsume($id,$idmark,$idsize,$name,$description,$st,$mac,$code,$sku,$ubication,$type){
        $res = $this->model->editInsume($this->host,$this->user,$this->pass,$this->db,$id,$idmark,$idsize,$name,$description,$st,$mac,$code,$sku,$ubication,$type);
        return $res;
    }

    public function selectInsumeType(){
        $res = $this->model->selectInsumeType($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $insume = $row['insume'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $insume; ?></option>
            <?php
        }
    }

    public function selectedInsumeType($idinsume){
        $res = $this->model->selectInsumeType($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $insume = $row['insume'];

            if($idinsume==$id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $insume; ?></option>
            <?php
        }
    }

    public function selectSize(){
        $res = $this->model->selectSize($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $storage = $row['storage'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $storage; ?></option>
            <?php
        }
    }

    public function selectedSize($idsize){
        $res = $this->model->selectSize($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $storage = $row['storage'];

            if($idsize==$id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $storage; ?></option>
            <?php
        }
    }

    public function selectMark(){
        $res = $this->model->selectMark($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $mark = $row['mark'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $mark; ?></option>
            <?php
        }
    }

    public function selectedMark($idmark){
        $res = $this->model->selectMark($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $mark = $row['mark'];

            if($idmark==$id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $mark; ?></option>
            <?php
        }
    }

    public function assignArea($id,$idarea){
        $res = $this->model->assignArea($this->host,$this->user,$this->pass,$this->db,$id,$idarea);
        return $res;
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

    public function selectedArea($idarea){
        $res = $this->model->selectArea($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];

            if($idarea==$id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $area; ?></option>
            <?php
        }
    }

    public function selectUbication(){
        $res = $this->model->selectUbication($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $ubication = $row['ubication'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $ubication; ?></option>
            <?php
        }
    }

    public function selectedUbication($idubication){
        $res = $this->model->selectUbication($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $ubication = $row['ubication'];

            if($idubication==$id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $ubication; ?></option>
            <?php
        }
    }

    public function assignUser($id,$iduser){
        $res = $this->model->assignUser($this->host,$this->user,$this->pass,$this->db,$id,$iduser);
        return $res;
    }

    public function selectUser($id=null){
        $res = $this->model->selectUser($this->host,$this->user,$this->pass,$this->db,$id);
        
        while($row = mysqli_fetch_array($res)){
            $iduser = $row['id'];
            $name = $row['name'];
            $last = $row['last'];

            if($id==$iduser){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $iduser; ?>" <?php echo $selected; ?> ><?php echo $name.' '.$last; ?></option>
            <?php
        }
    }

    public function assignMotive($id,$idmotive){
        $res = $this->model->assignMotive($this->host,$this->user,$this->pass,$this->db,$id,$idmotive);
        return $res;
    }

    public function selectMotive($id=null){
        $res = $this->model->selectMotive($this->host,$this->user,$this->pass,$this->db,$id);
        
        while($row = mysqli_fetch_array($res)){
            $idreason = $row['id'];
            $motive = $row['reason'];

            if($id==$idreason){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $idreason; ?>" <?php echo $selected; ?>><?php echo $motive; ?></option>
            <?php
        }
    }

    public function assignate($id,$iduser,$idmotive){
        $res = $this->model->assignate($this->host,$this->user,$this->pass,$this->db,$id,$iduser,$idmotive);
        $res2 = $this->model->getUser($this->host,$this->user,$this->pass,$this->db,$iduser);

        $row = mysqli_fetch_array($res2);
        $idarea = $row['idarea'];

        $res2 = $this->assignArea($id,$idarea);
    }

    public function quitAssignate($id){
        $res = $this->model->quitAssignate($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function editableInsume($id){
        $res = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);

        $area = $row['area'];
        $user = $row['user'];
        $last = $row['last'];
        $username = $user.' '.$last;
        $name = $row['name'];
        $motive = $row['motive'];
        $idmark = $row['idmark'];
        $mark = $row['mark'];
        $size = $row['size'];
        $idsize = $row['idsize'];
        $description = $row['description'];
        $st = $row['st'];
        $mac = $row['mac'];
        $code = $row['code'];
        $sku = $row['sku'];
        $type = $row['type'];

        if($st=='Nuevo'){
            $s1="selected";
            $s2="";
            $s3="";
        }else if($st=='Usado'){
            $s1="";
            $s2="selected";
            $s3="";
        }else if($st=='Baja'){
            $s1="";
            $s2="";
            $s3="selected";
        }else{
            $s1="";
            $s2="";
            $s3="";
        }

        $ubication = $row['ubication'];
    
        ?>
            <form class="row" onsubmit="editInsumeSys(); return false;">
                <input type="hidden" name="" id="id" value="<?php echo $id; ?>">
                <div class="form-group col-lg-4">
                    <label for="type">Tipo de Insumo:</label>
                    <select class="form-control" id="type" required>
                        <option value="">Tipo de Insumo</option>
                        <?php echo $this->selectedInsumeType($type); ?>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="idmark">Marca:</label>
                    <select class="form-control" id="idmark" required>
                        <?php echo $this->selectedMark($idmark); ?>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="idsize">Capacidad:</label>
                    <select class="form-control" id="idsize" required>
                        <?php echo $this->selectedSize($idsize); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="name">Nombre Insumo</label>
                    <input id="name" class="form-control" type="text" value="<?php echo $name; ?>" placeholder="Nombre Insumo" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="description">Descripción:</label>
                    <input id="description" class="form-control" type="text" value="<?php echo $description; ?>" placeholder="Descripción" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="st">Condición del Insumo</label>
                    <select class="form-control" id="st" required>
                        <option value="">Condición del Insumo</option>
                        <option value="Nuevo" <?php echo $s1; ?>>Nuevo</option>
                        <option value="Usado" <?php echo $s2; ?>>Usado</option>
                        <option value="Baja" <?php echo $s3; ?>>Baja</option>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="mac">Dirección MAC:</label>
                    <input id="mac" class="form-control" type="text" value="<?php echo $mac; ?>" placeholder="MAC address">
                </div>
                <div class="form-group col-lg-3">
                    <label for="code">Código:</label>
                    <input id="code" class="form-control" type="text" value="<?php echo $code; ?>" placeholder="Código">
                </div>
                <div class="form-group col-lg-3">
                    <label for="sku">SKU/Serie:</label>
                    <input id="sku" class="form-control" type="text" value="<?php echo $sku; ?>" placeholder="SKU/Serie" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="ubication">Ubicación:</label>
                    <select class="form-control" id="ubication" required>
                        <option value="">Ubicación del Insumo</option>
                        <?php echo $this->selectedUbication($ubication); ?>
                    </select>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                </div>
            </form>
        <?php
    }

    public function delInsume($id){
        $res = $this->model->delInsume($this->host,$this->user,$this->pass,$this->db,$id);
        $res = $this->model->delMI($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function getInsume($id){
        $res = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function listAllInsume($iduser){
        $res = $this->model->listAllInsume($this->host,$this->user,$this->pass,$this->db,$iduser);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $user = $row['user'];
            $last = $row['last'];
            $username = $user.' '.$last;
            $name = $row['name'];
            $motive = $row['motive'];
            $mark = $row['mark'];
            $size = $row['size'];
            $description = $row['description'];
            $st = $row['st'];
            $mac = $row['mac'];
            $code = $row['code'];
            $sku = $row['sku'];
            $ubication = $row['ubication'];
            $myubication = $row['myubication'];
            $type = $row['type'];
            $status = $row['status'];
            $assignation = "Libre";
            $class = "bg-success text-white font-weight-bold";

            $in = array("1","2","3");
            $out   = array("PC", "Laptop", "Otro");

            $newtype = str_replace($in, $out, $type);
            
            $assignate = $row['assignate'];
            if(!empty($assignate)){
                $assignation = "Asignado";
                $class = "bg-success text-white font-weight-bold";
            }else{
                $class = "bg-secondary text-white font-weight-bold";
            }

            if($status==1){
                $disabled = '';
            }else{
                $disabled = 'disabled';
            }

            if($st=="Baja"){
                $class = 'bg-danger text-white font-weight-bold';
                $assignation = "Baja";
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $area; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $motive; ?></td>
                    <td><?php echo $mark; ?></td>
                    <td><?php echo $size; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><?php echo $st; ?></td>
                    <td><?php echo $mac; ?></td>
                    <td><?php echo $code; ?></td>
                    <td><?php echo $sku; ?></td>
                    <td><?php echo $myubication; ?></td>
                    <td><?php echo $newtype; ?></td>
                    <td class="<?php echo $class; ?>"><?php echo $assignation; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableInsumesys('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delInsumeSys('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                            <button onclick="confInsumesys('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">person_add</i>
                            </button>
                            <button onclick="serviceInsumesys('<?php echo $id; ?>')" type="button" class="btn btn-outline-stoped btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-stoped">build</i>
                            </button>
                            <button onclick="responsive('<?php echo $iduser; ?>')" type="button" class="btn btn-outline-success btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-success">book</i>
                            </button>
                        </div>    
                    </td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="c<?php echo $id; ?>" value="<?php echo $code; ?>" name="qrimp">
                            <label class="custom-control-label align-middle" for="c<?php echo $id; ?>">QR</label>
                        </div>
                    </td>
                </tr>    
            <?php
        }    

    }

    public function assignateInsume($id){
        $res = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$id);
            
            $row = mysqli_fetch_array($res);
            $name = $row['name'];
            $description = $row['description'];
            $mark = $row['mark'];
            $size = $row['size'];
            $mac = $row['mac'];
            $sku = $row['sku'];
            $ubication = $row['ubication'];
            $iduser = $row['iduser'];
            $idmotive = $row['idmotive'];
            
        ?>
            <!--h3><?php //echo $name;?></h3-->
            <form class="row" onsubmit="assignateInsume(); return false;">
                <div class="form-group col-lg-12">
                    <input id="id" class="form-control" type="hidden" value="<?php echo $id;?>" disabled>
                    <input id="name" class="form-control" type="text" value="Insumo: <?php echo $name.' / Descripción:'.$description;?>" disabled>
                </div>
                <div class="form-group col-lg-4">
                    <input id="mark" class="form-control" type="text" value="Marca: <?php echo $mark;?>" disabled>
                </div>
                <div class="form-group col-lg-4">
                    <input id="size" class="form-control" type="text" value="Capacidad: <?php echo $size;?>" disabled>
                </div>
                <div class="form-group col-lg-4">
                    <input id="mac" class="form-control" type="text" value="MAC address: <?php echo $mac;?>" disabled>
                </div>
                <div class="form-group col-lg-4">
                    <input id="sku" class="form-control" type="text" value="SKU/Serie: <?php echo $sku;?>" disabled>
                </div>
                <div class="form-group col-lg-4">
                    <input id="code" class="form-control" type="text" value="Código: <?php echo $code;?>" disabled>
                </div>
                <div class="form-group col-lg-4">
                    <input id="ubication" class="form-control" type="text" value="Ubicación: <?php echo $ubication;?>" disabled>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="iduser">
                        <option value="0">Remover Asignación</option>
                        <?php echo $this->selectUser($iduser); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="idmotive">
                        <?php echo $this->selectMotive($idmotive); ?>
                    </select>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar Asignaciones</button> 
                </div>
            </form>
        <?php
    }

    public function QRInsume($code){
        $res = $this->model->getQRInsume($this->host,$this->user,$this->pass,$this->db,$code);
        
        $row = mysqli_fetch_array($res);

        $iduser = $row['iduser'];
        $area = $row['area'];
        $user = $row['user'];
        $last = $row['last'];
        $username = $user.' '.$last;
        $name = $row['name'];
        $motive = $row['motive'];
        $mark = $row['mark'];
        $size = $row['size'];
        $description = $row['description'];
        $st = $row['st'];
        $mac = $row['mac'];
        $code = $row['code'];
        $sku = $row['sku'];
        $type = $row['type'];

        $ubication = $row['ubication'];

        if(!empty($description) AND !empty($mark)){
            ?>
                <div class="row p-20">
                    <div class="col-md-12">
                        <p><?php echo $area; ?></p>
                        <p><?php echo $username; ?></p>
                        <p><?php echo $motive; ?></p>
                        <p><?php echo $mark; ?></p>
                        <p><?php echo $size; ?></p>
                        <p><?php echo $sku; ?></p>
                        <p><?php echo $description; ?></p>
                        <p><?php echo $st; ?></p>
                        <p><?php echo $mac; ?></p>
                        <p><?php echo $code; ?></p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button onclick="addQRHistory('<?php echo $code; ?>',1);" class="btn btn-success col-md-12">Correcto</button>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <button onclick="addQRHistory('<?php echo $code; ?>',2);" class="btn btn-primary col-md-12">En Revisión</button>
                    </div>
                    <hr>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="comment">Comentario Revisión o Respaldo:</label>
                        <input id="comment" class="form-control" type="text" value="" placeholder="Comentario">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <button onclick="addBackup(<?php echo $iduser; ?>);" class="btn btn-success col-md-12">Registrar Respaldo</button>
                    </div>
                </div>
                <script>
                    historyQR('<?php echo $code; ?>');
                    historyBackup('<?php echo $iduser; ?>');
                </script>
            <?php

        }else{
            echo 0;
        }
    }

    public function addQRHistory($code,$verify,$comment){
        $res = $this->model->addQRHistory($this->host,$this->user,$this->pass,$this->db,$code,$verify,$comment);
        return $res;
    }

    public function QRHistory($code){
        $res = $this->model->QRHistory($this->host,$this->user,$this->pass,$this->db,$code);
        
        while($row = mysqli_fetch_array($res)){

            $verify = $row['verify'];
            $comment = $row['comment'];
            $date = $row['date_verify'];

            if(!empty($verify) AND !empty($date)){
                if($verify==1){
                    $verify = "Correcto";
                    $class = "alert-primary";
                }else{
                    $verify = "En Revisión";
                    $class = "alert-warning";
                }
                ?>
                <div class="row alert <?php echo $class; ?> alert-dismissable fade show" role="alert">
                    <div class="col-md-4"><?php echo $verify; ?></div>
                    <div class="col-md-4"><?php echo $comment; ?></div>
                    <div class="col-md-4"><?php echo $date; ?></div>
                </div>
                <?php

            }else{
                echo 0;
            }
        }
    }

    public function addBackup($id,$comment){
        $res = $this->model->addBackup($this->host,$this->user,$this->pass,$this->db,$id,$comment);
        return $res;   
    }

    public function editableBackup($id){
        $res = $this->model->getBackup($this->host,$this->user,$this->pass,$this->db,$id);

        while($row = mysqli_fetch_array($res)){

            $iduser = $row['iduser'];
            $comment = $row['comment'];
        ?>
        <form class="row" onsubmit="editBackup(); return false;">
                <div class="form-group col-lg-6">
                    <input id="id" type="hidden" value="<?php echo $id; ?>">
                    <select class="form-control" id="iduser" required>
                        <option value="">Selecciona un Empleado</option>
                        <?php echo $this->selectUser($iduser); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <input id="comment" type="text" class="form-control" value="<?php echo $comment; ?>" placeholder="Comentario">
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
        <?php
        }
    }

    public function editBackup($id,$iduser,$comment){
        $res = $this->model->editBackup($this->host,$this->user,$this->pass,$this->db,$id,$iduser,$comment);
        return $res;   
    }

    public function historyBackup($id){
        $res = $this->model->historyBackup($this->host,$this->user,$this->pass,$this->db,$id);
        
        while($row = mysqli_fetch_array($res)){

            $iduser = $row['iduser'];
            $user = $row['user'];
            $comment = $row['comment'];
            $last = $row['last'];
            $username = $user.' '.$last;
            $date = $row['dateback'];

            if(!empty($iduser)){
                ?>
                <div class="row alert alert-primary alert-dismissable fade show" role="alert">
                    <div class="col-md-4"><?php echo $username; ?></div>
                    <div class="col-md-4"><?php echo $comment; ?></div>
                    <div class="col-md-4"><?php echo $date; ?></div>
                </div>
                <?php

            }else{
                echo 0;
            }
        }
    }

    public function listBackup(){
        $res = $this->model->listBackup($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $iduser = $row['iduser'];
            $user = $row['user'];
            $comment = $row['comment'];
            $last = $row['last'];
            $username = $user.' '.$last;
            $date = $row['dateback'];
            $status = $row['nstatus'];

            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $comment; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $status; ?></td>
                <td>
                    <div class="table-buttons">
                        <button onclick="editableBackup('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                            <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                        </button>
                        <button onclick="delBackup('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm">
                            <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                        </button>
                    </div>    
                </td>
            </tr>
            <?php
        }
    }


    /* Maintenance */

    public function addMaintenance($idpc,$component,$description,$type,$wresult,$result){
        $res0 = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$idpc);
        $row = mysqli_fetch_array($res0);
        $iduser = $row['iduser'];
        $idarea = $row['idarea'];
        $user = $row['user'];
        $last = $row['last'];
        $sku = $row['sku'];
        $ubication = $row['ubication'];
        $username = $user.' '.$last;

        $res = $this->model->addMaintenance($this->host,$this->user,$this->pass,$this->db,$idpc,$username,$component,$description,$type,$sku,$wresult,$result);
        $res2 = $this->model->setUserComponent($this->host,$this->user,$this->pass,$this->db,$component,$iduser,$idarea,$motive=5,$ubication);
        return $res;
    }

    public function editMaintenance($id,$idpc,$component,$description,$type,$wresult,$result){
        $res0 = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$idpc);
        $row = mysqli_fetch_array($res0);
        $iduser = $row['iduser'];
        $idarea = $row['idarea'];
        $user = $row['user'];
        $last = $row['last'];
        $sku = $row['sku'];
        $ubication = $row['ubication'];
        $username = $user.' '.$last;

        $res = $this->model->editMaintenance($this->host,$this->user,$this->pass,$this->db,$id,$idpc,$username,$component,$description,$type,$sku,$wresult,$result);
        $res2 = $this->model->setUserComponent($this->host,$this->user,$this->pass,$this->db,$component,$iduser,$idarea,$motive=5,$ubication);
        return $res;
    }

    public function delMaintenance($id,$component){
        $res = $this->model->delMaintenance($this->host,$this->user,$this->pass,$this->db,$id);
        $res2 = $this->model->removeUserComponent($this->host,$this->user,$this->pass,$this->db,$component);
        return $res;
    }

    public function editableMaintenance($id){
        $res = $this->model->getManteinance($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);
        $id = $row['id'];
        $idpc = $row['idpc'];   
        $component = $row['component'];
        $description = $row['description'];
        $type = $row['type'];
        $wresult = $row['wresult'];
        $result = $row['results'];
        $select = "";
    
        ?>
            <form class="row" onsubmit="editMaintenance(); return false;">
                <input type="hidden" id="id" value="<?php echo $id; ?>">
                <input type="hidden" id="idpc" value="<?php echo $idpc; ?>">
                <div class="form-group col-lg-6">
                    <label for="component">Componente Agregado/Usado/Reparado:</label>
                    <select class="form-control" id="component" required>    
                        <?php echo $this->selectedComponent($component); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="description">Descripción:</label>
                    <input id="description" class="form-control" type="text" value="<?php echo $description; ?>" placeholder="Descripción" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="type" required>
                        <option value="">Tipo de Mantenimiento</option>
                        <?php
                            if($type==1){
                        ?>
                        <option value="1" selected>Interno</option>
                        <option value="2">Externo</option>
                        <?php
                            }else if($type==2){
                        ?>
                        <option value="1">Interno</option>
                        <option value="2" selected>Externo</option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <input id="wresult" class="form-control" type="text" value="<?php echo $wresult; ?>" placeholder="Resultado Esperado">
                </div>
                <div class="form-group col-lg-4">
                    <input id="result" class="form-control" type="text" value="<?php echo $result; ?>" placeholder="Resultado(s) Obtenido(s)" required>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
        <?php
    }

    public function selectComponent(){
        $res = $this->model->listComponent($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $sku = $row['sku'];

            ?>
                <option value="<?php echo $id; ?>"><?php echo $name.' / Sku:'.$sku; ?></option>
            <?php
        }
    }

    public function selectedComponent($component){
        $res = $this->model->listComponent($this->host,$this->user,$this->pass,$this->db);

        if($component==0 OR $component=='0'){
            $select = "selected";
        }else{
            $select = "";
        }

        ?>
            <option value="0" <?php echo $select; ?>>Ninguno o del Mismo Equipo</option>
        <?php

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $sku = $row['sku'];

            if($component==$id){
                $selected="selected";
            }else{
                $selected="";
            }

            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?> ><?php echo $name.' / Sku:'.$sku; ?></option>
            <?php
        }
    }

    public function listMaintenance($idpc){
        $res = $this->model->listMaintenance($this->host,$this->user,$this->pass,$this->db,$idpc);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $user = $row['user'];
            $nameC = $row['name'];
            $component = $row['component'];
            $description = $row['description'];
            $type = $row['type'];
            $sku = $row['sku'];
            $wresult = $row['wresult'];
            $result = $row['results'];
            $date = $row['date'];

            $status = $row['status'];

            $in = array("1","2");
            $out   = array("Interno", "Externo");

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
                    <td><?php echo $nameC; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><?php echo $newtype; ?></td>
                    <td><?php echo $sku; ?></td>
                    <td><?php echo $wresult; ?></td>
                    <td><?php echo $result; ?></td>
                    <td><?php echo $date; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableMaintenance('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delMaintenance('<?php echo $id; ?>','<?php echo $component; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>    
            <?php
        }
    }
    
    public function responsive($id){
        $res = $this->model->responsive($this->host,$this->user,$this->pass,$this->db,$id);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $sku = $row['sku'];

            ?>
                <div>
                    <h1 style="text-align:center">Inventario</h1>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <td style="width:300px">Nombre del Usuario</td>
                                    <td style="width:300px">1.1</td>
                                </tr>
                                <tr>
                                    <td>Departamento</td>
                                    <td>2.1</td>
                                </tr>
                                <tr>
                                    <td>Puesto</td>
                                    <td>1.1</td>
                                </tr>
                                <tr>
                                    <td>Ubicación</td>
                                    <td>1.1</td>
                                </tr>
                                <tr>
                                    <td>Centro de Costo</td>
                                    <td>1.1</td>
                                </tr>
                                <tr>
                                    <td>Marca y Modelo</td>
                                    <td>1.1</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>

                        <table>
                            <tbody>
                                <tr style="border:none">
                                    <td colspan="2" style="width:300px; font-weight: bold;">Detalles de Solicitud</td>
                                    <td colspan="2" style="width:300px; font-weight: bold;">Detalles de Compra</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Solicita</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">Fecha de Compra</td>
                                    <td style="width:180px;">1.1</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Equipo Solicitado</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">Fecha de Entrega</td>
                                    <td style="width:180px;">1.1</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Motivo</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">Proveedor</td>
                                    <td style="width:180px;">1.1</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Autoriza</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">Factura</td>
                                    <td style="width:180px;">1.1</td>
                                </tr>

                                <tr style="border:none">
                                    <td colspan="4" style="width:300px; font-weight: bold;">Detalles del Equipo Software</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Software</td>
                                    <td style="width:180px;">Nombre</td>
                                    <td style="width:120px;">Versión</td>
                                    <td style="width:180px;">Licencia</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Sistema Operativo</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">1.2</td>
                                    <td style="width:180px;">1.3</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Ofimática</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">1.2</td>
                                    <td style="width:180px;">1.3</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Administración</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">1.2</td>
                                    <td style="width:180px;">1.3</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">PDF</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">1.2</td>
                                    <td style="width:180px;">1.3</td>
                                </tr>
                                <tr>
                                    <td style="width:120px;">Antivirus</td>
                                    <td style="width:180px;">1.1</td>
                                    <td style="width:120px;">1.2</td>
                                    <td style="width:180px;">1.3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <div style="background: #000;">Hola</div>
                    </div>
                </div>
                <hr>
            <?php
        }
    }

    public function getCodes(){
        $res = $this->model->getCodes($this->host,$this->user,$this->pass,$this->db);
        $codeArray = Array();

        while ($row = mysqli_fetch_array($res)){
            $codeArray[] = $row['code'];
        }
        
        return $codeArray;
    }
}
//end class
?>