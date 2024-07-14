<?php
class m_fact{

    public function addFact($host,$user,$pass,$db,$folio,$company,$provider,$description){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_facturas_evidencia (folio,company,provider,description) values('$folio','$company','$provider','$description')";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editFact($host,$user,$pass,$db,$id,$folio,$company,$provider,$description){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_facturas_evidencia SET folio='$folio',company='$company',provider='$provider',description='$description' WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getFact($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_facturas_evidencia WHERE id='$id' AND status = 1 ";

        $query = mysqli_query($con,$sql); 
        return $query;
    }

    public function delFact($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_facturas_evidencia SET status=5 WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addimg($host,$user,$pass,$db,$id,$name){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_facturas_evidencia SET img ='$name' WHERE id = '$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectAllF($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_facturas_evidencia WHERE status = 1 ";

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