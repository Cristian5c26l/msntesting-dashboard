<?php
    if($_REQUEST['id']){
        // Inventory Settings
        include '../../includes/config.php';
        include '../../controllers/inventory.php';
        include '../../models/inventory.php';
        $invInstance = new c_inventory($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Área de Inventario/Insumo</h2>

            <div class="card card-body">
                <?php $invInstance->editableInsumeArea($id); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>