<?php
// COJUS Settings
include '../../includes/config.php';
include '../../controllers/coju.php';
include '../../models/coju.php';
$cojuInstance = new c_coju($host,$user,$pass,$db);
session_start();
$id = $_SESSION["idSession"];
$area = $_SESSION["areaSession"];
$type = $_SESSION["type"];

?>

<div class="card">
    <h2 class="">CONTROL INTERNO (CI)</h2>
    <?php 
        //VALIDATE USER ROL TO SHOW OR HIDE BUTTON ADD TURN
        if($type==4){
            $btn_add_coju='';
            $disabled = "";
        }else{
            $btn_add_coju=  '<div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addTurn" aria-expanded="false" aria-controls="addUser">
                                <i class="material-icons align-middle md-36">add_box</i>
                                Agregar CONTROL INTERNO (CI)
                            </div>';
            $disabled = "disabled";                
        }
        echo $btn_add_coju;       
    ?>
    <div class="collapse" id="addTurn">
        <div class="card card-body">
            <form class="row" onsubmit="newCoju(); return false;">
                <div class="form-group col-lg-4">
                    <label for="empleado">Selecciona Cliente</label>
                    <select  class="form-control " id="empleado"  required  >
                        <?php echo $cojuInstance->selectEmp(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-8">
                    <label for="objeto">Descripción General</label>
                    <textarea class="form-control" id="objeto" rows="4" cols="93" required></textarea>
                </div>
                <div class="form-group col-lg-3">
                    <label for="exp"># Expediente</label>
                    <input class="form-control" type="text" id="exp" value="" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="tipo">Selecciona Tipo de Control Interno</label>
                    <select  class="form-control " id="tipo" required  >
                        <option value="">Selecciona</option>
                        <?php echo $cojuInstance->selectTC(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="coju">Control Interno (#exp/año/Clave CI) "202?-1234-AB"</label>
                    <input class="form-control" type="text" id="coju" value="" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="autoridad">Selecciona Autoridad</label>
                    <select  class="form-control " id="autoridad" required  >
                        <option value="">Selecciona</option>
                        <?php echo $cojuInstance->selectAuto(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label for="vigencia">Vigencia</label>
                    <input id='vigencia' type="text" class="datepicker form-control"  required>
                </div>
                <div class="form-group col-lg-9">
                    <label for="comentario">Comentarios</label>
                    <textarea class="form-control" id="comentario" rows="4" cols="145" ></textarea>
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
        <h2 class="card-title">CONTROL INTERNO (CI)</h2>
    </div><br>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>RFC</th>
                    <th>Razón Social</th>
                    <th>Objeto</th>
                    <th>Vigencia</th>
                    <th>Control Interno</th>
                    <th>Tipo de CI</th>
                    <th>Comentario</th>
                    <th>Autoridad</th>
                    <th>Edicion</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $cojuInstance->selectAllCoju($type,$id); ?>
            </tbody>
        </table>
    </div>
</div>

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
            <div class="modal-body msg-body">
                
            </div>
            <div class="modal-footer">
                <form class="form-group col-lg-12 row" onsubmit="cojuResp(); return false;">
                    <div class="form-group col-lg-8">
                        <input id="resp" type="text" class="form-control border-dark" value="" placeholder="Responder">
                        <input id="idCoju" type="hidden" value="">
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

<script>
    $("#coju").inputmask({mask:"999/9999-aaa"});

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
