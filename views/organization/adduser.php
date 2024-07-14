<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/organization.php';
include '../../models/organization.php';
$orgInstance = new c_org($host,$user,$pass,$db);
?>
<div class="card">
    <h2 class="">Agregar a Organigrama</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addOrg" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Usuario
    </div>
    <!--i class="material-icons md-36 align-middle mb-1 text-primary">chevron_left</i-->

    <div class="collapse" id="addOrg">
        <div class="card card-body">
            <form class="row" onsubmit="addOrg(); return false;">
                <div class="form-group col-lg-6">
                    <label for="iduser">Selecciona el Empleado</label>
                    <select class="form-control" id="iduser" onchange="selectEmp(this.value);" required>
                        <option value=""></option>
                        <?php echo $orgInstance->selectUser(); ?>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="idboss">Selecciona Jefe Directo</label>
                    <select class="form-control" id="idboss" onchange="boss(this);" required>
                        
                    </select>
                </div>
                <input id="lvlusr" type="hidden" value="">
                <input id="lvl" type="hidden" value="">
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Asignación de Nivel</h2>
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>area</th>
                    <th>Nivel</th>
                    <th>Nombre</th>
                    <th>Puesto</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $orgInstance->selectAllUsers(); ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $('#data-table').dataTable(
        {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ]
        }
    );
</script>
