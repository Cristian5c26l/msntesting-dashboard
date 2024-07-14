<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/fact.php';
include '../../models/fact.php';
$factInstance = new c_fact($host,$user,$pass,$db);
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Mis Evidencias</h2>
    </div>
    <div class="card card-body">
        <form class="row" id="blog" onsubmit="addfact(); return false;">
            <div class="form-group col-lg-6">
                <input id="folio" type="text" class="form-control border-dark" value="" placeholder="Folio" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="company" type="text" class="form-control border-dark" value="" placeholder="Empresa" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="provider" type="text" class="form-control border-dark" value="" placeholder="Proveedor" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="description" type="text" class="form-control border-dark" value="" placeholder="Descripción/Mensaje" required>
            </div>
            <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Mis Evidencias</h2>
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Folio</th>
                    <th>Empresa</th>
                    <th>Proveedor</th>
                    <th>Descripción</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php $factInstance->selectAllF(); ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $('#data-table').dataTable();
</script>

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
                <div class="text-center">
                    <img id="image" src="">
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group col-lg-4">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->