<?php
include '../includes/config.php';
include 'turn.php';
include '../models/turn.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$turnInstance = new c_turn($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1'://ADD TURN
            $idempleados = $_POST['idempleados'];
            $f_termino = $_POST['f_termino'];
            $vigencia = $_POST['vigencia'];
            $razon = $_POST['razon'];
            $coju = $_POST['coju'];
            $epc = $_POST['epc'];
           
            $result = $turnInstance->addTurn($idempleados, $f_termino,$vigencia,$razon,$coju,$epc);
            die();
        break;
        case '2'://DELETE TURN
            $id = $_POST['id'];
            $result = $turnInstance->delTurn($id);
            die();
        break;
        case '3'://EDIT TURN
            $id = $_POST['id'];
            $option = $_POST['option'];
            $idempleados = $_POST['idempleados'];
            $f_termino = $_POST['f_termino'];
            $vigencia = $_POST['vigencia'];
            $razon = $_POST['razon'];
            $coju = $_POST['coju'];
            $status = $_POST['status'];
           
            $result = $turnInstance->editTurn($id,$idempleados,$f_termino,$vigencia,$razon,$coju,$status);
            die();
        break;

        case '4'://DELETE LAWYER TURN
            $id = $_POST['idturn'];
            $idemp = $_POST['idemp'];
            $result = $turnInstance->delLawyer($id,$idemp);
            die();
        break;

        case '5'://ADD LAWYER TURN
            $id = $_POST['idturn'];
            $idemp = $_POST['idemp'];
            $result = $turnInstance->addLawyer($id,$idemp);
            echo $result;
            die();
        break;

        case '6'://CHANGE STATUS
            $id = $_POST['id'];
            $status = $_POST['status'];
            $result = $turnInstance->changeStatus($id,$status);
            die();
        break;

        case '7':
            // All Message
            $id = $_POST['id'];
            $employe = $_POST['employe'];
            $result = $turnInstance->msgTurn($employe,$id);
            die();
        break;

        case '8':
            //turn response
            $id = $_POST['id'];
            $msg = $_POST['msg'];
            $result = $turnInstance->msgResp($id,$msg);
            die();
        break;

        case '9'://ADD ARCHIVIST
            $id = $_POST['idturn'];
            $idemp = $_POST['idemp'];
            $result = $turnInstance->addArchivist($id,$idemp);
            echo $result;
            die();
        break;

        case '10'://DELETE ARCHIVIST
            $id = $_POST['idturn'];
            $idemp = $_POST['idemp'];
            $result = $turnInstance->delArchivist($id,$idemp);
            die();
        break;

        case '11':
            $icomment = $_POST['icomment'];
            $fcomment = $_POST['fcomment'];
            $result = $turnInstance->getEPC($icomment,$fcomment);
        break;    

        default:
        # code...
        break;
    }
}
?>