<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/task.php';
include '../../models/task.php';
$taskInstance = new c_task($host,$user,$pass,$db);
session_start();
$id = $_SESSION["idSession"];
$area = $_SESSION["areaSession"];
$type = $_SESSION["type"];
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Listado de Tareas</h2>
        <!--h2 class="card-title"><span id="percent" class="btn btn-outline-success">0</span></h2-->
        <input type="hidden" id="perc" value="">
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Área</th>
                    <th>De:</th>
                    <th>Título</th>
                    <th>Comentario</th>
                    <th>Prioridad</th>
                    <th>Responsable</th>
                    <th>Fecha inicio</th>
                    <th>Fecha Terminado</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $taskInstance->selectAllTask(0,$area,$type); ?>
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
                        <input id="idTask" type="hidden" value="">
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
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ],
            pageLength : 20,
            lengthMenu: [[5, 10, 20, 50, -1], [5, 10, 20, 50, 'Todos']]
        }
    );
    percent(<?php echo $area; ?>);
</script>

