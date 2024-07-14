<?php
include 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
                            <form onsubmit="login(); return false;">
                                <div class="form-group">
                                    <label>Username</label>

                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">account_circle</i>
                                        </div>
                                        <input type="text" class="form-control" id="username" placeholder="Usuario" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </div>
                                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <a href="recoveryPass.php">¿Olvidaste tu password?</a> 
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Login</button>
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