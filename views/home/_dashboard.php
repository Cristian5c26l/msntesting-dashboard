<?php
// Panel Settings
include 'includes/config.php';
include 'controllers/hpanel.php';
include 'models/hpanel.php';
$panelInstance = new c_panel($host,$user,$pass,$db);
?>
<!-- content -->
<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
   <!-- main content -->
   <div class="container-fluid">
        
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <div class="card-container">
                        <span class="pro">DEV</span>
                        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
                        <h3>Comunicación Interna</h3>
                        <p></p>
                        <div class="buttons">
                            <button onclick="alert('Esta función no esta disponible por el momento');" class="primary">
                                Mensaje
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php $panelInstance->comunication(); ?>
            
        </div>
   </div>
</div>

<!-- modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="vm" class="modal-body">
                
            </div>
            <div class="modal-footer">
                <div class="form-group col-lg-12">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

