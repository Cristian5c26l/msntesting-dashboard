<?php
// Inventory Settings
include '../../includes/config.php';
include '../../controllers/sysinv.php';
include '../../models/sysinv.php';
$invInstance = new c_sysinv($host,$user,$pass,$db);
session_start();
$iduser = $_SESSION["idSession"];
?>
<div class="card">
    <h2 class="">Inventario (Sistemas)</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addinsume" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Insumo
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addinsume">
        <div class="card card-body">
            <form class="row" onsubmit="newInsumeSys(); return false;">
                <div class="form-group col-lg-6">
                    <label for="type">Tipo de Insumo:</label>
                    <select class="form-control" id="type" required>
                        <option value="">Tipo de Insumo</option>
                        <?php echo $invInstance->selectInsumeType(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="idmark">Marca:</label>
                    <select class="form-control" id="idmark" required>
                        <?php echo $invInstance->selectMark(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="idsize">Capacidad:</label>
                    <select class="form-control" id="idsize" required>
                        <?php echo $invInstance->selectSize(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="name">Nombre Insumo:</label>
                    <input id="name" class="form-control" type="text" value="" placeholder="Nombre Insumo" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="description" class="form-control" type="text" value="" placeholder="Descripción" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="st" required>
                        <option value="">Condición del Insumo</option>
                        <option value="Nuevo">Nuevo</option>
                        <option value="Usado">Usado</option>
                        <option value="Baja">Baja</option>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <input id="mac" class="form-control" type="text" value="" placeholder="MAC address">
                </div>
                <div class="form-group col-lg-3">
                    <input id="code" class="form-control" type="text" value="" placeholder="Código" required>
                </div>
                <div class="form-group col-lg-3">
                    <input id="sku" class="form-control" type="text" value="" placeholder="SKU/Serie">
                </div>
                <div class="form-group col-lg-3">
                    <select class="form-control" id="ubication" required>
                        <option value="">Ubicación del Insumo</option>
                        <?php echo $invInstance->selectUbication(); ?>
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
        <h2 class="card-title">Mi Inventario (Sistemas)</h2>
    </div>
    <div class="row">
        <div class="col-md-3">
            <button class="btn btn-primary" onclick="fullqrSystem()">Impresión de Códigos QR</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary" onclick="addQRImp();">Impresión de Selección QR</button>
        </div>
    </div>
    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Área</th>
                    <th>Usuario</th>
                    <th>Insumo</th>
                    <th>Motivo</th>
                    <th>Marca</th>
                    <th>Capacidad</th>
                    <th>Descripción</th>
                    <th>Condición</th>
                    <th>MAC</th>
                    <th>Codigo</th>
                    <th>SKU</th>
                    <th>Ubicación</th>
                    <th>Tipo</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>+Impresión</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $invInstance->listAllInsume($iduser); ?>
            </tbody>
        </table>
    </div>

    <hr>

    <div id="responsive"></div>
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
                <div class="row" id="qr">
                    
                </div>
                <br>
                <button class="btn btn-primary" onclick="printqr()">Imprimir</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

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

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });

    function printqr(){
        $("#qr").print();
    }
</script>
