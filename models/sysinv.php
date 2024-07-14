<?php
class m_sysinv{

    public function addInsume($host,$user,$pass,$db,$idmark,$idsize,$name,$description,$st,$mac,$code,$sku,$ubication,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_insumos_sis (idmark,idsize,name,description,st,mac,code,sku,ubication,type) values($idmark,$idsize,'$name','$description','$st','$mac','$code','$sku','$ubication',$type)";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editInsume($host,$user,$pass,$db,$id,$idmark,$idsize,$name,$description,$st,$mac,$code,$sku,$ubication,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos_sis SET idmark=$idmark,idsize=$idsize,name='$name',description='$description',
                st='$st',mac='$mac',code='$code',sku='$sku',ubication='$ubication',type=$type WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delInsume($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos_sis SET status=5 WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectInsumeType($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_tipo_insumo WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectSize($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_capacidad_sis WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectMark($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_marcas_sis WHERE status = 1 ORDER BY mark ASC ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignArea($host,$user,$pass,$db,$id,$idarea){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos_sis SET idarea=$idarea WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE status = 1 ORDER BY area ASC ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignUser($host,$user,$pass,$db,$id,$idarea){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos_sis SET iduser=$iduser WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUser($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE stats = 1 AND level>=1 ORDER BY name ASC ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectMotive($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_motivo_sis WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectUbication($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_ubicacion WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function assignate($host,$user,$pass,$db,$id,$iduser,$idmotive){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos_sis SET iduser=$iduser, idmotive=$idmotive, assignate=1 WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function quitAssignate($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos_sis SET iduser=NULL, idmotive=NULL, assignate=NULL WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delDetail($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_sto_insumos SET status=5 WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getInsume($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT I.*, A.area as area, E.name as user, E.last as last, M.mark as mark, Mo.reason as motive, C.storage as size, U.ubication as myubication, S.name as nstatus FROM adm_insumos_sis as I 
        LEFT JOIN areas as A ON A.id = I.idarea
        LEFT JOIN empleados as E ON E.id = I.iduser
        LEFT JOIN adm_marcas_sis as M ON M.id = I.idmark
        LEFT JOIN adm_motivo_sis as Mo ON Mo.id = I.idmotive
        LEFT JOIN adm_capacidad_sis as C ON C.id = I.idsize
        LEFT JOIN adm_ubicacion as U ON U.id = I.ubication
        LEFT JOIN estatus as S ON S.id = I.status
        WHERE I.status<4 AND I.id=$id ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function listAllInsume($host,$user,$pass,$db,$iduser){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT I.*, A.area as area, E.name as user, E.last as last, M.mark as mark, Mo.reason as motive, C.storage as size, U.ubication as myubication, S.name as nstatus FROM adm_insumos_sis as I 
        LEFT JOIN areas as A ON A.id = I.idarea
        LEFT JOIN empleados as E ON E.id = I.iduser
        LEFT JOIN adm_marcas_sis as M ON M.id = I.idmark
        LEFT JOIN adm_motivo_sis as Mo ON Mo.id = I.idmotive
        LEFT JOIN adm_capacidad_sis as C ON C.id = I.idsize
        LEFT JOIN adm_ubicacion as U ON U.id = I.ubication
        LEFT JOIN estatus as S ON S.id = I.status
        WHERE I.status<4 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getUser($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getCodes($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_insumos_sis WHERE code IS NOT NULL ORDER BY id";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getQRInsume($host,$user,$pass,$db,$code){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT I.*, A.area as area, E.name as user, E.last as last, M.mark as mark, Mo.reason as motive, C.storage as size, U.ubication as myubication, S.name as nstatus FROM adm_insumos_sis as I 
        LEFT JOIN areas as A ON A.id = I.idarea
        LEFT JOIN empleados as E ON E.id = I.iduser
        LEFT JOIN adm_marcas_sis as M ON M.id = I.idmark
        LEFT JOIN adm_motivo_sis as Mo ON Mo.id = I.idmotive
        LEFT JOIN adm_capacidad_sis as C ON C.id = I.idsize
        LEFT JOIN adm_ubicacion as U ON U.id = I.ubication
        LEFT JOIN estatus as S ON S.id = I.status
        WHERE I.status<4 AND I.code='$code' ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addQRHistory($host,$user,$pass,$db,$code,$verify,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_revision_insumo (code,verify,comment,date_verify) values('$code',$verify,'$comment',NOW())";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function QRHistory($host,$user,$pass,$db,$code){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_revision_insumo WHERE code = '$code' ORDER BY date_verify DESC LIMIT 5 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addBackup($host,$user,$pass,$db,$id,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO adm_respaldos (iduser,comment,dateback) values('$id','$comment',NOW())";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function historyBackup($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT R.*, E.name as user, E.last as last, S.name as nstatus FROM adm_respaldos as R 
        LEFT JOIN empleados as E ON E.id = R.iduser
        LEFT JOIN estatus as S ON S.id = R.status
        WHERE R.status=1 AND R.iduser='$id' ORDER BY R.id DESC LIMIT 5 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function listBackup($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT R.*, E.name as user, E.last as last, S.name as nstatus FROM adm_respaldos as R 
        LEFT JOIN empleados as E ON E.id = R.iduser
        LEFT JOIN estatus as S ON S.id = R.status
        WHERE R.status=1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getBackup($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_respaldos WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editBackup($host,$user,$pass,$db,$id,$iduser,$comment){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_respaldos SET iduser=$iduser, comment='$comment' WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    /* Support */

    public function listComponent($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM adm_insumos_sis WHERE type>1 AND status=1 AND assignate IS NULL ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function listMaintenance($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT E.*, I.name FROM expediente_tecnico_sis as E 
        LEFT JOIN adm_insumos_sis as I ON I.id = E.component
        WHERE idpc=$id AND E.status!=4 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addMaintenance($host,$user,$pass,$db,$idpc,$username,$component,$description,$type,$sku,$wresult,$result){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO expediente_tecnico_sis (idpc,user,component,description,type,sku,wresult,results,date) values($idpc,'$username','$component','$description',$type,'$sku','$wresult','$result',NOW())";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editMaintenance($host,$user,$pass,$db,$id,$idpc,$username,$component,$description,$type,$sku,$wresult,$result){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE expediente_tecnico_sis SET idpc=$idpc,user='$username',component='$component',description='$description',type=$type,sku='$sku',wresult='$wresult',results='$result',date=NOW() WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delMaintenance($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE expediente_tecnico_sis SET status=4 WHERE id=$id" ;
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function getManteinance($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM expediente_tecnico_sis WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delMI($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE expediente_tecnico_sis SET status=4 WHERE idpc=$id " ;
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function setUserComponent($host,$user,$pass,$db,$id,$iduser,$idarea,$motive,$ubication){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos_sis SET iduser=$iduser, idarea=$idarea, ubication='$ubication', idmotive=$motive, assignate=1 WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function removeUserComponent($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE adm_insumos_sis SET iduser=NULL, idarea=NULL, ubication=NULL, idmotive=NULL, assignate=NULL WHERE id=$id ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function responsive($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);

        $sql = "SELECT E.*, I.name FROM expediente_tecnico_sis as E 
        LEFT JOIN adm_insumos_sis as I ON I.id = E.component
        WHERE idpc=$id AND E.status!=4 ";

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