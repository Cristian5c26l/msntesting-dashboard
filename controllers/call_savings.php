<?php
include '../includes/config.php';
include 'savings.php';
include '../models/savings.php';

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
$saveInstance = new c_save($host,$user,$pass,$db);

if($option){
    switch ($option) {

        case '1':
            $iduser = $_POST['iduser'];
            $idgoal = $_POST['idgoal'];
            $idstrategy = $_POST['idstrategy'];
            $goal = $_POST['goal'];
            $date = $_POST['date'];
            $hour = $_POST['hour'];
            $quantity = $_POST['quantity'];
            $total = $_POST['total'];
            $saveInstance->addFullObjetive($iduser,$idgoal,$idstrategy,$goal,$date,$hour,$quantity,$total);
        break;

        case '2':
            $id = $_POST['id'];
            $iduser = $_POST['iduser'];
            $idgoal = $_POST['idgoal'];
            $idstrategy = $_POST['idstrategy'];
            $goal = $_POST['goal'];
            $date = $_POST['date'];
            $hour = $_POST['hour'];
            $quantity = $_POST['quantity'];
            $total = $_POST['total'];
            $saveInstance->editFullObjetive($id,$iduser,$idgoal,$idstrategy,$goal,$date,$hour,$quantity,$total);
        break;
        
        case '3':
            $id = $_POST['id'];
            $save = $_POST['save'];
            $saveInstance->checkSaving($id,$save);
        break;

        case '4':
            $id = $_POST['id'];
            $listInstance->delObjetive($id);
        break;
        
        default:
        # code...
        break;
    }
}
?>