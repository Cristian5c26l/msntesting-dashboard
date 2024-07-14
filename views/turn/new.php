<?php
// Turn Settings
include '../../includes/config.php';
include '../../controllers/turn.php';
include '../../models/turn.php';
$turnInstance = new c_turn($host,$user,$pass,$db);
session_start();
$id = $_SESSION["idSession"];
$area = $_SESSION["areaSession"];
$type = $_SESSION["type"];

?>

<style>
    .dropzone {
        text-align: center;
        font-size: 18px;
        min-height: 50px !important;
    }

    .glyphicon-download {
        font-size: 1.5em;
    }

    #dropzoneChat {
        cursor: pointer;
        border: 1px #ccc;
        border: dotted;
        padding: 10px 0;
    }

    .w-100{
        width: 100%;
    }
</style>

<div class="card">
    <h2 class="">Turnos</h2>    
    <?php 
        //VALIDATE USER ROL TO SHOW OR HIDE BUTTON ADD TURN
        if($type>=1){
            $btn_add_task='';
        }else{
            $btn_add_task='<div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addTurn" aria-expanded="false" aria-controls="addUser">
                            <i class="material-icons align-middle md-36">add_box</i>
                            Agregar Turno
                             </div>';
        }
        echo $btn_add_task;       
    ?>
    <div class="collapse" id="addTurn">
        <div class="card card-body">
            <form class="row" onsubmit="newTurns(); return false;">
                <div class="form-group col-lg-4">
                    <label for="empleados">Selecciona Empleados</label>
                    <select multiple class="form-control " id="empleados"  name='empleados' required  >
                        <?php echo $turnInstance->selectEmp(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="f_termino">Fecha Término</label>
                    <input id='f_termino' type="text" class="datepicker form-control"  required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="vigencia">Vigencia (Abogado)</label>
                    <input id="vigencia" class="datepicker form-control" placeholder="Vigencia" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="razon">Selecciona el Trámite del Turno</label>
                    <select  class="form-control " id="razon" required  >
                        <?php echo $turnInstance->selectRT(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="coju">Selecciona Control Interno (CI)</label>
                    <select  class="form-control " id="coju" required  >
                        <?php echo $turnInstance->selectCoju(); ?>
                    </select>
                </div>
                <hr>
                <div class="form-group col-lg-4">
                    <label for="icomment">Fecha Inicial EP</label>
                    <input id='icomment' type="text" class="datepicker form-control"  required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="fcomment">Fecha Final EP</label>
                    <input id='fcomment' type="text" class="datepicker form-control"  required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="btn-epc"></label>
                    <div id="btn-epc" onclick="epc()" class="btn btn-primary btn-xs btn-block" style="margin-top: 7px">Buscar Comentarios</div>
                </div>
                <div class="form-group col-lg-6">
                    <label for="epc">Selecciona el Comentario</label>
                    <select  class="form-control" id="epc" required>
                        
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
        <h2 class="card-title">Turnos</h2>
    </div><br>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Abogados</th>
                    <th>Archivista</th>
                    <th>Fecha Término</th>
                    <th>Vigencia</th>
                    <th>Razon Turno</th>
                    <th>Control Interno</th>
                    <th>Comentario</th>
                    <th>Fecha Turno</th>
                    <th>Estatus</th>
                    <th>Archivo</th>
                    <th>Edicion</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $turnInstance->selectAllTurn($type); ?>
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
            <div class="modal-body">
                
            </div>
            <div class="modal-footer row">
                <div class="col-lg-12">
                    <form class="form-group col-lg-12 row" onsubmit="turnResp(); return false;">
                        <div class="form-group col-lg-8">
                            <input id="resp" type="text" class="form-control border-dark" value="" placeholder="Responder">
                            <input id="idTurn" type="hidden" value="">
                        </div>
                        <div class="form-group col-lg-4">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <form class="form-group" action="" class="dropzone dz-clickable" id="dropzoneChat">
                    <div class="dz-default dz-message d-flex align-items-center justify-content-center">
                        <div class="dz-button" type="button">
                            Carga tus Archivos Aquí <i class="material-icons md-36 align-middle mb-1 text-primary">archive</i>
                        </div>
                    </div>
                        <input type="hidden" id="employeefile" value="<?php echo $id; ?>">
                        <input type="hidden" id="titlefile" value="Documento Adjunto">
                    </form>
                </div>
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
</script>

<script>
    $("#dropzoneChat").dropzone({
        url: "uploadmsg.php",
        paramName: "file", //the parameter name containing the uploaded file
        clickable: true,
        maxFilesize: 2, //in mb
        //maxFiles: 4, // allowing any more t han this will stress a basic php/mysql stack
        //addRemoveLinks: true,
        acceptedFiles: '.pdf,.doc,.docx,.png,.jpg', //allowed filetypes
        dictDefaultMessage: "Carga tus Archivos Aquí <i class='material-icons md-36 align-middle mb-1 text-primary'>archive</i>", //override the default text
        init: function() {
            this.on("sending", function(file, xhr, formData) {
                var id = $('#idTurn').val();
                var employee = $('#employeefile').val();
                var title = $('#titlefile').val();
                formData.append("step", 1); // Append all the additional input data of your form here!
                formData.append("id", id); // Append all the additional input data of your form here!
                formData.append("employee", employee);
                formData.append("title", file.name);
            });
            this.on("success", function(file, responseText) {
                //auto remove buttons after upload
                $("#div-files").html(responseText);
                var _this = this;
                _this.removeFile(file);
                var id = $('#idTurn').val();
                var employee = $('#employeefile').val();
                msgTurn(id,employee);
            });
        }
    });
</script>

<script src="assets/js/turn.js"></script>
