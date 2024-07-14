<?php
// User Settings
/*include '../../includes/config.php';
include '../../controllers/tickets.php';
include '../../models/tickets.php';
$supportInstance = new c_ticket($host,$user,$pass,$db);*/
?>

<div class="card">
    <h2 class="">Scan QR Inventario Sistemas (Revisión de Inventario)</h2>
    <div class="row">
        <div id="qr-reader" class="col-lg-6"></div>
        <div id="component-view" class="col-lg-6">
            Aquí se mostraran los resultados del Scanner
        </div>
        <div id="qr-reader-results"></div>
    </div>
    <hr>
    <div class="row">
        <div id="component-h" class="col-lg-6">
            <h3>Historial de Revisiones</h3>
            <div id="component-history" class="col-lg-12">
                Aquí se Mostrara el Historial de Revisiones
            </div>
        </div>
        <div id="component-b" class="col-lg-6">
            <h3>Historial de Respaldos</h3>
            <div id="component-backup" class="col-lg-12">
                Aquí se Mostrara el Historial de Respaldos
            </div>
        </div>
    </div>
</div>

<script>
    var resultContainer = document.getElementById('qr-reader-results');
    var lastResult, countResults = 0;

    function onScanSuccess(decodedText, decodedResult) {
        if (decodedText !== lastResult) {
            ++countResults;
            lastResult = decodedText;
            // Handle on success condition with the decoded message.
            reviewQR(decodedText);
            console.log(`Scan result ${decodedText}`, decodedResult);
        }
    }

    var html5QrcodeScanner = new Html5QrcodeScanner("qr-reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);

    
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
</script>

