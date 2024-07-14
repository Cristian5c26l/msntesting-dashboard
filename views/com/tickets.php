<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/tickets.php';
include '../../models/tickets.php';
$supportInstance = new c_ticket($host,$user,$pass,$db);
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Listado de Tickets</h2>
        <h2 class="card-title"><span id="percent" class="btn btn-outline-success">0</span></h2>
        <input type="hidden" id="perc" value="">
    </div>

    <div class="card card-body p-2">
        <div class="row row-projects">
            <div class="col-lg-3 col-md-4 col-6">
                <i class="material-icons text-link-color md-36">dvr</i>
                <div class="mb-1">Total Tickets</div>
                <h4 class="mb-0 "><?php echo $supportInstance->numTickets(0,0,2); ?></h4>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <i class="material-icons text-grey md-36">warning</i>
                <div class="mb-1">Tickets Inmediatos</div>
                <h4 class="mb-0"><?php echo $supportInstance->numTickets(1,0,2); ?></h4>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <i class="material-icons text-success md-36">assistant_photo</i>
                <div class="mb-1">Tickets Realizados</div>
                <h4 class="mb-0"><?php echo $supportInstance->numTickets(0,1,2); ?></h4>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <i class="material-icons text-danger md-36">alarm</i>
                <div class="mb-1">Tickets Urgentes</div>
                <h4 class="mb-0"><?php echo $supportInstance->numTickets(2,0,2); ?></h4>
            </div>
        </div>
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
                <?php echo $supportInstance->selectAllTickets(0,2); ?>
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
    $('#data-table').dataTable();
    percent(2);
</script>

