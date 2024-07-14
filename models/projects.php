<?php
class m_project{

    public function addProject($host,$user,$pass,$db,$idarea,$project,$descript){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_projects (idarea,project,description,date_ini,status) values($idarea,'$project','$descript','$time',2)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editProject($host,$user,$pass,$db,$id,$idarea,$project,$descript){

        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_projects SET idarea=$idarea, project='$project', description='$descript' WHERE id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delProject($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_projects SET status = 0 WHERE id=$id " ;

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectProjectArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE /*project = 1 AND*/ status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUserProjects($host,$user,$pass,$db,$idarea){
        $con = $this->connect($host,$user,$pass,$db);

        if(!empty($idarea)){
            $ext = "AND A.area = $idarea";
        }else{
            $ext = "";
        }

        $sql = "SELECT Pr.*, A.area, A.status, Es.name as nstats FROM adm_projects as Pr 
        LEFT JOIN areas as A ON Pr.idarea = A.id
        LEFT JOIN estatus as Es ON Pr.status = Es.id $ext ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectProject($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);

        if(!empty($id)){
            $ext = "AND Pr.id='$id'";
        }else{
            $ext = "";
        }

        $sql = "SELECT Pr.*, A.area, A.status as nstats FROM adm_projects as Pr
        LEFT JOIN areas as A ON Pr.idarea = A.id WHERE Pr.status>=1 $ext ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    //End Projects
    
    public function addTask($host,$user,$pass,$db,$idproject,$title,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO adm_tareas_proy (idproject,title,comment,type,date_ini,status) values($idproject,'$title','$comment',1,'$time',2)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editTask($host,$user,$pass,$db,$id,$idproject,$title,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas_proy SET idproject=$idproject, title='$title', comment='$comment' WHERE id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delTask($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas_proy SET status = 0 WHERE id=$id " ;

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectTaskProject($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_projects WHERE status < 5 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUserTask($host,$user,$pass,$db,$id,$iduser){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($id)){
            $ext = " AND T.idproject='$id' ";
        }else{
            $ext = "";
        }

        /*if(!empty($iduser)){
            $ext2 = " AND Em.id='$id' ";
        }else{
            $ext2 = "";
        }*/

        $sql = "SELECT T.*, Pr.project, Pr.status, Es.name as nstats, P.name as npriority, P.class, Em.name as assignated, Em.email as email FROM adm_tareas_proy as T 
        LEFT JOIN empleados as Em ON T.idassign = Em.id
        LEFT JOIN adm_projects as Pr ON T.idproject = Pr.id
        LEFT JOIN prioridad as P ON T.priority = P.id
        LEFT JOIN estatus as Es ON T.status = Es.id WHERE Pr.status!='' $ext /*$ext2*/"; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectTask($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT T.*, Pr.project, Pr.status as nstats, P.name as npriority FROM adm_tareas_proy as T
        LEFT JOIN prioridad as P ON T.priority = P.id 
        LEFT JOIN adm_projects as Pr ON T.idproject = Pr.id WHERE T.id='$id' AND T.status>=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editStatusTask($host,$user,$pass,$db,$id,$status){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_tareas_proy SET status = $status WHERE id=$id";

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
        $sql ="UPDATE adm_tareas_proy SET priority = $id WHERE id = $idTask ";

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

        $sql = "SELECT COUNT(*) as num FROM adm_tareas_proy $ext";

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
        $sql ="UPDATE adm_tareas_proy SET idassign = $id WHERE id = $idTask ";

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