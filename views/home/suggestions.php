<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/projects.php';
include '../../models/projects.php';
$projectInstance = new c_project($host,$user,$pass,$db);
session_start();
$id = $_SESSION['idSession'];
?>
<div class="card">
    <div class="table-responsive">
        <table class="table m-0">
            <thead>
                <tr>
                    <th>Proyectos</th>
                    <th>Tareas</th>
                    <th>Avance %</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $projectInstance->selectUserProjectsL(1); ?>
            </tbody>
        </table>
    </div>
</div>

<!-- content -->
<!--div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100"-->
   <!-- main content -->
   <!--div class="container-fluid">
        <div class="row font-1">
            <div class="col-lg-4">
                <div class="card card-body flex-row align-items-center">
                <h5 class="m-0"><i class="material-icons align-middle text-muted md-18">content_paste</i> Hoy</h5>
                <div class="text-primary ml-auto">19</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-body flex-row align-items-center">
                <h5 class="m-0"> Hace 7 Days</h5>
                <div class="text-primary ml-auto">91</div>
                <i class="material-icons text-success md-18 ml-1">arrow_upward</i>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-body flex-row align-items-center">
                <h5 class="m-0"> Ultimos 30 Días</h5>
                <div class="text-primary ml-auto">545</div>
                <i class="material-icons text-success md-18 ml-1">arrow_upward</i>
                </div>
            </div>
        </div-->
        <!--div class="card card-earnings">
            <div class="card-group">
                <div class="card card-body mb-0">
                <div class="media align-items-center">
                    <div class="media-body">
                        <p class="card-text text-muted mb-1">Hoy</p>
                        <h1 class="mb-0 font-weight-normal">28</h1>
                    </div>
                    <div class="badge badge-success">+52%</div>
                </div>
                </div>
                <div class="card card-body mb-0">
                <div class="media align-items-center">
                    <div class="media-body">
                        <p class="card-text text-muted mb-1">Hace una Semana</p>
                        <h1 class="mb-0 font-weight-normal">16</h1>
                    </div>
                    <div class="badge badge-primary">+16%</div>
                </div>
                </div>
                <div class="card card-body mb-0">
                <div class="media align-items-center">
                    <div class="media-body">
                        <p class="card-text text-muted mb-1">Hace un Mes</p>
                        <h1 class="mb-0 font-weight-normal">22</h1>
                    </div>
                    <div class="badge badge-warning">+5%</div>
                </div>
                </div>
            </div>
        </div-->
        <!--div class="row">
            <div class="col-lg-4">
                <div >
                    <div class="card-container">
                        <span class="pro">DEV</span>
                        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
                        <h3>Comunicación Interna</h3>
                        <p></p>
                        <div class="buttons">
                            <button class="primary">
                            Mensaje
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4">
                <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="card-title">
                        Notificaciones
                    </div>
                    <i class="material-icons ml-auto text-muted">local_atm</i>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-1.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Compro un Mouse</span>
                            <div><small class="text-muted">Hace 5 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-2.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Renovo Dominio</span>
                            <div><small class="text-muted">Hace 14 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-3.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Estancado por (Área)</span>
                            <div><small class="text-muted">Hace 32 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-4.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Necesita apoyo de Contratos para avanzar</span>
                            <div><small class="text-muted">Hace 3 horas </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-5.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Subio 56 Imagenes para Rand</span>
                            <div><small class="text-muted">4 horas </small></div>
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
                            <a href="#">Allan</a><br/>
                            <small class="text-muted">54 Terminados</small>
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
                            <a href="#">Ramón</a><br/>
                            <small class="text-muted">11 Terminados</small>
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
                            <a href="#">Roberto</a><br/>
                            <small class="text-muted">1 Terminados</small>
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
                            <a href="#">Sara</a><br/>
                            <small class="text-muted">35 Terminados</small>
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
                            <a href="#">Gil</a><br/>
                            <small class="text-muted">25 Terminados</small>
                            </div>
                            <div class="lead">
                            <strong class="align-middle">86%</strong> <i class="material-icons md-18 align-middle text-success">arrow_upward</i>
                            </div>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </div-->
        <!-- Other Contain -->
        <!--div class="row">
            <div class="col-lg-4">
                <article class="card2 card--2">
                    <div class="card__info-hover">
                        Like
                        <div class="card__clock-info">
                            clock
                        </div>
                        
                    </div>
                    <div class="card__img"></div>
                    <a href="#" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category"> Precio</span>
                        <h3 class="card__title">Dólar</h3>
                        <span class="card__by">de <a href="#" class="card__author" title="author">Banxico</a></span>
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="card-title">
                        Notificaciones
                    </div>
                    <i class="material-icons ml-auto text-muted">local_atm</i>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-1.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Compro un Mouse</span>
                            <div><small class="text-muted">Hace 5 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-2.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Renovo Dominio</span>
                            <div><small class="text-muted">Hace 14 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-3.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Estancado por (Área)</span>
                            <div><small class="text-muted">Hace 32 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-4.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Necesita apoyo de Contratos para avanzar</span>
                            <div><small class="text-muted">Hace 3 horas </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-5.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Subio 56 Imagenes para Rand</span>
                            <div><small class="text-muted">4 horas </small></div>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
             <div class="col-lg-4">
                <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="card-title">
                        Notificaciones
                    </div>
                    <i class="material-icons ml-auto text-muted">local_atm</i>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-1.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Compro un Mouse</span>
                            <div><small class="text-muted">Hace 5 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-2.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Renovo Dominio</span>
                            <div><small class="text-muted">Hace 14 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-3.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Estancado por (Área)</span>
                            <div><small class="text-muted">Hace 32 minutos </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-4.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Necesita apoyo de Contratos para avanzar</span>
                            <div><small class="text-muted">Hace 3 horas </small></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex flex-row">
                        <img src="assets/images/avatars/person-5.jpg" alt="" class="rounded-circle mr-2" width="30" height="30">
                        <div class="media-body">
                            <span class="">Subio 56 Imagenes para Rand</span>
                            <div><small class="text-muted">4 horas </small></div>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </div-->
   </div>
</div>

