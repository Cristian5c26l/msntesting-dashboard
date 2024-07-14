<?php

//init class
class c_list{
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
        $this->model = $model = new m_list();
    }

    public function selectProv($id){
        $res = $this->model->selectProv($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function selectAllProv(){
        $res = $this->model->selectAllProv($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $name = $row['name'];
            $corp = $row['corp'];
            $service = $row['service'];
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
                    <td><?php echo $area; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $corp; ?></td>
                    <td><?php echo $service; ?></td>
                    <td><?php echo $other; ?></td>
                    <td><?php echo $email; ?></td>
                    <!--td><?php //echo $phone; ?></td-->
                    <!--td><?php //echo $ext; ?></td-->
                    <td><?php echo $mobile; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div class="<?php echo $budget; ?>"><?php echo $stats ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableProv('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delProv('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function addProv($area,$name,$corp,$service,$email,$phone,$mobile,$other){
        $res = $this->model->addProv($this->host,$this->user,$this->pass,$this->db,$area,$name,$corp,$service,$email,$phone,$mobile,$other);
        return $res;
    }

    public function editProv($id,$area,$name,$corp,$service,$email,$phone,$mobile,$other){
        $res = $this->model->editProv($this->host,$this->user,$this->pass,$this->db,$id,$area,$name,$corp,$service,$email,$phone,$mobile,$other);
        return $res;
    }

    public function delProv($id){
        $res = $this->model->delProv($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

}
//end class

class c_phone{
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
        $this->model = $model = new m_phone();
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

    public function selectUbication($idubication=null){
        $res = $this->model->selectUbication($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $ubication = $row['ubication'];
            $abbr = $row['abbr'];

            if($idubication==$id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            
            ?>
                <option value="<?php echo $id; ?>" data-abbr="<?php echo $abbr; ?>" <?php echo $selected; ?>><?php echo $ubication; ?></option>
            <?php
        }
    }
    

    public function addPhone($iduser,$ubication,$phone,$ext){
        $res = $this->model->addPhone($this->host,$this->user,$this->pass,$this->db,$iduser,$ubication,$phone,$ext);
        return $res;
    }

    public function editPhone($id,$iduser,$ubication,$phone,$ext){
        $res = $this->model->editPhone($this->host,$this->user,$this->pass,$this->db,$id,$iduser,$ubication,$phone,$ext);
        return $res;
    }

    public function delPhone($id){
        $res = $this->model->delPhone($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function selectAllExt(){
        $res = $this->model->selectAllExt($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $ubication = $row['ubication2'];
            $name = $row['name'];
            $last = $row['last'];
            $fullname = $name.' '.$last;
            $phone = $row['phone'];
            $extension = $row['extension'];
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
                    <td><?php echo $ubication; ?></td>
                    <td><?php echo $fullname; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $extension; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div class="<?php echo $budget; ?>"><?php echo $stats ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editablePhone('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delPhone('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function editablePhone($id){
        $res = $this->model->selectExt($this->host,$this->user,$this->pass,$this->db,$id);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $iduser = $row['iduser'];
            $ubication = $row['idubication'];
            $phone = $row['phone'];
            $extension = $row['extension'];

            ?>
                <form class="row" onsubmit="editPhone(); return false;">
                    <input type="hidden" id="id" value="<?php echo $id; ?>">
                    <div class="form-group col-lg-6">
                        <select class="form-control" name="user" id="user">
                            <?php $this->selectUser($iduser); ?>
                        </select>
                    </div>    
                    <div class="form-group col-lg-6">
                        <select class="form-control" name="ubication" id="ubication">
                            <?php $this->selectUbication($ubication); ?>
                        </select>
                    </div>    
                    <div class="form-group col-lg-6">
                        <input id="phone" class="form-control" type="text" value="<?php echo $phone; ?>" placeholder="Teléfono Empresa">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="ext" class="form-control" type="text" value="<?php echo $extension; ?>" placeholder="Ext" required>
                    </div>
            
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                    </div>
                </form>
            <?php
        }
    }
}

?>
