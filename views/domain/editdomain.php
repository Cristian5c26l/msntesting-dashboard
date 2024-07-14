<?php
    if($_REQUEST['id']){
        // Inventory Settings
        include '../../includes/config.php';
        include '../../controllers/domain.php';
        include '../../models/domain.php';
        $domInstance = new c_domain($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Dominio (Sistemas)</h2>

            <div class="card card-body">
                <?php $domInstance->editableDomain($id); ?>
            </div>

            <div class="col-md-3">
                <div class="btn btn-primary" onclick="menu('domain/newdomain');"><< Regresar</div>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>

<script>
    /*$('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });*/
</script>