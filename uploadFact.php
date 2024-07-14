<?php
// User Settings
include 'includes/config.php';
include 'controllers/fact.php';
include 'models/fact.php';
$evInstance = new c_fact($host,$user,$pass,$db);

$id = $_POST['id'];

if(isset($_FILES['file']['name'])){

    /*$maxsize    = 2097152;*/
    /* Getting file name */
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];

    /*if($size>$maxsize){
        echo "El tamaño de tu archivo es más grande de lo permitido...";
        die();
    }*/

    /* Location */
    $location = "assets/images/".$name;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    /* Valid extensions */
    $extensions = array("jpg","jpeg","png","docx","doc","pdf");

    $response = 0;
    /* Check file extension */
    if(in_array(strtolower($imageFileType), $extensions)) {
        /* Upload file */
        if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
            $evInstance->addimg($id,$name);
            $response = $location;
        }
    }

    echo $response;
    exit;
}

echo 0;

?>