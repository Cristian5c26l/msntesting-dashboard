<?php
include '../includes/config.php';
include 'sysinv.php';
include '../models/sysinv.php';

session_start();
$iduser = $_SESSION["idSession"];

$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$invInstance = new c_sysinv($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            //add New Insume
            $idmark = $_POST['idmark'];
            $idsize = $_POST['idsize'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $st = $_POST['st'];
            $mac = $_POST['mac'];
            $code = $_POST['code'];
            $sku = $_POST['sku'];
            $ubication = $_POST['ubication'];
            $type = $_POST['type'];
            $result = $invInstance->addInsume($idmark,$idsize,$name,$description,$st,$mac,$code,$sku,$ubication,$type);
            die();
        break;

        case '2':
            //edit Insume
            $id = $_POST['id'];
            $idmark = $_POST['idmark'];
            $idsize = $_POST['idsize'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $st = $_POST['st'];
            $mac = $_POST['mac'];
            $code = $_POST['code'];
            $sku = $_POST['sku'];
            $ubication = $_POST['ubication'];
            $type = $_POST['type'];
            $result = $invInstance->editInsume($id,$idmark,$idsize,$name,$description,$st,$mac,$code,$sku,$ubication,$type);
            die();
        break;
        
        case '3':
            //delete Insume
            $id = $_POST['id'];
            $result = $invInstance->delInsume($id);
            die();
        break;

        case '4':
            //area
            $id = $_POST['id'];
            $idarea = $_POST['idarea'];
            $result = $invInstance->selectArea($id,$idarea);
            die();
        break;
        
        case '5':
            //user
            $id = $_POST['id'];
            $iduser = $_POST['iduser'];
            $result = $invInstance->changeUser($id,$iduser);
            die();
        break;

        case '6':
            //motive
            $id = $_POST['id'];
            $idmotive = $_POST['idmotive'];
            $result = $invInstance->changeMotive($id,$idmotive);
            die();
        break;

        case '7':
            //Assignate
            $id = $_POST['id'];
            $iduser = $_POST['iduser'];
            $idmotive = $_POST['idmotive'];
            $result = $invInstance->assignate($id,$iduser,$idmotive);
            die();
        break;

        case '8':
            //Quit Assignation
            $id = $_POST['id'];
            $result = $invInstance->quitAssignate($id);
            die();
        break;

        case '10':
            //Add Maintenance
            $idpc = $_POST['idpc'];
            $component = $_POST['component'];
            $description = $_POST['description'];
            $type = $_POST['type'];
            $wresult = $_POST['wresult'];
            $result = $_POST['result'];
            $res = $invInstance->addMaintenance($idpc,$component,$description,$type,$wresult,$result);
            die();
        break;
        
        case '11':
            //Edit Maintenance
            $id = $_POST['id'];
            $idpc = $_POST['idpc'];
            $component = $_POST['component'];
            $description = $_POST['description'];
            $type = $_POST['type'];
            $wresult = $_POST['wresult'];
            $result = $_POST['result'];
            $res = $invInstance->editMaintenance($id,$idpc,$component,$description,$type,$wresult,$result);
            die();
        break;

        case '12':
            //Delete Maintenance
            $id = $_POST['id'];
            $component = $_POST['component'];
            $result = $invInstance->delMaintenance($id,$component);
            die();
        break;

        case '13':
            //Generate Responsive
            $id = $_POST['id'];
            $result = $invInstance->responsive($id);
            echo $result;
            die();
        break;

        case '14':
            $codes = $invInstance->getCodes();
            echo json_encode($codes);
        break;

        case '15':
            $code = $_POST['code'];
            $result = $invInstance->QRInsume($code);
            echo $result;
        break;

        case '16':
            $code = $_POST['code'];
            $verify = $_POST['verify'];
            $comment = $_POST['comment'];
            
            $result= $invInstance->addQRHistory($code,$verify,$comment);
        break;   

        case '17':
            $code = $_POST['code'];
            $result = $invInstance->QRHistory($code);
            echo $result;
        break;
        
        case '18':
            $id = $_POST['id'];
            $comment = $_POST['comment'];
            $result = $invInstance->addBackup($id,$comment);
            echo $result;
        break;

        case '19':
            $id = $_POST['id'];
            $result = $invInstance->historyBackup($id);
            echo $result;
        break;

        case '20':
            $id = $_POST['id'];
            $iduser = $_POST['iduser'];
            $comment = $_POST['comment'];
            $result = $invInstance->editBackup($id,$iduser,$comment);
            echo $result;
        break;

        case '100':
            
        break;
        
        default:
        # code...
        break;
    }
}
?>