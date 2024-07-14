<?php
    if($_REQUEST['id']){
        include '../../includes/config.php';
        include '../../controllers/company.php';
        include '../../models/company.php';
        $companyInstance = new c_company($host,$user,$pass,$db);
        $id_reg = $_REQUEST['id'];
        session_start();
        $area = $_SESSION["areaSession"];
        $res =$companyInstance->get_info_Company($id_reg);
        while($row = mysqli_fetch_array($res)){
            $id = $row['id_company'];
            $id_emp = $row['id_employee'];
            $rfc = $row['rfc'];
            $rs = $row['razon_social'];
            $usuario = $row['user'];
            $objetivo = $row['object'];
            $n1=$row['name_1'];
            $n2=$row['name_2'];
            $ap=$row['last_name_1'];
            $am=$row['last_name_2'];
            $t1=$row['phone_1'];
            $t2=$row['phone_2'];
            $tc=$row['phone_c'];
            $em1=$row['email_1'];
            $em2=$row['email_2'];
            $mo=$row['mb'];
            $calle=$row['calle'];
            $ni=$row['ni'];
            $ne=$row['ne'];
            $col=$row['colonia'];
            $del_mun=$row['del_mun'];
            $cp=$row['zip_code'];
            $edo=$row['estate'];
            $pais=$row['country'];
            $co=$row['contact'];
            $checked=$row['who_contact'];

            if(!empty($checked)){
                $check="checked";
            }else{
                $check="";
            }
        }
       
    ?>
        <div class="card">
        <h2 class="">Edición de Empresa #<?php echo $id_reg; ?></h2>
        <form class="row" onsubmit="editCompany(<?php echo $id_reg; ?>); return false;">
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
                                        <input id='rfc' type="text" class="form-control"   value='<?php echo $rfc; ?>' required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="rs"><spand class='text-danger'>*</spand>Razon Social</label>
                                        <input id='rs' type="text" class="form-control" value='<?php  echo $rs ;?>' required>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset class="border p-2" style='margin-top: 8px;margin-bottom: 8px;'>
                                    <legend>Datos Acceso</legend>
                                    <div class="form-group col-lg-12">
                                        <label for="usu"><spand class='text-danger'>*</spand>Usuario</label>
                                        <input id='usu' type="text" class="form-control"  value='<?php  echo $usuario ;?>' disabled>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group col-lg-12" style="display:none">
                                <label for="objeto">Objeto</label>
                                <textarea class="form-control" id="objeto" rows="4" cols="93" ><?php echo $objetivo; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SECTION CONTACT INFO -->
                <div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="contact">
                    <div class="container"><br>
                        <div class="row">    
                            <div class="form-group col-lg-4">
                                <input id="id_emp" type="hidden" value="<?php echo $id_emp; ?>">
                                <label for="nombre1"><spand class='text-danger'>*</spand>Nombre 1</label>
                                <input id='nombre1' type="text" class="form-control"  value='<?php echo $n1 ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="nombre2">Nombre 2</label>
                                <input id='nombre2' type="text" class="form-control"  value='<?php echo $n2 ;?>' >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="ap"><spand class='text-danger'>*</spand>Apellido Paterno</label>
                                <input id='ap' type="text" class="form-control"   value='<?php echo $ap ;?>'required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="am"><spand class='text-danger'>*</spand>Apellido Materno</label>
                                <input id='am' type="text" class="form-control"   value='<?php echo $am ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="t1"><spand class='text-danger'>*</spand>Teléfono 1</label>
                                <input id='t1' type="text" class="form-control"  value='<?php echo $t1 ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="t2">Teléfono 2</label>
                                <input id='t2' type="text" class="form-control"  value='<?php echo $t2 ;?>' >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="c1"><spand class='text-danger'>*</spand>Correo 1</label>
                                <input id='c1' type="email" class="form-control"  value='<?php echo $em1 ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="c2">Correo 2</label>
                                <input id='c2' type="email" class="form-control"  value='<?php echo $em2 ;?>' >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="mo"><spand class='text-danger'>*</spand>Móvil</label>
                                <input id='mo' type="text" class="form-control"  value='<?php echo $mo ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="co">Contacto</label>
                                <input id='co' type="text" class="form-control" value='<?php echo $co ;?>' >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="tc">Teléfono Contacto</label>
                                <input id='tc' type="text" class="form-control"  value='<?php echo $tc ;?>' >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="check">Contactar a:</label><br>
                                <label class="btn btn-primary">
                                    <input type="checkbox" name="check" id="check" <?php echo $check; ?> > Contacto del Cliente
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
                                <input id='calle' type="text" class="form-control"  value='<?php  echo $calle ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="ni"><spand class='text-danger'>*</spand>Num. Interior</label>
                                <input id='ni' type="text" class="form-control" value='<?php  echo $ni ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="ne">Num. Exterior</label>
                                <input id='ne' type="text" class="form-control" value='<?php  echo $ne ;?>' >
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="col"><spand class='text-danger'>*</spand>Colonia</label>
                                <input id='col' type="text" class="form-control"  value='<?php  echo $col ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="del"><spand class='text-danger'>*</spand>Del/Mun</label>
                                <input id='del' type="text" class="form-control"  value='<?php  echo $del_mun ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="cp"><spand class='text-danger'>*</spand>CP</label>
                                <input id='cp' type="text" class="form-control"  value='<?php  echo $cp ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="edo"><spand class='text-danger'>*</spand>Estado</label>
                                <input id='edo' type="text" class="form-control"  value='<?php  echo $edo ;?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="pais"><spand class='text-danger'>*</spand>País</label>
                                <input id='pais' type="text" class="form-control"  value='<?php  echo $pais ;?>' required>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="form-group col-lg-12">
                        <spand class='text-danger'><spand class='text-danger'>*</spand>Campos Obligatorios</spand>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                    </div> 
                </div>
            </form>
        </div>
        <script src="./assets/js/company.js"></script>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>