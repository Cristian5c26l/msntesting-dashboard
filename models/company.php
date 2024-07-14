<?php
class m_company{
    //FUNCTION ADD COMPANY
    public function addCompany($host,$user,$pass,$db,$rfc,$rs,$usu,$pswd,$objeto,$nombre1,$nombre2,$ap,$am,$t1,$t2,$tc,$check,$c1,$c2,$mo,$co,$calle,$ni,$ne,$col,$del,$cp,$edo,$pais){
        $con = $this->connect($host,$user,$pass,$db);
        if(empty($check)){
            $check = 0;
        }
        //CREATE EMPLOYEE 
        $nc=$nombre1.' '.$nombre2;
        $ac=$ap.' '.$am;
        $pass=sha1($pswd);
        $sql = "INSERT INTO empleados(name,last,user,pass,type,stats,date_in) values('$nc','$ac','$usu','$pass','6','1',now())";
        $query = mysqli_query($con,$sql);
        $id_emp=$con->insert_id;
        $sqlc="INSERT INTO company(id_employee,rfc,razon_social,object,name_1,name_2,last_name_1,last_name_2,phone_1,phone_2,phone_c,who_contact,email_1,email_2,mobile,contact,street,num_int,num_ext,col,del_mun,zip_code,estate,country,status,create_date) values
        ('$id_emp','$rfc','$rs','$objeto','$nombre1','$nombre2','$ap','$am','$t1','$t2','$tc',$check,'$c1','$c2','$mo','$co','$calle','$ni','$ne','$col','$del','$cp','$edo','$pais','1',now())";
        mysqli_query($con,$sqlc);
        //$sqlim="INSERT INTO adm_menu_emp(id_emp,id_menu,id_submenu) values($id_emp,4,5)"; //Replace m and sb
        //mysqli_query($con,$sqlim);
        return $query;
    }

    //FUNCTION EDIT COMPANY
    public function editCompany($host,$user,$pass,$db,$id,$id_emp,$rfc,$rs,$usu,$objeto,$nombre1,$nombre2,$ap,$am,$t1,$t2,$tc,$check,$c1,$c2,$mo,$co,$calle,$ni,$ne,$col,$del,$cp,$edo,$pais){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE company SET rfc='$rfc', razon_social='$rs', object='$objeto', name_1='$nombre1', name_2='$nombre2', last_name_1='$ap', last_name_2='$am', phone_1='$t1', phone_2='$t2', phone_c='$tc', who_contact=$check, email_1='$c1', email_2='$c2', mobile='$mo', contact='$co', street='$calle', num_int='$ni' , num_ext='$ne' , col='$col' , del_mun='$del' , zip_code='$cp' , estate='$edo' , country='$pais' WHERE id_company=$id";
        $query = mysqli_query($con,$sql);

        $nc=$nombre1.' '.$nombre2;
        $ac=$ap.' '.$am;

        $sqle = "UPDATE empleados SET name='$nc',last='$ac' WHERE id=$id_emp ";
        $query = mysqli_query($con,$sqle);
       
        return $query;
    }
    
    //FUNCTION GET INFO COMPANY
    public function gic($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT C.*,E.*,C.mobile as mb,C.street as calle,C.num_int as ni, C.num_ext as ne,C.col as colonia FROM company  AS C 
            INNER JOIN empleados AS E ON E.id=C.id_employee
            WHERE C.id_company=".$id;
        $query = mysqli_query($con,$sql);
        return $query;
    }
   
    //FUNCTION GET ALL COMPANY TO GRID
    public function selectAllCompany($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT C.*,E.* FROM company  AS C 
                INNER JOIN empleados AS E ON E.id=C.id_employee
                WHERE E.type=6 and C.status=1";
        $query = mysqli_query($con,$sql);
        return $query;
    }
  

    //FUNCTION DELTE ROW COMPANY
    public function delCompany($host,$user,$pass,$db,$id){ 
        $con = $this->connect($host,$user,$pass,$db);
        //DISABLED COMPANY
        $sql = "UPDATE company SET status=4 WHERE id_company=$id"; 
        $query = mysqli_query($con,$sql);
        //DISABLED USER
        $sql2 = "UPDATE empleados SET stats=4 WHERE id=(select id_employee  from company where id_company=$id)"; 
        mysqli_query($con,$sql2);
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