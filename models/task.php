<?php
class m_task{
    
    public function addTask($host,$user,$pass,$db,$idarea,$idemploye,$task,$object,$coju,$type,$auth,$messenger,$desc){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_tareas (idarea,idemp,task,object,idcoju,idtype,idauth,idmessenger,description,date_ini,status) values($idarea,$idemploye,'$task','$object',$coju,$type,$auth,$messenger,'$desc','$time',2)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editTask($host,$user,$pass,$db,$id,$idarea,$idemploye,$task,$object,$coju,$type,$auth,$messenger,$desc){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas SET idarea=$idarea, task='$task', object='$object', idcoju=$coju, idtype=$type, idauth=$auth, idmessenger='$messenger', description='$desc' WHERE id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectCoju($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM cojus WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectType($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM cat_tipo_coju WHERE stats = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAuth($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_autoridades WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectMessenger($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE type = 5 AND stats = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectTaskArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE task = 1 AND status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectTask($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT T.*, A.area, A.status as nstats, P.name as npriority FROM adm_tareas as T
        LEFT JOIN prioridad as P ON T.priority = P.id 
        LEFT JOIN areas as A ON T.idarea = A.id WHERE T.id='$id' AND T.status>=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAllTask($host,$user,$pass,$db,$status){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($status)){
            $ext = "WHERE T.status='$status'";
        }else{
            $ext = "";
        }

        $sql = "SELECT T.*, A.area, A.status as mystatus, Es.name as nstats, P.name as npriority, P.class, Em.name as employe, Em2.name as assignated, Em.email as email FROM adm_tareas as T 
        LEFT JOIN empleados as Em ON T.idemp = Em.id
        LEFT JOIN empleados as Em2 ON T.idmessenger = Em2.id
        LEFT JOIN areas as A ON T.idarea = A.id
        LEFT JOIN prioridad as P ON T.priority = P.id
        LEFT JOIN estatus as Es ON T.status = Es.id $ext ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUserTask($host,$user,$pass,$db,$iduser){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($iduser)){
            $ext = "WHERE T.idemp='$iduser'";
        }else{
            $ext = "";
        }
        $sql = "SELECT T.*, A.area, A.status as mystatus, Es.name as nstats, P.name as npriority, P.class, Em.name as employe, Em2.name as assignated, Em.email as email FROM adm_tareas as T 
        LEFT JOIN empleados as Em ON T.idemp = Em.id
        LEFT JOIN empleados as Em2 ON T.idmessenger = Em2.id
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
        $sql = "SELECT count(*) AS total,
        sum(case when status = 1 then 1 else 0 end) AS listo,
        sum(case when status = 2 then 1 else 0 end) AS pendiente,
        sum(case when status = 4 then 1 else 0 end) AS eliminado 
        FROM adm_tareas WHERE (date_ini>='$dini' AND date_end<='$dend') $ext1 $ext2 ";
        
        mysqli_set_charset($con, "utf8");
        $query = mysqli_query($con,$sql);
        
        return $query;
    }

    public function detailTask($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_tareas_comentarios WHERE id='$id' AND status=1 ";
    }

    public function selectAllStatus($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM prioridad";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignpriority($host,$user,$pass,$db,$id,$idTask){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="UPDATE adm_tareas SET priority = $id WHERE id = $idTask ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editStatusTask($host,$user,$pass,$db,$id,$status){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas SET status = $status, date_end = NOW() WHERE id=$id";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delTask($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas SET status = 5 WHERE id=$id " ;

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function numTask($host,$user,$pass,$db,$priority,$status,$area){
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

        $sql = "SELECT COUNT(*) as num FROM adm_tareas $ext";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function employe($host,$user,$pass,$db,$area){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="SELECT id,name FROM empleados WHERE type = 5 AND stats=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignTask($host,$user,$pass,$db,$id,$idTask){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="UPDATE adm_tareas SET idassign = $id WHERE id = $idTask ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function initMsg($host,$user,$pass,$db,$idTask){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="SELECT description FROM adm_tareas WHERE id = $idTask ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function msgTask($host,$user,$pass,$db,$idUser,$idTask){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="SELECT C.*, Em.name as user FROM adm_tareas_comentarios as C
        LEFT JOIN empleados as Em ON C.iduser = Em.id
        WHERE idtask = $idTask AND status=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function msgTaskResp($host,$user,$pass,$db,$idUser,$idTask,$msg,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_tareas_comentarios (iduser,idtask,comment,type,date,status) values($idUser,$idTask,'$msg',$type,'$time',1) ";
    
        $query = mysqli_query($con,$sql);
        return $sql;
    }

    public function addDoc($host,$user,$pass,$db,$id,$doc){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "UPDATE adm_tareas SET doc='$doc' WHERE id='$id' ";
    
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