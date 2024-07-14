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
            <h2 class="">Edición de Insumo</h2>

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

    $('#expiration').on('change', function() {
        var exp = $(this).val();
        if(exp=='0' || exp==0){
            $('#exp').hide();
        }else{
            $('#exp').show();
        }
    });
</script>