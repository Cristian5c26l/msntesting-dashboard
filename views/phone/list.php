<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/list.php';
include '../../models/list.php';
$userInstance = new c_phone($host,$user,$pass,$db);
?>
<div class="card">
    <h2 class="">Administración de Directorio de Extensiones</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addUser" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Usuario
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addUser">
        <div class="card card-body">
            <form class="row" onsubmit="addPhone(); return false;">
                <div class="form-group col-lg-6">
                    <select class="form-control" name="user" id="user">
                        <?php $userInstance->selectUser(); ?>
                    </select>
                </div>    
                <div class="form-group col-lg-6">
                    <select class="form-control" name="ubication" id="ubication">
                        <?php $userInstance->selectUbication(); ?>
                    </select>
                </div>    
                <div class="form-group col-lg-6">
                    <input id="phone" class="form-control" type="text" value="" placeholder="Teléfono Empresa">
                </div>
                <div class="form-group col-lg-6">
                    <input id="ext" class="form-control" type="text" value="" placeholder="Ext" required>
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
        <h2 class="card-title">Listado de Teléfonos y Extensiones de Personal</h2>
    </div>

    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ubicación</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Extensión</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $userInstance->selectAllExt(); ?>
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
