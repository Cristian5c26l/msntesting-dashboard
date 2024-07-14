<?php
class m_list{

    //Directory
    public function selectProv($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM directorio_com WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAllProv($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT D.*, Es.name as nstats FROM directorio_com as D LEFT JOIN estatus AS Es ON D.status = Es.id WHERE D.status!=4 ";

        $query = mysqli_query($con,$sql); 
        return $query;
    }

    public function addProv($host,$user,$pass,$db,$area,$name,$corp,$service,$email,$phone,$mobile,$other){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO directorio_com (area,name,corp,service,email,phone,mobile,other)
        values('$area','$name','$corp','$service','$email','$phone','$mobile','$other')";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editProv($host,$user,$pass,$db,$id,$area,$name,$corp,$service,$email,$phone,$mobile,$other){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE directorio_com SET area='$area', name='$name', corp='$corp', service='$service', email='$email', phone='$phone', mobile='$mobile', other='$other' WHERE id=$id";

        $query = mysqli_query($con,$sql);
        return $query;    
    }

    public function delProv($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE directorio_com SET status=4 WHERE id='$id' ";

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
}//end class

class m_phone{

    public function selectUser($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE stats = 1 AND level>=1 ORDER BY name ASC ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUbication($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_ubicacion WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAllExt($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT E.*, Em.name, Em.last, Em.email, U.ubication as ubication2, Es.name as nstats FROM adm_ext as E 
        LEFT JOIN empleados as Em ON E.iduser = Em.id
        LEFT JOIN adm_ubicacion as U ON U.id = E.idubication
        LEFT JOIN estatus as Es ON E.status = Es.id WHERE E.status!=4 "; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectExt($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT E.*, Em.name, Em.last, Em.email, U.ubication as ubication2, Es.name as nstats FROM adm_ext as E 
        LEFT JOIN empleados as Em ON E.iduser = Em.id
        LEFT JOIN adm_ubicacion as U ON U.id = E.idubication
        LEFT JOIN estatus as Es ON E.status = Es.id WHERE E.id=$id "; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addPhone($host,$user,$pass,$db,$iduser,$ubication,$phone,$ext){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "INSERT INTO adm_ext (iduser,idubication,phone,extension) VALUES($iduser,$ubication,'$phone','$ext')"; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editPhone($host,$user,$pass,$db,$id,$iduser,$ubication,$phone,$ext){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "UPDATE adm_ext SET iduser=$iduser, idubication=$ubication, phone='$phone', extension='$ext' WHERE id='$id' "; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delPhone($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_ext SET status=5 WHERE id=$id ";
        
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