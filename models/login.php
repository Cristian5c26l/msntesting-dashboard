<?php
class m_user{
    public function selectUser($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function selectAllUsers($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT E.*, Es.name as nstats, A.area as area FROM empleados as E LEFT JOIN estatus AS Es ON E.stats = Es.id LEFT JOIN areas AS A ON E.idarea = A.id WHERE E.level>0 ";
        $query = mysqli_query($con,$sql); 
        return $query;
    }
    public function addUser($host,$user,$pass,$db,$name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$username,$password,$date_in,$area,$job){
        $con = $this->connect($host,$user,$pass,$db);
        if($job==1){
            $level = 2;
            $type = $job;
            $job = "Abogado Sr";
        }else if($job==2){
            $level = $job;
            $type = $job;
            $job = "Abogado";
        }else if($job==3){
            $level = 3;
            $type = $job;
            $job = "Contador";
        }else if($job==4){
            $level = 4;
            $type = $job;
            $job = "Abogado EP";
        }else if($job==5){
            $level = 3;
            $type = $job;
            $job = "Mensajero";
        }else{
            $type = "NULL";
            $level = 5;
            $job = "NULL";
        }
        if(empty($birthday)){
            $birthday = date('Y-m-d H:i:s');
        }
        $sql = "INSERT INTO empleados (idarea,name,last,email,phone,mobile,gender,date_birth,street,num_ext,num_int,cp,job,user,pass,date_in,type,level,stats)
        values($area,'$name','$last','$email','$phone','$mobile','$gender','$birthday','$street','$num_ext','$num_int','$cp','$job','$username','$password','$date_in',$type,$level,1)";
        
        $query = mysqli_query($con,$sql);
        $lastID = mysqli_insert_id($con);
        return $lastID;
        //echo $sql;
        
    }
    public function addJob($host,$user,$pass,$db,$id,$job){
        $con = $this->connect($host,$user,$pass,$db);
        if($job==1){
            $level = 2;
            $type = $job;
            $job = "Abogado Sr";
        }else if($job==2){
            $level = $job;
            $type = $job;
            $job = "Abogado";
        }else if($job==3){
            $level = 3;
            $type = $job;
            $job = "Contador";
        }else if($job==4){
            $level = 4; //important
            $type = $job;
            $job = "Abogado EP";
        }else if($job==5){
            $level = 3;
            $type = $job;
            $job = "Mensajero";
        }else if($job==6){
            $level = 2;
            $type = 1;
            $job = "Oficialia de Partes";
        }else if($job==7){
            $level = 3;
            $type = 7;
            $job = "Contratos";
        }else if($job==8){
            $level = 5;
            $type = 8;
            $job = "Archivo";
        }else{
            $type = "NULL";
            $level = 5;
            $job = "NULL";
        }
        if(!empty($job)){
            $sql = "UPDATE empleados SET job='$job',type='$type',level=$level WHERE id=$id";
        }else{
            $sql = "UPDATE empleados SET job=NULL,type=NULL,level=5 WHERE id=$id";
        }
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function addWindowAccess($host,$user,$pass,$db,$lastID,$job){
        $con = $this->connect($host,$user,$pass,$db);
        if($job==2){
            $menus = [13,13,14];
            $submenus = [22,23,24];
            for ($i=0; $i <3 ; $i++) { 
                $sql = "INSERT INTO adm_menu_emp (id_emp,id_menu,id_submenu) VALUES ($lastID,$menus[$i],$submenus[$i]) ";
                $query = mysqli_query($con,$sql);
            }
        }else if($job==3){
        }else if($job==4){
            $menus = [14,15];
            $submenus = [24,25];
            for ($i=0; $i <2 ; $i++) { 
                $sql = "INSERT INTO adm_menu_emp (id_emp,id_menu,id_submenu) VALUES ($lastID,$menus[$i],$submenus[$i]) ";
                $query = mysqli_query($con,$sql);
            }
        }else if($job==5){
            $sql = "INSERT INTO adm_menu_emp (id_emp,id_menu,id_submenu) VALUES ($lastID,13,23) ";
            $query = mysqli_query($con,$sql);
        }else if($job==6){
            $sql = "INSERT INTO adm_menu_emp (id_emp,id_menu,id_submenu) VALUES ($lastID,15,25) ";
            $query = mysqli_query($con,$sql);
        }else if($job==7){
            $sql = "INSERT INTO adm_menu_emp (id_emp,id_menu,id_submenu) VALUES ($lastID,16,26) ";
            $query = mysqli_query($con,$sql);
        }
        return $query;
    }
    public function viewAssign($host,$user,$pass,$db,$lastID,$job){
        $con = $this->connect($host,$user,$pass,$db);
        if($job==2){
            $menus = [13,13,14];
            $submenus = [22,23,24];
            for ($i=0; $i <3 ; $i++) { 
                $sql = "SELECT * FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=$menus[$i] AND id_submenu=$submenus[$i] ";
                $query = mysqli_query($con,$sql);
            }
        }else if($job==3){
        }else if($job==4){
            $menus = [14,15];
            $submenus = [24,25];
            for ($i=0; $i <2 ; $i++) { 
                $sql = "SELECT * FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=$menus[$i] AND id_submenu=$submenus[$i] ";
                $query = mysqli_query($con,$sql);
            }
        }else if($job==5){
            $sql = "SELECT * FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=13 AND id_submenu=23 ";
            $query = mysqli_query($con,$sql);
        }else if($job==6){
            $sql = "SELECT * FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=15 AND id_submenu=25 ";
            $query = mysqli_query($con,$sql);
        }else if($job==7){
            $sql = "SELECT * FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=16 AND id_submenu=26 ";
            $query = mysqli_query($con,$sql);
        }
        return $query;
    }
    public function delWindowAccess($host,$user,$pass,$db,$lastID,$job){
        $con = $this->connect($host,$user,$pass,$db);
        if($job==1 OR $job==2){
            $menus = [13,13,14];
            $submenus = [22,23,24];
            for ($i=0; $i <3 ; $i++) { 
                $sql = "DELETE FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=$menus[$i] AND id_submenu=$submenus[$i] ";
                $query = mysqli_query($con,$sql);
            }
        }else if($job==3 OR $job==5){
            $sql = "DELETE FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=13 AND id_submenu=23 ";
            $query = mysqli_query($con,$sql);
        }else if($job==4){
            $menus = [14,15];
            $submenus = [24,25];
            for ($i=0; $i <2 ; $i++) { 
                $sql = "DELETE FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=$menus[$i] AND id_submenu=$submenus[$i] ";
                $query = mysqli_query($con,$sql);
            }
        }else if($job==6){
            $sql = "DELETE FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=15 AND id_submenu=25 ";
            $query = mysqli_query($con,$sql);
        }else if($job==7){
            $sql = "DELETE FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=16 AND id_submenu=26 ";
            $query = mysqli_query($con,$sql);
        }else if(empty($job)){
            $menus = [13,13,14,15,16];
            $submenus = [22,23,24,25,26];
            for ($i=0; $i <5 ; $i++) { 
                $sql = "DELETE FROM adm_menu_emp WHERE id_emp=$lastID AND id_menu=$menus[$i] AND id_submenu=$submenus[$i] ";
                $query = mysqli_query($con,$sql);
            }
        }
        return $query;
    }
    public function editEmp($host,$user,$pass,$db,$id,$name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$date_in,$area){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE empleados SET name='$name', last='$last', email='$email', phone='$phone', mobile='$mobile', gender='$gender', date_birth='$birthday',
            street='$street', num_ext='$num_ext', num_int='$num_int', cp='$cp', date_in='$date_in', idarea=$area WHERE id=$id";
        $query = mysqli_query($con,$sql);
        return $query;    
    }
    public function editUserPass($host,$user,$pass,$db,$id,$username,$password){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE empleados SET user='$username',pass='$password' WHERE id='$id' ";
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function delUser($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE empleados SET stats=4, date_out=NOW() WHERE id='$id' ";
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function selectArea($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM areas WHERE status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function idUsers($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT id FROM empleados WHERE stats=1 ";
        $query = mysqli_query($con,$sql); 
        return $query;
    }
    //Directory
    public function selectDir($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM directorio WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function selectAllDir($host,$user,$pass,$db,$mode){
        $con = $this->connect($host,$user,$pass,$db);
        if(!empty($mode)){
            $sql = "SELECT D.*, Es.name as nstats FROM directorio as D LEFT JOIN estatus AS Es ON D.status = Es.id WHERE D.type=$mode AND D.status!=5 ";
        }else{
            $sql = "SELECT D.*, Es.name as nstats FROM directorio as D LEFT JOIN estatus AS Es ON D.status = Es.id WHERE D.status!=5 ";
        }
        $query = mysqli_query($con,$sql); 
        return $query;
    }
    public function addDir($host,$user,$pass,$db,$name,$corp,$email,$phone,$ext,$mobile,$other,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO directorio (name,corp,email,phone,ext,mobile,other,type)
        values('$name','$corp','$email','$phone','$ext','$mobile','$other','$type')";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function editDir($host,$user,$pass,$db,$id,$name,$corp,$email,$phone,$ext,$mobile,$other){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE directorio SET name='$name', corp='$corp', email='$email', phone='$phone', ext='$ext', mobile='$mobile', other='$other' WHERE id=$id";
        $query = mysqli_query($con,$sql);
        return $query;    
    }
    public function delDir($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE directorio SET status=4 WHERE id='$id' ";
        $query = mysqli_query($con,$sql);
        return $query;
    }
    /*Login Settings*/
    public function loginUser($host,$user,$pass,$db,$username,$password){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE user='$username' AND pass='$password' AND stats=1";
        
        $query = mysqli_query($con,$sql);
        return $query; 
    }
    /* End Login Settings */
    public function recoveryPass($host,$user,$pass,$db,$email){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE email='$email' ";
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function revk($host,$user,$pass,$db,$k){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM empleados WHERE recoveryk='$k' ";
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function changePass($host,$user,$pass,$db,$key,$password){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE empleados SET pass='$password' WHERE recoveryk='$key' ";
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function setRecovery($host,$user,$pass,$db,$email,$salt){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE empleados SET recoveryk='$salt' WHERE email='$email' ";
        $query = mysqli_query($con,$sql);
        return $query;
    }
    public function unsetRecovery($host,$user,$pass,$db,$email){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE empleados SET recoveryk=NULL WHERE email='$email' ";
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