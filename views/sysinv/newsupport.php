<?php
if($_REQUEST['id']){
// Inventory Settings
include '../../includes/config.php';
include '../../controllers/sysinv.php';
include '../../models/sysinv.php';
$invInstance = new c_sysinv($host,$user,$pass,$db);
session_start();
$iduser = $_SESSION["idSession"];
$id = $_POST['id'];
?>
<div class="card">
    <h2 class="">Expediente de Usuario (Sistemas)</h2>
    <div class="btn btn-primary col-md-2" onclick="menu('sysinv/newinsume');">< Regresar</div>
    <br>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addMaintenance" aria-expanded="false" aria-controls="addMaintenance">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Registro de Soporte
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addMaintenance">
        <div class="card card-body">
            <form class="row" onsubmit="addMaintenance(); return false;">
                <input type="hidden" id="idpc" value="<?php echo $id; ?>">
                <div class="form-group col-lg-6">
                    <label for="component">Componente Agregado/Usado/Reparado:</label>
                    <select class="form-control" id="component" required>
                        <option value="0">Ninguno o del Mismo Equipo</option>
                        <?php echo $invInstance->selectComponent(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="description">Descripción:</label>
                    <input id="description" class="form-control" type="text" value="" placeholder="Descripción" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="type" required>
                        <option value="">Tipo de Mantenimiento</option>
                        <option value="1">Interno</option>
                        <option value="2">Externo</option>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <input id="wresult" class="form-control" type="text" value="" placeholder="Resultado Esperado">
                </div>
                <div class="form-group col-lg-4">
                    <input id="result" class="form-control" type="text" value="" placeholder="Resultado(s) Obtenido(s)" required>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Mi Inventario (Sistemas)</h2>
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Insumo</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>SKU/Serie</th>
                    <th>Resultado Esperado</th>
                    <th>Resultado Obtenido</th>
                    <th>Fecha de Servicio</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $invInstance->listMaintenance($id); ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $('#data-table').dataTable(
        {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ]
        }
    );

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });
</script>

<?php
}else{
    echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
}
?>
