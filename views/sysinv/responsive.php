<?php
if ($_REQUEST['id']) {
    include '../../includes/config.php';
    include '../../controllers/sysinv.php';
    include '../../models/sysinv.php';

    $invInstance = new c_sysinv($host, $user, $pass, $db);

    session_start();
    $iduser = $_SESSION["idSession"];// iduser es id de sesion, no el id del usuario
    $id = $_POST['id'];// idpc
    $iduserins = $_POST['iduserins'];// id del usuario

?>

<div class="card">
    <div class="card-header">
        <h1 style="text-align:center">Responsiva de Usuario (Sistemas)</h1>
    </div>
    <div class="card-body">
        <div class="btn btn-primary col-md-2" onclick="menu('sysinv/newinsume');">< Regresar</div>
        <br>
        <button class="btn btn-primary mt-3" onclick="generateResponsivePDF();">Generar PDF</button>
        <br><br>
        <div id="responsiveContent">
            <?php echo $invInstance->responsive($id, $iduserins); ?>
        </div>
    </div>
</div>

<script>

// function generateResponsivePDF() {
//         const val = htmlToPdfmake(document.getElementById('responsiveContent').innerHTML);
//         const dd = { content: val };
//         pdfMake.createPdf(dd).open();
//     }

function buildPdfTable(tableId) {
  var pdfTable = {
    table: {
      headerRows: 1,
      widths: [],
      body: []
    },
    layout: {
      fillColor: function (rowIndex, node, columnIndex) {
        return (rowIndex % 2 === 0) ? '#f3f3f3' : null;
      },
      hLineWidth: function (i, node) {
        return 0.5;
      },
      vLineWidth: function (i, node) {
        return 0.5;
      },
      hLineColor: function (i, node) {
        return '#ccc';
      },
      vLineColor: function (i, node) {
        return '#ccc';
      },
    }
  };

  var table = document.getElementById(tableId);
  var rows = table.querySelectorAll("tr");

  if (rows[0].id === 'no-data') {
    pdfTable = {
    table: {
      widths: ['*', '*'], // Adjusts the width of both columns
      body: []
    },
    layout: {
      fillColor: function (rowIndex, node, columnIndex) {
        return (rowIndex % 2 === 0) ? '#f3f3f3' : null;
      },
      hLineWidth: function (i, node) {
        return 0.5;
      },
      vLineWidth: function (i, node) {
        return 0.5;
      },
      hLineColor: function (i, node) {
        return '#ccc';
      },
      vLineColor: function (i, node) {
        return '#ccc';
      },
    }
  };


    pdfTable.table.widths = ['auto'];
    // console.log({tableId});
    var row = [];
    var cols = rows[0].querySelectorAll("td");
    cols.forEach(function(col) {
      row.push({ text: col.innerText,  colSpan: 1, alignment: 'center', style: 'noData'});
    });
    pdfTable.table.body.push(row);
    return pdfTable;
}

  // Extract header row
  var headerRow = [];
  var headers = rows[0].querySelectorAll("th, td");

  headers.forEach(function(header) {
    headerRow.push({ text: header.innerText, style: 'tableHeader' });
    pdfTable.table.widths.push('auto'); // Set column widths to 'auto'
  });
  pdfTable.table.body.push(headerRow);

  // Extract body rows
  for (var i = 1; i < rows.length; i++) {
    var row = [];
    var cols = rows[i].querySelectorAll("td");
    cols.forEach(function(col) {
      row.push({ text: col.innerText, style: 'tableCell' });
    });
    pdfTable.table.body.push(row);
  }

  return pdfTable;
}

function buildPdfTableForInsumeOwner(tableId) {
  var pdfTable = {
    table: {
      widths: ['*', '*'], // Adjusts the width of both columns
      body: []
    },
    layout: {
      fillColor: function (rowIndex, node, columnIndex) {
        return (rowIndex % 2 === 0) ? '#f3f3f3' : null;
      },
      hLineWidth: function (i, node) {
        return 0.5;
      },
      vLineWidth: function (i, node) {
        return 0.5;
      },
      hLineColor: function (i, node) {
        return '#ccc';
      },
      vLineColor: function (i, node) {
        return '#ccc';
      },
    }
  };

  var table = document.getElementById(tableId);
  var rows = table.querySelectorAll("tr");

  if (rows[0].id === 'no-data') {
    pdfTable.table.widths = ['auto'];
    // console.log({tableId});
    var row = [];
    var cols = rows[0].querySelectorAll("td");
    cols.forEach(function(col) {
      row.push({ text: col.innerText,  colSpan: 1, alignment: 'center', style: 'noData'});
    });
    pdfTable.table.body.push(row);
    return pdfTable;
}

  // Extract rows
  for (var i = 0; i < rows.length; i++) {
    var row = [];
    var cols = rows[i].querySelectorAll("td");
    cols.forEach(function(col) {
      row.push({ text: col.innerText, style: 'tableCell' });
    });
    pdfTable.table.body.push(row);
  }

  return pdfTable;
}

        function generateResponsivePDF() {
            var insumeName = document.getElementById('insume-name')?.textContent;
            var docDefinition = {
                pageSize: 'A4',
                pageMargins: [40, 60, 40, 60],
                content: [
                    { text: `Información del propietario del componente ${insumeName ? insumeName : ''} del insumo del usuario`, style: 'header' },
                    buildPdfTableForInsumeOwner('insume-owner-data-table'),
                    { text: 'Soportes realizados', style: 'header',  margin: [0, 20, 0, 10] },
                    buildPdfTable('all-made-maintenance-of-insume-data-table'),
                    { text: 'Todos los insumos asignados al usuario', style: 'header',  margin: [0, 20, 0, 10] },
                    buildPdfTable('all-assigned-insumes-data-table')
                ],
                styles: {
                    header: {
                        fontSize: 20,
                        bold: true,
                        color: '#007bff',
                        margin: [0, 0, 0, 10],
                        alignment: 'center',
                        fillColor: '#e0e0e0',
                    },
                    subheader: {
                        fontSize: 16,
                        italics: true,
                        color: '#333',
                        margin: [0, 0, 0, 5],
                        
                    },
                    tableHeader: {
                        bold: true,
                        fontSize: 13,
                        color: '#fff',
                        fillColor: '#007bff',
                        alignment: 'center',
                    },
                    tableCell: {
                        fontSize: 12,
                        margin: [0, 5, 0, 5],
                        alignment: 'center',
                    },
                    table: {
                        margin: [0, 5, 0, 15],
                        alignment: 'center',
                    },
                    noData: {
                        fontSize: 12,
                        italic: true,
                        color: '#999',
                        alignment: 'center'
                    }
                },
                defaultStyle: {
                    fontSize: 12,
                    color: '#333'
                }
            };

            pdfMake.createPdf(docDefinition).open();
        }
    
</script>


<?php
} else {
    echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
}
?>