<?php
class m_service{

    public function addService($host,$user,$pass,$db,$idarea,$project,$descript){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_alert_ (idarea,project,description,date_ini,status) values($idarea,'$project','$descript','$time',2)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editService($host,$user,$pass,$db,$id,$idarea,$service,$descript){

        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_alert_ SET idarea=$idarea, service='$service', description='$descript' WHERE id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delService($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_alert_ SET status = 0 WHERE id=$id " ;

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectServiceArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE /*project = 1 AND*/ status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    /*public function selectUserService($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT Pr.*, A.area, A.status, Es.name as nstats FROM adm_projects as Pr 
        LEFT JOIN areas as A ON Pr.idarea = A.id
        LEFT JOIN estatus as Es ON Pr.status = Es.id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }*/

    public function selectService($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT Pr.*, A.area, A.status as nstats FROM adm_projects as Pr
        LEFT JOIN areas as A ON Pr.idarea = A.id WHERE Pr.id='$id' AND Pr.status>=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    //End Services
    
    public function addTask($host,$user,$pass,$db,$idproject,$title,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_tareas (idproject,title,comment,type,date_ini,status) values($idproject,'$title','$comment',1,'$time',2)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editTask($host,$user,$pass,$db,$id,$idproject,$title,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas SET idproject=$idproject, title='$title', comment='$comment' WHERE id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delTask($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas SET status = 0 WHERE id=$id " ;

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectTaskService($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_alert WHERE status < 5 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUserTask($host,$user,$pass,$db,$id,$iduser){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($id)){
            $ext = " WHERE T.idservice='$id' ";
        }else{
            $ext = "";
            //$ext = "WHERE T.status = 999";
        }

        $sql = "SELECT T.*, Pr.project, Pr.status, Es.name as nstats, P.name as npriority, P.class, Em.name as assignated, Em.email as email FROM adm_tareas as T 
        LEFT JOIN empleados as Em ON T.idassign = Em.id
        LEFT JOIN adm_projects as Pr ON T.idproject = Pr.id
        LEFT JOIN prioridad as P ON T.priority = P.id
        LEFT JOIN estatus as Es ON T.status = Es.id $ext "; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectTask($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT T.*, Pr.project, Pr.status as nstats, P.name as npriority FROM adm_tareas as T
        LEFT JOIN prioridad as P ON T.priority = P.id 
        LEFT JOIN adm_projects as Pr ON T.idproject = Pr.id WHERE T.id='$id' AND T.status>=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editStatusTask($host,$user,$pass,$db,$id,$status){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas SET status = $status WHERE id=$id";

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

    public function numTask($host,$user,$pass,$db,$status,$idproject){
        $con = $this->connect($host,$user,$pass,$db);
        
        if($status==0){
            $ext = "WHERE status IN (1,2,3,5,7) AND idproject=$idproject";
        }else{
            $ext = "WHERE status=1 AND idproject=$idproject";
        }

        $sql = "SELECT COUNT(*) as num FROM adm_tareas $ext";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function employee($host,$user,$pass,$db,$area){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="SELECT id,name FROM empleados WHERE idarea = $area AND stats=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignTask($host,$user,$pass,$db,$id,$idTask){
        $con = $this->connect($host,$user,$pass,$db);
        $sql ="UPDATE adm_tareas SET idassign = $id WHERE id = $idTask ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    /* End Task */

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