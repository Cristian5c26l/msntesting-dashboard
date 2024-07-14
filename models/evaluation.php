<?php
class m_eval{

    public function selectUser($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAllUsers($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        /*if(!empty($id)){
            $sql = "SELECT E.*, Es.name as nstats, A.area as area FROM empleados as E LEFT JOIN estatus AS Es ON E.stats = Es.id LEFT JOIN areas AS A ON E.idarea = A.id WHERE E.id='$id' AND (E.level>0 AND E.stats!=4) ";
        }else{
            $sql = "SELECT E.*, Es.name as nstats, A.area as area FROM empleados as E LEFT JOIN estatus AS Es ON E.stats = Es.id LEFT JOIN areas AS A ON E.idarea = A.id WHERE E.level>0 AND E.stats!=4 ";   
        }*/

        $sql = "SELECT E.*, Es.name as nstats, A.area as area FROM empleados as E LEFT JOIN estatus AS Es ON E.stats = Es.id LEFT JOIN areas AS A ON E.idarea = A.id WHERE E.level>=0 AND E.stats!=4 ";

        $query = mysqli_query($con,$sql); 
        return $query;
    }

    public function userArea($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT E.*, A.id as idarea, A.area as area FROM empleados as E LEFT JOIN areas AS A ON E.idarea = A.id WHERE E.id = '$id' ";

        $query = mysqli_query($con,$sql); 
        return $query;
    }


    public function addEval($host,$user,$pass,$db,$idUser,$date_eval,$duration,$dateini,$dateend,$area,$job,$special){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_emp_contract () values()";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editEval($host,$user,$pass,$db,$id,$idUser,$date_eval,$duration,$dateini,$dateend,$area,$job,$special){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_emp_contract () values()";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editInsume($host,$user,$pass,$db,$id,$name,$area,$description){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos SET name ='$name', idarea=$area, description='$description' WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delInsume($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos SET status=5 WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editInitStock($host,$user,$pass,$db,$id,$iniStock,$type,$expire){
        $con = $this->connect($host,$user,$pass,$db);
        //$expire = !empty($expire) ? "'$expire'" : "NULL";
        if(!empty($expire)){
            $sql = "UPDATE adm_sto_insumos SET qty=$iniStock, expire='$expire' WHERE idinsume='$id' AND type=1 ";
        }else{
            $sql = "UPDATE adm_sto_insumos SET qty=$iniStock, expire=NULL WHERE idinsume='$id' AND type=1  ";
        }

        $query = mysqli_query($con,$sql);
        return $query;
    }
 
    public function sumInsume($host,$user,$pass,$db,$id,$qty,$comment,$expire,$type=2){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($expire)){
            $sql = "INSERT INTO adm_sto_insumos (idinsume,comment,qty,type,opdate,expire) values($id,'$comment',$qty,'$type',now(),'$expire')";
        }else{
            $sql = "INSERT INTO adm_sto_insumos (idinsume,comment,qty,type,opdate) values($id,'$comment',$qty,'$type',now())";
        }

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function restInsume($host,$user,$pass,$db,$id,$qty,$comment,$type=3){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_sto_insumos (idinsume,comment,qty,type,opdate) values($id,'$comment',$qty,'$type',now())";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function modifyInsume($host,$user,$pass,$db,$id,$qty,$comment,$expire,$type){
        $con = $this->connect($host,$user,$pass,$db);

        if(!empty($expire)){
            $sql = "UPDATE adm_sto_insumos SET qty=$qty, comment='$comment', expire='$expire', type='$type' WHERE id='$id' ";
        }else{
            $sql = "UPDATE adm_sto_insumos SET qty=$qty, comment='$comment', expire=NULL, type='$type' WHERE id='$id' ";
        }

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delDetail($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_sto_insumos SET status=5 WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function listAllInsume($host,$user,$pass,$db,$iduser){
        $con = $this->connect($host,$user,$pass,$db);
        if($iduser==1 OR $iduser==15){
            $ext = "";
        }else{
            $ext = "AND I.iduser = '$iduser'";
        }

        $sql = "SELECT I.id as id, I.iduser as iduser, I.name as name,I.description as description , A.name as area, S.comment as comment, S.qty as qty, S.total as total, S.status as status, E.name as user FROM adm_insumos as I 
        LEFT JOIN adm_sto_insumos as S ON S.idinsume = I.id
        LEFT JOIN adm_areas_insumos as A ON A.id = I.idarea
        LEFT JOIN empleados as E ON E.id = I.iduser 
        WHERE (S.status<5 AND S.type=1) $ext ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getInsume($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT I.id as id, I.idarea as idarea, I.name as name,I.description as description , A.name as area, S.comment as comment, S.qty as qty, S.expire as expire, S.total as total, S.status as status FROM adm_insumos as I 
        LEFT JOIN adm_sto_insumos as S ON S.idinsume = I.id
        LEFT JOIN adm_areas_insumos as A ON A.id = I.idarea 
        WHERE I.Id = '$id' AND S.status<5 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getInsumeDetail($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_sto_insumos WHERE id='$id' AND status<5 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function listStoInsume($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_sto_insumos WHERE idinsume='$id' AND status<5 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addInsumeArea($host,$user,$pass,$db,$name){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_areas_insumos (name) values('$name')";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editInsumeArea($host,$user,$pass,$db,$id,$name){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_areas_insumos SET name='$name' WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function allInsumeAreas($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_areas_insumos WHERE status=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editableInsumeArea($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = $sql = "SELECT * FROM adm_areas_insumos WHERE id='$id' AND status=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectInsumeArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = $sql = "SELECT * FROM adm_areas_insumos WHERE status=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delInsumeArea($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_areas_insumos SET status=5 WHERE id=$id ";
        
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