<?php
include '../includes/config.php';
include 'hpanel.php';
include '../models/hpanel.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$panelInstance = new c_panel($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            $id = $_POST['id'];
            $result = $panelInstance->viewblog($id);
            die();
        break;

        case '2':
            $title = $_POST['title'];
            $author = $_POST['author'];
            $data = $_POST['data'];
            $type = $_POST['type'];
            $data = html_entity_decode($data);
            $result = $panelInstance->addblog($title,$author,$data,$type);
            die();
        break;

        case '3':
            $id = $_POST['id'];
            $type = $_POST['type'];
            $result = $panelInstance->changeblog($id,$type);
            die();
        break;

        case '4':
            $id = $_POST['id'];
            $title = $_POST['title'];
            $author = $_POST['author'];
            $data = $_POST['data'];
            $data = html_entity_decode($data);
            $result = $panelInstance->editblog($id,$title,$author,$data);
            die();
        break;
        
        case '5':
            $id = $_POST['id'];
            $result = $panelInstance->delblog($id);
            die();
        break;

        case '11':
            session_start();
            $idemploye = $_SESSION["idSession"];
            $id = $_POST['id'];
            $vote = $_POST['vote'];
            $result = $panelInstance->addVote($id,$idemploye,$vote);
            echo $result;
            die();
        break;

        case '12':
            session_start();
            $idemploye = $_SESSION["idSession"];
            $id = $_POST['id'];
            $resp = $_POST['resp'];
            $result = $panelInstance->sendMessage($id,$idemploye,$resp);
            echo $result;
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