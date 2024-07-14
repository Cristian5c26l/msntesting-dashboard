<?php

//init class
class c_domain{
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
        $this->model = $model = new m_domain();
    }

    public function selectUbication(){
        $res = $this->model->selectUbication($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $ubication = $row['ubication'];
            $abbr = $row['abbr'];
            ?>
                <option value="<?php echo $id; ?>" data-abbr="<?php echo $abbr; ?>"><?php echo $ubication; ?></option>
            <?php
        }
    }

    public function selectedUbication($idubication){
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

    public function editableDomain($id){
        $res = $this->model->selectDomain($this->host,$this->user,$this->pass,$this->db,$id);

        while($row = mysqli_fetch_array($res)){
            $iduser = $row['iduser'];
            $ubication = $row['idubication'];
            $area = $row['areas'];
            $name = $row['name'];
            $last = $row['last'];
            $user = $row['user'];
            $email = $row['email'];
            $password = $row['pass'];
            $emailpass = $row['emailpass'];
            $anydesk = $row['anydesk'];
            $ip = $row['ip'];
            $mac = $row['mac'];
            $pcname = $row['pcname'];

            ?>
                <form class="row" onsubmit="editDomain(); return false;">
                    <div class="form-group col-lg-3">
                        <input id="id" type="hidden" value="<?php echo $id; ?>">
                        <label for="ubication">Ubicación:</label>
                        <select class="form-control" id="ubication" required>
                            <option value="">Ubicación:</option>
                            <?php echo $this->selectedUbication($ubication); ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="area">Áreas:</label>
                        <input id="area" class="form-control" type="text" value="<?php echo $area; ?>" placeholder="Área" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="ubication">Usuario (Nombre):</label>
                        <select class="form-control" id="iduser" onchange="getEmail();">
                            <option value="">Selecciona un Usuario</option>
                            <?php echo $this->selectUser($iduser); ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                    </div>    
                    <div class="form-group col-lg-3">
                        <label for="user">Usuario (acceso):</label>
                        <input id="user" class="form-control" type="text" value="<?php echo $user; ?>" placeholder="Usuario" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="pass">Contraseña Dominio:</label>
                        <input id="pass" class="form-control" type="text" value="<?php echo $password; ?>" placeholder="Password" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="email">Email:</label>
                        <input id="email" class="form-control" type="text" value="<?php echo $email; ?>" placeholder="Email" disabled>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="emailpass">Contraseña Email:</label>
                        <input id="emailpass" class="form-control" type="text" value="<?php echo $emailpass; ?>" placeholder="Password de Email" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="anydesk">Anydesk:</label>
                        <input id="anydesk" class="form-control" type="text" value="<?php echo $anydesk; ?>" placeholder="Anydesk">
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="ip">IP:</label>
                        <input id="ip" class="form-control" type="text" value="<?php echo $ip; ?>" placeholder="IP address">
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="mac">MAC:</label>
                        <input id="mac" class="form-control" type="text" value="<?php echo $mac; ?>" placeholder="MAC address">
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="pcname">Nombre de Equipo:</label>
                        <input id="pcname" class="form-control" type="text" value="<?php echo $pcname; ?>" placeholder="Nombre de Equipo">
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                    </div>
                    </form>
            <?php
        }
    }    

    public function selectAllDomains($option=null){
        $res = $this->model->selectAllDomains($this->host,$this->user,$this->pass,$this->db,$option);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $ubication = $row['ubication2'];
            $area = $row['areas'];
            $name = $row['name'];
            $last = $row['last'];
            $fullname = $name.' '.$last;
            $user = $row['user'];
            $pass = $row['pass'];
            $email = $row['email'];
            $emailpass = $row['emailpass'];
            $anydesk = $row['anydesk'];
            $ip = $row['ip'];
            $mac = $row['mac'];
            $pcname = $row['pcname'];
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
                    <td><?php echo $area; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $pass; ?></td>
                    <td><?php echo $fullname; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $emailpass; ?></td>
                    <td><?php echo $anydesk; ?></td>
                    <td><?php echo $ip; ?></td>
                    <td><?php echo $mac; ?></td>
                    <td><?php echo $pcname; ?></td>
                    <td class="<?php echo $class; ?>">
                        <div class="<?php echo $budget; ?>"><?php echo $stats ?></div>
                    </td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableDomain('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delDomain('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function newTable($option){
        ?>
        <div class="table-responsive">
            <table id="data-table" class="table table-striped table-bordered" style="width:100%">
            
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ubicación</th>
                        <th>Áreas</th>
                        <th>Usuario</th>
                        <th>Contraseña Dominio</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Password Email</th>
                        <th>Anydesk</th>
                        <th>IP</th>
                        <th>Dirección MAC</th>
                        <th>Nombre del Equipo</th>
                        <th>Status</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $this->selectAllDomains($option); ?>
                </tbody>
            </table>

            <script>
                $('#data-table').dataTable(
                    {
                        dom: 'Blfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'print'
                        ],
                        pageLength : 20,
                        lengthMenu: [[5, 10, 20, 50, -1], [5, 10, 20, 50, 'Todos']]
                    }
                );
            </script>
        </div>
        <?php
    }

    public function addDomain($ubication,$areas,$iduser,$user,$pass,$emailpass,$anydesk,$ip,$mac,$pcname){
        $res = $this->model->addDomain($this->host,$this->user,$this->pass,$this->db,$ubication,$areas,$iduser,$user,$pass,$emailpass,$anydesk,$ip,$mac,$pcname);
        return $res;
    }

    public function editDomain($id,$ubication,$areas,$iduser,$user,$pass,$emailpass,$anydesk,$ip,$mac,$pcname){
        $res = $this->model->editDomain($this->host,$this->user,$this->pass,$this->db,$id,$ubication,$areas,$iduser,$user,$pass,$emailpass,$anydesk,$ip,$mac,$pcname);
        return $res;
    }

    public function delDomain($id){
        $res = $this->model->delDomain($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function getEmail($id){
        $res = $this->model->getEmail($this->host,$this->user,$this->pass,$this->db,$id);
        $row = mysqli_fetch_array($res);
        $email = $row['email'];
        echo $email;
    }

    public function getUserInfo($id){
        $res = $this->model->getUserInfo($this->host,$this->user,$this->pass,$this->db,$id);
        
        $rows = array();
        while($row = mysqli_fetch_assoc($res)) {
            $rows[] = $row;
        }
        
        $json = json_encode($rows, JSON_UNESCAPED_UNICODE);
        echo $json;
    }

}
//end class
?>
