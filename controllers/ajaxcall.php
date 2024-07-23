<?php

include '../includes/config.php';

include 'login.php';

include 'employees.php';

include '../models/login.php';

include '../controllers/sysinv.php';

include '../models/sysinv.php';

$option = $_POST['option'];

//security function

function sanitizer($str) { 

      

    // Using str_replace() function    

    $res = str_replace( array( '\'', '"', 

    ',' , ';', '<', '>' ), ' ', $str); 

        

    // Returning the result  

    return $res; 

} 



//instances

$loginInstance = new c_user($host,$user,$pass,$db);

$userInstance = new c_user($host,$user,$pass,$db);

$empInstance = new c_emp($host,$user,$pass,$db);

$dirInstance = new c_emp($host,$user,$pass,$db);

$invInstance = new c_sysinv($host,$user,$pass,$db);

if($option){

    switch ($option) {

        case '1':

            //Login

            $username = htmlspecialchars(sanitizer($_POST['username']));

            $password = $_POST['password'];

            $password = sha1($password);

            $result = $loginInstance->loginUser($username,$password);

            $id = $result['id'];

            $area = $result['idarea'];

            $name = $result['name'];

            $email = $result['email'];

            $image = $result['image'];

            $level = $result['level'];

            $captcha = $_POST['captcha'];

            $type = $result['type'];

            $loginInstance->setSession($id,$area,$name,$email,$image,$level,$captcha,$type);

            die();

        break;



        case '2':

            //Recovery Password

            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

            $result = $loginInstance->recoveryPass($email);

            echo $result;

            die();

        break;

        

        case '3':

            //Change Password

            $email = $_POST['email'];

            $key = $_POST['key'];

            $password = $_POST['password'];

            //Encrypt password

            $password = sha1($password);

            $loginInstance->changePass($email,$key,$password);

        break;



        case '4':

            //Add Emp

            $area = $_POST['area'];

            $job = $_POST['job'];

            $name = $_POST['name'];

            $last = $_POST['last'];

            $email = $_POST['email'];

            $phone = $_POST['phone'];

            $mobile = $_POST['mobile'];

            $gender = $_POST['gender'];

            $birthday = $_POST['birthday'];

            $street = $_POST['street'];

            $num_ext = $_POST['num_ext'];

            $num_int = $_POST['num_int'];

            $cp = $_POST['cp'];

            $username = $_POST['username'];

            $password = $_POST['password'];

            $password = sha1($password);

            $date_in = $_POST['date_in'];



            $empInstance->addEmp($name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$username,$password,$date_in,$area,$job);

        break;



        case '5':

            //Edit Emp

            $id = $_POST['id'];

            $area = $_POST['area'];

            $name = $_POST['name'];

            $last = $_POST['last'];

            $email = $_POST['email'];

            $phone = $_POST['phone'];

            $mobile = $_POST['mobile'];

            $gender = $_POST['gender'];

            $birthday = $_POST['birthday'];

            $street = $_POST['street'];

            $num_ext = $_POST['num_ext'];

            $num_int = $_POST['num_int'];

            $cp = $_POST['cp'];

            $date_in = $_POST['date_in'];



            $empInstance->editEmp($id,$name,$last,$email,$phone,$mobile,$gender,$birthday,$street,$num_ext,$num_int,$cp,$date_in,$area);

        break;

        

        case '6':

            //Delete Employee

            $id = $_POST['id'];

            $loginInstance->delUser($id);

        break;



        case '7':

            //Chage Job Employee

            $id = $_POST['id'];

            $job = $_POST['job'];

            $empInstance->changeJob($id,$job);

        break;



        case '10':

            $name = $_POST['name'];

            $corp = $_POST['corp'];

            $email = $_POST['email'];

            $phone = $_POST['phone'];

            $ext = $_POST['ext'];

            $mobile = $_POST['mobile'];

            $other = $_POST['other'];

            $type = $_POST['type'];

            $dirInstance->addDir($name,$corp,$email,$phone,$ext,$mobile,$other,$type);

        break;



        case '11':

            $id = $_POST['id'];

            $name = $_POST['name'];

            $corp = $_POST['corp'];

            $email = $_POST['email'];

            $phone = $_POST['phone'];

            $ext = $_POST['ext'];

            $mobile = $_POST['mobile'];

            $other = $_POST['other'];

            $dirInstance->editDir($id,$name,$corp,$email,$phone,$ext,$mobile,$other);

        break;

        

        case '12':

            $id = $_POST['id'];

            $dirInstance->delDir($id);

        break;



        case '13':

            $ids = $empInstance->idUsers();

            echo json_encode($ids);

        break;

        case '14';

            $idInsume = htmlspecialchars(sanitizer($_POST['id_insume']));
            
            if (isset($idInsume) and !empty($idInsume)) {// si existe idInsume
                echo $invInstance->selectMarksByInsumeType($idInsume);
            }
            
        break;



        case '100':

            $loginInstance->logOut();

            die();

        break;

        

        default:

        # code...

        break;

    }

}

?>