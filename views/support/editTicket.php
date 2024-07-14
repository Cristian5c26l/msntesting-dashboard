<?php
    if($_REQUEST['id']){
        // User Settings
        include '../../includes/config.php';
        include '../../controllers/tickets.php';
        include '../../models/tickets.php';
        $supportInstance = new c_ticket($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Ticket</h2>

            <div class="card card-body">
                <?php $supportInstance->selectTicket($id,1); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>