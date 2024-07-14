<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/services.php';
include '../../models/services.php';
$serviceInstance = new c_service($host,$user,$pass,$db);
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
                    <th>Tipo de Servicio</th>
                    <th>Título</th>
                    <th>Comentario</th>
                    <th>Prioridad</th>
                    <th>Asignado</th>
                    <th>Tipo de Pago</th>
                    <th>Dias Restantes</th>
                    <th>Pagado Hasta</th>
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
