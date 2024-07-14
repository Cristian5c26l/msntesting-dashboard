<?php
//includes
include 'config.php';
//Security Settings
header( 'X-Frame-Options: ALLOW-FROM https://youtube.com/' );
header( 'X-Frame-Options: ALLOW-FROM https://sp.tinymce.com/' );
header( 'X-XSS-Protection: 1;mode=block' );
//hour setings
date_default_timezone_set('America/Mexico_City');
// head settings
function head(){
    ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Pixanit Admin</title>
        <link type="text/css" href="assets/css/vendor-morris.css" rel="stylesheet">
        <link type="text/css" href="assets/css/vendor-bootstrap-datepicker.css" rel="stylesheet">
        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots" content="noindex">
        <!-- App CSS -->
        <link type="text/css" href="assets/css/app.css?=1" rel="stylesheet">
        <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">
        <!-- Simplebar -->
        <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">
        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link type="text/css" href="assets/css/datatables.css" rel="stylesheet">
        <link type="text/css" href="assets/css/basic.css" rel="stylesheet">
        <link type="text/css" href="assets/css/dropzone.css" rel="stylesheet">
        <!-- Ged -->
        <script src="assets/js/ged.js?=2"></script>
        <script src="assets/js/coju.js?=6"></script>
        <script src="assets/js/coju_lab.js?=1"></script>
        <script src="assets/js/turn.js?=4"></script>
        <script src="assets/js/company.js?=1"></script>
        <script src="assets/js/ep.js"></script>
        <!-- PDF -->
        <script src="assets/pdf/build/pdfmake.js"></script>
        <script src="assets/pdf/build/vfs_fonts.js"></script>
        <script src="assets/js/browser.js"></script>
    <?php
}
function footer(){
    ?>
        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>
        <script src="assets/vendor/jquery-ui.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/vendor/popper.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>
        <!-- Simplebar -->
        <!-- Used for adding a custom scrollbar to the drawer -->
        <script src="assets/vendor/simplebar.js"></script>
        <!-- Vendor -->
        <script src="assets/vendor/Chart.min.js"></script>
        <script src="assets/vendor/moment.min.js"></script>
        <!-- APP -->
        <script src="assets/js/color_variables.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/vendor/dom-factory.js"></script>
        <!-- DOM Factory -->
        <script src="assets/vendor/material-design-kit.js"></script>
        <!-- Custom -->
        <script src="assets/js/custom.js?=1"></script>
        <!-- Data Tables -->
        <!--script src="assets/vendor/jquery.dataTables.js"></script>
        <script src="assets/vendor/dataTables.bootstrap4.js"></script-->
        <script src="assets/vendor/datatables.js"></script>
        <!-- dropzone -->
        <script src="assets/js/dropzone.js"></script>
        <script src="assets/js/jquery.inputmask.js"></script>
        <!-- MDK -->
        <script>
            (function() {
                'use strict';
                // Self Initialize DOM Factory Components
                domFactory.handler.autoInit()
                // Connect button(s) to drawer(s)
                var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')
                sidebarToggle.forEach(function(toggle) {
                    toggle.addEventListener('click', function(e) {
                        var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                        var drawer = document.querySelector(selector)
                        if (drawer) {
                            if (selector == '#default-drawer') {
                                $('.container-fluid').toggleClass('container--max');
                            }
                            drawer.mdkDrawer.toggle();
                        }
                    })
                })
            })()
        </script>
        <script src="assets/vendor/Chart.min.js"></script>
        <script src="assets/vendor/morris.min.js"></script>
        <script src="assets/vendor/raphael.min.js"></script>
        <script src="assets/js/charts_index.js"></script>
        <script src="assets/js/charts.js"></script>
        <!-- Datepicker -->
        <script src="assets/vendor/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <!-- Qr -->
        <script src="assets/js/qr.js"></script>
        <script src="assets/js/html5-qrcode.min.js"></script>
        <!-- Print -->
        <script src="assets/js/print.js?=2"></script>
        <script>
            $(function() {
                window.morrisDashboardChart = new Morris.Area({
                    element: 'morris-area-chart',
                    data: [{
                            year: '2017-01',
                            a: 6352.27
                        },
                        {
                            year: '2017-02',
                            a: 4309.98
                        },
                        {
                            year: '2017-03',
                            a: 1465.98
                        },
                        {
                            year: '2017-04',
                            a: 1298.25
                        },
                        {
                            year: '2017-05',
                            a: 3209
                        },
                        {
                            year: '2017-06',
                            a: 2083
                        },
                        {
                            year: '2017-07',
                            a: 1285.23
                        },
                        {
                            year: '2017-08',
                            a: 1289
                        },
                        {
                            year: '2017-09',
                            a: 4430
                        },
                        {
                            year: '2017-10',
                            a: 8921.19
                        }
                    ],
                    xkey: 'year',
                    ykeys: ['a'],
                    labels: ['Earnings'],
                    lineColors: ['#fff'],
                    fillOpacity: '0.2',
                    gridEnabled: true,
                    gridTextColor: '#ffffff',
                    resize: true
                });
            });
        </script>
    <?php
}
//menu upper content
function menuhead(){
    ?>
        <!-- header -->
        <div class="mdk-header js-mdk-header bg-primary" data-fixed>
            <div class="mdk-header__content">
                <nav class="navbar navbar-expand-md bg-primary navbar-dark d-flex-none">
                    <button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
                        <i class="material-icons align-middle md-36">short_text</i>
                    </button>
                    <!--div class="page-title m-0" onclick="menu('home/suggestions');">Sugerencias</div-->
                    <!--div class="collapse navbar-collapse" id="mainNavbar">
                        <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item nav-link">
                                <div class="form-group m-0">
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">search</i>
                                        </div>
                                        <input type="text" class="form-control" name="search" placeholder="Search app..">
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown nav-language d-flex align-items-center">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    EN
                                </a>
                                <div class="dropdown-menu dropdown-menu-right ">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="account.html" class="dropdown-item active">
                                                <img src="http://flags.fmcdn.net/data/flags/w1160/us.png" style="width: 25px; vertical-align: middle" alt="English"> English
                                            </a>
                                        </li>
                                        <li>
                                            <a href="account.html" class="dropdown-item">
                                                <img src="http://flags.fmcdn.net/data/flags/w1160/fr.png" style="width: 25px; vertical-align: middle" alt="French"> French
                                            </a>
                                        </li>
                                        <li>
                                            <a href="account.html" class="dropdown-item">
                                                <img src="http://flags.fmcdn.net/data/flags/w1160/de.png" style="width: 25px; vertical-align: middle" alt="English"> German
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown notifications d-flex align-self-center align-items-center" id="navbarNotifications">
                                <a href="#" class="nav-link dropdown-toggle notifications--active" data-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons align-middle">notifications</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown" id="notificationsDropdown">
                                    <ul class="nav nav-tabs-notifications" id="notifications-ul" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="true">Notifications</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="alerts-tab" data-toggle="tab" href="#alerts" role="tab" aria-controls="alerts" aria-selected="false">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="notifications-tabs">
                                        <div class="tab-pane fade show active" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="w-100">
                                                        <a href="#">john</a> received a new quote</div>
                                                    <div class="w-100 text-muted">4 secs ago</div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="w-100">
                                                        <a href="#">karen</a> received a new quote</div>
                                                    <div class="w-100 text-muted">25 mins ago</div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="w-100">
                                                        <a href="#">jim</a> received a new quote</div>
                                                    <div class="w-100 text-muted">7 hrs ago</div>
                                                </li>
                                                <li class="list-group-item text-right">
                                                    <a href="#">
                                                        <span class="align-middle">View All</span>
                                                        <i class="material-icons md-18 align-middle">arrow_forward</i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="alerts" role="tabpanel" aria-labelledby="alerts-tab">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <i class="material-icons align-middle mr-2 text-warning">
                                                            info_outline
                                                        </i>
                                                        <div class="media-body">
                                                            <div class="w-100">
                                                                <a href="profile.html">john</a> received a new
                                                                <a href="#">quote</a>
                                                            </div>
                                                            <div class="w-100 text-muted">4 secs ago</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <i class="material-icons align-middle mr-2 text-success">
                                                            check_circle
                                                        </i>
                                                        <div class="media-body">
                                                            <div class="w-100">
                                                                <a href="profile.html">karen</a> completed a
                                                                <a href="#">task</a>
                                                            </div>
                                                            <div class="w-100 text-muted">25 mins ago</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <i class="material-icons align-middle mr-2 text-danger">
                                                            warning
                                                        </i>
                                                        <div class="media-body">
                                                            <div class="w-100">
                                                                <a href="profile.html">jim</a> removed a
                                                                <a href="#">task</a>
                                                            </div>
                                                            <div class="w-100 text-muted">7 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item text-right">
                                                    <a href="#">
                                                        <span class="align-middle">View All</span>
                                                        <i class="material-icons md-18 align-middle">arrow_forward</i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <a href="profile.html">
                                                            <img src="assets/images/avatars/person-1.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="w-100">I started that project we talked...</div>
                                                            <div class="w-100 text-muted">4 secs ago</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <a href="profile.html">
                                                            <img src="assets/images/avatars/person-11.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="w-100">Can we arrange a meeting?...</div>
                                                            <div class="w-100 text-muted">25 mins ago</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <a href="profile.html">
                                                            <img src="assets/images/avatars/person-12.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="w-100">We need to fix some bugs...</div>
                                                            <div class="w-100 text-muted">7 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item text-right">
                                                    <a href="#">
                                                        <span class="align-middle">View All</span>
                                                        <i class="material-icons md-18 align-middle">arrow_forward</i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-divider">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="sidebar" data-target="#user-drawer">
                                    Frontted
                                    <img src="https://pbs.twimg.com/profile_images/928893978266697728/3enwe0fO_400x400.jpg" class="img-fluid rounded-circle ml-1" width="35"
                                        alt="">
                                    </a>
                                </li>
                            </li>    
                        </ul>
                    </div-->
                </nav>
            </div>
        </div>
    <?php
}
function body(){
    ?>      
        <script>
            menu('home/dashboard');
        </script>
    <?php
}
function menu($id,$name,$email,$image){
    include 'config.php';
    $con = mysqli_connect($host,$user,$pass,$db);
    if($con){
        echo "conexion exitosa";
    }else{
        mysqli_error($con);
    }
    $sql = "SELECT * FROM adm_menu WHERE status=1 ORDER BY position";
    $res = mysqli_query($con,$sql);
    ?>  
        <!-- drawer -->
        <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">
                    <nav class="drawer  drawer--dark">
                        <div class="drawer-spacer">
                            <div class="media align-items-center">
                            <img src="assets/images/avatars/<?php echo $image; ?>" alt="" class="rounded-circle mr-2" width="50" height="50">
                                <div class="media-body">
                                    <a href="index.php" class="h5 m-0 text-link">Pixanit | <?php echo $name; ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- HEADING -->
                        <div class="py-2 drawer-heading">
                            Bienvenido(a) <?php echo $name; ?>
                        </div>
                        <!-- DASHBOARDS MENU -->
                        <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                            <?php
                                //init menu items
                                while($row=mysqli_fetch_array($res)){
                                    $id = $row['id'];
                                    $menu = $row['menu'];
                                    $title = $row['title'];
                                    $link = $row['link'];
                                    //echo $id.' '.$menu.'<br>';
                                    $sql2="SELECT * FROM adm_submenu WHERE idmenu=$id";
                                    $res2=mysqli_query($con,$sql2);
                                    $count = mysqli_num_rows($res2);
                                    //Check if have submenu items or not
                                    if($count<1){
                                        ?>
                                            <!--li class="drawer-menu-item active ">
                                                <a href="#" onclick="menu('home/home')">
                                                    <i class="material-icons">poll</i>
                                                    <span class="drawer-menu-text"> Inicio</span>
                                                </a>    
                                            </li-->
                                        <?php
                                    }else{
                                    ?>
                                        <li class="drawer-menu-item drawer-submenu">
                                            <a data-toggle="collapse" data-parent="#<?php echo $id; ?>" href="#" data-target="#ui<?php echo $id; ?>" aria-controls="uiComponentsMenu" aria-expanded="false" class="collapsed">
                                                <i class="material-icons">library_books</i>
                                                <span class="drawer-menu-text"><?php echo utf8_encode($title); ?></span>
                                            </a>
                                            <ul class="collapse " id="ui<?php echo $id; ?>">
                                            <?php
                                                while($row2=mysqli_fetch_array($res2)){
                                                    $idsub = $row2['id'];
                                                    $titlesub = $row2['title'];
                                                    $link = $row2['link'];
                                            ?>
                                                    <li class="drawer-menu-item ">
                                                        <a href="#" onclick="menu('<?php echo $link; ?>');"><?php echo $titlesub; ?></a>
                                                    </li>
                                            <?php
                                                }
                                            ?>
                                            </ul> <!-- End dynamic ul -->    
                                        </li>       
                                    <?php
                                    }//end Else
                                }//end While
                            ?>
                        </ul>
                        <!-- HEADING -->
                        <div class="py-2 drawer-heading">
                            Components
                        </div>
                        <!-- COMPONENTS MENU -->
                        <!--ul class="drawer-menu" id="componentsMenu" data-children=".drawer-submenu">
                            <li class="drawer-menu-item drawer-submenu">
                                <a data-toggle="collapse" data-parent="#componentsMenu" href="#" data-target="#uiComponentsMenu" aria-controls="uiComponentsMenu" aria-expanded="false" class="collapsed">
                                    <i class="material-icons">library_books</i>
                                    <span class="drawer-menu-text"> UI Components</span>
                                </a>
                                <ul class="collapse " id="uiComponentsMenu">
                                    <li class="drawer-menu-item ">
                                        <a href="ui-buttons.html">Buttons</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-colors.html">Colors</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-grid.html">Grid</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-icons.html">Icons</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-typography.html">Typography</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-drag-drop.html">Drag &amp; Drop</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-loaders.html">Loaders</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="drawer-menu-item drawer-submenu">
                                <a data-toggle="collapse" data-parent="#componentsMenu" href="#" data-target="#formsMenu" aria-controls="formsMenu" aria-expanded="false" class="collapsed">
                                    <i class="material-icons">text_format</i>
                                    <span class="drawer-menu-text"> Forms</span>
                                </a>
                                <ul class="collapse " id="formsMenu">
                                    <li class="drawer-menu-item ">
                                        <a href="form-controls.html">Form Controls</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="checkboxes-radios.html">Checkboxes &amp; Radios</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="switches-toggles.html">Switches &amp; Toggles</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="form-layout.html">Layout Variations</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="validation.html">Validation</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="custom-forms.html">Custom Forms</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="text-editor.html">Text Editor</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="datepicker.html">Datepicker</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="drawer-menu-item  ">
                                <a href="ui-tables.html">
                                    <i class="material-icons">tab</i>
                                    <span class="drawer-menu-text"> Tables</span>
                                </a>
                            </li>
                            <li class="drawer-menu-item  ">
                                <a href="ui-notifications.html">
                                    <i class="material-icons">notifications</i>
                                    <span class="drawer-menu-text"> Notifications</span>
                                </a>
                            </li>
                            <li class="drawer-menu-item  ">
                                <a href="charts.html">
                                    <i class="material-icons">equalizer</i>
                                    <span class="drawer-menu-text"> Charts</span>
                                </a>
                            </li>
                            <li class="drawer-menu-item  ">
                                <a href="events-calendar.html">
                                    <i class="material-icons">event_available</i>
                                    <span class="drawer-menu-text"> Calendar</span>
                                </a>
                            </li>
                            <li class="drawer-menu-item  ">
                                <a href="maps.html">
                                    <i class="material-icons">pin_drop</i>
                                    <span class="drawer-menu-text"> Maps</span>
                                </a>
                            </li>
                        </ul-->
                        <!-- Logout -->
                        <?php
                            if(!empty($_SESSION["captchaSession"])){
                                $exit = 1;
                            }else{
                                $exit = 0;
                            }
                        ?>
                        <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                            <li class="drawer-menu-item active ">
                                <a href="#" onclick="logout(<?php echo $exit; ?>)">
                                    <i class="material-icons">poll</i>
                                    <span class="drawer-menu-text"> Logout</span>
                                </a>
                            </li>
                        </ul>    
                    </nav>
                </div>
            </div>
        </div>
        <!-- // END drawer -->
        <!-- drawer -->
        <div class="mdk-drawer js-mdk-drawer" id="user-drawer" data-position="right" data-align="end">
            <div class="mdk-drawer__content">
                <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">
                    <nav class="drawer drawer--light">
                        <div class="drawer-spacer drawer-spacer-border">
                            <div class="media align-items-center">
                                <img src="https://pbs.twimg.com/profile_images/928893978266697728/3enwe0fO_400x400.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                                    <div class="media-body">
                                        <a href="#" class="h5 m-0">Frontted</a>
                                        <div>Account Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="drawer-spacer bg-body-bg">
                                <div class="d-flex justify-content-between mb-2">
                                    <p class="h6 text-gray m-0">
                                        <i class="material-icons align-middle md-18 text-primary">monetization_on</i> Balance
                                    </p>
                                    <span>$21,011</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="h6 text-gray m-0">
                                        <i class="material-icons align-middle md-18 text-primary">shopping_cart</i> Sales
                                    </p>
                                    <span>142</span>
                                </div>
                            </div>
                            <!-- MENU -->
                            <ul class="drawer-menu" id="userMenu" data-children=".drawer-submenu">
                                <li class="drawer-menu-item">
                                    <a href="account.html">
                                        <i class="material-icons">lock</i>
                                        <span class="drawer-menu-text"> Account</span>
                                    </a>
                                </li>
                                <li class="drawer-menu-item">
                                    <a href="profile.html">
                                        <i class="material-icons">account_circle</i>
                                        <span class="drawer-menu-text"> Profile</span>
                                    </a>
                                </li>
                                <li class="drawer-menu-item">
                                    <a href="login.html">
                                        <i class="material-icons">exit_to_app</i>
                                        <span class="drawer-menu-text"> Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>    
                    </nav>
                </div>
            </div>
        </div>   
        <!-- // END drawer -->
    <?php
}
function menu2($iduser, $name, $email, $image) {
    include 'config.php';
  
    $con = mysqli_connect($host, $user, $pass, $db);
  
    if ($con) {
      echo "conexion exitosa";
    } else {
      mysqli_error($con);
    }
  
    $sql = "SELECT a.*, am.id_submenu
            FROM adm_menu AS a
            INNER JOIN adm_menu_emp AS am ON am.id_menu = a.id
            WHERE am.id_emp=$iduser AND a.status=1
            ORDER BY a.position";
    $res = mysqli_query($con, $sql);
  
    $menus = []; // Array to store processed menus
  
    ?>
  
    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
      <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">
          <nav class="drawer drawer--dark">
            <div class="drawer-spacer">
              <div class="media align-items-center">
                <img src="assets/images/avatars/<?php echo $image; ?>" alt="" class="rounded-circle mr-2" width="50" height="50">
                <div class="media-body">
                  <a href="index.php" class="h5 m-0 text-link">Pixanit | <?php echo $name; ?></a>
                </div>
              </div>
            </div>
            <div class="py-2 drawer-heading">
              Bienvenido(a) <?php echo $name; ?>
            </div>
  
            <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
              <?php
              while ($row = mysqli_fetch_array($res)) {
                $id = $row['id'];
                $menu = $row['menu'];
                $title = $row['title'];
                $link = $row['link'];
                $hasAccess = in_array($row['id_submenu'], $row); // Check if user has access to submenu items
  
                if (!empty($row['id_submenu']) && $hasAccess && !in_array($id, $menus)) {
                  // Only process menu with submenus and user access (avoid duplicates)
                  $menus[] = $id; // Add processed menu ID to avoid duplicates
  
                  ?>
                  <li class="drawer-menu-item drawer-submenu">
                    <a data-toggle="collapse" data-parent="#<?php echo $id; ?>" href="#" data-target="#ui<?php echo $id; ?>" aria-controls="uiComponentsMenu" aria-expanded="false" class="collapsed">
                      <i class="material-icons">library_books</i>
                      <span class="drawer-menu-text"><?php echo utf8_encode($title); ?></span>
                    </a>
                    <ul class="collapse " id="ui<?php echo $id; ?>">
                      <?php
                      $sql2 = "SELECT * FROM adm_submenu WHERE idmenu=$id ORDER BY position ASC";
                      $res2 = mysqli_query($con, $sql2);
  
                      while ($row2 = mysqli_fetch_array($res2)) {
                        $idsub = $row2['id'];
                        $titlesub = $row2['title'];
                        $link = $row2['link'];
                        ?>
                        <li class="drawer-menu-item ">
                          <a href="#" onclick="menu('<?php echo $link; ?>');"><?php echo utf8_encode($titlesub); ?></a>
                        </li>
                        <?php
                      }
                      ?>
                    </ul>
                  </li>
                  <?php
                } else if (empty($row['id_submenu'])) { // Display menu item without submenus
                  ?>
                  <li class="drawer-menu-item active ">
                    <a href="#" onclick="menu('<?php echo $link; ?>');">
                      <i class="material-icons">poll</i>
                      <span class="drawer-menu-text"><?php echo utf8_encode($title); ?></span>
                    </a>
                  </li>
                  <?php
                }
            }
            ?>
          </ul>
                        <!-- HEADING -->
                        <div class="py-2 drawer-heading">
                            Components
                        </div>
                        <!-- COMPONENTS MENU -->
                        <!--ul class="drawer-menu" id="componentsMenu" data-children=".drawer-submenu">
                            <li class="drawer-menu-item drawer-submenu">
                                <a data-toggle="collapse" data-parent="#componentsMenu" href="#" data-target="#uiComponentsMenu" aria-controls="uiComponentsMenu" aria-expanded="false" class="collapsed">
                                    <i class="material-icons">library_books</i>
                                    <span class="drawer-menu-text"> UI Components</span>
                                </a>
                                <ul class="collapse " id="uiComponentsMenu">
                                    <li class="drawer-menu-item ">
                                        <a href="ui-buttons.html">Buttons</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-colors.html">Colors</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-grid.html">Grid</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-icons.html">Icons</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-typography.html">Typography</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-drag-drop.html">Drag &amp; Drop</a>
                                    </li>
                                    <li class="drawer-menu-item ">
                                        <a href="ui-loaders.html">Loaders</a>
                                    </li>
                                </ul>
                            </li>
                        </ul-->
                        <!-- Logout -->
                        <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                            <li class="drawer-menu-item active ">
                                <a href="#" onclick="logout()">
                                    <i class="material-icons">poll</i>
                                    <span class="drawer-menu-text"> Logout</span>
                                </a>
                            </li>
                        </ul>    
                    </nav>
                </div>
            </div>
        </div>
        <!-- // END drawer -->
        <!-- drawer -->
        <div class="mdk-drawer js-mdk-drawer" id="user-drawer" data-position="right" data-align="end">
            <div class="mdk-drawer__content">
                <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">
                    <nav class="drawer drawer--light">
                        <div class="drawer-spacer drawer-spacer-border">
                            <div class="media align-items-center">
                                <img src="https://pbs.twimg.com/profile_images/928893978266697728/3enwe0fO_400x400.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                                    <div class="media-body">
                                        <a href="#" class="h5 m-0">Frontted</a>
                                        <div>Account Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="drawer-spacer bg-body-bg">
                                <div class="d-flex justify-content-between mb-2">
                                    <p class="h6 text-gray m-0">
                                        <i class="material-icons align-middle md-18 text-primary">monetization_on</i> Balance
                                    </p>
                                    <span>$21,011</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="h6 text-gray m-0">
                                        <i class="material-icons align-middle md-18 text-primary">shopping_cart</i> Sales
                                    </p>
                                    <span>142</span>
                                </div>
                            </div>
                            <!-- MENU -->
                            <ul class="drawer-menu" id="userMenu" data-children=".drawer-submenu">
                                <li class="drawer-menu-item">
                                    <a href="account.html">
                                        <i class="material-icons">lock</i>
                                        <span class="drawer-menu-text"> Account</span>
                                    </a>
                                </li>
                                <li class="drawer-menu-item">
                                    <a href="profile.html">
                                        <i class="material-icons">account_circle</i>
                                        <span class="drawer-menu-text"> Profile</span>
                                    </a>
                                </li>
                                <li class="drawer-menu-item">
                                    <a href="login.html">
                                        <i class="material-icons">exit_to_app</i>
                                        <span class="drawer-menu-text"> Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>    
                    </nav>
                </div>
            </div>
        </div>   
        <!-- // END drawer -->
    <?php
}
?>