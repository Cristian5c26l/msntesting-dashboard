<?php
if ($_REQUEST['id']) {
    include '../../includes/config.php';
    include '../../controllers/sysinv.php';
    include '../../models/sysinv.php';

    $invInstance = new c_sysinv($host, $user, $pass, $db);

    session_start();
    $iduser = $_SESSION["idSession"];// iduser es id de sesion, no el id del usuario
    $id = $_POST['id'];// idpc
    $iduserins = $_POST['iduserins'];// id del usuario

?>

<div class="card">
    <div class="card-header">
        <h1 style="text-align:center">Responsiva de Usuario (Sistemas)</h1>
    </div>
    <div class="card-body">
        <div class="btn btn-primary col-md-2" onclick="menu('sysinv/newinsume');">< Regresar</div>
        <br>
        <button class="btn btn-primary mt-3" onclick="generateResponsivePDF();">Generar PDF</button>
        <br><br>
        <div id="responsiveContent">
            <?php echo $invInstance->responsive($id, $iduserins); ?>
        </div>
    </div>
</div>

<script>  
</script>


<?php
} else {
    echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
}
?>