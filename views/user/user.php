<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/employees.php';
include '../../models/login.php';
$userInstance = new c_emp($host,$user,$pass,$db);
?>
<div class="card">
    <h2 class="">Administración de Usuario</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addUser" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Usuario
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="col-md-3">
        <button class="btn btn-primary" onclick="fullqrP()">Códigos QR</button>
    </div>

    <div class="collapse" id="addUser">
        <div class="card card-body">
            <form class="row" onsubmit="addUser(); return false;">
                <div class="form-group col-lg-6">
                    <input id="name" class="form-control" type="text" value="" placeholder="Nombre" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="last" class="form-control" type="text" value="" placeholder="Apellido" required>
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
                <div class="form-group col-lg-4">
                    <input id="username" class="form-control" type="text" value="" placeholder="Nickname / Usuario" required>
                </div>
                <div class="form-group col-lg-4">
                    <input id="password" class="form-control" type="password" value="" placeholder="Password" required>
                </div>
                <div class="form-group col-lg-4">
                    <input id="date_in" type="text" class="datepicker form-control" value="" placeholder="Fecha de Entrada">
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="area" required>
                        <?php echo $userInstance->selectArea(''); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="job">
                        <option value="">Puesto Gedes (Sólo de ser Necesario)</option>
                        <option value="2">Abogado</option>
                        <option value="3">Contador</option>
                        <option value="4">Abogado EP (Estados Procesales)</option>
                        <option value="5">Mensajero</option>
                        <option value="6">Oficialia de Partes</option>
                    </select>
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
        <h2 class="card-title">Listado de Usuarios</h2>
    </div>

    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Área</th>
                    <th>Puesto</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Celular</th>
                    <th>Fecha Ingreso</th>
                    <th>Fecha Baja</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Empleo</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $userInstance->selectAllEmp($host,$user,$pass,$db); ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Código QR Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div id="qr">
                    
                </div>
                <br>
                <button class="btn btn-primary" onclick="printqr()">Imprimir</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<script>
    $('#data-table').dataTable();

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });

    function printqr(){
        $("#qr").print();
    }
</script>
