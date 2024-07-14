<?php
// CI Settings
include '../../includes/config.php';
include '../../controllers/coju.php';
include '../../models/coju.php';
$cInstance = new c_coju($host,$user,$pass,$db);
session_start();
$iduser = $_SESSION["idSession"];
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Mis Dominios (Sistemas)</h2>
    </div>
    <div class="col-md-4">
        <form onsubmit="return false;">
            <br>
            <label for="selection">Selecciona la Sucursal</label>
            <select class="form-control" id="selection">
                <option value="1">Reporte Control Interno</option>
                <option value="2">Reporte Comentarios (Control Interno)</option>
            </select>
        </form>
    </div>
    <hr>

    <div id="newTable">
        
    </div>
</div>

<script>
    $('#data-table').dataTable(
        {
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ],
            pageLength : 20,
            lengthMenu: [[5, 10, 20, 50, -1], [5, 10, 20, 50, 'Todos']]
        }
    );

    $("#selection").change(function() {
        var v = $(this).val();
        reportCI(v);
    });

    reportCI(1);

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    });

    function printqr(){
        $("#qr").print();
    }
</script>
