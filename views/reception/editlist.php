<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/login.php';
include '../../controllers/employees.php';
include '../../models/login.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $userInstance = new c_user($host,$user,$pass,$db);
    $empInstance = new c_emp($host,$user,$pass,$db);
    $response = $empInstance->selectDir($id);

    $row = mysqli_fetch_array($response);
        $name = $row['name'];
        $corp = $row['corp'];
        $email = $row['email'];
        $phone = $row['phone'];
        $ext = $row['ext'];
        $mobile = $row['mobile'];
        $other = $row['other'];
        $stats = $row['status'];

        ?>
            <div class="card">
                <h2 class="card-title">Editar Usuario de Directorio</h2>
                <form class="row" onsubmit="editDir(); return false;">
                    <div class="form-group">
                        <input id="id" class="form-control" type="hidden" value="<?php echo $id;?>">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="name" class="form-control" type="text" value="<?php echo $name;?>" placeholder="Nombre Contacto">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="corp" class="form-control" type="text" value="<?php echo $corp;?>" placeholder="Empresa">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="other" class="form-control" type="phone" value="<?php echo $other;?>" placeholder="Teléfono Empresa">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="email" class="form-control" type="email" value="<?php echo $email;?>" placeholder="Email">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="phone" class="form-control" type="phone" value="<?php echo $phone;?>" placeholder="Teléfono">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="ext" class="form-control" type="hidden" value="<?php echo $ext;?>" placeholder="Extensión">
                    </div>
                    <div class="form-group col-lg-6">
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