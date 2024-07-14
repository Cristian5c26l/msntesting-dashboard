<?php

//init class
class c_alertep{
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
        $this->model = $model = new m_alertep();
    }

    public function addService($idarea,$service,$description){
        $res = $this->model->addservice($this->host,$this->user,$this->pass,$this->db,$idarea,$service,$description);
        return $res;
    }

    public function editService($id,$idarea,$service,$description){
        $res = $this->model->editService($this->host,$this->user,$this->pass,$this->db,$id,$idarea,$service,$description);
        return $res;
    }

    public function delService($id){
        $res = $this->model->delService($this->host,$this->user,$this->pass,$this->db,$id);
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

    public function selectServiceArea(){
        $res = $this->model->selectServiceArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $area; ?></option>
            <?php
        }
    }

    public function selectUserService($idarea){
        
        $res = $this->model->selectUserService($this->host,$this->user,$this->pass,$this->db,$idarea);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $service = $row['service'];
            $descript = $row['description'];
            $shortDesc = substr($descript, 0, 25).'...';
            $date_ini = $row['date_ini'];
            $date_end = $row['date_end'];
            $total = $this->numAlert(0,$id);
            $percent = $this->percent($id);
        
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
                    <td><?php echo $service; ?></td>
                    <td>
                        <!--button onclick="modalTicket('<?php //echo $title; ?>',' ','<?php //echo $id; ?>','<?php echo $idemploye; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                            <i class="material-icons md-14 align-middle mb-1 text-primary">speaker_notes</i>
                        </button-->
                        <?php echo $shortDesc; ?>
                    </td>
                    <td><?php echo $total; ?></td>
                    <td><?php echo $percent; ?></td>
                    <td><?php echo $date_ini; ?></td>
                    <td><?php echo $date_end; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div class="<?php echo $budget; ?>"><?php echo $stats; ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <?php  
                            /*if($stats=='Listo'){
                            }else{*/
                            ?>
                            <button onclick="editableServiceEP('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>    
                            <button onclick="delServiceEP('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                            <button onclick="detailServiceEP('<?php echo $id; ?>')" type="button" class="btn btn-outline-stoped btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-stoped">assignment</i>
                            </button>
                            <?php
                            /*}*/
                            ?>
                        </div>    
                    </td>
                </tr>
            <?php
        }    
    }

    public function selectService($id,$type=null){
        $res = $this->model->selectService($this->host,$this->user,$this->pass,$this->db,$id);

        if($type==1){
            $row = mysqli_fetch_array($res);
            $idarea = $row['idarea'];
            $service = $row['service'];
            $description = $row['description'];
            
                ?>
                    <form class="row" onsubmit="editServiceEP(<?php echo $id; ?>); return false;">
                    
                        <div class="form-group col-lg-12">
                            <input id="service" class="form-control" type="text" value="<?php echo $service; ?>" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="idarea" required>
                                <?php echo $this->selectServiceArea(); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea id="description" class="form-control" placeholder="Mensaje" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required><?php echo $description; ?></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                        </div>
                    </form>
                <?php
        }else{

        }
    }

    public function percent($idproject){
            $done = $this->numAlert(1,$idproject);
            $total = $this->numAlert(0,$idproject);
            //if not exist task and divition is zero/zero and not exist
            if(empty($total) AND empty($percent)){
                $percent = 0;
            }else{
                $done = intval($done);
                $total = intval($total);
                $percent = ($done/$total)*100;
            }
            //if not exist task and divition is nan
            if(empty($total)){
                $percent = 0;   
            }

            $percent = number_format($percent,2);
            return $percent;
    }

    //Ends Projects

    public function addAlert($idservice,$title,$comment,$date,$paytype){
        $res = $this->model->addAlert($this->host,$this->user,$this->pass,$this->db,$idservice,$title,$comment,$date,$paytype);
        return $res;
    }

    public function editAlert($id,$idservice,$title,$comment,$date,$paytype){
        $res = $this->model->editAlert($this->host,$this->user,$this->pass,$this->db,$id,$idservice,$title,$comment,$date,$paytype);
        return $res;
    }

    public function delAlert($id){
        $res = $this->model->delAlert($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function selectAlertService(){
        $res = $this->model->selectAlertService($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $service = $row['service'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $service; ?></option>
            <?php
        }
    }

    public function selectAlert($id,$type=null){
        $res = $this->model->selectAlert($this->host,$this->user,$this->pass,$this->db,$id);

        if($type==1){
            $row = mysqli_fetch_array($res);
            $idservice = $row['idservice'];
            $title = $row['title'];
            $comment = $row['comment'];
            $date_end = $row['date_end'];
            
                ?>
                    <form class="row" onsubmit="editAlertEP(<?php echo $id; ?>); return false;">
                        <div class="form-group col-lg-12">
                            <input id="title" class="form-control" type="text" value="<?php echo $title; ?>" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="idservice">Tipo de Servicio</label>
                            <select class="form-control" id="idservice" required>
                                <?php echo $this->selectAlertService(); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="date">Fecha Vigencia</label>
                            <input id="date" type="text" value="<?php echo $date_end; ?>" class="datepicker form-control" required="">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="date">Período de Pago</label>
                            <select class="form-control" id="paytype" required>
                                <option value="Anual">Anual</option>
                                <option value="Semestral">Semestral</option>
                                <option value="Trimestral">Trimestral</option>
                                <option value="Bimestral">Bimestral</option>
                                <option value="Mensual">Mensual</option>
                            </select>    
                        </div>    
                        <div class="form-group col-lg-12">
                            <textarea id="comment" class="form-control" placeholder="Mensaje" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required><?php echo $comment; ?></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                        </div>
                    </form>
                <?php
        }else{

        }
    }

    public function selectUserAlert($id,$iduser){
        
        $res = $this->model->selectUserAlert($this->host,$this->user,$this->pass,$this->db,$id,$iduser);
    
        while($row = mysqli_fetch_array($res)){
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
            $priorClass = $row['class'];

            $now = time();
            $finaldate = strtotime($date_end);
            $diff = $finaldate - $now;
            $diff = round($diff/(60*60*24));
            $cclass = "";
            $tdclass = "";

            if($diff<=7){
                $cclass = "bg-dribbble text-white font-weight-bold";
                $tdclass = "bg-light";
            }else if($diff>7 AND $diff<=15){
                $cclass = "bg-warning text-white font-weight-bold";
                $tdclass = "bg-light";
            }

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
            }else{
                $class = "";
                $budget = "";
                $disabled = "";
            }
            
            ?>
                <tr class="<?php echo $cclass; ?>">
                    <td><?php echo $id; ?></td>
                    <td><?php echo $service; ?></td>
                    <td><?php echo $title; ?></td>
                    <td>
                        <!--button onclick="modalTicket('<?php echo $title; ?>',' ','<?php echo $id; ?>','<?php //echo $idemploye; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                            <i class="material-icons md-14 align-middle mb-1 text-primary">speaker_notes</i>
                        </button-->
                        <?php echo $comment; //$shortCmt; ?>
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
                    <td><?php echo $period; ?></td>
                    <td><?php echo $diff; ?></td>
                    <td><?php echo $date_end; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div id="s<?php echo $id; ?>" class="<?php echo $budget; ?>"><?php echo $stats; ?></div>
                    </td>
                    <td class="<?php echo $tdclass; ?>">
                        <div class="table-buttons">
                            <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-succes">done</i>
                            </button>
                            <div class="dropdown-menu">
                                <div onclick="editStatusAlertEP('<?php echo $id; ?>',2,1,'<?php echo $period; ?>');" class="dropdown-item">Pagado</div>
                                <div onclick="editStatusAlertEP('<?php echo $id; ?>',2,2,'<?php echo $period; ?>');" class="dropdown-item">Reabrir</div>
                                <div onclick="editStatusAlertEP('<?php echo $id; ?>',7,3,'<?php echo $period; ?>');" class="dropdown-item">Detenido</div>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons md-14 align-middle mb-1 white-text">alarm</i>
                                </button>
                                <div class="dropdown-menu">
                                    <?php echo $this->selectAllStatus($id); ?>
                                </div>
                            </div>

                            <?php  
                            if($stats=='Listo'){
                            }else{
                            ?>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>
                                    <i class="material-icons md-14 align-middle mb-1 text-primary">person_add</i>
                                </button>
                                <div class="dropdown-menu">
                                    <?php echo $this->employee(1,$id); ?>
                                </div>
                            </div>
                            <button onclick="editableAlertEP('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>    
                            <button onclick="delAlertEP('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                            <?php
                            }
                            ?>
                        </div>    
                    </td>
                </tr>
            <?php
        }    
    }

    public function editStatusAlert($id,$status,$type,$period){
        $res = $this->model->editStatusAlert($this->host,$this->user,$this->pass,$this->db,$id,$status);
        $res2 = $this->model->selectAlert($this->host,$this->user,$this->pass,$this->db,$id);
        $row = mysqli_fetch_array($res2);
        $date = $row['date_end'];
        $newPeriod = '';

        if($type=='1'){ //sum
            if($period=='Anual'){
                $newPeriod = ' + 1 years'; 
            }else if($period=='Semestral'){
                $newPeriod = ' + 6 months';
            }else if($period=='Trimestral'){
                $newPeriod = ' + 3 months';
            }else if($period=='Bimestral'){
                $newPeriod = ' + 2 months';
            }else if($period=='Mensual'){
                $newPeriod = ' + 1 months';
            }
            $newDate = date('Y-m-d', strtotime($date.$newPeriod));
        }else if($type=='2'){ //rest
            if($period=='Anual'){
                $newPeriod = ' - 1 years'; 
            }else if($period=='Semestral'){
                $newPeriod = ' - 6 months';
            }else if($period=='Trimestral'){
                $newPeriod = ' - 3 months';
            }else if($period=='Bimestral'){
                $newPeriod = ' - 2 months';
            }else if($period=='Mensual'){
                $newPeriod = ' - 1 months';
            }
            $newDate = date('Y-m-d', strtotime($date.$newPeriod));
        }else{
            $newDate = $date;
        }

        $res3 = $this->model->updateDate($this->host,$this->user,$this->pass,$this->db,$id,$newDate);
        return $res3;
    }

    public function assignpriority($id,$idService){
        $res = $this->model->assignpriority($this->host,$this->user,$this->pass,$this->db,$id,$idService);
    }

    public function selectAllStatus($idService){
        $res = $this->model->selectAllStatus($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $priority = $row['name'];
            
            ?>
                <div id="<?php echo $id; ?>" onclick="assignPriorityAlertEP('<?php echo $idService; ?>','<?php echo $id; ?>','<?php echo $priority; ?>');" class="dropdown-item"><?php echo $priority; ?></div>
            <?php
        }
    }

    public function numAlert($status=null,$service=null){
        $res = $this->model->numAlert($this->host,$this->user,$this->pass,$this->db,$status,$service);
        $row = mysqli_fetch_array($res);
        $response = $row['num'];
        return $response;
    }

    public function employee($area,$idalert){
        $res = $this->model->employee($this->host,$this->user,$this->pass,$this->db,$area);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $employe = $row['name'];
            
            ?>
                <div id="<?php echo $id; ?>" onclick="assignAlert('<?php echo $idalert; ?>','<?php echo $id; ?>','<?php echo $employe; ?>');" class="dropdown-item"><?php echo $employe; ?></div>
            <?php
        }
    }
    public function assignAlert($id,$idalert){
        $res = $this->model->assignAlert($this->host,$this->user,$this->pass,$this->db,$id,$idalert);
    }
    /* End Alerts */

}
//end class
?>
