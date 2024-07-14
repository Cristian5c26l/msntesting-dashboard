<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/hpanel.php';
include '../../models/hpanel.php';
$panelInstance = new c_panel($host,$user,$pass,$db);
$id = $_POST['id'];
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Edición de Publicacion</h2>
    </div>
    <div class="card card-body">
        <?php $panelInstance->editableblog($id); ?>
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