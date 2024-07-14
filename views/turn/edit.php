<?php
    if($_REQUEST['id']){
        // User Settings
        include '../../includes/config.php';
        include '../../controllers/turn.php';
        include '../../models/turn.php';
        $turnInstance = new c_turn($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
        session_start();
        $area = $_SESSION["areaSession"];
        $res =$turnInstance->get_info_Turn($id);
        while($row = mysqli_fetch_array($res)){
            $id_reg = $row['id'];
            $fecha_termino = $row['fecha_termino'];
            $vigencia = $row['vigencia'];
            $fecha_turno = $row['fecha_turno'];
            $id_razon = $row['id_razon'];
            $id_coju = $row['id_coju'];
            $id_status = $row['id_status'];

        }
    ?>
        <div class="card">
            <h2 class="">Edición de Turno #<?php echo $id_reg; ?></h2>
            <div class="card card-body">
            <form class="row" onsubmit="editTurn(<?php echo $id_reg; ?>); return false;">
                <div class="form-group col-lg-4">
                    <label for="empleados">Selecciona Abogado(s) Sr.</label>
                    <select multiple class="form-control " id="empleados"  name='empleados' required  >
                        <?php echo $turnInstance->selectEmp_WO($id_reg); ?>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="f_termino">Fecha Término</label>
                    <input id='f_termino' type="text" class="datepicker form-control" value='<?php echo $fecha_termino;?> ' required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="vigencia">Vigencia</label>
                    <input value='<?php echo $vigencia;?>' id="vigencia" class="datepicker form-control" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="razon">Selecciona Trámite del Turno</label>
                    <select  class="form-control " id="razon" required  >
                        <?php echo $turnInstance->selectRT_WO($id_razon); ?>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="coju">Selecciona Control Interno (CI)</label>
                    <select  class="form-control " id="coju" required  >
                        <?php echo $turnInstance->selectCoju_WO($id_coju); ?>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="coju">Selecciona Estatus</label>
                    <select  class="form-control " id="status" required  >
                        <?php echo $turnInstance->selectStatus_WO($id_status); ?>
                    </select>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" >Editar Turno</button> 
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
        <script src="./assets/js/turn.js"></script>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>