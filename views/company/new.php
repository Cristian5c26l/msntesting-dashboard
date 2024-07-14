<?php
// COMPANY Settings
include '../../includes/config.php';
include '../../controllers/company.php';
include '../../models/company.php';
$companyInstance = new c_company($host,$user,$pass,$db);
session_start();
$id = $_SESSION["idSession"];
$area = $_SESSION["areaSession"];

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="card">
    <h2 class="">Empresas / Clientes</h2>

    <div class="btn btn-outline-primary" data-toggle="collapse" data-target="#addTurn" aria-expanded="false" aria-controls="addUser">
        <i class="material-icons align-middle md-36">add_box</i>
        Agregar Empresa
    </div>
    <div class="collapse" id="addTurn">
        <div class="card card-body">
            <form class="row" onsubmit="newCompany(); return false;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="general" data-bs-toggle="tab" data-bs-target="#generales" type="button" role="tab" aria-controls="generales" aria-selected="true"><span class="badge badge-pill badge-primary ml-1">1</span> Datos Generales</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact" data-bs-toggle="tab" data-bs-target="#contacto" type="button" role="tab" aria-controls="contacto" aria-selected="false"><span class="badge badge-pill badge-primary ml-1">2</span> Datos Contacto</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="direc" data-bs-toggle="tab" data-bs-target="#direccion" type="button" role="tab" aria-controls="direccion" aria-selected="false"><span class="badge badge-pill badge-primary ml-1">3</span> Datos Dirección</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- SECTION GENERAL -->
                <div class="tab-pane fade show active" id="generales" role="tabpanel" aria-labelledby="general">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset class="border p-2" style='margin-top: 8px;margin-bottom: 8px;'>
                                    <legend>Datos Empresa</legend>
                                    <div class="form-group col-lg-12">
                                        <label for="rfc"><spand class='text-danger'>*</spand>RFC</label>
                                        <input id='rfc' type="text" class="form-control"  required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="rs"><spand class='text-danger'>*</spand>Razon Social</label>
                                        <input id='rs' type="text" class="form-control"  required>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="border p-2" style='margin-top: 8px;margin-bottom: 8px;'>
                                    <legend>Datos Acceso</legend>
                                    <div class="form-group col-lg-12">
                                        <label for="usu"><spand class='text-danger'>*</spand>Usuario</label>
                                        <input id='usu' type="text" class="form-control"  required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="pswd"><spand class='text-danger'>*</spand>Password</label>
                                        <input id='pswd' type="password" class="form-control"  required>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group col-lg-12" style="display:none">
                                <label for="objeto">Objeto</label>
                                <textarea class="form-control" id="objeto" rows="4" cols="93" ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SECTION CONTACT INFO -->
                <div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="contact">
                    <div class="container"><br>
                        <div class="row">    
                            <div class="form-group col-lg-4">
                                <label for="nombre1"><spand class='text-danger'>*</spand>Nombre 1</label>
                                <input id='nombre1' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="nombre2">Nombre 2</label>
                                <input id='nombre2' type="text" class="form-control"  >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="ap"><spand class='text-danger'>*</spand>Apellido Paterno</label>
                                <input id='ap' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="am"><spand class='text-danger'>*</spand>Apellido Materno</label>
                                <input id='am' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="t1"><spand class='text-danger'>*</spand>Teléfono 1</label>
                                <input id='t1' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="t2">Teléfono 2</label>
                                <input id='t2' type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="c1"><spand class='text-danger'>*</spand>Correo 1</label>
                                <input id='c1' type="email" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="c2">Correo 2</label>
                                <input id='c2' type="email" class="form-control" >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="mo"><spand class='text-danger'>*</spand>Móvil</label>
                                <input id='mo' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="co">Contacto</label>
                                <input id='co' type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="tc">Teléfono Contacto</label>
                                <input id='tc' type="text" class="form-control"  >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="check">Contactar a:</label><br>
                                <label class="btn btn-primary">
                                    <input type="checkbox" name="check" id="check"> Contacto del Cliente
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DIRECTION INFO -->
                <div class="tab-pane fade" id="direccion" role="tabpanel" aria-labelledby="direc">
                    <div class="container"><br>
                        <div class="row">    
                            <div class="form-group col-lg-4">
                                <label for="calle"><spand class='text-danger'>*</spand>Calle</label>
                                <input id='calle' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="ni"><spand class='text-danger'>*</spand>Num. Interior</label>
                                <input id='ni' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="ne">Num. Exterior</label>
                                <input id='ne' type="text" class="form-control"  >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="col"><spand class='text-danger'>*</spand>Colonia</label>
                                <input id='col' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="del"><spand class='text-danger'>*</spand>Del/Mun</label>
                                <input id='del' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="cp"><spand class='text-danger'>*</spand>CP</label>
                                <input id='cp' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="edo"><spand class='text-danger'>*</spand>Estado</label>
                                <input id='edo' type="text" class="form-control"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="pais"><spand class='text-danger'>*</spand>País</label>
                                <input id='pais' type="text" class="form-control"  required>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="form-group col-lg-12">
                        <spand class='text-danger'><spand class='text-danger'>*</spand>Campos Obligatorios</spand>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button> 
                    </div> 
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Empresas</h2>
    </div><br>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>RFC</th>
                    <th>Razon Social</th>
                    <th>Edicion</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $companyInstance->selectAllCompany(); ?>
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

    function check(){
        if ($('input.checkbox_check').is(':checked')) {
            alert();
        }
    }

    (function() {
        'use strict';
        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit()
    })()
</script>