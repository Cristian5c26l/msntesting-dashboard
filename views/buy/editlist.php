<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/list.php';
include '../../models/list.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $listInstance = new c_list($host,$user,$pass,$db);
    $response = $listInstance->selectProv($id);

    $row = mysqli_fetch_array($response);
        $area = $row['area'];
        $name = $row['name'];
        $corp = $row['corp'];
        $service = $row['service'];
        $email = $row['email'];
        $phone = $row['phone'];
        $mobile = $row['mobile'];
        $other = $row['other'];
        $stats = $row['status'];

        ?>
            <div class="card">
                <h2 class="card-title">Editar Proveedor de Directorio</h2>
                <form class="row" onsubmit="editProv(); return false;">
                    <div class="form-group">
                        <input id="id" class="form-control" type="hidden" value="<?php echo $id;?>">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="area">Área(s)</label>
                        <input id="area" class="form-control" type="text" value="<?php echo $area;?>" placeholder="Área(s)">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="name">Nombre Contacto</label>
                        <input id="name" class="form-control" type="text" value="<?php echo $name;?>" placeholder="Nombre Contacto">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="corp">Empresa</label>
                        <input id="corp" class="form-control" type="text" value="<?php echo $corp;?>" placeholder="Empresa">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="service">Producto/Servicio</label>
                        <input id="service" class="form-control" type="text" value="<?php echo $service;?>" placeholder="Servicio">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="other">Teléfono Empresa</label>
                        <input id="other" class="form-control" type="phone" value="<?php echo $other;?>" placeholder="Teléfono Empresa">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" value="<?php echo $email;?>" placeholder="Email">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="phone">Teléfono</label>
                        <input id="phone" class="form-control" type="phone" value="<?php echo $phone;?>" placeholder="Teléfono">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="mobile">Celular</label>
                        <input id="mobile" class="form-control" type="text" value="<?php echo $mobile;?>" placeholder="Celular">
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button> 
                    </div>
                </form>
            </div>

            <script>
                $('.datepicker').datepicker({
                    // Escape any “rule” characters with an exclamation mark (!).
                    format: 'yyyy-mm-dd',
                    formatSubmit: 'yyyy-mm-dd',
                })
            </script>
        <?php
    }else{
        echo 'Lo Sentimos solo puedes accesar a esta información con las instnacias adecuadas';
    }    
?>