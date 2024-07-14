<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/task.php';
include '../../models/task.php';
$taskInstance = new c_task($host,$user,$pass,$db);
?>
<div class="card">
    <h2 class="">Reporte de Tareas</h2>

    <div class="card card-body">
        <form class="row" onsubmit="reportTask(); return false;"> 
            <div class="form-group col-lg-3">
                <input id="dini" type="text" class="datepicker form-control" value="" placeholder="Fecha de Inicio">
            </div>
            <div class="form-group col-lg-3">
                <input id="dend" type="text" class="datepicker form-control" value="" placeholder="Fecha Final">
            </div>
            <div class="form-group col-lg-3">
                <select id="area" class="form-control">
                    <option value="">Selecciona un Área</option>
                    <?php echo $taskInstance->selectTaskArea();?>
                </select>
            </div>
            <div class="form-group col-lg-3">
                <select id="emp" class="form-control">
                    <option value="">Selecciona un Empleado</option>
                </select>
            </div>
            <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Revisar</button> 
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div id="json"></div>

    <div id="tareas" style="width: 100%; height: 500px;"></div>

    <div class="card-header">
        <h2 class="card-title">Reporte</h2>
    </div>

    <!--div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
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
    </div-->
</div>

<script>
    $('#data-table').dataTable();

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });

    $('#area').on('change', function() {
        var option = 10;
        var area = $('#area').val();

        $.ajax({
            url: 'controllers/call_task.php',
            data: { option:option, area:area },
            method: 'post',
            beforeSend: function(){
                
            },
            success: function(response){
                $('#emp').append(response);
            }
        });
    });
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
