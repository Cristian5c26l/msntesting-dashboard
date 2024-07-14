<?php
include 'includes/functions.php';

include 'includes/config.php';
include 'controllers/login.php';
include 'models/login.php';

$recoveryInstance = new c_user($host,$user,$pass,$db);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php 
        if(isset($_REQUEST['key']) AND !empty($_REQUEST['key'])){
            $key = $_REQUEST['key'];
            $res = $recoveryInstance->revk($key);

            $email = $recoveryInstance->getEmail($key);
            
            if($res==1 OR $res=='1'){
    ?>
    <?php echo head(); ?>
</head>

<body class="body-login">
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable" style="overflow-y: auto;" data-simplebar data-simplebar-force-enabled="true">


            <div class="container h-vh d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <img src="assets/images/logo.png" width="150px">
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="card card-login mb-3">
                        <div class="card-body">
                            <form onsubmit="changePs(); return false;">
                                <div class="form-group">
                                    <label>Reestablece tu password</label>

                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </div>
                                        <input type="password" class="form-control" id="password" value="" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </div>
                                        <input type="password" class="form-control" id="confirm" value="" placeholder="Conformación Password" required>
                                        <input type="hidden" class="form-control" id="key" value="<?php echo $key; ?>" required>
                                        <input type="hidden" class="form-control" id="email" value="<?php echo $email; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <a href="login.php">Ir a Login</a> 
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script>
        (function() {
            'use strict';

            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit();
        });
    </script>
</body>
<footer>
    <?php echo footer(); ?>
    <?php
            }else{
                echo    "<script>
                        alert('Lo sentimos esta sesión no existe ó ha caducado, envía tu petición de Contraseña para acceder o crear una nueva sesión');
                        window.location.href = './login.php';
                        </script>";
            }//en if res

        }else{
            echo    "<script>
                        alert('Lo Sentimos no Puedes Acceder de esta Forma');
                        window.location.href = './login.php';
                    </script>";
            //header("Location: ./login.php");
        }
     ?>
</footer>
</html>