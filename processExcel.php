<?php
include 'includes/config.php';
include 'controllers/updateExcel.php';
include 'models/updateExcel.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

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
    $location = "assets/uploadExcel/".$name;
    echo $location;
    //$file = '../../vendor/test.xlsx';

    $excelFileType = pathinfo($location,PATHINFO_EXTENSION);
    $excelFileType = strtolower($excelFileType);

    /* Valid extensions */
    $extensions = array("xls","xlsx");

    $response = 0;
    /* Check file extension */
    if(in_array(strtolower($excelFileType), $extensions)) {
        /* Upload file */
        if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
            $doc = IOFactory::load($location);
            $sheet = $doc->getSheet(0);
            $numRows = $sheet->getHighestDataRow();
            
            for ($i=3; $i <$numRows ; $i++) { 
                $val = $sheet->getCellByColumnAndRow(1, $i);
                $val2 = $sheet->getCellByColumnAndRow(2, $i);
                echo $val.'<br>';
                //$excelInstance->addInventory();
            }
        }
    }

    echo $response;
    exit;
}

?>