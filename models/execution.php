<?php
class m_exe{

    public function alerts($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT A.*, S.service, S.status, Es.name as nstats, P.name as npriority, P.class, Em.name as assignated, Em.email as email FROM adm_alertas as A 
        LEFT JOIN empleados as Em ON A.idassign = Em.id
        LEFT JOIN adm_servicios as S ON A.idservice = S.id
        LEFT JOIN prioridad as P ON A.priority = P.id
        LEFT JOIN estatus as Es ON A.status = Es.id WHERE A.status>1 "; 

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