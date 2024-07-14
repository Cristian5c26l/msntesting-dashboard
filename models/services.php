<?php
class m_service{

    public function addService($host,$user,$pass,$db,$idarea,$service,$descript){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_servicios (idarea,service,description,date_ini,status) values($idarea,'$service','$descript','$time',2)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editservice($host,$user,$pass,$db,$id,$idarea,$service,$descript){

        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_servicios SET idarea=$idarea, service='$service', description='$descript' WHERE id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delService($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_servicios SET status = 0 WHERE id=$id " ;

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectServiceArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE /*project = 1 AND*/ status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUserService($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT S.*, A.area, A.status, Es.name as nstats FROM adm_servicios as S 
        LEFT JOIN areas as A ON S.idarea = A.id
        LEFT JOIN estatus as Es ON S.status = Es.id WHERE S.status>=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectService($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT S.*, A.area, A.status as nstats FROM adm_servicios as S
        LEFT JOIN areas as A ON S.idarea = A.id WHERE S.id='$id' AND S.status>=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    //End Services
    
    public function addAlert($host,$user,$pass,$db,$idservice,$title,$comment,$date,$paytype){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_alertas (idservice,title,comment,paytype,date_end,status) values($idservice,'$title','$comment','$paytype','$date',2)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editAlert($host,$user,$pass,$db,$id,$idservice,$title,$comment,$date,$paytype){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_alertas SET idservice=$idservice,title='$title',comment='$comment',date_end='$date',paytype='$paytype' WHERE id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delAlert($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_alertas SET status = 0 WHERE id=$id " ;

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAlert($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_alertas WHERE id=$id AND status>=1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUserAlert($host,$user,$pass,$db,$id,$iduser){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($id)){
            $ext = " WHERE A.idservice='$id' AND A.status>0";
        }else{
            $ext = " WHERE A.status>0";
            //$ext = "WHERE A.status = 999";
        }

        $sql = "SELECT A.*, S.service, S.status, Es.name as nstats, P.name as npriority, P.class, Em.name as assignated, Em.email as email FROM adm_alertas as A 
        LEFT JOIN empleados as Em ON A.idassign = Em.id
        LEFT JOIN adm_servicios as S ON A.idservice = S.id
        LEFT JOIN prioridad as P ON A.priority = P.id
        LEFT JOIN estatus as Es ON A.status = Es.id $ext "; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAlertService($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_servicios WHERE status>=1";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editStatusAlert($host,$user,$pass,$db,$id,$status){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_alertas SET status = $status WHERE id=$id";

        $query = mysqli_query($con,$sql);
        return $query;
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

    public function numAlert($host,$user,$pass,$db,$status,$idservice){
        $con = $this->connect($host,$user,$pass,$db);
        
        if($status==0){
            $ext = "WHERE status IN (1,2,3,5,7) AND idservice=$idservice";
        }else{
            $ext = "WHERE status=1 AND idservice=$idservice";
        }

        $sql = "SELECT COUNT(*) as num FROM adm_alertas $ext";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function employee($host,$user,$pass,$db,$area){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="SELECT id,name FROM empleados WHERE idarea = $area AND stats=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignAlert($host,$user,$pass,$db,$id,$idAlert){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="UPDATE adm_alertas SET idassign = $id WHERE id = $idAlert ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function updateDate($host,$user,$pass,$db,$id,$newDate){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="UPDATE adm_alertas SET date_end = '$newDate' WHERE id = $id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    /* End Alerts */

    public function selectArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
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