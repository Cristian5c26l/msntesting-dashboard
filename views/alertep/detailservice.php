<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/alertep.php';
include '../../models/alertep.php';
$serviceInstance = new c_alertep($host,$user,$pass,$db);
session_start();
$id = $_SESSION['idSession'];
$idservice = $_POST['id'];
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Listado de Alertas</h2>
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de Alerta</th>
                    <th>Título</th>
                    <th>Comentario</th>
                    <th>Prioridad</th>
                    <th>Asignado</th>
                    <th>Periodicidad</th>
                    <th>Días Restantes</th>
                    <th>Resuelto Hasta</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $serviceInstance->selectUserAlert($idservice,$id); ?>
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
