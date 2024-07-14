<?php
class m_panel{

    public function comunication($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM blog WHERE type=4 AND status = 1 ORDER BY id DESC ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function viewblog($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM blog WHERE id = $id AND status = 1 ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addblog($host,$user,$pass,$db,$title,$author,$data,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO blog (title,author,text,type,date_publish) VALUES('$title','$author','$data',$type,NOW()) ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function editblog($host,$user,$pass,$db,$id,$title,$author,$data){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE blog SET title='$title',author='$author',text='$data' WHERE id='$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function changeblog($host,$user,$pass,$db,$id,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE blog SET type = '$type' WHERE id = '$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function delblog($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE blog SET status = 5 WHERE id = '$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function addimg($host,$user,$pass,$db,$id,$name){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "UPDATE blog SET background ='$name' WHERE id = '$id' ";
        
        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function selectfullblog($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM blog WHERE status = 1 ";

        $query = mysqli_query($con,$sql); 
        return $query;
    }

    public function findVote($host,$user,$pass,$db,$id,$employee){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM votes WHERE (idvote='$id' AND iduser='$employee' ) AND status = 1 ";

        $query = mysqli_query($con,$sql); 
        return $query;
    }

    public function addVote($host,$user,$pass,$db,$id,$employee,$vote){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "INSERT INTO votes (idvote,iduser,vote) VALUES($id,$employee,$vote); ";

        $query = mysqli_query($con,$sql); 
        return $query;
    }

    public function votations($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT sum(case when vote = 0 then 1 else 0 end) as negatives,
        sum(case when vote = 1 then 1 else 0 end) as positives FROM votes WHERE idvote ='$id' AND status = 1 ";

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