<?php
session_start();
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 3600) {
    session_destroy();
    /* Aquí redireccionas a la url especifica */
    $_SESSION['idSession'] = '';
    $_SESSION['idSession'] = null;
    $_SESSION['levelSession'] = '';
    $_SESSION['levelSession'] = null;
    $_SESSION["captchaSession"]= '';
    $_SESSION['captchaSession'] = null;
    $_SESSION = array();
    session_unset();
    session_destroy();
    header("Location: ./login.php");
    die();  
}
if(isset($_SESSION["idSession"]) AND !empty($_SESSION["idSession"])){    
//includes
include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php echo head(); ?>
</head>
<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" data-has-scrolling-region>
        <div class="mdk-drawer-layout__content">
            <!-- header-layout -->
            <div class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
                <?php echo menuhead(); ?>
                <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                    <!-- main content -->
                    <div id="content" class="container-fluid">
                        <?php include './views/home/dashboard.php' ?>
                    </div>    
                </div>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
        <div id="menu">
            <?php echo menu2($_SESSION['idSession'],$_SESSION['userSession'],$_SESSION['emailSession'],$_SESSION['imageSession'],$_SESSION["captchaSession"]); ?>
        </div>
    </div>
    <!-- // END drawer-layout -->
footer
</body>
<footer>
    <?php echo footer(); ?>
</footer>
</html>
<?php 
//end if session
}else{
//redirect to Login
    header('Location: ./login.php');
}
?>