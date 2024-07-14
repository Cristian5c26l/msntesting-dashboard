<?php
include '../includes/config.php';
include 'organization.php';
include '../models/organization.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$orgInstance = new c_org($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            $id = $_POST['id'];
            $result = $orgInstance->selectBoss($id);
            die();
        break;

        case '2':
            $id = $_POST['id'];
            $lvl = $_POST['lvl'];
            $result = $orgInstance->changeLvl($id,$lvl);
            die();
        break;
        
        case '3':
            $iduser = $_POST['iduser'];
            $idboss = $_POST['idboss'];
            $lvl = $_POST['lvl'];
            $result = $orgInstance->addOrg($iduser,$idboss,$lvl);
            die();
        break;

        case '4':
            
        break;

        case '5':
            
        break;

        case '100':
            
        break;
        
        default:
        # code...
        break;
    }
}
?>