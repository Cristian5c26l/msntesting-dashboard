<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/alertep.php';
include '../../models/alertep.php';
$serviceInstance = new c_alertep($host,$user,$pass,$db);
session_start();
$id = $_SESSION['idSession'];
?>
<div class="card">
    <h2 class="">Alertas</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addAlert" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Alerta
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addAlert">
        <div class="card card-body">
            <form class="row" onsubmit="newAlertEP(); return false;">
                <div class="form-group col-lg-12">
                    <input id="title" class="form-control" type="text" value="" placeholder="Título" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="idservice">Tipo de Alerta</label>
                    <select class="form-control" id="idservice" required>
                        <?php echo $serviceInstance->selectAlertService(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="date">Fecha Vigencia</label>
                    <input id="date" type="text" class="datepicker form-control" required="">
                </div>
                <div class="form-group col-lg-3">
                    <label for="date">Período de Pago</label>
                    <select class="form-control" id="paytype" required>
                        <option value="Anual">Anual</option>
                        <option value="Semestral">Semestral</option>
                        <option value="Trimestral">Trimestral</option>
                        <option value="Bimestral">Bimestral</option>
                        <option value="Mensual">Mensual</option>
                    </select>    
                </div>    
                <div class="form-group col-lg-12">
                    <textarea id="comment" class="form-control" placeholder="Mensaje" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
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
        <h2 class="card-title">Alertas</h2>
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
                    <th>Días Restantes</th>
                    <th>Pagado Hasta</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $serviceInstance->selectUserAlert('',$id); ?>
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