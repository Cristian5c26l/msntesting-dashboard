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
    $response = $userInstance->selectUser($id);

    $row = mysqli_fetch_array($response);
        $name = $row['name'];
        $last = $row['last'];
        $email = $row['email'];
        $phone = $row['phone'];
        $mobile = $row['mobile'];
        $gender = $row['gender'];
        $stats = $row['stats'];

        $date_birth = $row['date_birth'];
        $date_birth = date("Y-m-d H:i:s", strtotime($date_birth));
        $street = $row['street'];
        $num_ext = $row['num_ext'];
        $num_int = $row['num_int'];
        $cp = $row['cp'];
        $date_in= $row['date_in'];
        $area = $row['idarea'];

        if($gender=='Femenino'){
            $fem = 'selected';
            $mas = '';
        }else if($gender=='Masculino'){
            $fem = '';
            $mas = 'selected';
        }


        ?>
            <div class="card">
                <h2 class="card-title">Editar Usuario</h2>
                <form class="row" onsubmit="editUser(); return false;">
                    <div class="form-group">
                        <input id="id" class="form-control" type="hidden" value="<?php echo $id;?>">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="name" class="form-control" type="text" value="<?php echo $name;?>" placeholder="Nombre">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="last" class="form-control" type="text" value="<?php echo $last;?>" placeholder="Apellido">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="email" class="form-control" type="email" value="<?php echo $email;?>" placeholder="Email">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="phone" class="form-control" type="phone" value="<?php echo $phone;?>" placeholder="Teléfono">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="mobile" class="form-control" type="text" value="<?php echo $mobile;?>" placeholder="Celular">
                    </div>
                    <div class="form-group col-lg-6">
                        <select class="form-control" id="gender" required>
                            <option value="">Selecciona un Sexo</option>
                            <option value="Femenino" <?php echo $fem; ?>>Femenino</option>
                            <option value="Masculino" <?php echo $mas; ?>>Masculino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="birthday" type="text" class="datepicker form-control" value="<?php echo $date_birth;?>" placeholder="Fecha de Cumpleaños">
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="street" class="form-control" type="text" value="<?php echo $street;?>" placeholder="Calle">
                    </div>
                    <div class="form-group col-lg-4">
                        <input id="num_ext" class="form-control" type="text" value="<?php echo $num_ext;?>" placeholder="Número Exterior">
                    </div>
                    <div class="form-group col-lg-4">
                        <input id="num_int" class="form-control" type="text" value="<?php echo $num_int;?>" placeholder="Número Interior">
                    </div>
                    <div class="form-group col-lg-4">
                        <input id="cp" class="form-control" type="text" value="<?php echo $cp;?>" placeholder="C.P.">
                    </div>
                    <div class="form-group col-lg-4">
                        <input id="date_in" type="text" class="datepicker form-control" value="<?php echo $date_in;?>" placeholder="Fecha de Entrada">
                    </div>
                    <div class="form-group col-lg-6">
                        <select class="form-control" id="area" required>
                            <?php echo $empInstance->selectArea($area); ?>
                        </select>
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