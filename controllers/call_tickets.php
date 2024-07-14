<?php
include '../includes/config.php';
include 'tickets.php';
include '../models/tickets.php';
$_POST = array_map ('htmlspecialchars',$_POST);
$option = $_POST['option'];

//instances
$ticketInstance = new c_ticket($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            session_start();
            $idarea = $_POST['idarea'];
            $idemploye = $_SESSION["idSession"];
            $title = $_POST['title'];
            $title = htmlspecialchars($title);
            $comment = $_POST['comment'];
            $comment = htmlspecialchars($comment);
            $result = $ticketInstance->addTicket($idarea,$idemploye,$title,$comment);
            die();
        break;

        case '2':
            $id = $_POST['id'];
            $idarea = $_POST['idarea'];
            $title = $_POST['title'];
            $title = htmlspecialchars($title);
            $comment = $_POST['comment'];
            $comment = htmlspecialchars($comment);
            $result = $ticketInstance->editTicket($id,$idarea,$title,$comment);
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
            $result = $ticketInstance->editStatusTicket($id,$status);
            die();
        break;
        
        case '5':
            //Assing ticket
            $id = $_POST['id'];
            $ticket = $_POST['ticket'];
            $result = $ticketInstance->assignTicket($id,$ticket);
        break;

        case '6':
            // All ticket Message
            $id = $_POST['id'];
            $employe = $_POST['employe'];
            $result = $ticketInstance->msgTickets($employe,$id);
            die();
        break;

        case '7':
            //Delete Ticket
            $id = $_POST['id'];
            $result = $ticketInstance->delTicket($id);
            die();
        break;
        
        case '8':
            //ticket response
            $id = $_POST['id'];
            $msg = $_POST['msg'];
            $result = $ticketInstance->msgTicketsResp($id,$msg);
            die();
        break;
        
        case '9':
            //Assing priority
            $id = $_POST['id'];
            $idTicket = $_POST['idTicket'];
            $result = $ticketInstance->assignPriority($id,$idTicket);
            die();
        break;

        case '10':
            //Select employee by area
            $area = $_POST['area'];
            $result = $ticketInstance->employees($area);
            die();
        break;

        case '11':
            session_start();
            $idarea = $_POST['idarea'];
            $idemploye = $_SESSION["idSession"];
            $title = $_POST['title'];
            $title = htmlspecialchars($title);
            $coju = $_POST['coju'];
            $exp = $_POST['exp'];
            $comment = $_POST['comment'];
            $comment = htmlspecialchars($comment);
            $result = $ticketInstance->addRequire($idarea,$idemploye,$title,$coju,$exp,$comment);
            die();
        break;    

        case '21':
            //Select user / area report
            $dini = $_POST['dini'];
            $dend = $_POST['dend'];
            $area = $_POST['area'];
            $emp = $_POST['emp'];
            $result = $ticketInstance->reports($dini,$dend,$area,$emp);
            die();
        break;

        case '22':
            //Select user / area report
            $id = $_POST['id'];
            $folio = $_POST['folio'];
            $result = $ticketInstance->setFolio($id,$folio);
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