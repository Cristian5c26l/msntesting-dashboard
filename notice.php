<?php
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        
        include 'includes/config.php';
        include 'controllers/controllerBlog.php';
        include 'models/model.php';
        $blogInstance = new c_blog($host,$user,$pass,$db);
?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <?php include_once 'includes/header.php'; ?>
    </head>
    <body>
        <?php include 'includes/navigation.php'; ?>
        <section id="home" class="no-padding">
            <section id="servicios" class="no-padding">
                <div class="full-notice justify pt-150 pb-20">
                    <?php $blogInstance->fullNotice($id); ?>
                    <?php
                        session_start();
                        
                        //if(isset($_SESSION["idSession"]) AND !empty($_SESSION["idSession"])){ 
                            $session = $_SESSION["idSession"];
                            ?>
                                <div>
                                    <form onsubmit="">
                                        <input type="text" name="" placeholder="Envia tu Mensaje" required>
                                        <input type="submit" class="" value="Enviar">
                                    </form>
                                </div>
                            <?php
                        //}else{
                            $session = "";
                        //}     

                        //$blogInstance->fullNotice($id,$session);
                    ?>
                </div>
            </section>
            <!-- End Content -->
        </section>
        <?php include 'includes/footer.php'; ?>
        <?php scripts(); ?>
    </body>
</html>
<?php
    }else{
        
    } 
?>