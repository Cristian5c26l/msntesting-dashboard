<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/task.php';
include '../../models/task.php';
$taskInstance = new c_task($host,$user,$pass,$db);
session_start();
$id = $_SESSION["idSession"];
$type = $_SESSION["type"];
if($type==1 OR $type==2){
    $disabled = "";
}else{
    $disabled = "";
}
?>
<div class="card">
    <h2 class="">Tareas</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addTask" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Tarea
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addTask">
        <div class="card card-body">
            <form class="row" onsubmit="newTask(); return false;">
                <div class="form-group col-lg-12">
                    <input id="task" class="form-control" type="text" value="" placeholder="Título Tarea" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                </div>
                <div class="form-group col-lg-12">
                    <textarea id="object" class="form-control" placeholder="Objeto" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="coju" required <?php echo $disabled; ?> >
                        <option value="">Selecciona un Control Interno</option>
                        <?php echo $taskInstance->selectCoju(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="type" required <?php echo $disabled; ?> >
                        <option value="">Selecciona un Tipo de Control Interno</option>
                        <?php echo $taskInstance->selectType(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="auth" required <?php echo $disabled; ?> >
                        <option value="">Selecciona una Autoridad</option>
                        <?php echo $taskInstance->selectAuth(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="messenger" required <?php echo $disabled; ?> >
                        <option value="">Selecciona un Mensajero</option>
                        <?php echo $taskInstance->selectMessenger(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-12">
                    <textarea id="desc" class="form-control" placeholder="Descripción" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
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
        <h2 class="card-title">Mis Tareas</h2>
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
                    <th>Asignado</th>
                    <th>Fecha inicio</th>
                    <th>Fecha Terminado</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $taskInstance->selectUserTask($id); ?>
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
                <form class="form-group col-lg-12 row" onsubmit="msgResp(); return false;">
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
