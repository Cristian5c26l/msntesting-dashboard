<?php
include '../includes/config.php';
include 'evaluation.php';
include '../models/evaluation.php';

session_start();
$iduser = $_SESSION["idSession"];

$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$evalInstance = new c_eval($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            //show user area
            $id = $_POST['id'];

            $result = $evalInstance->userArea($id);
            echo $result;
            die();
        break;

        case '2':
            //add evaluation
            $idUser = $_POST['user'];
            $date_eval = $_POST['date_eval'];
            $duration = $_POST['duration'];
            $dateini = $_POST['dateini'];
            $dateend = $_POST['dateend'];
            $area = $_POST['area'];
            $job = $_POST['job'];
            $special = $_POST['special'];

            $result = $evalInstance->addEval($idUser,$date_eval,$duration,$dateini,$dateend,$area,$job,$special);
            die();
        break;
        
        case '3':
            //edit evaluation
            $id = $_POST['id'];
            $idUser = $_POST['user'];
            $date_eval = $_POST['date_eval'];
            $duration = $_POST['duration'];
            $dateini = $_POST['dateini'];
            $dateend = $_POST['dateend'];
            $area = $_POST['area'];
            $job = $_POST['job'];
            $special = $_POST['special'];

            $result = $evalInstance->editEval($id,$idUser,$date_eval,$duration,$dateini,$dateend,$area,$job,$special);
            die();
        break;
        
        case '11':
            $iduser = $_POST['user'];
            $user = $evalInstance->nameUser($iduser);
            $date_cap = $_POST['date_cap'];
            $idarea = $_POST['area'];
            $area = $evalInstance->userArea($idarea);
            $age = $_POST['age'];
            $birthday = $_POST['birthday'];
            $job = $_POST['job'];
            $obj = $_POST['obj'];
            $agejob = $_POST['agejob'];
            $agesite = $_POST['agesite'];
            $study = $_POST['study'];
            $whatstudy = $_POST['whatstudy'];
            $education = $_POST['education'];
            $r = $_POST['r'];
            $r2 = $_POST['r2'];
            $r3 = $_POST['r3'];
            $r4 = $_POST['r4'];
            $r5 = $_POST['r5'];
            $r6 = $_POST['r6'];
            $r7 = $_POST['r7'];
            $r8 = $_POST['r8'];
            $r9 = $_POST['r9'];
            $r10 = $_POST['r10'];
            $r11 = $_POST['r11'];

            $t1 = $_POST['t1'];
            $t2 = $_POST['t2'];
            $t3 = $_POST['t3'];
            $t4 = $_POST['t4'];
            $t5 = $_POST['t5'];
            $t6 = $_POST['t6'];
            $t7 = $_POST['t7'];

            $result = $evalInstance->sendEmail($user,$date_cap,$area,$age,$birthday,$job,$obj,$agejob,$agesite,$study,$whatstudy,$education,$r,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10,$r11,$t1,$t2,$t3,$t4,$t5,$t6,$t7);

        case '100':
            
        break;
        
        default:
        # code...
        break;
    }
}
?>