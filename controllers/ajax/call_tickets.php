<?php
include '../../includes/config.php';
include '../tickets.php';

$option = $_POST['option'];

//instances
$ticketInstance = new c_ticket($host,$user,$pass,$db);

if($option){
    switch ($option) {
        case '1':
            $result = $ticketInstance->addTicket($data);
            echo json_encode($result);
            die();
        break;

        case '2':
            $result = $ticketInstance->selectTicket($data);
            echo json_encode($result);
            die();
        break;
        
        case '3':
            $result = $ticketInstance->selectAllTickets($data);
            echo json_encode($result);
            die();
        break;

        case '4':
            $result = $ticketInstance->editTicket($data);
            echo json_encode($result);
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