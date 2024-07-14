<?php
// COMPANY Settings
include '../../includes/config.php';
include '../../controllers/savings.php';
include '../../models/savings.php';
$saveInstance = new c_save($host,$user,$pass,$db);
session_start();
$id = $_SESSION["idSession"];
$area = $_SESSION["areaSession"];
date_default_timezone_set('Mexico/General');

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="card">
    <h2 class=""></h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addTurn" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Objetivo de Ahorro
    </div>
    <div class="collapse" id="addTurn">
        <div class="card card-body">
            <form class="row" onsubmit="addObjetive(); return false;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="intervalos">
                        <button class="nav-link active" id="intervalos" data-bs-toggle="tab" data-bs-target="#intervalo" type="button" role="tab" aria-controls="intervalo" aria-selected="true"><span class="badge badge-pill badge-primary ml-1">1</span> Intervalo</button>
                    </li>
                    <li class="nav-item" role="objetivos">
                        <button class="nav-link" id="objetivos" data-bs-toggle="tab" data-bs-target="#objetivo" type="button" role="tab" aria-controls="objetivo" aria-selected="false"><span class="badge badge-pill badge-primary ml-1">2</span> Nombra tu Objetivo</button>
                    </li>
                    <li class="nav-item" role="tipos">
                        <button class="nav-link" id="tipos" data-bs-toggle="tab" data-bs-target="#tipo" type="button" role="tab" aria-controls="tipo" aria-selected="false"><span class="badge badge-pill badge-primary ml-1">3</span> Tipo de Ahorro</button>
                    </li>
                    <li class="nav-item" role="cantidad">
                        <button class="nav-link" id="cantidad" data-bs-toggle="tab" data-bs-target="#ahorro" type="button" role="tab" aria-controls="cantidad" aria-selected="false"><span class="badge badge-pill badge-primary ml-1">4</span>¿Cuánto quieres Ahorrar?</button>
                    </li>
                    <li class="nav-item" role="fechas">
                        <button class="nav-link" id="fechas" data-bs-toggle="tab" data-bs-target="#fecha" type="button" role="tab" aria-controls="fecha" aria-selected="false"><span class="badge badge-pill badge-primary ml-1">5</span>¿Cuándo quieres Empezar?</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Intervalo de Ahorro -->
                <div class="tab-pane fade show active" id="intervalo" role="tabpanel" aria-labelledby="intervalos">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset class="border p-2" style='margin-top: 8px;margin-bottom: 8px;'>
                                    <legend>Intervalo de Ahorro</legend>
                                    <div class="form-group col-lg-12">
                                        <input id='iduser' type="hidden" value="<?php echo $id; ?>"  required>
                                        <label for="idgoal"><spand class='text-danger'>*</spand>Elige como quieres ahorrar</label>
                                        <select class="form-control" id="idgoal" required>
                                            <?php echo $saveInstance->selectObjetive(); ?>
                                        </select>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nombra tu Objetivo -->
                <div class="tab-pane fade" id="objetivo" role="tabpanel" aria-labelledby="objetivos">
                    <div class="container"><br>
                        <div class="row">
                            <div class="col-lg-6">    
                                <fieldset class="border p-2" style='margin-top: 8px;margin-bottom: 8px;'>
                                    <legend>Es Importante ponerle nombre a tu Objetivo (Ejem. Viaje a París)</legend>
                                    <div class="form-group col-lg-12">
                                        <label for="goal"><spand class='text-danger'>*</spand>Nombra tu Objetivo</label>
                                        <input id='goal' class="form-control" type="text" value=""  required>
                                    </div>
                                </fieldset>
                            </div>    
                        </div>
                    </div>
                </div>
                <!-- Tipo de Ahorro -->
                <div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="tipos">
                    <div class="container"><br>
                        <div class="row">
                            <div class="col-lg-6">    
                                <fieldset class="border p-2" style='margin-top: 8px;margin-bottom: 8px;'>
                                    <legend>¿Cómo quieres repartir tu forma de ahorrar?</legend>
                                    <div class="form-group col-lg-12">
                                        <label for="idstrategy"><spand class='text-danger'>*</spand>Elige cuanto y como lo quieres ahorrar</label>
                                        <select class="form-control" id="idstrategy" required>
                                            <?php echo $saveInstance->selectObjetiveType(); ?>
                                        </select>
                                    </div>
                                </fieldset>
                            </div>    
                        </div>
                    </div>
                </div>
                <!-- Tipo de Ahorro -->
                <div class="tab-pane fade" id="ahorro" role="tabpanel" aria-labelledby="cantidad">
                    <div class="container"><br>
                        <div class="row">
                            <div class="col-lg-6">    
                                <fieldset class="border p-2" style='margin-top: 8px;margin-bottom: 8px;'>
                                    <legend>Ingresa la Cantidad que Quieres Ahorrar</legend>
                                    <div class="form-group col-lg-12">
                                        <label for="quantity"><spand class='text-danger'>*</spand>Cantidad que iras ingresando (solo números) 
                                            <br> 
                                            <spand class='text-danger'>Si tu Tipo de Ahorro es "Variable" salta este paso </spand>
                                        </label>
                                        <input id='quantity' class="form-control" type="text" value="" pattern="[0-9]+" max="9999999" placeholder="$1" required>
                                        <br>
                                        <label for="total">Total a Ahorrar</label>
                                        <input id='total' class="form-control" type="text" value="" required disabled>
                                    </div>
                                </fieldset>
                            </div>    
                        </div>
                    </div>
                </div>
                <!-- Fecha Comienzo -->
                <div class="tab-pane fade" id="fecha" role="tabpanel" aria-labelledby="fecha">
                    <div class="container"><br>
                        <div class="row">
                            <div class="col-lg-6">    
                                <fieldset class="border p-2" style='margin-top: 8px;margin-bottom: 8px;'>
                                    <legend>Fecha en la que Quieres Comenzar a Ahorrar</legend>
                                    <div class="form-group col-lg-12">
                                        <label for="quantity"><spand class='text-danger'>*</spand>Selecciona una Fecha</label>
                                        <input id="date" type="text" class="datepicker form-control" value="<?php echo date('Y-m-d');?>" placeholder="Fecha de Entrada">
                                        <br>
                                        <label for="total">Hora de Alerta</label>
                                        <input id="hour" type="time" class="form-control" value="<?php echo date('H:i');?>" placeholder="Fecha de Entrada">
                                    </div>
                                </fieldset>
                            </div>    
                        </div>
                    </div>
                </div>

                
                    <div class="form-group col-lg-12">
                        <spand class='text-danger'><spand class='text-danger'>*</spand>Campos Obligatorios</spand>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                    </div> 

            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Objetivos de Ahorro</h2>
    </div><br>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Objetivo</th>
                    <th>Ahorro Periódico</th>
                    <th>Periodo</th>
                    <th>Fecha de Inicio</th>
                    <th>%</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Edicion</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $saveInstance->selectAllGoals(); ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $('#data-table').dataTable(
        {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ]
        }
    );

    $("select").change(function(){
        calculate();
    });

    $('#quantity').bind('input', function() { 
        calculate();
    });

    function calculate(){
        var save = $('#quantity').val(); // get the current value of the input field.
        var periodicity = $("#idgoal").val();
        var strategy = $("#idstrategy").val();
        var savings = 0;

        if(strategy==1){
            if(periodicity==1){
                for (let i = 1; i <= 365; i++) {
                    savings += parseInt(save*i);
                }
            }else if(periodicity==2){
                for (let i = 1; i <= 52; i++) {
                    savings += parseInt(save*i);
                }
            }else if(periodicity==3){
                for (let i = 1; i <= 12; i++) {
                    savings += parseInt(save*i);
                }
            }

        }else if(strategy==2){
            if(periodicity==1){
                savings = save * 365;
            }else if(periodicity==2){
                savings = save * 52;
            }else if(periodicity==3){
                savings = save * 12;
            }
        
        }else if(strategy==3){
            $('#quantity').val(0);
        }

        $('#total').val(savings);
        
    }

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    })


    (function() {
        'use strict';
        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit()
    })()
</script>