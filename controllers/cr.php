<?php        
    include '../includes/config.php';
    include 'execution.php';
    include '../models/execution.php';
    
    //instances
    $exeInstance = new c_exe($host,$user,$pass,$db);
    $result = $exeInstance->notifify();

?>        