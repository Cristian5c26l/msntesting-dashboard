<?php
include '../includes/config.php';
include 'domain.php';
include '../models/domain.php';

$option = $_POST['option'];
//security function
function sanitizer($str) { 
      
    // Using str_replace() function    
    $res = str_replace( array( '\'', '"', 
    ',' , ';', '<', '>' ), ' ', $str);
        
    // Returning the result  
    return $res; 
} 

//instances
$listInstance = new c_domain($host,$user,$pass,$db);

if($option){
    switch ($option) {

        case '1':
            $ubication = $_POST['ubication'];
            $areas = $_POST['area'];
            $iduser = $_POST['iduser'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $emailpass = $_POST['emailpass'];
            $anydesk = $_POST['anydesk'];
            $ip = $_POST['ip'];
            $mac = $_POST['mac'];
            $pcname = $_POST['pcname'];
            $listInstance->addDomain($ubication,$areas,$iduser,$user,$pass,$emailpass,$anydesk,$ip,$mac,$pcname);
        break;

        case '2':
            $id = $_POST['id'];
            $ubication = $_POST['ubication'];
            $areas = $_POST['area'];
            $iduser = $_POST['iduser'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $emailpass = $_POST['emailpass'];
            $anydesk = $_POST['anydesk'];
            $ip = $_POST['ip'];
            $mac = $_POST['mac'];
            $pcname = $_POST['pcname'];
            $listInstance->editDomain($id,$ubication,$areas,$iduser,$user,$pass,$emailpass,$anydesk,$ip,$mac,$pcname);
        break;
        
        case '3':
            $id = $_POST['id'];
            $listInstance->delDomain($id);
        break;

        case '4':
            $id = $_POST['id'];
            $listInstance->getemail($id);
        break;

        case '5':
            $id = $_POST['id'];
            $listInstance->getUserInfo($id);
        break;
        
        case '6':
            $option = $_POST['v'];
            $listInstance->newTable($option);
        break;
        
        default:
        # code...
        break;
    }
}
?>