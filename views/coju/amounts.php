<?php
    if($_REQUEST['id']){
        // Inventory Settings
        include '../../includes/config.php';
        include '../../controllers/coju.php';
        include '../../models/coju.php';
        $cojuInstance = new c_coju($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
        $res =$cojuInstance->get_info_Coju($id);
        $row = mysqli_fetch_array($res);
        $object = $row['object'];
    ?>
        <div class="card">
            <h2 class="">ADMINISTRACIÓN DE MONTOS</h2>

            <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addAct" aria-expanded="false" aria-controls="addAct">
                <i class="material-icons align-middle md-36">add_box</i>
                Agregar Acto Impugnado
            </div>

            <div class="collapse" id="addAct">
                <div class="card card-body">
                    <form class="row" onsubmit="addAct(); return false;">
                        <div class="form-group col-lg-4">
                            <input type="hidden" id="idcoju" value="<?php echo $id; ?>">
                            <label for="impAct">Introduce el Acto Impugnado</label>
                            <input id="impAct" type="text" class="form-control border-dark" value="" placeholder="Acto Impugnado" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="folio">Introduce el No. de Folio</label>
                            <input id="folio" type="text" class="form-control border-dark" value="" placeholder="# de Folio">
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                        </div>
                    </form>
                </div>
            </div>

            <hr>
            
            <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addAmount" aria-expanded="false" aria-controls="addAmount">
                <i class="material-icons align-middle md-36">add_box</i>
                Agregar Monto
            </div>

            <div class="collapse" id="addAmount">
                <div class="card card-body">
                    <form class="row" onsubmit="addAmount(); return false;">
                        <div class="form-group col-lg-4">
                            <input type="hidden" id="id" value="<?php echo $id; ?>">
                            <label for="act">Selecciona el Acto Impugnado</label>
                            <select  class="form-control" id="act"  required  >
                                <option value="">Selecciona</option>
                                <?php echo $cojuInstance->selectAct($id); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="authority">Selecciona Autoridad</label>
                            <select  class="form-control " id="authority" required  >
                                <option value="">Selecciona</option>
                                <?php echo $cojuInstance->selectAuto(); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="amount">Introduce Cantidad (sólo números)</label>
                            <input id="amount" type="text" pattern="[0-9]+(\.[0-9]{1,2})?%?" class="form-control border-dark" value="" placeholder="$0.00">
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <h2 class="">Montos <?php echo $object; ?></h2>

            <div class="card card-body">
                <div class="row">
                    <?php $cojuInstance->amountsAct($id); ?>
                </div>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>

<!-- modal -->

<div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel1">Editar Monto(s)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="amountList" class="row">

                </div>
            </div>
            <div class="modal-footer">
                <form class="form-group col-lg-12 row" onsubmit="editAmount(); return false;">
                    <div class="col-lg-12 row">
                        <div class="form-group col-lg-6">
                            <label for="authority">Selecciona Autoridad</label>
                            <select  class="form-control " id="eauthority" required  >
                                <option value="">Selecciona</option>
                                <?php echo $cojuInstance->selectAuto(); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="eamount">Introduce Cantidad (sólo números)</label>
                            <input id="eamount" type="text" pattern="[0-9]+(\.[0-9]{1,2})?%?" class="form-control border-dark" value="" placeholder="$0.00">
                        </div>
                        <div class="form-group col-lg-10">
                            <input id="idAmount" type="hidden" value="">
                        </div>
                    </div>
                    
                    <div class="form-group col-lg-3">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- modal -->
<div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel2">Editar Acto Impugnado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <form class="form-group col-lg-12 row" onsubmit="editAct(); return false;">
                    <div class="col-lg-12 row">
                        <div class="form-group col-lg-6">
                            <label for="MAct">Acto Impugnado</label>
                            <input id="MAct" type="text" class="form-control border-dark" value="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="MFolio">Folio</label>
                            <input id="MFolio" type="text" class="form-control border-dark" value="">
                        </div>
                        <div class="form-group col-lg-10">
                            <input id="idMAct" type="hidden" value="">
                        </div>
                    </div>
                    
                    <div class="form-group col-lg-3">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<script>
    /*$('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });*/
</script>