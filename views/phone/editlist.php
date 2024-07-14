<?php
    if($_REQUEST['id']){
        // Inventory Settings
        include '../../includes/config.php';
        include '../../controllers/list.php';
        include '../../models/list.php';
        $phoneInstance = new c_phone($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Extensión y Teléfono de Usuario</h2>

            <div class="card card-body">
                <?php $phoneInstance->editablePhone($id); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>