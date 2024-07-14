<?php
include '../includes/config.php';
include 'projects.php';
include '../models/projects.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$projectInstance = new c_project($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            session_start();
            $idarea = $_POST['idarea'];
            //$idemploye = $_SESSION["idSession"];
            $project = $_POST['project'];
            $project = htmlspecialchars($project);
            $description = $_POST['description'];
            $description = htmlspecialchars($description);
            $result = $projectInstance->addProject($idarea,$project,$description);
            die();
        break;

        case '2':
            $id = $_POST['id'];
            $idarea = $_POST['idarea'];
            $project = $_POST['project'];
            $project = htmlspecialchars($project);
            $description = $_POST['description'];
            $description = htmlspecialchars($description);
            $result = $projectInstance->editProject($id,$idarea,$project,$description);
            die();
        break;
        
        case '3':
            //Delete Project
            $id = $_POST['id'];
            $result = $projectInstance->delProject($id);
            die();
        break;

        case '4':
            $id = $_POST['id'];
            $status = $_POST['status'];
            $result = $projectInstance->editStatusTask($id,$status);
            die();
        break;

        case '5':
            //Assing task
            $id = $_POST['id'];
            $task = $_POST['task'];
            $result = $projectInstance->assignTask($id,$task);
        break;

        case '9':
            //Assing priority
            $id = $_POST['id'];
            $idTask = $_POST['idTask'];
            $result = $projectInstance->assignPriority($id,$idTask);
            die();
        break;

        case '11':
            $idproject = $_POST['idproject'];
            $title = $_POST['title'];
            $title = htmlspecialchars($title);
            $comment = $_POST['comment'];
            $comment = htmlspecialchars($comment);
            $result = $projectInstance->addTask($idproject,$title,$comment);
            die();
        break;

        case '12':
            $id = $_POST['id'];
            $idproject = $_POST['idproject'];
            $title = $_POST['title'];
            $title = htmlspecialchars($title);
            $comment = $_POST['comment'];
            $comment = htmlspecialchars($comment);
            $result = $projectInstance->editTask($id,$idproject,$title,$comment);
            die();
        break;

        case '13':
            //Delete Task
            $id = $_POST['id'];
            $result = $projectInstance->delTask($id);
            die();
        break;

        case '99':
            //percent total done task
            $idproject = $_POST['idproject'];
            $done = $projectInstance->numTask(1,$idproject);
            $total = $projectInstance->numTask(0,$idproject);
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