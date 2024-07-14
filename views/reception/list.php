<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/employees.php';
include '../../models/login.php';
$userInstance = new c_emp($host,$user,$pass,$db);
?>
<div class="card">
    <h2 class="">Administración de Directorio</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addUser" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Usuario
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addUser">
        <div class="card card-body">
            <form class="row" onsubmit="addDir(); return false;">
                <input id="type" class="form-control" type="hidden" value="1">
                <div class="form-group col-lg-6">
                    <input id="name" class="form-control" type="text" value="" placeholder="Nombre" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="corp" class="form-control" type="text" value="" placeholder="Empresa" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="other" class="form-control" type="text" value="" placeholder="Teléfono Empresa">
                </div>
                <div class="form-group col-lg-6">
                    <input id="email" class="form-control" type="email" value="" placeholder="Email" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="phone" class="form-control" type="phone" value="" placeholder="Teléfono">
                </div>
                <div class="form-group col-lg-6">
                    <input id="ext" class="form-control" type="hidden" value="" placeholder="Extensión">
                </div>
                <div class="form-group col-lg-6">
                    <input id="mobile" class="form-control" type="text" value="" placeholder="Celular">
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
        <h2 class="card-title">Listado de Clientes Recepción</h2>
    </div>

    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Empresa</th>
                    <th>Teléfono Empresa</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <!--th>Extensión</th-->
                    <th>Celular</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $userInstance->selectAllDir(1); ?>
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
