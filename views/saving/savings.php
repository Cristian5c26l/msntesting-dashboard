<?php
    if($_REQUEST['id']){
        // Save Settings
        include '../../includes/config.php';
        include '../../controllers/savings.php';
        include '../../models/savings.php';
        $saveInstance = new c_save($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Mi Ahorro</h2>

            <div class="card card-body">
                <?php $saveInstance->selectSavings($id); ?>
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
