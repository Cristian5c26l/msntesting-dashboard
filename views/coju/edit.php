<?php
    if($_REQUEST['id']){
        include '../../includes/config.php';
        include '../../controllers/coju.php';
        include '../../models/coju.php';
        $cojuInstance = new c_coju($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
        session_start();
        $area = $_SESSION["areaSession"];
        $res =$cojuInstance->get_info_Coju($id);
        while($row = mysqli_fetch_array($res)){
            $id_reg = $row['id'];
            $id_client = $row['id_client'];
            $object = $row['object'];
            $validity = $row['validity'];
            $exp = $row['exp'];
            $coju = $row['coju'];
            $id_type_coju = $row['id_type_coju'];
            $comment = $row['comment'];
            $id_autority = $row['id_autority'];
            $status = $row['status'];
        }
       
    ?>
        <div class="card">
            <h2 class="">Edición de Control Interno (CI) #<?php echo $id_reg; ?></h2>
            <div class="card card-body">
            <form class="row" onsubmit="editCoju(<?php echo $id_reg; ?>); return false;">
                <div class="form-group col-lg-4">
                    <label for="empleado">Selecciona Cliente</label>
                    <select  class="form-control" id="empleado"  required  >
                        <?php echo $cojuInstance->selectEmp_WO($id_client); ?>
                    </select>
                </div>
                <div class="form-group col-lg-8">
                    <label for="objeto">Objeto</label>
                    <textarea class="form-control" id="objeto" rows="4" cols="93"  required><?php echo $object;?></textarea>
                </div>
                <div class="form-group col-lg-3">
                    <label for="exp"># Expediente</label>
                    <input class="form-control" type="text" id="exp" value="<?php echo $exp; ?>" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="tipo">Selecciona Tipo de Control Interno</label>
                    <select  class="form-control " id="tipo" required >
                        <option value="">Selecciona</option>
                        <?php echo $cojuInstance->selectTC_WO($id_type_coju); ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="coju">Control Interno (CI)</label>
                    <input class="form-control" type="text" id="coju" value="<?php echo $coju; ?>" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="autoridad">Selecciona Autoridad</label>
                    <select  class="form-control " id="autoridad" required  >
                        <option value="">Selecciona</option>
                        <?php echo $cojuInstance->selectAuto_WO($id_autority); ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="vigencia">Vigencia</label>
                    <input id='vigencia' type="text" class="datepicker form-control" value='<?php echo $validity; ?>'  required>
                </div>
                <div class="form-group col-lg-9">
                    <label for="comentario">Comentarios</label>
                    <textarea class="form-control" id="comentario" rows="4" cols="145" ><?php echo $comment; ?></textarea> 
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                </div>
            </form>
            </div>
        </div>
        <script>
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd',
            });
        </script>
        <script src="./assets/js/coju.js"></script>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>