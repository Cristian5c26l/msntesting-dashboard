<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/login.php';
include '../../models/login.php';
$userInstance = new c_user($host,$user,$pass,$db);
?>
<div class="card">
    <h2 class="">Administración de Empleados</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addEmp" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Empleado
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addEmp">
        <div class="card card-body">
            <form class="row" onsubmit="addEmp(); return false;">
                <div class="form-group col-lg-6">
                    <input id="name" class="form-control" type="text" value="" placeholder="Nombre" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="last" class="form-control" type="text" value="" placeholder="Apellido" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="area" class="form-control" type="text" value="" placeholder="Área" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="job" class="form-control" type="text" value="" placeholder="Puesto" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="email" class="form-control" type="email" value="" placeholder="Email" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="phone" class="form-control" type="phone" value="" placeholder="Teléfono">
                </div>
                <div class="form-group col-lg-6">
                    <input id="mobile" class="form-control" type="text" value="" placeholder="Celular">
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="gender" required>
                        <option value="">Selecciona un Sexo</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <input id="birthday" type="text" class="datepicker form-control" value="" placeholder="Fecha de Cumpleaños">
                </div>
                <div class="form-group col-lg-6">
                    <input id="street" class="form-control" type="text" value="" placeholder="Calle" required>
                </div>
                <div class="form-group col-lg-4">
                    <input id="num_ext" class="form-control" type="text" value="" placeholder="Número Exterior" required>
                </div>
                <div class="form-group col-lg-4">
                    <input id="num_int" class="form-control" type="text" value="" placeholder="Número Interior">
                </div>
                <div class="form-group col-lg-4">
                    <input id="cp" class="form-control" type="text" value="" placeholder="C.P." required>
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
        <h2 class="card-title">Listado de Empleados</h2>
    </div>

    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Celular</th>
                    <th>Empleo</th>
                    <th>Fecha Ingreso</th>
                    <th>Fecha Baja</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php //echo $userInstance->selectAllEmp($host,$user,$pass,$db); ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $('#data-table').dataTable();

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });
</script>
