<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/projects.php';
include '../../models/projects.php';
$projectInstance = new c_project($host,$user,$pass,$db);
session_start();
$id = $_SESSION['idSession'];
?>

<!-- Essential JS 2 all material theme -->
<link href="https://cdn.syncfusion.com/ej2/bootstrap4.css" rel="stylesheet" type="text/css"/>
<!-- Essential JS 2 all script -->
<script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>

<div class="card">
    <h2 class="">Proyectos</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addProject" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Crear Proyecto
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addProject">
        <div class="card card-body">
            <form class="row" onsubmit="newProject(); return false;">
                <div class="form-group col-lg-12">
                    <input id="project" class="form-control" type="text" value="" placeholder="Título del Proyecto" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="idarea" required>
                        <?php echo $projectInstance->selectProjectArea(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-12">
                    <textarea id="description" class="form-control" placeholder="Descripción" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
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
        <h2 class="card-title">Proyectos de mi Área</h2>
    </div>
    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Área</th>
                    <th>Proyecto</th>
                    <th>Descripción</th>
                    <th>Total de Tareas</th>
                    <th>Avance %</th>
                    <th>Fecha inicio</th>
                    <th>Fecha Terminado</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $projectInstance->selectUserProjects($id); ?>
            </tbody>
        </table>
    </div>
</div>
<?php //echo $projectInstance->selectProjectsJson(''); ?>

<div id="Gantt"></div>
<script type="text/javascript">
    var ganttChart = new ej.gantt.Gantt({
        dataSource: [
            <?php echo $projectInstance->selectProjectsJson(''); ?>
        ],
        height: '450px',
        taskFields: {
            id: 'TaskID',
            name: 'TaskName',
            startDate: 'StartDate',
            duration: 'Duration',
            progress: 'Progress',
            dependency: 'Predecessor',
            child: 'subtasks',
        }
    });
    ganttChart.appendTo('#Gantt');
</script>

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
                <form class="form-group col-lg-12 row" onsubmit="ticketResp(); return false;">
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
</script>
