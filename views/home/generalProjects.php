<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/projects.php';
include '../../models/projects.php';
$projectInstance = new c_project($host,$user,$pass,$db);
session_start();
$id = $_SESSION['idSession'];
?>
<div class="card">
    <div class="table-responsive">
            <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Proyectos</th>
                        <th>Tareas</th>
                        <th>Avance %</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $projectInstance->selectUserProjectsG(); ?>
                </tbody>
            </table>
        </div>
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
