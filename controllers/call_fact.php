<?php
include '../includes/config.php';
include 'fact.php';
include '../models/fact.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];
//instances
$evInstance = new c_fact($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1'://Add Evidenece
            $folio = $_POST['folio'];
            $company = $_POST['company'];
            $provider = $_POST['provider'];
            $description = $_POST['description'];
            $result = $evInstance->addFact($folio,$company,$provider,$description);
            die();
        break;
        case '2'://Delete Evidence
            $id = $_POST['id'];
            $result = $evInstance->delFact($id);
            die();
        break;
        case '3'://Edit Evidence
            $id = $_POST['id'];
            $folio = $_POST['folio'];
            $company = $_POST['company'];
            $provider = $_POST['provider'];
            $description = $_POST['description'];
            $result = $evInstance->editFact($id,$folio,$company,$provider,$description);
            die();
        break;

        default:
        # code...
        break;
    }
}
?>