<?php
    if($_REQUEST['id']){
        // Service Settings
        include '../../includes/config.php';
        include '../../controllers/alertep.php';
        include '../../models/alertep.php';
        $serviceInstance = new c_alertep($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Tipos de Alerta</h2>

            <div class="card card-body">
                <?php $serviceInstance->selectService($id,1); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>