<?php
include '../includes/config.php';
include 'alertep.php';
include '../models/alertep.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$serviceInstance = new c_alertep($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            session_start();
            $idarea = $_POST['idarea'];
            //$idemploye = $_SESSION["idSession"];
            $service = $_POST['service'];
            $service = htmlspecialchars($service);
            $description = $_POST['description'];
            $description = htmlspecialchars($description);
            $result = $serviceInstance->addservice($idarea,$service,$description);
            die();
        break;

        case '2':
            $id = $_POST['id'];
            $idarea = $_POST['idarea'];
            $service = $_POST['service'];
            $service = htmlspecialchars($service);
            $description = $_POST['description'];
            $description = htmlspecialchars($description);
            $result = $serviceInstance->editservice($id,$idarea,$service,$description);
            die();
        break;
        
        case '3':
            //Delete Project
            $id = $_POST['id'];
            $result = $serviceInstance->delservice($id);
            die();
        break;

        case '4':
            $id = $_POST['id'];
            $status = $_POST['status'];
            $type = $_POST['type'];
            $period = $_POST['period'];
            $result = $serviceInstance->editStatusAlert($id,$status,$type,$period);
            die();
        break;

        case '5':
            //Assing alert
            $id = $_POST['id'];
            $service = $_POST['service'];
            $result = $serviceInstance->assignAlert($id,$service);
        break;

        case '9':
            //Assing priority
            $id = $_POST['id'];
            $idService = $_POST['idTask'];
            $result = $serviceInstance->assignPriority($id,$idService);
            die();
        break;

        case '11':
            $idservice = $_POST['idservice'];
            $title = $_POST['title'];
            $title = htmlspecialchars($title);
            $comment = $_POST['comment'];
            $comment = htmlspecialchars($comment);
            $date = $_POST['date'];
            $paytype = $_POST['paytype'];
            $result = $serviceInstance->addAlert($idservice,$title,$comment,$date,$paytype);
            die();
        break;

        case '12':
            $id = $_POST['id'];
            $idservice = $_POST['idservice'];
            $title = $_POST['title'];
            $title = htmlspecialchars($title);
            $comment = $_POST['comment'];
            $comment = htmlspecialchars($comment);
            $date = $_POST['date'];
            $paytype = $_POST['paytype'];
            $result = $serviceInstance->editAlert($id,$idservice,$title,$comment,$date,$paytype);
            die();
        break;

        case '13':
            //Delete Service
            $id = $_POST['id'];
            $result = $serviceInstance->delalert($id);
            die();
        break;

        case '99':
            //percent total done task
            $idservice = $_POST['idservice'];
            $done = $serviceInstance->numService(1,$idproject);
            $total = $serviceInstance->numService(0,$idproject);
            //if not exist task and divition is zero/zero and not exist
            if(empty($total) AND empty($percent)){
                $percent = 0;
            }else{
                $done = intval($done);
                $total = intval($total);
                $percent = ($done/$total)*100;
            }
            //if not exist task and divition is nan
            if(empty($total)){
                $percent = 0;   
            }

            $percent = number_format($percent,2);
            echo $percent;
            die();
        break;
        

        case '100':
            
        break;
        
        default:
        # code...
        break;
    }
}
?>