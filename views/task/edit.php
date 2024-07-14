<?php
    if($_REQUEST['id']){
        // User Settings
        include '../../includes/config.php';
        include '../../controllers/task.php';
        include '../../models/task.php';
        $taskInstance = new c_task($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
        session_start();
        $area = $_SESSION["areaSession"];
    ?>
        <div class="card">
            <h2 class="">Edición de Tareas</h2>

            <div class="card card-body">
                <?php $taskInstance->selectTask($id,$area,1); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>