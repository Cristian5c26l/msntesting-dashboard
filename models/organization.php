<?php
class m_org{

    public function revOrg($host,$user,$pass,$db,$iduser){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_org WHERE iduser=$iduser AND status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addOrg($host,$user,$pass,$db,$iduser,$idboss,$lvl){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_org (iduser,idboss,level) VALUES($iduser,$idboss,$lvl) ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function updOrg($host,$user,$pass,$db,$iduser,$idboss,$lvl){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_org SET idboss=$idboss,level=$lvl WHERE iduser=$iduser ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUser($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE level>0 AND stats = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function revEmp($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT level FROM empleados WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectBoss($host,$user,$pass,$db,$id,$lvl){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT E.*, O.iduser FROM empleados as E
        INNER JOIN adm_org as O ON O.iduser = E.id 
        WHERE E.id!=$id AND E.level<$lvl AND E.level!=0 AND E.stats = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function drawModel($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT A.*, E.name, E.last, E.image FROM adm_org as A LEFT JOIN empleados AS E ON A.iduser = E.id"; /*WHERE id='$id'*/
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function lvl2($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT A.*, E.name, E.last, E.image FROM adm_org as A LEFT JOIN empleados AS E ON A.iduser = E.id WHERE A.level=2 AND A.idboss='$id'";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function lvl3($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT A.*, E.name, E.last, E.image FROM adm_org as A LEFT JOIN empleados AS E ON A.iduser = E.id WHERE A.level=3 AND A.idboss='$id'";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAllUsers($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT E.*, Es.name as nstats, A.area as area, N.level as newlevel FROM empleados as E 
        LEFT JOIN estatus AS Es ON E.stats = Es.id 
        LEFT JOIN niveles AS N ON E.level = N.id 
        LEFT JOIN areas AS A ON E.idarea = A.id WHERE E.level>0 ";

        $query = mysqli_query($con,$sql); 
        return $query;
    }

    public function changeLvl($host,$user,$pass,$db,$id,$lvl){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = " UPDATE empleados set level=$lvl WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addUser($host,$user,$pass,$db,$name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$username,$password,$date_in,$area){
        $con = $this->connect($host,$user,$pass,$db);
        //$sql = "INSERT INTO empleados (name,last,email,phone,mobile,gender,date_birth,street,num_ext,num_int,cp,col,municipe,job,user,pas,type,level,stats) 
        $sql = "INSERT INTO empleados (idarea,name,last,email,phone,mobile,gender,date_birth,street,num_ext,num_int,cp,user,pass,date_in,level,stats)
        values($area,'$name','$last','$email','$phone','$mobile','$gender','$birthday','$street','$num_ext','$num_int','$cp','$username','$password','$date_in',5,1)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectLvl($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM niveles WHERE status = 1 ";
        
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