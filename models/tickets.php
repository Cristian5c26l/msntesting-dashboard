<?php
class m_ticket{
    
    public function addTicket($host,$user,$pass,$db,$idarea,$idemploye,$title,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_tickets (idarea,idemp,title,comment,type,date_ini,status) values($idarea,$idemploye,'$title','$comment',1,'$time',2)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editTicket($host,$user,$pass,$db,$id,$idarea,$title,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tickets SET idarea=$idarea, title='$title', comment='$comment' WHERE id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectTicketArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE ticket = 1 AND status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectTicket($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT T.*, A.area, A.status as nstats, P.name as npriority FROM adm_tickets as T
        LEFT JOIN prioridad as P ON T.priority = P.id 
        LEFT JOIN areas as A ON T.idarea = A.id WHERE T.id='$id' AND T.status>=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAllTickets($host,$user,$pass,$db,$status,$area){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($status)){
            $ext = "WHERE T.status='$status'";
        }else{
            $ext = "";
        }

        if(!empty($area)){
            $ext = "WHERE T.idarea='$area'";
        }else{
            $ext = "";
        }

        $sql = "SELECT T.*, A.area, A.status, Es.name as nstats, P.name as npriority, P.class, Em.name as employe, Em2.name as assignated, Em.email as email FROM adm_tickets as T 
        LEFT JOIN empleados as Em ON T.idemp = Em.id
        LEFT JOIN empleados as Em2 ON T.idassign = Em2.id
        LEFT JOIN areas as A ON T.idarea = A.id
        LEFT JOIN prioridad as P ON T.priority = P.id
        LEFT JOIN estatus as Es ON T.status = Es.id $ext ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUserTickets($host,$user,$pass,$db,$iduser){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($iduser)){
            $ext = "WHERE T.idemp='$iduser'";
        }else{
            //$ext = "";
            $ext = "WHERE T.status = 999";
        }
        $sql = "SELECT T.*, A.area, A.status, Es.name as nstats, P.name as npriority, P.class, Em.name as employe, Em2.name as assignated, Em.email as email FROM adm_tickets as T 
        LEFT JOIN empleados as Em ON T.idemp = Em.id
        LEFT JOIN empleados as Em2 ON T.idassign = Em2.id
        LEFT JOIN areas as A ON T.idarea = A.id
        LEFT JOIN prioridad as P ON T.priority = P.id
        LEFT JOIN estatus as Es ON T.status = Es.id $ext ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUserFiles($host,$user,$pass,$db,$iduser){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($iduser)){
            $ext = "WHERE T.idemp='$iduser' AND T.type=2";
        }else{
            //$ext = "";
            $ext = "WHERE T.status = 999 AND T.type=2";
        }
        $sql = "SELECT T.*, A.area, A.status, Es.name as nstats, P.name as npriority, P.class, Em.name as employe, Em2.name as assignated, Em.email as email FROM adm_tickets as T 
        LEFT JOIN empleados as Em ON T.idemp = Em.id
        LEFT JOIN empleados as Em2 ON T.idassign = Em2.id
        LEFT JOIN areas as A ON T.idarea = A.id
        LEFT JOIN prioridad as P ON T.priority = P.id
        LEFT JOIN estatus as Es ON T.status = Es.id $ext ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function reports($host,$user,$pass,$db,$dini,$dend,$area,$emp){
        if(!empty($area)){
            $ext1 = "AND idarea ='$area' ";
        }else{
            $ext1 = "";
        }

        if(!empty($emp)){
            $ext2 = "AND idassign ='$emp' ";
        }else{
            $ext2 = "";
        }

        $con = $this->connect($host,$user,$pass,$db);
        /*$sql = "SELECT * FROM adm_tickets WHERE (date_ini>='$dini' AND date_end<='$dend') $ext1 $ext2 AND status=1 ";*/
        $sql = "SELECT count(*) AS total,
        sum(case when status = 1 then 1 else 0 end) AS listo,
        sum(case when status = 2 then 1 else 0 end) AS pendiente,
        sum(case when status = 4 then 1 else 0 end) AS eliminado 
        FROM adm_tickets WHERE (date_ini>='$dini' AND date_end<='$dend') $ext1 $ext2 ";
        
        mysqli_set_charset($con, "utf8");
        $query = mysqli_query($con,$sql);
        
        return $query;
    }

    public function detailTicket($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_comentarios WHERE id='$id' AND status=1 ";
    }

    public function selectAllStatus($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM prioridad";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignpriority($host,$user,$pass,$db,$id,$idTicket){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="UPDATE adm_tickets SET priority = $id WHERE id = $idTicket ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editStatusTicket($host,$user,$pass,$db,$id,$status){
        $con = $this->connect($host,$user,$pass,$db);
        if($status==8 OR $status=='8'){
            $sql = "UPDATE adm_tickets SET status = $status, date_file= NOW() WHERE id=$id";
        }else{
            $sql = "UPDATE adm_tickets SET status = $status WHERE id=$id";
        }

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delTicket($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tickets SET status = 0 WHERE id=$id " ;

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function numTickets($host,$user,$pass,$db,$priority,$status,$area){
        $con = $this->connect($host,$user,$pass,$db);
        
        /*if(!empty($priority) AND !empty($status)){
            $ext = "WHERE priority=$priority AND status=$status ";
        }else if(!empty($priority) AND empty($status)){
            $ext = "WHERE priority=$priority";
        }else if(empty($priority) AND !empty($status)){
            $ext = "WHERE status=$status";
        }else{
            $ext = "";
        }*/

        if(!empty($priority) AND !empty($status) AND !empty($area)){
            $ext = "WHERE priority=$priority AND status=$status AND idarea=$area ";
        }else if(!empty($priority) AND !empty($status) AND empty($area)){
            $ext = "WHERE priority=$priority AND status=$status ";
        }else if(!empty($priority) AND empty($status) AND !empty($area)){
            $ext = "WHERE priority=$priority AND idarea=$area ";
        }else if(!empty($priority) AND empty($status) AND empty($area)){
            $ext = "WHERE priority=$priority";
        }else if(empty($priority) AND !empty($status) AND !empty($area)){
            $ext = "WHERE status=$status AND idarea=$area";
        }else if(empty($priority) AND !empty($status) AND empty($area)){
            $ext = "WHERE status=$status";
        }else if(empty($priority) AND empty($status) AND !empty($area)){
            $ext = "WHERE idarea=$area ";
        }else{
            $ext = "";
        }

        $sql = "SELECT COUNT(*) as num FROM adm_tickets $ext";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function employe($host,$user,$pass,$db,$area){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="SELECT id,name FROM empleados WHERE idarea = $area AND stats=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function setFolio($host,$user,$pass,$db,$id,$folio){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="UPDATE adm_tickets SET folio = '$folio' WHERE id = $id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignTicket($host,$user,$pass,$db,$id,$idTicket){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="UPDATE adm_tickets SET idassign = $id WHERE id = $idTicket ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function initMsg($host,$user,$pass,$db,$idTicket){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="SELECT comment FROM adm_tickets WHERE id = $idTicket ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function msgTickets($host,$user,$pass,$db,$idUser,$idTicket){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="SELECT C.*, Em.name as user FROM adm_comentarios as C
        LEFT JOIN empleados as Em ON C.iduser = Em.id
        WHERE idticket = $idTicket AND status=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function msgTicketsResp($host,$user,$pass,$db,$idUser,$idTicket,$msg,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_comentarios (iduser,idticket,comment,type,date,status) values($idUser,$idTicket,'$msg',$type,'$time',1) ";
    
        $query = mysqli_query($con,$sql);
        return $sql;
    }

    public function addRequire($host,$user,$pass,$db,$idarea,$idemploye,$title,$coju,$exp,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_tickets (idarea,idemp,title,coju,folio,comment,type,date_ini,status) values($idarea,$idemploye,'$title','$coju','$exp','$comment',2,'$time',2)";
        
        $query = mysqli_query($con,$sql);
        return $sql;
    }

    /*Connection*/
    public function connect($host,$user,$pass,$db){
        $con = mysqli_connect($host,$user,$pass,$db);
        if($con){
            return $con;
            mysqli_close($con);
        }else{
            return mysqli_error($con);
        }
    }
}
?>