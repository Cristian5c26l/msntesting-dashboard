<?php
// Inventory Settings
include '../../includes/config.php';
include '../../controllers/sysinv.php';
include '../../models/inventory.php';
$invInstance = new c_sysinv($host,$user,$pass,$db);
session_start();
$iduser = $_SESSION["idSession"];
?>
<div class="card">
    <h2 class="">Inventario Sistemas</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addinsume" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Item
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addinsume">
        <div class="card card-body">
            <form class="row" onsubmit="newItem(); return false;">
                <div class="form-group col-lg-6">
                    <input id="name" class="form-control" type="text" value="" placeholder="Nombre del Item" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="description" class="form-control" type="text" value="" placeholder="Descripción" required>
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="assign" required>
                        <?php echo $invInstance->assignate(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <input id="st" class="form-control" type="text" value="" placeholder="service Tag" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="mac" class="form-control" type="text" value="" placeholder="MAC Address" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="sku" class="form-control" type="text" value="" placeholder="Sku/Serial" required>
                </div>
                <div class="form-group col-lg-6">
                    <input id="marca" class="form-control" type="text" value="" placeholder="Marca" required>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                </div>
                <div class="form-group col-lg-6">
                    <select class="form-control" id="ubication" required>
                        <option value="Goethe 8">Goethe 8</option>
                        <option value="Goethe 24">Goethe 24</option>
                        <option value="Darwin">Darwin</option>
                        <option value="Tlalnepantla">Tlalnepantla</option>
                        <option value="Almacén">Almacén</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Lista de Inventario</h2>
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
                    <th>Service Tag</th>
                    <th>MAC Address</th>
                    <th>SKU</th>
                    <th>Marca</th>
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
