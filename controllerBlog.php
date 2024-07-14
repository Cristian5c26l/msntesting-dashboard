<?php
//init class
class c_blog{
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct($host,$user,$pass,$db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->model = $model = new m_blog();
    }

    public function selectBlog($items,$page,$type=null){

        $res = $this->model->selectRowBlog($this->host,$this->user,$this->pass,$this->db,$type);
        $count = mysqli_num_rows($res);
        $totalPages = ceil($count/$items);

        $res2 = $this->model->selectBlog($this->host,$this->user,$this->pass,$this->db,$items,$page,$type);

        while($row = mysqli_fetch_array($res2)){
            $id = $row['id'];
            $title = $row['title'];
            $subtitle = $row['subtitle'];
            $link = $row['link'];
            $background = $row['background'];

            if(!empty($link)){
                $link = $link;
                $target = "target='_blank'";
            }else{
                $link = "notice.php?id=".$id;
                $target = "";
            } 
                ?>
                    <div class="c-notice-full-card animated fadeInRight">
                        <a href="<?php echo $link; ?>" <?php echo $target; ?> onclick="viewNotice('<?php echo $id; ?>')" class="a-notice">
                            <div class="c-notice-container orange-text" style="background-image:linear-gradient(0.25turn, rgba(0, 0, 0, .8), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url('images/contenido/<?php echo $background; ?>');">
                                <div class="c-notice-title white-text">
                                    <?php echo $title; ?>
                                </div>
                                <div class="c-notice-icon">
                                    <i class="white-text fa fa-angle-down"></i>
                                </div>
                            </div>
                        </a>    
                    </div>

                <?php
        }
        ?>

        <div class="paginator-set center col-md-12">
            <ul>

        <?php
        if($totalPages>1){
            for ($i=1;$i<=$totalPages;$i++) {
                $active = '';
                if ($i == 1) {
                    $active = 'active-page';
                }
                ?>
                    <li id="p<?php echo $i; ?>" class="p paginator-btn <?php echo $active; ?>" onclick="paginator(<?php echo $items; ?>,<?php echo $i; ?>);">
                        <div class="owl-page">
                            <span></span>
                        </div>
                    </li>
                <?php
            }
        }
        ?>

            </ul>
            <div class="owl-buttons">
                <div class="owl-prev-services" onclick="prevStep(<?php echo $totalPages; ?>)">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="owl-next-services" onclick="nextStep(<?php echo $totalPages; ?>)">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>

        <?php

    }//end function

    public function selectBlog2($items,$page,$type=null){

        $res = $this->model->selectRowBlog($this->host,$this->user,$this->pass,$this->db,$type);
        $count = mysqli_num_rows($res);
        $totalPages = ceil($count/$items);

        $res2 = $this->model->selectBlog($this->host,$this->user,$this->pass,$this->db,$items,$page,$type);

        while($row = mysqli_fetch_array($res2)){
            $id = $row['id'];
            $title = $row['title'];
            $subtitle = $row['subtitle'];
            $link = $row['link'];
            $ytLink = $row['link'];
            $button = $row['button'];
            $ytClass = "";
            $background = $row['background'];

            if(!empty($link)){
                if($button=='yt'){
                    $ytClass = "youtube-btn";
                    $target = "";
                    $link = "#";
                }else{
                    $target = "target='_blank'";
                }
            }else{
                $link = "notice.php?id=".$id;
                $target = "";
            }
                ?>
                    <div class="c-notice-full-card animated fadeInRight">
                        <a href="<?php echo $link; ?>" <?php echo $target; ?> onclick="youtube('<?php echo $ytLink; ?>')" class="<?php echo $ytClass; ?> a-notice">
                            <div class="c-notice-container orange-text" style="background-image:url('images/contenido/<?php echo $background; ?>');">
                                <div class="c-notice-title white-text">
                                    <?php echo $title; ?>
                                </div>
                                <div class="c-notice-icon">
                                    <i class="white-text fa fa-angle-down"></i>
                                </div>
                            </div>
                        </a>    
                    </div>

                <?php
        }
        ?>

        <div class="paginator-set center col-md-12">
            <ul>

        <?php
        if($totalPages>1){
            for ($i=1;$i<=$totalPages;$i++) {
                $active = '';
                if ($i == 1) {
                    $active = 'active-page2';
                }
                ?>
                    <li id="q<?php echo $i; ?>" class="q paginator-btn <?php echo $active; ?>" onclick="paginator2(<?php echo $items; ?>,<?php echo $i; ?>);">
                        <div class="owl-page">
                            <span></span>
                        </div>
                    </li>
                <?php
            }
        }
        ?>

            </ul>
            <div class="owl-buttons">
                <div class="owl-prev-services" onclick="prevStep2(<?php echo $totalPages; ?>)">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="owl-next-services" onclick="nextStep2(<?php echo $totalPages; ?>)">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>

        <?php

    }//end function

    public function firtsViewBlog($type){
        $res = $this->model->firtsViewBlog($this->host,$this->user,$this->pass,$this->db,$type);
        $row = mysqli_fetch_array($res);
        $id = $row['id'];
        $idemp = $row['idemp'];
        $author = $row['author'];
        $title = $row['title'];
        /*$text = $row['text'];
        $text = substr($text, 0, 150);*/
        $link = $row['link'];
        $background = $row['background'];
        
        //Link selection
        if(empty($link) OR $link==""){
            $url = './notice.php?id='.$id;
        }else{
            $url = $link;
        }

        ?>
            <style>
                <?php echo '.fnc'.$type; ?>{
                    background-image: linear-gradient(0.25turn, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), 
                    url('images/contenido/<?php echo $background; ?>'),
                    linear-gradient(0.25turn, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1),  rgba(0, 0, 0, 1));
                    background-size: cover;
                    background-repeat: no-repeat;
                    /*background-attachment: fixed;*/
                }
            </style>
            <div class="firts-notice-container white-text <?php echo 'fnc'.$type; ?>">
                <div class="firts-notice-new">
                    <p>Nuevo</p>
                </div>
                <div class="firts-notice-title">
                    <p><?php echo ($title); ?></p>
                </div>
                <a href="<?php echo ($url); ?>">
                    <div class="firts-icon">
                        <i class="fa fa-angle-right"></i>   
                    </div>
                </a>    
            </div>
        <?php
    }

    public function fullNotice($id){
        $res = $this->model->fullNotice($this->host,$this->user,$this->pass,$this->db,$id);
        $row = mysqli_fetch_array($res);

        $type = $row['type'];
        $title = $row['title'];
        $text = $row['text'];
        $author = $row['author'];
        $img1 = $row['img1'];
        /*$search = '</p>';

        //$string = '<span class="img1"><img src="'.$img1.'"></span>';
        $string = '<span class="img1"><img src="images/contenido/analisis_financiero.jpg"></span>';
        $position = strpos($text, $search);  
  
        $text = substr_replace( $text, $string, $position+4, 0 );*/ 

        if($type==0 OR $type==1){
        ?>  
            <div class="col-md-6"></div>
        <?php if(!empty($author)){ ?>   
            <div class="col-md-6 center"><strong>Autor: <?php echo $author; ?></strong></div>
        <?php } ?>        
            <h2 class="subtitle"><?php echo $title; ?></h2>
            <div>
                <?php echo $text; ?>
            </div>
            <br>
        <?php
        }else if($type==2 OR $type==3){
            ?>
            <h2 class="subtitle"><?php echo $title; ?></h2>
            <div>
               
            </div>
        <?php
        }else{

        }
    }

    public function slideshowBlog($type){
        $res = $this->model->slideshowBlog($this->host,$this->user,$this->pass,$this->db,$type);
        $array = array();
        while($row = mysqli_fetch_assoc($res)){
            $array[] = $row;
        }

        $json = json_encode($array);
        //var_dump($array);
        //echo $json;

        for($i=0; $i<=100; $i++){
            $json[$i];
            
        }
    }
}
//end class

/*Other format Blog*/

/*
<div class="notice-card col-md-6">
    <a href="" onclick="viewNotice('<?php echo $id; ?>')" class="a-notice">
        <div class="notice" style="background: url('images/smart1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="notice-title">
                <?php echo $title; ?>
            </div>
            <div class="notice-subtitle">
                <?php echo $subtitle; ?>
            </div>
        </div>
    </a>
</div>
*/
?>
