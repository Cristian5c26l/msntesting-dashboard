<?php

//init class
class c_project{
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
        $this->model = $model = new m_project();
    }

    public function addProject($idarea,$project,$description){
        $res = $this->model->addProject($this->host,$this->user,$this->pass,$this->db,$idarea,$project,$description);
        return $res;
    }

    public function editProject($id,$idarea,$project,$description){
        $res = $this->model->editProject($this->host,$this->user,$this->pass,$this->db,$id,$idarea,$project,$description);
        return $res;
    }

    public function delProject($id){
        $res = $this->model->delProject($this->host,$this->user,$this->pass,$this->db,$id);
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

    public function selectProjectArea(){
        $res = $this->model->selectProjectArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $area; ?></option>
            <?php
        }
    }

    public function selectUserProjects($idarea){
        
        $res = $this->model->selectUserProjects($this->host,$this->user,$this->pass,$this->db,$idarea);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $project = $row['project'];
            $descript = $row['description'];
            $shortDesc = substr($descript, 0, 25).'...';
            $date_ini = $row['date_ini'];
            $date_end = $row['date_end'];
            $total = $this->numTask(0,$id);
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
                    <td><?php echo $project; ?></td>
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
                            if($stats=='Listo'){
                            }else{
                            ?>
                            <button onclick="editableProject('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>    
                            <button onclick="delProject('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                            <button onclick="detailProject('<?php echo $id; ?>')" type="button" class="btn btn-outline-stoped btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-stoped">assignment</i>
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

    public function selectUserProjectsJ($idarea){
        
        $res = $this->model->selectUserProjects($this->host,$this->user,$this->pass,$this->db,$idarea);

        $array = array();
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $project = $row['project'];
            $descript = $row['description'];
            $shortDesc = substr($descript, 0, 25).'...';
            $date_ini = $row['date_ini'];
            $date_end = $row['date_end'];
            $total = $this->numTask(0,$id);
            $percent = $this->percent($id);
            $stats = $row['nstats'];

            $array['area'] = $area;
            $array['project'] = $project;
            $array['description'] = $descript;
            $array['date_ini'] = $date_ini;
            $array['date_end'] = $date_end;
            $array['total'] = $total;
            $array['percent'] = $percent;
            $array['stats'] = $stats;
        
            $json = json_encode($array);

        }
        
        return $json;
    }

    public function selectUserProjectsL($idarea){
        
        $res = $this->model->selectUserProjects($this->host,$this->user,$this->pass,$this->db,$idarea);

        $array = array();
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $project = $row['project'];
            $descript = $row['description'];
            $shortDesc = substr($descript, 0, 25).'...';
            $date_ini = $row['date_ini'];
            $date_end = $row['date_end'];
            $done = $this->numTask(1,$id);
            $total = $this->numTask(0,$id);
            $percent = $this->percent($id);
            $stats = $row['nstats'];

            ?>
                <tr>
                    <td class="align-middle">
                        <span class="align-middle">
                            <a href="#" onclick="detailProject('<?php echo $id; ?>')"><?php echo $project; ?></a>
                        </span>
                    </td>
                    <td class="align-middle"><?php echo $done.'/'.$total; ?></td>
                    <td class="align-middle">
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $percent; ?>%;" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100.00"></div>
                        </div>
                    </td>
                </tr>
            <?php

        }
    }//end Class

    public function selectProject($id,$type=null){
        $res = $this->model->selectProject($this->host,$this->user,$this->pass,$this->db,$id);

        if($type==1){
            $row = mysqli_fetch_array($res);
            $idarea = $row['idarea'];
            $project = $row['project'];
            $description = $row['description'];
            
                ?>
                    <form class="row" onsubmit="editProject(<?php echo $id; ?>); return false;">
                    
                        <div class="form-group col-lg-12">
                            <input id="project" class="form-control" type="text" value="<?php echo $project; ?>" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="idarea" required>
                                <?php echo $this->selectProjectArea(); ?>
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
            $done = $this->numTask(1,$idproject);
            $total = $this->numTask(0,$idproject);
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

    public function addTask($idproject,$title,$comment){
        $res = $this->model->addTask($this->host,$this->user,$this->pass,$this->db,$idproject,$title,$comment);
        return $res;
    }

    public function editTask($id,$idproject,$title,$comment){
        $res = $this->model->editTask($this->host,$this->user,$this->pass,$this->db,$id,$idproject,$title,$comment);
        return $res;
    }

    public function delTask($id){
        $res = $this->model->delTask($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function selectTaskProject(){
        $res = $this->model->selectTaskProject($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $project = $row['project'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $project; ?></option>
            <?php
        }
    }

    public function selectTask($id,$type=null){
        $res = $this->model->selectTask($this->host,$this->user,$this->pass,$this->db,$id);

        if($type==1){
            $row = mysqli_fetch_array($res);
            $idproject = $row['idproject'];
            $title = $row['title'];
            $comment = $row['comment'];
            
                ?>
                    <form class="row" onsubmit="editTask(<?php echo $id; ?>); return false;">
                    
                        <div class="form-group col-lg-12">
                            <input id="title" class="form-control" type="text" value="<?php echo $title; ?>" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="idproject" required>
                                <?php echo $this->selectTaskProject(); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea id="comment" class="form-control" placeholder="Mensaje" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required><?php echo $comment; ?></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                        </div>
                    </form>
                <?php
        }else{

        }
    }

    public function selectUserTask($id,$iduser){
        
        $res = $this->model->selectUserTask($this->host,$this->user,$this->pass,$this->db,$id,$iduser);
    
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $project = $row['project'];
            $title = $row['title'];
            $comment = $row['comment'];
            $shortCmt = substr($comment, 0, 25).'...';
            $priority = $row['priority'];
            $npriority = $row['npriority'];
            $date_ini = $row['date_ini'];
            $date_end = $row['date_end'];
            $assignated = $row['assignated'];
            $priorClass = $row['class'];

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
                    <td><?php echo $project; ?></td>
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
                    <td><?php echo $date_ini; ?></td>
                    <td><?php echo $date_end; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div id="s<?php echo $id; ?>" class="<?php echo $budget; ?>"><?php echo $stats; ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-succes">done</i>
                            </button>
                            <div class="dropdown-menu">
                                <div onclick="editStatusTask('<?php echo $id; ?>',1);" class="dropdown-item">Finalizar</div>
                                <div onclick="editStatusTask('<?php echo $id; ?>',2);" class="dropdown-item">Reabrir</div>
                                <div onclick="editStatusTask('<?php echo $id; ?>',7);" class="dropdown-item">Fix/Detenido</div>
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
                            <button onclick="editableTask('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>    
                            <button onclick="delTask('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
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

    public function editStatusTask($id,$status){
        $res = $this->model->editStatusTask($this->host,$this->user,$this->pass,$this->db,$id,$status);
        return $res;
    }

    public function assignpriority($id,$idTask){
        $res = $this->model->assignpriority($this->host,$this->user,$this->pass,$this->db,$id,$idTask);
    }

    public function selectAllStatus($idTask){
        $res = $this->model->selectAllStatus($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $priority = $row['name'];
            
            ?>
                <div id="<?php echo $id; ?>" onclick="assignPriorityTask('<?php echo $idTask; ?>','<?php echo $id; ?>','<?php echo $priority; ?>');" class="dropdown-item"><?php echo $priority; ?></div>
            <?php
        }
    }

    public function numTask($status=null,$project=null){
        $res = $this->model->numTask($this->host,$this->user,$this->pass,$this->db,$status,$project);
        $row = mysqli_fetch_array($res);
        $response = $row['num'];
        return $response;
    }

    public function employee($area,$idTask){
        $res = $this->model->employee($this->host,$this->user,$this->pass,$this->db,$area);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $employe = $row['name'];
            
            ?>
                <div id="<?php echo $id; ?>" onclick="assignTask('<?php echo $idTask; ?>','<?php echo $id; ?>','<?php echo $employe; ?>');" class="dropdown-item"><?php echo $employe; ?></div>
            <?php
        }
    }
    public function assignTask($id,$idTask){
        $res = $this->model->assignTask($this->host,$this->user,$this->pass,$this->db,$id,$idTask);
    }
    /* End Task */

}
//end class
?>
