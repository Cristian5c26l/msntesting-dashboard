<?php

//init class
class c_fact{
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
        $this->model = $model = new m_fact();
    }
    //Add
    public function addFact($folio,$company,$provider,$description){
        $res = $this->model->addFact($this->host,$this->user,$this->pass,$this->db,$folio,$company,$provider,$description);
        return $res;
    }
    //Edit
    public function editFact($id,$folio,$company,$provider,$description){
        $res = $this->model->editFact($this->host,$this->user,$this->pass,$this->db,$id,$folio,$company,$provider,$description);
        return $res;
    }

    public function editableFact($id){
        $res = $this->model->getFact($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);

        $folio = $row['folio'];
        $company = $row['company'];
        $provider = $row['provider'];
        $description = $row['description'];
        
        ?>
            <form class="row" id="blog" onsubmit="editfact(); return false;">
                <div class="form-group col-lg-6">
                    <input id="id" type="hidden" class="form-control border-dark" value="<?php echo $id; ?>" placeholder="Folio" required>
                    <input id="folio" type="text" class="form-control border-dark" value="<?php echo $folio; ?>" placeholder="Folio" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="company" type="text" class="form-control border-dark" value="<?php echo $company; ?>" placeholder="Empresa" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="provider" type="text" class="form-control border-dark" value="<?php echo $provider; ?>" placeholder="Proveedor" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="description" type="text" class="form-control border-dark" value="<?php echo $description; ?>" placeholder="Descripción/Mensaje" required>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
        <?php
    }

    //delete
    public function delFact($id){
        $res = $this->model->delFact($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function addimg($id,$name){
        $res = $this->model->addimg($this->host,$this->user,$this->pass,$this->db,$id,$name);
        return $res;
    }

    public function selectAllF(){
        $res = $this->model->selectAllF($this->host,$this->user,$this->pass,$this->db);
        
        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $folio = $row['folio'];
            $company = $row['company'];
            $provider = $row['provider'];
            $description = $row['description'];
            $img = $row['img'];
            $status = $row['status'];

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $folio; ?></td>
                    <td><?php echo $company; ?></td>
                    <td><?php echo $provider; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editablefact('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delfact('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                            <button onclick="addimgfact('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">archive</i>
                            </button>
                            <button onclick="modalfact('<?php echo $img; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">panorama</i>
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
