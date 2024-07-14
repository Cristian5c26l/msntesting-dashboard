<?php

//init class
class c_emp{
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

    public function addEmp($name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$username,$password,$date_in,$area,$job){
        $res = $this->model->addUser($this->host,$this->user,$this->pass,$this->db,$name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$username,$password,$date_in,$area,$job);
        $lastID = $res;
        
        if(!empty($job)){
            $res2 = $this->model->addWindowAccess($this->host,$this->user,$this->pass,$this->db,$lastID,$job);
            return $res2;
        }
    
    }

    public function selectJobs(){
        $res = $this->model->selectJobs($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            //$type = $row['type'];

            ?>
                <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
            <?php
        }
    }

    public function selectEmp($id){
        $res = $this->model->selectUser($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function selectAllEmp(){
        $res = $this->model->selectAllUsers($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $name = $row['name'];
            $last = $row['last'];
            $email = $row['email'];
            $phone = $row['phone'];
            $mobile = $row['mobile'];
            $job = $row['job'];
            $date_in = $row['date_in'];
            $date_out = $row['date_out'];
            $stats = $row['nstats'];

            if($stats=='Eliminado'){
                $class = "btn-outline-danger";
                $budget = "badge badge-danger";
                $disabled = "disabled";
            }else if($stats=='Listo'){
                $stats = 'Activo'; 
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
                    <td><?php echo $area; ?></td>
                    <td><?php echo $job; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $last; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $mobile; ?></td>
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
                            <button onclick="qr('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">grain</i>
                            </button>
                        </div>    
                    </td>
                    <td width="280px">
                        <form class="row">
                            <div class="form-group col-lg-12">
                                <select class="form-control" id="newjob<?php echo $id; ?>" onchange="changeJob('<?php echo $id; ?>',this.value);" required>
                                    <option value="">Puesto Gedes</option>
                                    <option value="0">Remover Puesto</option>
                                    <option value="1">Abogado Sr</option>
                                    <option value="2">Abogado</option>
                                    <option value="3">Contador</option>
                                    <option value="4">Abogado EP (Estados Procesales)</option>
                                    <option value="5">Mensajero</option>
                                    <option value="6">Oficialia de Partes</option>
                                    <option value="7">Contratos</option>
                                    <option value="8">Archivo</option>
                                </select>
                            </div>
                        </form>
                    </td>
                </tr>
            <?php
        }
    }

    public function editEmp($id,$name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$date_in,$area){
        $res = $this->model->editEmp($this->host,$this->user,$this->pass,$this->db,$id,$name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$date_in,$area);
    }

    public function delEmp($id){
        $res = $this->model->delEmp($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function selectArea($idArea){
        $res = $this->model->selectArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            
            if($id==$idArea){
                $selected = "selected";
            }else{
                $selected = "";
            }

            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $area; ?></option>
            <?php
        }
    }

    public function idUsers(){
        $res = $this->model->idUsers($this->host,$this->user,$this->pass,$this->db);
        $idArray = Array();

        while ($row = mysqli_fetch_array($res)){
            $idArray[] = $row['id'];
        }
        
        return $idArray;
    }

    //dir
    public function selectDir($id){
        $res = $this->model->selectDir($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function selectAllDir($mode=null){
        $res = $this->model->selectAllDir($this->host,$this->user,$this->pass,$this->db,$mode);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $corp = $row['corp'];
            $email = $row['email'];
            $phone = $row['phone'];
            $ext = $row['ext'];
            $mobile = $row['mobile'];
            $other = $row['other'];
            $stats = $row['nstats'];

            if($stats=='Delete'){
                $class = "btn-outline-danger";
                $budget = "badge badge-danger";
                $disabled = "disabled";
            }else if($stats=='Listo'){
                $class = "btn-outline-success";
                $budget = "badge badge-success";
                $disabled = "";
                $stats = "Activo";
            }else{
                $class = "";
                $budget = "";
                $disabled = "";
            } 

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $corp; ?></td>
                    <td><?php echo $other; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <!--td><?php //echo $ext; ?></td-->
                    <td><?php echo $mobile; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div class="<?php echo $budget; ?>"><?php echo $stats ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableDir('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delDir('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function addDir($name,$corp,$email,$phone,$ext,$mobile,$other,$type){
        $res = $this->model->addDir($this->host,$this->user,$this->pass,$this->db,$name,$corp,$email,$phone,$ext,$mobile,$other,$type);
        return $res;
    }

    public function editDir($id,$name,$corp,$email,$phone,$ext,$mobile,$other){
        $res = $this->model->editDir($this->host,$this->user,$this->pass,$this->db,$id,$name,$corp,$email,$phone,$ext,$mobile,$other);
        return $res;
    }

    public function delDir($id){
        $res = $this->model->delDir($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function changeJob($id,$job){
        if(empty($job)){
            $res2 = $this->model->delWindowAccess($this->host,$this->user,$this->pass,$this->db,$id,$job);
            return $res2;
        }else{
            $res0 = $this->model->viewAssign($this->host,$this->user,$this->pass,$this->db,$id,$job);
            $count = mysqli_num_rows($res0);
            if($count<1){
                $res1 = $this->model->addJob($this->host,$this->user,$this->pass,$this->db,$id,$job);
                $res = $this->model->addWindowAccess($this->host,$this->user,$this->pass,$this->db,$id,$job);
                return $res;
            }else{
                $res1 = $this->model->addJob($this->host,$this->user,$this->pass,$this->db,$id,$job);
                $res2 = $this->model->delWindowAccess($this->host,$this->user,$this->pass,$this->db,$id,$job);
                $res = $this->model->addWindowAccess($this->host,$this->user,$this->pass,$this->db,$id,$job);
                return $res;
            }
        }
    }

}
//end class
?>
