<?php
class m_domain{

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

    public function selectAllDomains($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT D.*, Em.name, Em.last, Em.email, U.ubication as ubication2, Es.name as nstats FROM adm_dominio as D 
        LEFT JOIN empleados as Em ON D.iduser = Em.id
        LEFT JOIN adm_ubicacion as U ON U.id = D.idubication
        LEFT JOIN estatus as Es ON D.status = Es.id WHERE D.status!=4 "; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectDomain($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT D.*, Em.name, Em.last, Em.email, U.ubication as ubication2, Es.name as nstats FROM adm_dominio as D 
        LEFT JOIN empleados as Em ON D.iduser = Em.id
        LEFT JOIN adm_ubicacion as U ON U.id = D.idubication
        LEFT JOIN estatus as Es ON D.status = Es.id WHERE D.id=$id "; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addDomain($host,$user,$pass,$db,$ubication,$areas,$iduser,$username,$password,$emailpass,$anydesk,$ip,$mac,$pcname){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "INSERT INTO adm_dominio (idubication,areas,iduser,user,pass,emailpass,anydesk,ip,mac,pcname) VALUES($ubication,'$areas',$iduser,'$username','$password','$emailpass','$anydesk','$ip','$mac','$pcname')"; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editDomain($host,$user,$pass,$db,$id,$ubication,$areas,$iduser,$username,$password,$emailpass,$anydesk,$ip,$mac,$pcname){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "UPDATE adm_dominio SET idubication=$ubication, areas='$areas', iduser=$iduser, user='$username', pass='$password', emailpass='$emailpass', anydesk='$anydesk', ip='$ip', mac='$mac', pcname='$pcname' WHERE id='$id' "; 

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delDomain($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_dominio SET status=4 WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getEmail($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getUserInfo($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT name as myname, last as lastname FROM empleados WHERE id=$id"; 

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