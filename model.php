<?php
/*Blog Notices*/
class m_blog{

    public function selectRowBlog($host,$user,$pass,$db,$type){
        if($type==2){
            $ext = "type=2 AND";
        }else{
            $ext = "type=1 AND";
        }
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM blog WHERE $ext status=1 ORDER BY position ASC ";

        $query = mysqli_query($con,$sql);
        return $query;
    }
    
    public function selectBlog($host,$user,$pass,$db,$items,$page,$type){
        if($type==2){
            $ext = "type=2 AND";
        }else{
            $ext = "type=1 AND";
        }
        $offset = ($page - 1) * $items;
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM blog WHERE $ext status=1 ORDER BY position ASC LIMIT $offset,$items ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function firtsViewBlog($host,$user,$pass,$db,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM blog WHERE type= $type AND status=1 ORDER BY position ASC LIMIT 1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    } 

    public function slideshowBlog($host,$user,$pass,$db,$type){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM blog WHERE type= $type AND status=1 ORDER BY position ASC ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function fullNotice($host,$user,$pass,$db,$id){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM blog WHERE id= $id AND status=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function connect($host,$user,$pass,$db){
        $con = mysqli_connect($host,$user,$pass,$db);
        if($con){
            return $con;
        }else{
            return 'la conexión es erronea';
        }
    }
}

/*Slideshow*/
class m_slideshow{

    public function selectSlideshow($host,$user,$pass,$db,$slideshow){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM slideshow WHERE idslide='$slideshow' AND status=1 ORDER BY position ASC";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function slideshowServicios($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM slideshow WHERE idslide=1 AND status=1 ORDER BY position ASC";

        $query = mysqli_query($con,$sql);
        return $query;
    }

    public function slideshowNosotros($host,$user,$pass,$db){
        $con = $this->connect($host,$user,$pass,$db);
        $sql = "SELECT * FROM slideshow WHERE idslide=3 AND status=1 ";

        $query = mysqli_query($con,$sql);
        return $query;
    }
    

    public function connect($host,$user,$pass,$db){
        $con = mysqli_connect($host,$user,$pass,$db);
        if($con){
            return $con;
        }else{
            return 'la conexión es erronea';
        }
    }
}
?>