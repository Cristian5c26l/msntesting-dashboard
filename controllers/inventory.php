<?php

//init class
class c_inventory{
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
        $this->model = $model = new m_inventory();
    }

    public function addInsume($name,$iduser,$area,$description,$iniStock,$type,$expire){
        $res = $this->model->addInsume($this->host,$this->user,$this->pass,$this->db,$name,$area,$iduser,$description);
        $idInsume = $res;
        
        $res1 = $this->model->addInitStock($this->host,$this->user,$this->pass,$this->db,$idInsume,$iduser,$iniStock,$type,$expire);
        return $res1;
    }

    public function editInsume($id,$name,$area,$description,$iniStock,$type,$expire){
        $res = $this->model->editInsume($this->host,$this->user,$this->pass,$this->db,$id,$name,$area,$description);
        
        $res1 = $this->model->editInitStock($this->host,$this->user,$this->pass,$this->db,$id,$iniStock,$type,$expire);
        return $res1;
    }

    public function editableInsume($id){
        $res = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);
        $name = $row['name'];
        $area = $row['idarea'];
        $description = $row['description'];
        $qty = $row['qty'];
        $expire = $row['expire'];
        if(empty($expire)){
            $expire = date("Y-m-d");
            $selected = "";
        }else{
            $selected = "selected";
        }
        ?>
            <form class="row" onsubmit="editInsume(); return false;">
                <div class="form-group col-lg-6">
                    <input id="id" class="form-control" type="hidden" value="<?php echo $id; ?>" required>
                    <input id="name" class="form-control" type="text" value="<?php echo $name; ?>" placeholder="Nombre Insumo" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="idarea" required>
                        <?php echo $this->selectedInsumeArea($area); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <input id="description" class="form-control" type="text" value="<?php echo $description; ?>" placeholder="Descripción" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="qty" class="form-control" type="text" value="<?php echo $qty; ?>" placeholder="Cantidad" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="expiration" required>
                        <option value="0">No Perecedero</option>
                        <option value="1" <?php echo $selected; ?> >Perecedero</option>
                    </select>
                </div>
                <div id="exp" style="display:none" class="form-group col-lg-6">
                    <input id="expire" class="form-control datepicker" type="text" value="<?php echo $expire; ?>" required>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
        <?php
    }

    public function delInsume($id){
        $res = $this->model->delInsume($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function editableDetail($id){
        $res = $this->model->getInsumeDetail($this->host,$this->user,$this->pass,$this->db,$id);
        
        $row = mysqli_fetch_array($res);
        $comment = $row['comment'];
        $qty = $row['qty'];
        $expire = $row['expire'];
        if(empty($expire)){
            $expire = date("Y-m-d");
            $selected = "";
        }else{
            $selected = "selected";
        }
        ?>
            <form class="form-group col-lg-12 row" onsubmit="editDetail(); return false;">
                <div class="col-lg-12 row">
                    <div class="form-group col-lg-4">
                        <select class="form-control" id="sumrest" required>
                            <option value="2">Agregar a Inventario</option>
                            <option value="3">Disminuir del Inventario</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <input id="modify" type="number" min="1" class="form-control border-dark" value="<?php echo $qty; ?>" placeholder="">
                    </div>
                    <div class="form-group col-lg-4">
                        <input id="comment" type="text" class="form-control border-dark" value="<?php echo $comment; ?>" placeholder="Comentario">
                        <input id="idInsume" type="hidden" value="<?php echo $id; ?>">
                    </div>
                </div>
                <div class="col-lg-12 row">
                    <div class="form-group col-lg-6">
                        <select class="form-control" id="expiration" required>
                            <option value="0">No Perecedero</option>
                            <option value="1" <?php echo $selected; ?>>Perecedero</option>
                        </select>
                    </div>
                    <div id="exp" style="display:none" class="form-group col-lg-6">
                        <input id="expire" class="form-control datepicker" type="text" value="<?php echo date("Y-m-d") ?>" required>
                    </div>
                </div>
                
                <div class="form-group col-lg-6">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn btn-white" onclick="menu('inventory/newinsume')">Regresar a Insumos</button>
                </div>
            </form>
        <?php
    }

    public function sumInsume($id,$iduser,$qty,$comment,$expire){
        $res = $this->model->sumInsume($this->host,$this->user,$this->pass,$this->db,$id,$iduser,$qty,$comment,$expire);
        return $res;
    }

    public function restInsume($id,$iduser,$qty,$comment){
        $res = $this->model->restInsume($this->host,$this->user,$this->pass,$this->db,$id,$iduser,$qty,$comment);
        return $res;
    }

    public function modifyInsume($id,$qty,$comment,$expire,$sumrest){
        $res = $this->model->modifyInsume($this->host,$this->user,$this->pass,$this->db,$id,$qty,$comment,$expire,$sumrest);
        return $res;
    }

    public function delDetail($id){
        $res = $this->model->delDetail($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function getInsume($id){
        $res = $this->model->getInsume($this->host,$this->user,$this->pass,$this->db,$id);
        return $res;
    }

    public function listAllInsume($iduser){
        $res = $this->model->listAllInsume($this->host,$this->user,$this->pass,$this->db,$iduser);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $user = $row['user'];
            $name = $row['name'];
            $description = $row['description'];
            $comment = $row['comment'];
            $area = $row['area'];
            $qty = $row['qty'];
            
            $res2 = $this->model->listStoInsume($this->host,$this->user,$this->pass,$this->db,$id,$iduser);

            $nqty = 0;
            
            while($row2 = mysqli_fetch_array($res2)){
                $type = $row2['type'];
                $qty = $row2['qty'];

                if($type=='1' OR $type=='2'){
                    $nqty = $nqty + $qty;
                }else if($type=='3'){
                    $nqty = $nqty - $qty;
                }
            }
           
            $total = $row['total'];
            $status = $row['status'];

            if($status==1){
                $disabled = '';
            }else{
                $disabled = 'disabled';
            }

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><?php echo $comment; ?></td>
                    <td><?php echo $area; ?></td>
                    <td><?php echo $nqty; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableInsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delinsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                            <button onclick="modalInsume('<?php echo $id; ?>',1)" type="button" class="btn btn-outline-success btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-success">add</i>
                            </button>
                            <button onclick="modalInsume('<?php echo $id; ?>',2)" type="button" class="btn btn-outline-gray btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-gray">remove</i>
                            </button>
                            <button onclick="detailInsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-stoped btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-stoped">assignment</i>
                            </button>
                        </div>    
                    </td>
                </tr>    
            <?php
        }    

    }

    public function listStoInsume($id,$iduser){
        $res = $this->model->listStoInsume($this->host,$this->user,$this->pass,$this->db,$id,$iduser);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            //$name = $row['name'];
            $user = $row['iduser'];
            $comment = $row['comment'];
            $qty = $row['qty'];
            $date = $row['opdate'];
            $type = $row['type'];
            $expire = $row['expire'];

            if(empty($expire)){
                $expire = "N/A";
            }

            $status = $row['status'];

            $in = array("1","2","3");
            $out   = array("Stock Inicial", "Entrada", "Salida");

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
                    <!--td><?php //echo $name; ?></td-->
                    <td><?php echo $comment; ?></td>
                    <td><?php echo $qty; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $newtype; ?></td>
                    <td><?php echo $expire; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableDetail('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>
                            <button onclick="delDetail('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm" <?php echo $disabled; ?>>
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>    
            <?php
        }
    }

    public function addInsumeArea($name){
        $res = $this->model->addInsumeArea($this->host,$this->user,$this->pass,$this->db,$name);
    }

    public function editInsumeArea($id,$name){
        $res = $this->model->editInsumeArea($this->host,$this->user,$this->pass,$this->db,$id,$name);
    }

    public function editableInsumeArea($id){
        $res = $this->model->editableInsumeArea($this->host,$this->user,$this->pass,$this->db,$id);

        $row = mysqli_fetch_array($res);
        $name = $row['name'];
            
        ?>
            <form class="row" onsubmit="editAreaInsume(<?php echo $id; ?>); return false;">
            
                <div class="form-group col-lg-12">
                    <input id="name" class="form-control" type="text" value="<?php echo $name; ?>" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
        <?php
    }

    public function allInsumeAreas(){
        $res = $this->model->allInsumeAreas($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            $status = $row['status'];

            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <div class="table-buttons">
                            <button onclick="editableAreaInsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-primary">edit</i>
                            </button>    
                            <button onclick="delAreaInsume('<?php echo $id; ?>')" type="button" class="btn btn-outline-danger btn-sm">
                                <i class="material-icons md-14 align-middle mb-1 text-danger">delete</i>
                            </button>
                        </div>    
                    </td>
                </tr>
            <?php
        }
    }

    public function delInsumeArea($id){
        $res = $this->model->delInsumeArea($this->host,$this->user,$this->pass,$this->db,$id);
    }

    public function selectInsumeArea(){
        $res = $this->model->selectInsumeArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            
            ?>
                <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
            <?php
        }
    }

    public function selectedInsumeArea($area){
        $res = $this->model->selectInsumeArea($this->host,$this->user,$this->pass,$this->db);

        while($row = mysqli_fetch_array($res)){
            $id = $row['id'];
            $name = $row['name'];
            
            if($id==$area){
                $selected = 'selected';
            }else{
                $selected = '';
            }

            ?>
                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $name; ?></option>
            <?php
        }
    }
    
}
//end class
?>