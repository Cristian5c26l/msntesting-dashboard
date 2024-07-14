<?php
    if($_REQUEST['id']){
        // Project Settings
        include '../../includes/config.php';
        include '../../controllers/projects.php';
        include '../../models/projects.php';
        $projectInstance = new c_project($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Proyecto</h2>

            <div class="card card-body">
                <?php $projectInstance->selectProject($id,1); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>