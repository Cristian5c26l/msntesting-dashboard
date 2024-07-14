<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/tickets.php';
include '../../models/tickets.php';
$supportInstance = new c_ticket($host,$user,$pass,$db);
session_start();
$id = $_SESSION['idSession'];
?>
<div class="card">
    <h2 class="">Archivo</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addUser" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Generar Petición/Prestamo Archivo
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addUser">
        <div class="card card-body">
            <form class="row" onsubmit="newRequire(); return false;">
                <div class="form-group col-lg-12">
                    <input id="title" class="form-control" type="text" value="" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="coju" class="form-control" type="text" value="" placeholder="Coju" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="exp" class="form-control" type="text" value="" placeholder="No. de Expediente">
                </div>
                <div class="form-group col-lg-12">
                    <input id="idarea" class="form-control" type="hidden" value="15" required>
                </div>
                <div class="form-group col-lg-12">
                    <textarea id="comment" class="form-control" placeholder="Mensaje de Petición de Archivo" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
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
        <h2 class="card-title">Mis Archivos</h2>
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No. Expediente</th>
                    <th>Coju</th>
                    <th>Área</th>
                    <th>De:</th>
                    <th>Título</th>
                    <th>Comentario</th>
                    <th>Prioridad</th>
                    <th>Asignado por</th>
                    <th>Fecha de Petición</th>
                    <th>Fecha de Prestamo</th>
                    <th>Fecha de Devolución</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $supportInstance->selectUserFiles($id); ?>
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
