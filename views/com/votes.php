<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/hpanel.php';
include '../../models/hpanel.php';
$panelInstance = new c_panel($host,$user,$pass,$db);
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Mis Votaciones</h2>
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Author</th>
                    <th>Votos</th>
                    <th>No me Gusta</th>
                    <th>Fecha Publicación</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php $panelInstance->selectfullVotations(); ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $('#data-table').dataTable();
</script>