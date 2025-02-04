<?php 
//includes
include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php echo head(); ?>
</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" data-has-scrolling-region>

        <div class="mdk-drawer-layout__content">
            <!-- header-layout -->
            <div class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
                <!-- header -->
                <div class="mdk-header js-mdk-header bg-primary" data-fixed>
                    <div class="mdk-header__content">

                        <nav class="navbar navbar-expand-md bg-primary navbar-dark d-flex-none">
                            <button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
                                <i class="material-icons align-middle md-36">short_text</i>
                            </button>
                            <div class="page-title m-0">Fiscal/etc.</div>

                            <div class="collapse navbar-collapse" id="mainNavbar">
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
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- content -->
                <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                    <!-- main content -->




                    <div class="container-fluid">
                        <div class="row font-1">
                            <div class="col-lg-4">
                                <div class="card card-body flex-row align-items-center">
                                    <h5 class="m-0"><i class="material-icons align-middle text-muted md-18">content_paste</i> Today</h5>
                                    <div class="text-primary ml-auto">$12,319</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-body flex-row align-items-center">
                                    <h5 class="m-0"> Last 7 Days</h5>
                                    <div class="text-primary ml-auto">$35,129</div>
                                    <i class="material-icons text-success md-18 ml-1">arrow_upward</i>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-body flex-row align-items-center">
                                    <h5 class="m-0"> Past 30 Days</h5>
                                    <div class="text-primary ml-auto">$142,545</div>
                                    <i class="material-icons text-success md-18 ml-1">arrow_upward</i>
                                </div>
                            </div>
                        </div>
                        <div class="card card-earnings">
                            <div class="card-group">
                                <div class="card card-body mb-0">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="card-text text-muted mb-1">Earned today</p>
                                            <h1 class="mb-0 font-weight-normal">&dollar;6,120</h1>
                                        </div>
                                        <div class="badge badge-success">+52%</div>
                                    </div>
                                </div>
                                <div class="card card-body mb-0">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="card-text text-muted mb-1">Earned this week</p>
                                            <h1 class="mb-0 font-weight-normal">&dollar;14,276</h1>
                                        </div>
                                        <div class="badge badge-primary">+16%</div>
                                    </div>
                                </div>
                                <div class="card card-body mb-0">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="card-text text-muted mb-1">Earned this month</p>
                                            <h1 class="mb-0 font-weight-normal">&dollar;39,882</h1>
                                        </div>
                                        <div class="badge badge-warning">+5%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 bg-primary">
                                <div id="morris-area-chart" style="width: 100%; height: 250px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">

                                <div class="card card-body card-profile align-items-center justify-content-center">
                                    <img src="assets/images/avatars/person-3.jpg" class="img-fluid rounded-circle mr-2 mb-1" width="100" alt="">
                                    <p class="h3 mb-0">John Strehl</p>
                                    <p>Top Seller (last month)</p>
                                    <div class="text-center mb-2">
                                        <span class="badge badge-warning mr-2 mb-1">JavaScript</span>
                                        <span class="badge badge-primary mr-2 mb-1">Bootstrap</span>
                                        <span class="badge badge-danger mr-2 mb-1">PhotoShop</span>
                                        <span class="badge badge-info mr-2 mb-1">HTML</span>
                                        <span class="badge badge-gray mr-2 mb-1">Rails</span>
                                    </div>
                                    <a href="profile.html" class="btn btn-white align-middle">
                                        <i class="material-icons md-18 align-middle">account_box</i>
                                        <span class="align-middle">View Details</span>
                                    </a>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="card-title">
                                            Top Earnings
                                        </div>
                                        <i class="material-icons ml-auto text-muted">local_atm</i>
                                    </div>
                                    <ul class="list-group list-group-flush">

                                        <li class="list-group-item d-flex flex-row">
                                            <img src="assets/images/avatars/person-1.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                                            <div class="media-body">
                                                <span class="">Has earned</span>
                                                <strong>$1,742.00</strong>
                                                <div><small class="text-muted">5 minutes ago</small></div>
                                            </div>
                                        </li>

                                        <li class="list-group-item d-flex flex-row">
                                            <img src="assets/images/avatars/person-2.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                                            <div class="media-body">
                                                <span class="">Has earned</span>
                                                <strong>$4,120.55</strong>
                                                <div><small class="text-muted">14 minutes ago</small></div>
                                            </div>
                                        </li>

                                        <li class="list-group-item d-flex flex-row">
                                            <img src="assets/images/avatars/person-3.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                                            <div class="media-body">
                                                <span class="">Uploaded a new</span>
                                                <strong>video</strong>
                                                <div><small class="text-muted">32 minutes ago</small></div>
                                            </div>
                                        </li>

                                        <li class="list-group-item d-flex flex-row">
                                            <img src="assets/images/avatars/person-4.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                                            <div class="media-body">
                                                <span class="">Has earned</span>
                                                <strong>$2,721.23</strong>
                                                <div><small class="text-muted">3 hours ago</small></div>
                                            </div>
                                        </li>

                                        <li class="list-group-item d-flex flex-row">
                                            <img src="assets/images/avatars/person-5.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                                            <div class="media-body">
                                                <span class="">Uploaded a new</span>
                                                <strong>video</strong>
                                                <div><small class="text-muted">4 hours ago</small></div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="card-title">
                                            Rankings
                                        </div>
                                        <i class="material-icons ml-auto text-muted">local_activity</i>
                                    </div>
                                    <ul class="list-group list-group-flush">

                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <span class="lead mr-1">1.</span>
                                                <img src="assets/images/avatars/person-5.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                                                <div class="media-body lh-12">
                                                    <a href="#">John Mix</a><br/>
                                                    <small class="text-muted">54 done</small>
                                                </div>
                                                <div class="lead">
                                                    <strong class="align-middle">98%</strong> <i class="material-icons md-18 align-middle text-success">arrow_upward</i>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <span class="lead mr-1">2.</span>
                                                <img src="assets/images/avatars/person-3.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                                                <div class="media-body lh-12">
                                                    <a href="#">Steven Short</a><br/>
                                                    <small class="text-muted">11 done</small>
                                                </div>
                                                <div class="lead">
                                                    <strong class="align-middle">33%</strong> <i class="material-icons md-18 align-middle text-danger">arrow_downward</i>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <span class="lead mr-1">3.</span>
                                                <img src="assets/images/avatars/person-6.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                                                <div class="media-body lh-12">
                                                    <a href="#">Mark Ups</a><br/>
                                                    <small class="text-muted">1 done</small>
                                                </div>
                                                <div class="lead">
                                                    <strong class="align-middle">8%</strong> <i class="material-icons md-18 align-middle text-danger">arrow_downward</i>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <span class="lead mr-1">4.</span>
                                                <img src="assets/images/avatars/person-2.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                                                <div class="media-body lh-12">
                                                    <a href="#">Tara Knows</a><br/>
                                                    <small class="text-muted">35 done</small>
                                                </div>
                                                <div class="lead">
                                                    <strong class="align-middle">86%</strong> <i class="material-icons md-18 align-middle text-success">arrow_upward</i>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <span class="lead mr-1">5.</span>
                                                <img src="assets/images/avatars/person-1.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="">
                                                <div class="media-body lh-12">
                                                    <a href="#">Lucas Kane</a><br/>
                                                    <small class="text-muted">25 done</small>
                                                </div>
                                                <div class="lead">
                                                    <strong class="align-middle">86%</strong> <i class="material-icons md-18 align-middle text-success">arrow_upward</i>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="card-title">Recent Orders</div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-6 d-flex justify-content-md-end sort-index">
                                                <div class="dropdown mr-2">
                                                    <button class="btn btn-white dropdown-toggle" type="button" id="sortOrdersDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Sort By
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Date</a>
                                                        <a class="dropdown-item" href="#">ID</a>
                                                        <a class="dropdown-item" href="#">Name</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown mr-4">
                                                    <button class="btn btn-white dropdown-toggle" type="button" id="filterOrdersDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Filter
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="filterOrdersDropdown">
                                                        <a class="dropdown-item" href="#">Delivered</a>
                                                        <a class="dropdown-item" href="#">Failed</a>
                                                        <a class="dropdown-item" href="#">Pending</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-6">
                                                <form class="form-inline float-right">
                                                    <div class="form-group mr-3">
                                                        <label class="control-label mr-1">From:</label>
                                                        <input type="text" class="datepicker form-control" value="10/24/2017">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="control-label mr-1">To: </label>
                                                        <input type="text" class="datepicker form-control" value="10/25/2017">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr class="bg-fade">
                                            <th style="width: 120px;">Date</th>
                                            <th>Name</th>
                                            <th style="width: 100px;"># INV</th>
                                            <th style="width: 140px;">Amount</th>
                                            <th style="width: 100px">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="align-middle">23 Feb 2018</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Tara Knows</a>
                                                    <em class="text-muted ml-1">(Sales Manager)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#31982</a>
                                            </td>
                                            <td class="align-middle">&dollar;8650.99</td>
                                            <td class="align-middle">
                                                <div class="badge badge-warning">pending</div>
                                            </td>
                                            <td class="align-middle" style="width:40px">
                                                <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons md-18 align-middle">more_vert</i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">assignment</i>
                                                        <span class="align-middle">Manage</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">content_copy</i>
                                                        <span class="align-middle">Duplicate</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <i class="material-icons md-14 align-middle">delete</i>
                                                        <span class="align-middle">Delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">09 Feb 2018</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Karen Smith</a>
                                                    <em class="text-muted ml-1">(Sales Representative)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#11102</a>
                                            </td>
                                            <td class="align-middle">&dollar;3445.00</td>
                                            <td class="align-middle">
                                                <div class="badge badge-danger">failed</div>
                                            </td>
                                            <td class="align-middle" style="width:40px">
                                                <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons md-18 align-middle">more_vert</i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">assignment</i>
                                                        <span class="align-middle">Manage</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">content_copy</i>
                                                        <span class="align-middle">Duplicate</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <i class="material-icons md-14 align-middle">delete</i>
                                                        <span class="align-middle">Delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">08 Jan 2017</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Steven Short</a>
                                                    <em class="text-muted ml-1">(Sales Manager)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#11990</a>
                                            </td>
                                            <td class="align-middle">&dollar;2390.75</td>
                                            <td class="align-middle">
                                                <div class="badge badge-success">delivered</div>
                                            </td>
                                            <td class="align-middle" style="width:40px">
                                                <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons md-18 align-middle">more_vert</i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">assignment</i>
                                                        <span class="align-middle">Manage</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">content_copy</i>
                                                        <span class="align-middle">Duplicate</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <i class="material-icons md-14 align-middle">delete</i>
                                                        <span class="align-middle">Delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">18 Dec 2017</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Mark Ups</a>
                                                    <em class="text-muted ml-1">(CEO / Co-Founder)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#40915</a>
                                            </td>
                                            <td class="align-middle">&dollar;19231.50</td>
                                            <td class="align-middle">
                                                <div class="badge badge-success">delivered</div>
                                            </td>
                                            <td class="align-middle" style="width:40px">
                                                <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons md-18 align-middle">more_vert</i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">assignment</i>
                                                        <span class="align-middle">Manage</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">content_copy</i>
                                                        <span class="align-middle">Duplicate</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <i class="material-icons md-14 align-middle">delete</i>
                                                        <span class="align-middle">Delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">17 Nov 2017</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Steven Short</a>
                                                    <em class="text-muted ml-1">(Sales Assistant Manager)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#40912</a>
                                            </td>
                                            <td class="align-middle">&dollar;19231.50</td>
                                            <td class="align-middle">
                                                <div class="badge badge-success">delivered</div>
                                            </td>
                                            <td class="align-middle" style="width:40px">
                                                <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons md-18 align-middle">more_vert</i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">assignment</i>
                                                        <span class="align-middle">Manage</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">content_copy</i>
                                                        <span class="align-middle">Duplicate</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <i class="material-icons md-14 align-middle">delete</i>
                                                        <span class="align-middle">Delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle">08 Oct 2017</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Karen Smith</a>
                                                    <em class="text-muted ml-1">(Sales Representative)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#1928</a>
                                            </td>
                                            <td class="align-middle">&dollar;1100.50</td>
                                            <td class="align-middle">
                                                <div class="badge badge-danger">failed</div>
                                            </td>
                                            <td class="align-middle" style="width:40px">
                                                <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons md-18 align-middle">more_vert</i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">assignment</i>
                                                        <span class="align-middle">Manage</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">content_copy</i>
                                                        <span class="align-middle">Duplicate</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <i class="material-icons md-14 align-middle">delete</i>
                                                        <span class="align-middle">Delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- // END drawer-layout__content -->

        <div id="menu">
            <?php echo menu(); ?>
        </div>

    </div>
    <!-- // END drawer-layout -->

</body>

<footer>
    <?php echo footer(); ?>
</footer>

</html>