<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/hpanel.php';
include '../../models/hpanel.php';
$panelInstance = new c_panel($host,$user,$pass,$db);
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Mis Publicaciones</h2>
    </div>
    <div class="card card-body">
        <form class="row" id="blog" onsubmit="addblog(); return false;">
            <div class="form-group col-lg-6">
                <input id="title" type="text" class="form-control border-dark" value="" placeholder="Titulo" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="author" type="text" class="form-control border-dark" value="" placeholder="Autor" required>
            </div>
            <div class="form-group col-lg-6">
                <select class="form-control" name="" id="type" required>
                    <option value="">Selecciona donde Publicar</option>
                    <option value="1">Blog Rand</option>
                    <option value="4">Blog Interno Gedes</option>
                </select>
            </div>
            <div class="form-group col-lg-12">
                <textarea id="basic-conf" placeholder="Agrega aquí tu texto">
                    
                </textarea>
            </div>
            <div class="form-group col-lg-6">
               
            </div>
            <div class="form-group col-lg-6">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Publicar</button> 
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Mis Publicaciones</h2>
    </div>

    <hr>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered" style="width:100%">
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Author</th>
                    <th>Fecha Publicación</th>
                    <th>Tipo</th>
                    <th>Status</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php $panelInstance->selectfullblog(); ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/eod73py7r80qhrz2mqe6pk6dh0vat0v4t33jii6c61k29ia0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">

    function tiny(){
        
        tinymce.init({
            selector: '#basic-conf',
            height: 300,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullpage | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    }
    
    $( document ).ready(function() {
        tiny();
    });
    
</script>
<script src="https://cdn.tiny.cloud/1/eod73py7r80qhrz2mqe6pk6dh0vat0v4t33jii6c61k29ia0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    $('#data-table').dataTable();
</script>