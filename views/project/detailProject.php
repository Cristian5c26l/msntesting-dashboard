<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/projects.php';
include '../../models/projects.php';
$projectInstance = new c_project($host,$user,$pass,$db);
session_start();
if(isset($_POST['iduser'])){
    $id = $_POST['iduser'];
}else{
    $id = "";
}

$idProject = $_POST['id'];
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Listado de Tareas</h2>
        <h2 class="card-title"><span id="percent2" class="btn btn-outline-success">0</span></h2>
        <input type="hidden" id="perc2" value="">
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Proyecto</th>
                    <th>Título</th>
                    <th>Comentario</th>
                    <th>Prioridad</th>
                    <th>Asignado</th>
                    <th>Fecha inicio</th>
                    <th>Fecha Terminado</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $projectInstance->selectUserTask($idProject,$id); ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <form class="form-group col-lg-12 row" onsubmit="taskResp(); return false;">
                    <div class="form-group col-lg-8">
                        <input id="resp" type="text" class="form-control border-dark" value="" placeholder="Responder">
                        <input id="idTicket" type="hidden" value="">
                    </div>
                    <div class="form-group col-lg-4">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

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

    percentProject('<?php echo $idProject; ?>');
</script>