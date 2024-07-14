<?php

include 'includes/config.php';
include 'controllers/turn.php';
include 'models/turn.php';
$supportInstance = new c_turn($host,$user,$pass,$db);

if(isset($_FILES['file']['name'])){
    $id = $_POST['id'];
    $step = $_POST['step'];
    /*$maxsize    = 2097152;*/
    /* Getting file name */
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];

    /*if($size>$maxsize){
        echo "El tamaño de tu archivo es más grande de lo permitido...";
        die();
    }*/

    /* Location */
    $location = "upload/".$name;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $ext  = (new SplFileInfo($name))->getExtension();
    $imageFileType = strtolower($imageFileType);

    /* Valid extensions */
    $extensions = array("docx","doc","pdf","png","jpg");

    $response = 0;
    /* Check file extension */
    if(in_array(strtolower($imageFileType), $extensions)) {
        /* Upload file */
        if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
            $response = $location;
        }
    }

    //Add Document Regulation
    if($step==1 OR $step=='1'){
        $msg = "Archivo Adjunto" ;
        $supportInstance->msgFile($id,$msg,$name);
        //$supportInstance->sendEmail($mail=null,$msg);
    }

    echo $response;
    exit;
}

echo 0;

?>