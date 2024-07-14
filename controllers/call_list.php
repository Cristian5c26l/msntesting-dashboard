<?php
include '../includes/config.php';
include 'list.php';
include '../models/list.php';

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
$listInstance = new c_list($host,$user,$pass,$db);
$phoneInstance = new c_phone($host,$user,$pass,$db);

if($option){
    switch ($option) {

        case '1':
            $area = $_POST['area'];
            $name = $_POST['name'];
            $corp = $_POST['corp'];
            $service = $_POST['service'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $mobile = $_POST['mobile'];
            $other = $_POST['other'];
            $listInstance->addProv($area,$name,$corp,$service,$email,$phone,$mobile,$other);
        break;

        case '2':
            $id = $_POST['id'];
            $area = $_POST['area'];
            $name = $_POST['name'];
            $corp = $_POST['corp'];
            $service = $_POST['service'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $mobile = $_POST['mobile'];
            $other = $_POST['other'];
            $listInstance->editProv($id,$area,$name,$corp,$service,$email,$phone,$mobile,$other);
        break;
        
        case '3':
            $id = $_POST['id'];
            $listInstance->delProv($id);
        break;

        /* Phone Directory*/

        case '4':
            $iduser = $_POST['iduser'];
            $ubication = $_POST['ubication'];
            $phone = $_POST['phone'];
            $ext = $_POST['ext'];
            $phoneInstance->addPhone($iduser,$ubication,$phone,$ext);
        break;

        case '5':
            $id = $_POST['id'];
            $iduser = $_POST['iduser'];
            $ubication = $_POST['ubication'];
            $phone = $_POST['phone'];
            $ext = $_POST['ext'];
            $phoneInstance->editPhone($id,$iduser,$ubication,$phone,$ext);
        break;

        case '6':
            $id = $_POST['id'];
            $phoneInstance->delPhone($id);
        break;
        
        default:
        # code...
        break;
    }
}
?>