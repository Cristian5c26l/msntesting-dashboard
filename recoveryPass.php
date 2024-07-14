<?php
include 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php echo head(); ?>
</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable" style="overflow-y: auto;" data-simplebar data-simplebar-force-enabled="true">


            <div class="container h-vh d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <img src="assets/images/logo.png" width="150px">
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="card card-login mb-3">
                        <div class="card-body">
                            <form onsubmit="recoveryPass(); return false;">
                                <div class="form-group">
                                    <label>Email</label>

                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">account_circle</i>
                                        </div>
                                        <input id="email" name="email" type="email" class="form-control" placeholder="Introduce tu email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <a href="login.php">Ir a Login</a> 
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
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
</footer>
</html>