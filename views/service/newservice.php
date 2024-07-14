<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/services.php';
include '../../models/services.php';
$serviceInstance = new c_service($host,$user,$pass,$db);
session_start();
$id = $_SESSION['idSession'];
?>
<div class="card">
    <h2 class="">Servicios</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addService" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Crear Servicio
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addService">
        <div class="card card-body">
            <form class="row" onsubmit="newService(); return false;">
                <div class="form-group col-lg-12">
                    <input id="service" class="form-control" type="text" value="" placeholder="Título del Servicio" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="idarea" required>
                        <?php echo $serviceInstance->selectServiceArea(); ?>
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
        <h2 class="card-title">Servicios de mi Área</h2>
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
                <?php echo $serviceInstance->selectUserService($id); ?>
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
