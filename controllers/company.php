<?php

//init class
class c_company{
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
        $this->model = $model = new m_company();
    }
    //FUNCTION ADD COMPANY
    public function addCompany($rfc,$rs,$usu,$pswd,$objeto,$nombre1,$nombre2,$ap,$am,$t1,$t2,$tc,$check,$c1,$c2,$mo,$co,$calle,$ni,$ne,$col,$del,$cp,$edo,$pais){
        $res = $this->model->addCompany($this->host,$this->user,$this->pass,$this->db,$rfc,$rs,$usu,$pswd,$objeto,$nombre1,$nombre2,$ap,$am,$t1,$t2,$tc,$check,$c1,$c2,$mo,$co,$calle,$ni,$ne,$col,$del,$cp,$edo,$pais);
        return $res;
    }
    //FUNCTION EDIT COMPANY
    public function editCompany($id,$id_emp,$rfc,$rs,$usu,$objeto,$nombre1,$nombre2,$ap,$am,$t1,$t2,$tc,$check,$c1,$c2,$mo,$co,$calle,$ni,$ne,$col,$del,$cp,$edo,$pais){
        $res = $this->model->editCompany($this->host,$this->user,$this->pass,$this->db,$id,$id_emp,$rfc,$rs,$usu,$objeto,$nombre1,$nombre2,$ap,$am,$t1,$t2,$tc,$check,$c1,$c2,$mo,$co,$calle,$ni,$ne,$col,$del,$cp,$edo,$pais);
        return $res;
    }

 
    //FUNCTION GET INFO COMPANY
    public function get_info_Company($id){
     $res = $this->model->gic($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    //FUNCTION GET ALL COMPANYS TO GRID
    public function selectAllCompany(){
        $res = $this->model->selectAllCompany($this->host,$this->user,$this->pass,$this->db);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id_company'];
            $usuario = $row['user'];
            $rfc = $row['rfc'];
            $rs = $row['razon_social'];
          
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $usuario ?></td>
                    <td><?php echo $rfc; ?></td>
                    <td><?php echo $rs; ?></td>
                    <td>
                        <button onclick="editableCompany('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                        </button>
                        <button onclick="delCompany('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" >
                            <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                        </button>
                    </td>
                </tr>
            <?php
        }
    }
    //FUNCTION DELETE COMPANY
    public function delCompany($id){
        $res = $this->model->delCompany($this->host,$this->user,$this->pass,$this->db,$id);
    }
  

}
//end class
?>
