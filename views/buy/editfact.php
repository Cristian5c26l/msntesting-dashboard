<?php
    if($_REQUEST['id']){
        // Inventory Settings
        include '../../includes/config.php';
        include '../../controllers/fact.php';
        include '../../models/fact.php';
        $evInstance = new c_fact($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Evidencias</h2>

            <div class="card card-body">
                <?php $evInstance->editableFact($id); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>