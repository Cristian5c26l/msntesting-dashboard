<?php
    if($_REQUEST['id']){
        // Inventory Settings
        include '../../includes/config.php';
        include '../../controllers/sysinv.php';
        include '../../models/sysinv.php';
        $invInstance = new c_sysinv($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Insumo (Sistemas)</h2>
            <div class="btn btn-primary col-md-2" onclick="menu('sysinv/newinsume');">< Regresar</div>

            <div class="card card-body">
                <?php $invInstance->editableInsume($id); ?>
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