<?php
    if($_REQUEST['id']){
        // Project Settings
        include '../../includes/config.php';
        include '../../controllers/alertep.php';
        include '../../models/alertep.php';
        $serviceInstance = new c_alertep($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Alertas</h2>

            <div class="card card-body">
                <?php $serviceInstance->selectAlert($id,'1'); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>

<script>
    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });
</script>