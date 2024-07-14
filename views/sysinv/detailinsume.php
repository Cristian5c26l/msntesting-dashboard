<?php
    if($_REQUEST['id']){
        // Inventory Settings
        include '../../includes/config.php';
        include '../../controllers/inventory.php';
        include '../../models/inventory.php';
        $invInstance = new c_inventory($host,$user,$pass,$db);
        session_start();
        $iduser = $_SESSION["idSession"];
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Detalle de Insumo</h2>
            </div>

            <hr>
            <div class="table-responsive">
                <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th>Cantidad</th>
                            <th>Fecha de Operción</th>
                            <th>Tipo de Operción</th>
                            <th>Fecha Expiración</th>
                            <th>Status</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $invInstance->listStoInsume($id,$iduser); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>

<script>
    $('#data-table').dataTable(
        {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ]
        }
    );
</script>