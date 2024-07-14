<?php
// Backup Settings
include '../../includes/config.php';
include '../../controllers/sysinv.php';
include '../../models/sysinv.php';
$respInstance = new c_sysinv($host,$user,$pass,$db);
session_start();
$id = $_SESSION['idSession'];
?>
<div class="card">
    <h2 class="">Respaldos</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addResp" aria-expanded="false" aria-controls="addResp">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Registro de Respaldo
    </div>

    <div class="collapse" id="addResp">
        <div class="card card-body">
            <form class="row" onsubmit="newBackup(); return false;">
                <div class="form-group col-lg-6">
                    <select class="form-control" id="iduser" required>
                        <option value="">Selecciona un Empleado</option>
                        <?php echo $respInstance->selectUser(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <input id="comment" type="text" class="form-control" placeholder="Comentario">
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
        <h2 class="card-title">Registros de Respaldos</h2>
    </div>
    
    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Comentario(s)</th>
                    <th>Fecha Respaldo</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $respInstance->listBackup(); ?>
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
