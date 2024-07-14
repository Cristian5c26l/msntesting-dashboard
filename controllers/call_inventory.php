<?php
include '../includes/config.php';
include 'inventory.php';
include '../models/inventory.php';

session_start();
$iduser = $_SESSION["idSession"];

$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$invInstance = new c_inventory($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            //add New Insume
            $name = $_POST['name'];
            $iduser = $_POST['iduser'];
            $area = $_POST['area'];
            $description = $_POST['description'];
            $iniStock = $_POST['qty'];
            $type = $_POST['type'];
            $expire = $_POST['expire'];
            $result = $invInstance->addInsume($name,$iduser,$area,$description,$iniStock,$type,$expire);
            die();
        break;

        case '2':
            //edit Insume
            $id = $_POST['id'];
            $name = $_POST['name'];
            $area = $_POST['area'];
            $description = $_POST['description'];
            $iniStock = $_POST['qty'];
            $type = $_POST['type'];
            $expire = $_POST['expire'];
            $result = $invInstance->editInsume($id,$name,$area,$description,$iniStock,$type,$expire);
            die();
        break;
        
        case '3':
            //add Insume Qty
            $id = $_POST['id'];
            $qty = $_POST['qty'];
            $comment = $_POST['comment'];
            $expire = $_POST['expire'];
            $result = $invInstance->sumInsume($id,$iduser,$qty,$comment,$expire);
        break;

        case '4':
            //usage Insume Qty
            $id = $_POST['id'];
            $qty = $_POST['qty'];
            $comment = $_POST['comment'];
            $result = $invInstance->restInsume($id,$iduser,$qty,$comment);
            die();
        break;
        
        case '5':
            //delete Insume
            $id = $_POST['id'];
            $result = $invInstance->delInsume($id);
            die();
        break;

        case '6':
            //add insume area
            $name = $_POST['name'];
            $result = $invInstance->addInsumeArea($name);
            die();
        break;
        
        case '7':
            //edit insume area
            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = $invInstance->editInsumeArea($id,$name);
            die();
        break;

        case '8':
            //delete insume area
            $id = $_POST['id'];
            $result = $invInstance->delInsumeArea($id);
            die();
        break;

        case '9':
            //modify Insume Details
            $id = $_POST['id'];
            $qty = $_POST['qty'];
            $sumrest = $_POST['sumrest'];
            $comment = $_POST['comment'];
            $expire = $_POST['expire'];

            $result = $invInstance->modifyInsume($id,$qty,$comment,$expire,$sumrest);
        break;
        
        case '10':
            //delete Insume Detail Qty
            $id = $_POST['id'];
            $result = $invInstance->delDetail($id);
            die();
        break;

        case '21':
            //Select user / area report
            $dini = $_POST['dini'];
            $dend = $_POST['dend'];
            $area = $_POST['area'];
            $idInsume = $_POST['idInsume'];
            $result = $invInstance->reports($dini,$dend,$area,$idInsume);
            die();
        break;

        case '99':
            //percent to done tickets on total relation
            $idarea = $_POST['idarea'];
            $done = $ticketInstance->numTickets(0,1,$idarea);
            $total = $ticketInstance->numTickets(0,0,$idarea);
            //if not exist tickets and divition is zero/zero and not exist
            if(empty($total) AND empty($percent)){
                $percent = 0;
            }else{
                $done = intval($done);
                $total = intval($total);
                $percent = ($done/$total)*100;
            }
            //if not exist tickets and divition is nan
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