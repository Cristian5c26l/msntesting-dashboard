<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/evaluation.php';
include '../../models/evaluation.php';
$evalInstance = new c_eval($host,$user,$pass,$db);
?>
<div class="card">
    <h2 class="">Administración de Evaluaciones</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addUser" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Evaluación
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addUser">
        <div class="card card-body">
            <form class="row" onsubmit="addEval(); return false;">
                <div class="form-group col-lg-4">
                    <select class="form-control" id="user" required>
                        <option value="">Elige un Empleado</option>
                        <?php echo $evalInstance->selectAllUsers(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <input id="date_eval" type="text" class="datepicker form-control" value="" placeholder="Fecha de Evaluación">
                </div>
                <div class="form-group col-lg-4">
                    <select class="form-control" id="duration" required>
                        <option value="">Duración de Contrato</option>
                        <option value="1">1 Mes</option>
                        <option value="2">2 Meses</option>
                        <option value="3">3 Meses</option>
                        <option value="0">Indefinido</option>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <input id="date_ini" type="text" class="datepicker form-control" value="" placeholder="Fecha de Inicio Contrato">
                </div>
                <div class="form-group col-lg-4">
                    <input id="date_end" type="text" class="datepicker form-control" value="" placeholder="Fecha de Fin de Contrato">
                </div>
                <div class="form-group col-lg-4">
                    <input id="area" class="form-control" type="hidden" value="" placeholder="Área" disabled>
                    <input id="areadesc" class="form-control" type="text" value="" placeholder="Área" disabled>
                </div>
                <div class="form-group col-lg-6">
                    <input id="job" class="form-control" type="text" value="" placeholder="Puesto">
                </div>
                <div class="form-group col-lg-6">
                    <input id="special" class="form-control" type="text" value="" placeholder="Especialidad">
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
        <h2 class="card-title">Listado de Evaluaciones</h2>
    </div>

    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Área</th>
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

    $('#user').on('change', function() {
        option = 1;
        var user = $(this).val();

        $.ajax({
            url: 'controllers/call_evaluation.php',
            data: { option:option, id:user },
            method: 'post',
            beforeSend: function(){
                
            },
            success: function(response){
                //alert(response);
                res = response.split(",");
                $('#area').val(res[0]);
                $('#areadesc').val(res[1]);
            }
        });
    });
</script>
