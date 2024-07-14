<?php



//init class

class c_ticket{

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

        $this->model = $model = new m_ticket();

    }



    public function addTicket($idarea,$idemploye,$title,$comment){

        $res = $this->model->addTicket($this->host,$this->user,$this->pass,$this->db,$idarea,$idemploye,$title,$comment);

        return $res;

    }



    public function editTicket($id,$idarea,$title,$comment){

        $res = $this->model->editTicket($this->host,$this->user,$this->pass,$this->db,$id,$idarea,$title,$comment);

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



    public function selectTicketArea(){

        $res = $this->model->selectTicketArea($this->host,$this->user,$this->pass,$this->db);



        while($row = mysqli_fetch_array($res)){

            $id = $row['id'];

            $area = $row['area'];

            $ticket = $row['ticket'];

            

            ?>

                <option value="<?php echo $id; ?>"><?php echo $area; ?></option>

            <?php

        }

    }



    public function selectTicket($id,$type=null){

        $res = $this->model->selectTicket($this->host,$this->user,$this->pass,$this->db,$id);



        if($type==1){

            $row = mysqli_fetch_array($res);

            $idarea = $row['idarea'];

            $title = $row['title'];

            $comment = $row['comment'];

            

                ?>

                    <form class="row" onsubmit="editTicket(<?php echo $id; ?>); return false;">

                    

                        <div class="form-group col-lg-12">

                            <input id="title" class="form-control" type="text" value="<?php echo $title; ?>" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>

                        </div>

                        <div class="form-group col-lg-6">

                            <select class="form-control" id="idarea" required>

                                <?php echo $this->selectTicketArea(); ?>

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



    public function selectAllTickets($status,$area){

        $res = $this->model->selectAllTickets($this->host,$this->user,$this->pass,$this->db,$status,$area);

        if(empty($area)){

            $employeArea = 1;

        }else{

            $employeArea = $area;

        }



        while($row = mysqli_fetch_array($res)){

            $id = $row['id'];

            $folio = $row['folio'];

            $area = $row['area'];

            $title = $row['title'];

            $comment = $row['comment'];

            $shortCmt = substr($comment, 0, 25).'...';

            $priority = $row['priority'];

            $npriority = $row['npriority'];

            $date_ini = $row['date_ini'];

            $date_end = $row['date_end'];

            $date_file = $row['date_file'];

            $idemploye = $row['idemp'];

            $employe = $row['employe'];

            $assignated = $row['assignated'];

            $priorClass = $row['class'];

            $email = $row['email'];

            $coju = $row['coju'];



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

            }else if($stats=="Detenido" OR $stats=="Prestamo"){

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

                    <?php

                    if((($area==9 OR $area==0) AND $employeArea==9 )){

                        ?>

                            <td><?php echo $folio; ?></td>

                        <?php  

                    }else if($employeArea==15){                       

                        ?>

                            <td><?php echo $folio; ?></td>

                            <td><?php echo $coju; ?></td>

                        <?php  

                    }

                    ?>

                    <td><?php echo $area; ?></td>

                    <td>

                        <?php echo $employe; ?>

                        <span style="display:none" id="e<?php echo $id; ?>"><?php echo $email; ?></span>

                    </td>

                    <td><?php echo $title; ?></td>

                    <td>

                        <button onclick="modalTicket('<?php echo $title; ?>',' ','<?php echo $id; ?>','<?php echo $idemploye; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>

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

                    <?php

                    //for file or archive exception

                        if(($area==9 OR $area==0) AND ($employeArea==15)){

                        ?>

                             <td><?php echo $date_file; ?></td>

                        <?php

                        }

                    ?>

                    <td><?php echo $date_end; ?></td>

                    <td class="<?php echo $class; ?>">

                        <div id="s<?php echo $id; ?>" class="<?php echo $budget; ?>"><?php echo $stats; ?></div>

                    </td>

                    <td>

                        <div class="table-buttons">

                            <div class="btn-group">

                                <?php

                                    //for file or archive exception

                                    if(($area==9 OR $area==0) AND ($employeArea==15)){

                                    ?>

                                        <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>

                                            <i class="material-icons md-14 align-middle mb-1 text-succes">done</i>

                                        </button>

                                        <div class="dropdown-menu">

                                            <div onclick="editStatusTicket('<?php echo $id; ?>',8);" class="dropdown-item">Inicio Prestamo</div>

                                            <div onclick="editStatusTicket('<?php echo $id; ?>',1); sendE('<?php echo $email; ?>',1,'<?php echo $title; ?>');" class="dropdown-item">Expediente Entregado</div>

                                            <div onclick="editStatusTicket('<?php echo $id; ?>',2); sendE('<?php echo $email; ?>',3,'<?php echo $title; ?>');" class="dropdown-item">Reabrir</div>

                                        </div>

                                    <?php  

                                    }else{

                                    ?>

                                        <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>

                                            <i class="material-icons md-14 align-middle mb-1 text-succes">done</i>

                                        </button>

                                        <div class="dropdown-menu">

                                            <div onclick="editStatusTicket('<?php echo $id; ?>',1); sendE('<?php echo $email; ?>',1,'<?php echo $title; ?>');" class="dropdown-item">Finalizar</div>

                                            <div onclick="editStatusTicket('<?php echo $id; ?>',2); sendE('<?php echo $email; ?>',3,'<?php echo $title; ?>');" class="dropdown-item">Reabrir</div>

                                            <div onclick="editStatusTicket('<?php echo $id; ?>',7); sendE('<?php echo $email; ?>',4,'<?php echo $title; ?>');" class="dropdown-item">Detenido por Otra Área</div>

                                        </div>

                                    <?php    

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

                            <?php

                                if((($area==9 OR $area==0) AND $employeArea==9 OR $employeArea==15)){

                                ?>

                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php echo $disabled; ?>>

                                        <i class="material-icons md-14 align-middle mb-1 text-primary">add_box</i>

                                    </button>

                                    <div class="dropdown-menu">

                                        <div class="form-group col-lg-6">

                                            <input class="folio" type="text" id="f<?php echo $id; ?>" value="" placeholder="folio">

                                        </div>    

                                    </div>

                                <?php  

                                }

                            ?>

                            </div>

                            <div class="btn-group">

                                <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <i class="material-icons md-14 align-middle mb-1 white-text">alarm</i>

                                </button>

                                <div class="dropdown-menu">

                                    <?php echo $this->selectAllStatus($id); ?>

                                </div>

                            </div>

                            <button onclick="delTicket('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>

                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>

                            </button>

                        </div>    

                    </td>

                </tr>

            <?php

        }

    }



    public function selectUserTickets($iduser){

        

            $res = $this->model->selectUserTickets($this->host,$this->user,$this->pass,$this->db,$iduser);

        

            while($row = mysqli_fetch_array($res)){

                $id = $row['id'];

                $area = $row['area'];

                $title = $row['title'];

                $comment = $row['comment'];

                $shortCmt = substr($comment, 0, 25).'...';

                $priority = $row['priority'];

                $npriority = $row['npriority'];

                $date_ini = $row['date_ini'];

                $date_end = $row['date_end'];

                $idemploye = $row['idemp'];

                $employe = $row['employe'];

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

                        <td><?php echo utf8_encode($area); ?></td>

                        <td><?php echo $employe; ?></td>

                        <td><?php echo utf8_encode($title); ?></td>

                        <td>

                            <button onclick="modalTicket('<?php echo $title; ?>',' ','<?php echo $id; ?>','<?php echo $idemploye; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>

                                <i class="material-icons md-14 align-middle mb-1 text-primary">speaker_notes</i>

                            </button>

                            <?php echo utf8_encode($shortCmt); ?>

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

                                if($stats=='Listo'){

                                }else{

                                ?>

                                <button onclick="editableTicket('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>

                                    <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>

                                </button>    

                                <button onclick="delTicket('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>

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



    public function selectUserFiles($iduser){

        

        $res = $this->model->selectUserFiles($this->host,$this->user,$this->pass,$this->db,$iduser);

    

        while($row = mysqli_fetch_array($res)){

            $id = $row['id'];

            $folio = $row['folio'];

            $coju = $row['coju'];

            $area = $row['area'];

            $title = $row['title'];

            $comment = $row['comment'];

            $shortCmt = substr($comment, 0, 25).'...';

            $priority = $row['priority'];

            $npriority = $row['npriority'];

            $date_ini = $row['date_ini'];

            $date_end = $row['date_end'];

            $date_file = $row['date_file'];

            $idemploye = $row['idemp'];

            $employe = $row['employe'];

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

                    <td><?php echo $folio; ?></td>

                    <td><?php echo $coju; ?></td>

                    <td><?php echo $area; ?></td>

                    <td><?php echo $employe; ?></td>

                    <td><?php echo $title; ?></td>

                    <td>

                        <button onclick="modalTicket('<?php echo $title; ?>',' ','<?php echo $id; ?>','<?php echo $idemploye; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>

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

                    <td><?php echo $date_file; ?></td>

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

                            <button onclick="editableTicket('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>

                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>

                            </button>    

                            <button onclick="delTicket('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>

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



    public function selectAllStatus($idTicket){

        $res = $this->model->selectAllStatus($this->host,$this->user,$this->pass,$this->db);

        

        while($row = mysqli_fetch_array($res)){

            $id = $row['id'];

            $priority = $row['name'];

            

            ?>

                <div id="<?php echo $id; ?>" onclick="assignPriority('<?php echo $idTicket; ?>','<?php echo $id; ?>','<?php echo $priority; ?>');" class="dropdown-item"><?php echo $priority; ?></div>

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



    public function assignpriority($id,$idTicket){

        $res = $this->model->assignpriority($this->host,$this->user,$this->pass,$this->db,$id,$idTicket);

    }



    public function editStatusTicket($id,$status){

        $res = $this->model->editStatusTicket($this->host,$this->user,$this->pass,$this->db,$id,$status);

        return $res;

    }



    public function delTicket($id){

        $res = $this->model->delTicket($this->host,$this->user,$this->pass,$this->db,$id);

    }



    public function numTickets($priority=null,$status=null,$area=null){

        $res = $this->model->numTickets($this->host,$this->user,$this->pass,$this->db,$priority,$status,$area);

        $row = mysqli_fetch_array($res);

        $response = $row['num'];

        return $response;

    }



    public function employe($area,$idTicket){

        $res = $this->model->employe($this->host,$this->user,$this->pass,$this->db,$area);



        while($row = mysqli_fetch_array($res)){

            $id = $row['id'];

            $employe = $row['name'];

            

            ?>

                <div id="<?php echo $id; ?>" onclick="assignTicket('<?php echo $idTicket; ?>','<?php echo $id; ?>','<?php echo $employe; ?>');" class="dropdown-item"><?php echo $employe; ?></div>

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



    public function setFolio($id,$folio){

        $res = $this->model->setFolio($this->host,$this->user,$this->pass,$this->db,$id,$folio);

    }



    public function setExp($id,$folio){

        $res = $this->model->setExp($this->host,$this->user,$this->pass,$this->db,$id,$folio);

    }



    public function assignTicket($id,$idTicket){

        $res = $this->model->assignTicket($this->host,$this->user,$this->pass,$this->db,$id,$idTicket);

    }



    public function msgTickets($idUser,$idTicket){

        $resIni = $this->model->initMsg($this->host,$this->user,$this->pass,$this->db,$idTicket);

        $res = $this->model->msgTickets($this->host,$this->user,$this->pass,$this->db,$idUser,$idTicket);

        

        $rowIni = mysqli_fetch_array($resIni);

        $commentIni = $rowIni['comment'];



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



    public function msgTicketsResp($idTicket,$msg){

        session_start();

        //session settings

        $idUser = $_SESSION["idSession"];

        $name = $_SESSION["userSession"];

        $level = $_SESSION['levelSession'];

        $type = intval($level);



        if(!empty($type) AND $type>1){

            $type = 2;

        }



        $res = $this->model->msgTicketsResp($this->host,$this->user,$this->pass,$this->db,$idUser,$idTicket,$msg,$type);

        return $res;

    }



    public function addRequire($idarea,$idemploye,$title,$coju,$exp,$comment){

        $res = $this->model->addRequire($this->host,$this->user,$this->pass,$this->db,$idarea,$idemploye,$title,$coju,$exp,$comment);

        return $res;

    }





}

//end class

?>

