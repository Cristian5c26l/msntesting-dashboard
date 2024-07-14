<?php
    if($_REQUEST['id']){
        // Profile Settings
        include '../../includes/config.php';
        include '../../controllers/organization.php';
        include '../../models/organization.php';
        $orgInstance = new c_org($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">

            <div class="card card-body">
                <div class="row">
                    <div class="card-container col-md-3">
                        <span class="pro">Área</span>
                        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user">
                        <p class="text-white">
                            Nombre
                        </p>
                    </div>
                    <div class="col-md-9">
                        <p>Hola</p>
                        <hr>
                    </div>
                </div>

                <?php //$invInstance->editableInsumeArea($id); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>