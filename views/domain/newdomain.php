<?php
// Inventory Settings
include '../../includes/config.php';
include '../../controllers/domain.php';
include '../../models/domain.php';
$domInstance = new c_domain($host,$user,$pass,$db);
session_start();
$iduser = $_SESSION["idSession"];
?>
<div class="card">
    <h2 class="">Dominio (Sistemas)</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addDomain" aria-expanded="false" aria-controls="addDomain">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Dominio
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addDomain">
        <div class="card card-body">

            <form class="row" onsubmit="addDomain(); return false;">

                <div class="form-group col-lg-3">
                    <label for="ubication">Ubicación:</label>
                    <select class="form-control" id="ubication" required>
                        <option value="">Ubicación:</option>
                        <?php echo $domInstance->selectUbication(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="area">Áreas:</label>
                    <input id="area" class="form-control" type="text" value="" placeholder="Área" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="ubication">Usuario (Nombre):</label>
                    <select class="form-control" id="iduser" onchange="getEmail();">
                        <option value="">Selecciona un Usuario</option>
                        <?php echo $domInstance->selectUser(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                </div>    
                <div class="form-group col-lg-3">
                    <label for="user">Usuario (acceso):</label>
                    <input id="user" class="form-control" type="text" value="" placeholder="Usuario" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="pass">Contraseña Dominio:</label>
                    <input id="pass" class="form-control" type="text" value="" placeholder="Password" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="email">Email:</label>
                    <input id="email" class="form-control" type="text" value="" placeholder="Email" disabled>
                </div>
                <div class="form-group col-lg-3">
                    <label for="emailpass">Contraseña Email:</label>
                    <input id="emailpass" class="form-control" type="text" value="" placeholder="Password de Email" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="anydesk">Anydesk:</label>
                    <input id="anydesk" class="form-control" type="text" value="" placeholder="Anydesk">
                </div>
                <div class="form-group col-lg-3">
                    <label for="ip">IP:</label>
                    <input id="ip" class="form-control" type="text" value="" placeholder="IP address">
                </div>
                <div class="form-group col-lg-3">
                    <label for="mac">MAC:</label>
                    <input id="mac" class="form-control" type="text" value="" placeholder="MAC address">
                </div>
                <div class="form-group col-lg-3">
                    <label for="pcname">Nombre de Equipo:</label>
                    <input id="pcname" class="form-control" type="text" value="" placeholder="Nombre de Equipo">
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
        <h2 class="card-title">Mis Dominios (Sistemas)</h2>
    </div>
    <div class="col-md-4">
        <form onsubmit="return false;">
            <br>
            <label for="selection">Selecciona la Sucursal</label>
            <select class="form-control" id="selection">
                <option value="">Todas las Sucursales (por defecto)</option>
                <?php echo $domInstance->selectUbication(); ?>
            </select>
        </form>
    </div>
    <hr>

    <div id="newTable">
        <div class="table-responsive">
            <table id="data-table" class="table table-striped table-bordered" style="width:100%">
            
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ubicación</th>
                        <th>Áreas</th>
                        <th>Usuario</th>
                        <th>Contraseña Dominio</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Password Email</th>
                        <th>Anydesk</th>
                        <th>IP</th>
                        <th>Dirección MAC</th>
                        <th>Nombre del Equipo</th>
                        <th>Status</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $domInstance->selectAllDomains(''); ?>
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <div id="responsive"></div>
</div>

<script>
    $('#data-table').dataTable(
        {
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ],
            pageLength : 20,
            lengthMenu: [[5, 10, 20, 50, -1], [5, 10, 20, 50, 'Todos']]
        }
    );

    $("#selection").change(function() {
        var v = $(this).val();
        domainSearch(v);
    });

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });

    function printqr(){
        $("#qr").print();
    }
</script>
