<?php
include '../includes/config.php';
include 'company.php';
include '../models/company.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];
//instances
$companyInstance = new c_company($host,$user,$pass,$db);
if($option){
    switch ($option) {
        case '1'://ADD COMPANY
            $rfc = $_POST['rfc'];
            $rs = $_POST['rs'];
            $usu = $_POST['usu'];
            $pswd = $_POST['pswd'];
            $objeto = $_POST['objeto'];
            $nombre1 = $_POST['nombre1'];
            $nombre2 = $_POST['nombre2'];
            $ap = $_POST['ap'];
            $am = $_POST['am'];
            $t1 = $_POST['t1'];
            $t2 = $_POST['t2'];
            $tc = $_POST['tc'];
            $check = $_POST['check'];
            $c1 = $_POST['c1'];
            $c2 = $_POST['c2'];
            $mo = $_POST['mo'];
            $co = $_POST['co'];
            $calle = $_POST['calle'];
            $ni = $_POST['ni'];
            $ne = $_POST['ne'];
            $col = $_POST['col'];
            $del = $_POST['del'];
            $cp = $_POST['cp'];
            $edo = $_POST['edo'];
            $pais = $_POST['pais'];
            $result = $companyInstance->addCompany($rfc,$rs,$usu,$pswd,$objeto,$nombre1,$nombre2,$ap,$am,$t1,$t2,$tc,$check,$c1,$c2,$mo,$co,$calle,$ni,$ne,$col,$del,$cp,$edo,$pais);
            die();
        break;
        case '2'://DELETE COMPANY
            $id = $_POST['id'];
            $result = $companyInstance->delCompany($id);
            die();
        break;
        case '3'://EDIT COMPANY
            $id=$_POST['id'];
            $id_emp=$_POST['id_emp'];
            $rfc = $_POST['rfc'];
            $rs = $_POST['rs'];
            $usu = $_POST['usu'];
            $objeto = $_POST['objeto'];
            $nombre1 = $_POST['nombre1'];
            $nombre2 = $_POST['nombre2'];
            $ap = $_POST['ap'];
            $am = $_POST['am'];
            $t1 = $_POST['t1'];
            $t2 = $_POST['t2'];
            $tc = $_POST['tc'];
            $check = $_POST['check'];
            $c1 = $_POST['c1'];
            $c2 = $_POST['c2'];
            $mo = $_POST['mo'];
            $co = $_POST['co'];
            $calle = $_POST['calle'];
            $ni = $_POST['ni'];
            $ne = $_POST['ne'];
            $col = $_POST['col'];
            $del = $_POST['del'];
            $cp = $_POST['cp'];
            $edo = $_POST['edo'];
            $pais = $_POST['pais'];
            $result = $companyInstance->editCompany($id,$id_emp,$rfc,$rs,$usu,$objeto,$nombre1,$nombre2,$ap,$am,$t1,$t2,$tc,$check,$c1,$c2,$mo,$co,$calle,$ni,$ne,$col,$del,$cp,$edo,$pais);
            die();
        break;

        default:
        # code...
        break;
    }
}
?>