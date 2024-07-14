<?php
// Inventory Settings
include '../../includes/config.php';
include '../../controllers/inventory.php';
include '../../models/inventory.php';
$invInstance = new c_inventory($host,$user,$pass,$db);
session_start();
$iduser = $_SESSION["idSession"];
?>
<div class="card">
    <h2 class="">Insumos</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addinsume" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Insumo
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addinsume">
        <div class="card card-body">
            <form class="row" onsubmit="newInsume(); return false;">
                <div class="form-group col-lg-6">
                    <input id="name" class="form-control" type="text" value="" placeholder="Nombre Insumo" required>
                    <input id="iduser" class="form-control" type="hidden" value="<?php echo $iduser; ?>" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="idarea" required>
                        <?php echo $invInstance->selectInsumeArea(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <input id="description" class="form-control" type="text" value="" placeholder="Descripción" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="qty" pattern="[0-9]{5}" class="form-control" type="number" min="1" max="99999" value="" placeholder="Cantidad (de 1 a 99,999)" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="expiration" required>
                        <option value="0">No Perecedero</option>
                        <option value="1">Perecedero</option>
                    </select>
                </div>
                <div id="exp" style="display:none" class="form-group col-lg-6">
                    <input id="expire" class="form-control datepicker" type="text" value="<?php echo date("Y-m-d") ?>" required>
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
        <h2 class="card-title">Mis Insumos</h2>
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Comentario</th>
                    <th>Área</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $invInstance->listAllInsume($iduser); ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel1">Adición de insumos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <form class="form-group col-lg-12 row" onsubmit="addInsume(); return false;">
                    <div class="col-lg-12 row">
                        <div class="form-group col-lg-2">
                            <input id="added" type="number" min="1" class="form-control border-dark" value="1" placeholder="">
                        </div>
                        <div class="form-group col-lg-10">
                            <input id="comment1" type="text" class="form-control border-dark" value="" placeholder="Comentario">
                            <input id="idInsume1" type="hidden" value="">
                        </div>
                    </div>
                    <div class="col-lg-12 row">
                        <div class="form-group col-lg-6">
                            <select class="form-control" id="expiration1" required>
                                <option value="0">No Perecedero</option>
                                <option value="1">Perecedero</option>
                            </select>
                        </div>
                        <div id="exp1" style="display:none" class="form-group col-lg-6">
                            <input id="expire1" class="form-control datepicker" type="text" value="<?php echo date("Y-m-d") ?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group col-lg-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- modal -->
<div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel2">Decremento/Uso de insumos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <form class="form-group col-lg-12 row" onsubmit="restInsume(); return false;">
                    <div class="form-group col-lg-2">
                        <input id="rest" type="number" min="1" class="form-control border-dark" value="1" placeholder="">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="comment2" type="text" class="form-control border-dark" value="" placeholder="Comentario">
                        <input id="idInsume2" type="hidden" value="">
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

    $('#expiration').on('change', function() {
        var exp = $(this).val();
        if(exp=='0' || exp==0){
            $('#exp').hide();
        }else{
            $('#exp').show();
        }
    });

    $('#expiration1').on('change', function() {
        var exp = $(this).val();
        if(exp=='0' || exp==0){
            $('#exp1').hide();
        }else{
            $('#exp1').show();
        }
    });
</script>
