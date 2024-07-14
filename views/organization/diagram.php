<?php
// Organization Settings
include '../../includes/config.php';
include '../../controllers/organization.php';
include '../../models/organization.php';
$orgInstance = new c_org($host,$user,$pass,$db);
?>
<style>
.organigrama * {
    margin: 0px;
    padding: 0px;
}

.organigrama ul {
    padding-top: 20px;
    position: relative;
}

.organigrama li {
    float: left;
    text-align: center;
    list-style-type: none;
    padding: 20px 5px 0px 5px;
    position: relative;
}

.organigrama li::before, .organigrama li::after {
    content: '';
    position: absolute;
    top: 0px;
    right: 50%;
    border-top: 3px solid #8d98a7;
    width: 50%;
    height: 20px;
}

.organigrama li::after{
	right: auto;
    left: 50%;
	border-left: 3px solid #8d98a7;
}

.organigrama li:only-child::before, .organigrama li:only-child::after {
	display: none;
}

.organigrama li:only-child {
  padding-top: 0;
}

.organigrama li:first-child::before, .organigrama li:last-child::after{
	border: 0 none;
}

.organigrama li:last-child::before{
    border-right: 3px solid #8d98a7;
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius: 0 5px 0 0;
    border-radius: 0 5px 0 0;
}

.organigrama li:first-child::after{
    border-radius: 5px 0 0 0;
    -webkit-border-radius: 5px 0 0 0;
    -moz-border-radius: 5px 0 0 0;
}

.organigrama ul ul::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    border-left: 3px solid #8d98a7;
    width: 0;
    height: 20px;
}

.organigrama li a {
    /*border: 3px solid #093b80;*/
    /*padding: 1em 0.75em;*/
    padding: 2px 0.75em;
    text-decoration: none;
    color: #333;
    /*background-color: #fff;*/
    font-family: arial, verdana, tahoma;
    font-size: 0.85em;
    display: inline-block;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-transition: all 500ms;
    -moz-transition: all 500ms;
    transition: all 500ms;
}

.organigrama li a:hover {
    /*border: 3px solid #fff;*/
    color: #ddd;
    /*background-color: #093b80;*/
    display: inline-block;
}

.organigrama > ul > li > a {
    font-size: 1em;
    font-weight: bold;
    min-width: 190px;
}

.organigrama > ul > li > ul > li > a {
    /*width: 8em;*/
    min-width: 190px;
}

.organigrama ul > li > a {
    /*width: 8em;*/
    min-width: 190px;
}
</style>
<div class="x200">
    <div class="organigrama">
        <ul>
            <li>
                <a href="#">
                    <div class="">
                        <img src="assets/images/avatars/batman.jpg" width="70px" height="70px" class="round-1 r-gold" alt="">
                    </div>
                    <p>Josué A. Luna Monrroy</p>
                </a>
                <ul>
                    <?php echo $orgInstance->drawModel(); ?>
                </ul>
            </li>
        </ul>
    </div>
</div>


<!--div class="organigrama">
   <ul>
      <li>
         <a href="#">Director</a>
         <ul>
            <li>
                <a href="#">Vicepresidente1</a>
                <ul>
                    <li><a href="#">Vicepresidente2</a></li>
                </ul>
            </li>
            <li>
               <a href="#">Vicepresidente3</a>
                <ul>
                    <li>
                        <a href="#">Vicepresidentesub3-1</a>
                        <ul>
                            <li><a href="#">Vicepresidentea</a>
                            <li><a href="#">Vicepresidentex</a>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Vicepresidente5</a>
                    </li> 
                    <li>
                        <a href="#">Vicepresidente6</a>
                    </li> 
                    <li>
                        <a href="#">Vicepresidente7</a>
                    <li>
                        <a href="#">Vicepresidente8</a>
                    </li> 
                </ul>
            </li>
         </ul>
      </li>
   </ul>
</div-->
<script>
    $('ul').each(function(i){
        if($(this).children().length < 1){
            $(this).remove();
        }

    });
</script>
<?php
?>
