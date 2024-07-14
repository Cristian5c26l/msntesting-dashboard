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
        <div class="row pb-2">
            <div class="col-lg-12">
                <button onclick="menu('home/suggestions');" class="primary text-white">Actividad Sistemas</button>
                <button onclick="menu('organization/diagram');" class="primary text-white">Diagrama</button>
                <button onclick="menu('home/generalProjects');" class="primary text-white">Actividades Generales</button>
                <!--button onclick="menu('home/suggestions');" class="primary text-white">Calendario</button-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
            <div>
                    <div class="card-container">
                        <span class="pro">Buzón Sugerencias</span>
                        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
                        <h3>Comunicación</h3>
                        <p></p>
                        <div class="buttons">
                            <button onclick="mSuggest();" class="primary">
                                Enviar Sugerencia
                            </button>
                        </div>
                    </div>
                </div>

                <!--div>
                    <div class="card-container">
                        <img class="round" src="assets/images/capacitacion.jpg" alt="user" width="150px" height="150px" />
                        <h3>Capacitación</h3>
                        <p></p>
                        <div class="buttons">
                            <button onclick="menu('rh/capacitation');" class="primary">
                                Ir a Cuestionario
                            </button>
                        </div>
                    </div>
                </div-->
                <!--div>
                    <div class="card-container">
                        <span class="pro">RH</span>
                        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" width="100px" />
                        <p></p>
                        <form id="logbook" onsubmit="registerlog(); return false;">
                            <div class="buttons">
                                <div class="form-group col-lg-10">
                                    <select  class="form-control" name="" id="reason" require>
                                        <option value="">Selecciona la Razón de Salida</option>
                                        <option value="1">Salida a la Tienda</option>
                                        <option value="2">Salida a Goethe 8</option>
                                        <option value="3">Salida a Goethe 24</option>
                                        <option value="4">Salida a Darwin</option>
                                        <option value="5">Selecciona la Razón de Salida</option>
                                    </select>
                                </div>
                                <button id="sendout" onclick="alert('Esta función no esta disponible por el momento');" class="primary">
                                    Reportar Salida
                                </button>
                            </div>
                        </form>
                    </div>
                </div-->
            </div>
            <?php $panelInstance->comunication(); ?>
            
        </div>
        <div id='calendar1'></div>
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

<!-- modal -->
<div class="modal fade" id="suggest" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Tienes una duda o Sugerencia? Es Anónima.
            </div>
            <div class="modal-footer">
                <form class="form-group col-lg-12 row" onsubmit="sendResp(); return false;">
                    <div class="form-group col-lg-8">
                        <input id="suggestion" type="text" class="form-control border-dark" value="" placeholder="Duda o Sugerencia">
                        <input id="id" type="hidden" class="form-control border-dark" value="1">
                    </div>
                    <div class="form-group col-lg-4">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<script>
    function mSuggest(){
        $('#suggest').modal('show');
        $('#suggest').modal({ keyboard: false,
            show: true
        });
        // Jquery draggable
        $('#suggest').draggable({
            handle: ".modal-header"
        });
    }

    function sendResp(){
        var option = 12;
        var id = $('#id').val();
        var resp = $('#suggestion').val();

        if(resp=="" || resp.length<3){
            alert('El mensaje esta vacio o no tiene la longitud necesaría');
        }else{
            $.ajax({
                url: 'controllers/call_panel.php',
                data: { option: option, resp: resp, id: id },
                method: 'post',
                beforeSend: function(){
                    
                },
                success: function(response){
                    console.log(response);
                    $('#suggest').modal('hide');
                    alert('Gracias por tu respuesta');
                    $('#suggestion').val('');
                }
            });
        }

    }
</script>
