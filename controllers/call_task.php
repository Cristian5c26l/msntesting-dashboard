<?php
include '../includes/config.php';
include 'task.php';
include '../models/task.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$taskInstance = new c_task($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            session_start();
            $idarea = $_SESSION['areaSession'];
            $idemploye = $_SESSION["idSession"];
            $task = $_POST['task'];
            //$title = htmlspecialchars($title);
            $object = $_POST['object'];
            $coju = $_POST['coju'];
            $type = $_POST['type'];
            $auth = $_POST['auth'];
            $messenger = $_POST['messenger'];
            $desc = $_POST['desc'];
            //$comment = htmlspecialchars($comment);
            $result = $taskInstance->addTask($idarea,$idemploye,$task,$object,$coju,$type,$auth,$messenger,$desc);
            die();
        break;

        case '2':
            $id = $_POST['id'];
            $idarea = $_POST['idarea'];
            $task = $_POST['task'];
            //$title = htmlspecialchars($title);
            $object = $_POST['object'];
            $coju = $_POST['coju'];
            $type = $_POST['type'];
            $auth = $_POST['auth'];
            $messenger = $_POST['messenger'];
            $desc = $_POST['desc'];
            //$comment = htmlspecialchars($comment);
            $result = $taskInstance->editTask($id,$idarea,$idemploye,$task,$object,$coju,$type,$auth,$messenger,$desc);
            die();
        break;
        
        case '3':
            /*$result = $ticketInstance->selectAllTickets($data);
            echo json_encode($result);
            die();*/
        break;

        case '4':
            $id = $_POST['id'];
            $status = $_POST['status'];
            $result = $taskInstance->editStatusTask($id,$status);
            die();
        break;
        
        case '5':
            //Assing task
            $id = $_POST['id'];
            $task = $_POST['task'];
            $result = $taskInstance->assignTask($id,$task);
        break;

        case '6':
            // All task Message
            $id = $_POST['id'];
            $employe = $_POST['employe'];
            $result = $taskInstance->msgTask($employe,$id);
            die();
        break;

        case '7':
            //Delete Task
            $id = $_POST['id'];
            $result = $taskInstance->delTask($id);
            die();
        break;
        
        case '8':
            //Task response
            $id = $_POST['id'];
            $msg = $_POST['msg'];
            $result = $taskInstance->msgTaskResp($id,$msg);
            die();
        break;
        
        case '9':
            //Assing priority
            $id = $_POST['id'];
            $idTask = $_POST['idTask'];
            $result = $taskInstance->assignPriority($id,$idTask);
            die();
        break;

        case '10':
            //Select employee by area
            $area = $_POST['area'];
            $result = $taskInstance->employees($area);
            die();
        break;

        case '21':
            //Select user / area report
            $dini = $_POST['dini'];
            $dend = $_POST['dend'];
            $area = $_POST['area'];
            $emp = $_POST['emp'];
            $result = $taskInstance->reports($dini,$dend,$area,$emp);
            die();
        break;

        case '99':
            //percent to done task on total relation
            $idarea = $_POST['idarea'];
            $done = $taskInstance->numTask(0,1,$idarea);
            $total = $taskInstance->numTask(0,0,$idarea);
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