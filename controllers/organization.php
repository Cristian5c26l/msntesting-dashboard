<?php

//init class
class c_org{
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
        $this->model = $model = new m_org();
    }

    public function addOrg($iduser,$idboss,$lvl){
        $res0 = $this->model->revOrg($this->host,$this->user,$this->pass,$this->db,$iduser);

        $count = mysqli_num_rows($res0);
        
        if(!empty($count)){
            $res1 = $this->model->updOrg($this->host,$this->user,$this->pass,$this->db,$iduser,$idboss,$lvl);
            return $res1;
        }else{
            $res2 = $this->model->addOrg($this->host,$this->user,$this->pass,$this->db,$iduser,$idboss,$lvl);
            return $res2;
        }
    }

    public function selectUser(){
        $res = $this->model->selectUser($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $name = $row['name'];
            $last = $row['last'];

            ?>
                <option value="<?php echo $id; ?>"><?php echo $name.' '.$last; ?></option>
            <?php
        }
    }

    public function selectBoss($id){
        $res0 = $this->model->revEmp($this->host,$this->user,$this->pass,$this->db,$id);
        $row0 = mysqli_fetch_array($res0);
        $lvl = $row0['level'];

        $res = $this->model->selectBoss($this->host,$this->user,$this->pass,$this->db,$id,$lvl);
            ?>
                <option value="">Selecciona un Jefe</option>
                <option value="0" lvl="0">Josúe Alejandro Luna Monrroy</option>
            <?php
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $last = $row['last'];
            $lvl = $row['level'];

            ?>
                <option value="<?php echo $id; ?>" lvl="<?php echo $lvl; ?>"><?php echo $name.' '.$last; ?></option>
            <?php
        }
    }

    public function drawModel(){
        $res = $this->model->drawModel($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $iduser = $row['iduser'];
            $boss = $row['idboss'];
            $level = $row['level'];
            $name = $row['name'];
            $last = $row['last'];
            $img = $row['image'];

            if($level==1){
                ?>
                    <li>
                        <a href="#" onclick="/*profile('<?php //echo $iduser; ?>');*/">
                            <div class="">
                                <img src="assets/images/avatars/<?php echo $img; ?>" width="70px" height="70px" class="round-1 r-blue" alt="">
                            </div>
                            <p><?php echo $name.' '.$last; ?></p>
                        </a>
                        <ul>
                            <?php
                            $this->lvl2($iduser);
                            ?> 
                        </ul>
                    </li>     
                <?php
            } //end if
        } //end while
    }

    public function lvl2($id){
        $res = $this->model->lvl2($this->host,$this->user,$this->pass,$this->db,$id);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $iduser = $row['iduser'];
            $boss = $row['idboss'];
            $level = $row['level'];
            $name = $row['name'];
            $last = $row['last'];
            $img = $row['image'];

            ?>
                <li>
                    <a href="#" onclick="/*profile('<?php //echo $iduser; ?>');*/">
                        <div class="">
                            <img src="assets/images/avatars/<?php echo $img; ?>" width="70px" height="70px" class="round-1 r-red" alt="">
                        </div>
                        <p><?php echo $name.' '.$last; ?></p>
                    </a>
                    <ul>
                        <?php
                        $this->lvl3($iduser);
                        ?> 
                    </ul>
                </li>
            <?php
        }
    }
    
    public function lvl3($id){
        $res = $this->model->lvl3($this->host,$this->user,$this->pass,$this->db,$id);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $iduser = $row['iduser'];
            $boss = $row['idboss'];
            $level = $row['level'];
            $name = $row['name'];
            $last = $row['last'];
            $img = $row['image'];

            ?>
                <li>
                    <a href="#" onclick="/*profile('<?php //echo $iduser; ?>');*/">
                        <div class="">
                            <img src="assets/images/avatars/<?php echo $img; ?>" width="70px" height="70px" class="round-1 r-gray" alt="">
                        </div>
                        <p><?php echo $name.' '.$last; ?></p>
                    </a>
                </li>
            <?php
        }
    }

    public function selectAllUsers(){
        $res = $this->model->selectAllUsers($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $area = $row['area'];
            $level = $row['level'];
            $newlevel = $row['newlevel'];
            $name = $row['name'];
            $last = $row['last'];
            $job = $row['job'];

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $area; ?></td>
                    <td><?php echo $level.'-'.$newlevel; ?></td>
                    <td><?php echo $name.' '.$last; ?></td>
                    <td><?php echo $job; ?></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons md-14 align-middle mb-1 text-succes">swap_vert</i> Nivel
                        </button>
                        <div class="dropdown-menu">
                            <div onclick="changeLvl('<?php echo $id; ?>',1);" class="dropdown-item">Gerencial</div>
                            <div onclick="changeLvl('<?php echo $id; ?>',2);" class="dropdown-item">Jefe de Área</div>
                            <div onclick="changeLvl('<?php echo $id; ?>',3);" class="dropdown-item">Ordinario</div>
                            <div onclick="changeLvl('<?php echo $id; ?>',4);" class="dropdown-item">Becario/Otro</div>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function changeLvl($id,$lvl){
        $res = $this->model->changeLvl($this->host,$this->user,$this->pass,$this->db,$id,$lvl);
        return $res;
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

    public function selectLvl($idLvl){
        $res = $this->model->selectLvl($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $level = $row['level'];
            
            if($id==$idLevel){
                $selected = "selected";
            }else{
                $selected = "";
            }

            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $level; ?></option>
            <?php
        }
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

}
//end class
?>
