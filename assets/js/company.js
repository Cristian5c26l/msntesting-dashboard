/*COJU JS*/
/* FUNCTION ADD NEW COMPANY */
function newCompany(){
    var option = 1;
    var rfc = $('#rfc').val();
    var rs = $('#rs').val();
    var usu = $('#usu').val();
    var pswd = $('#pswd').val();
    var objeto = $('#objeto').val();
    var nombre1 = $('#nombre1').val();
    var nombre2 = $('#nombre2').val();
    var ap = $('#ap').val();
    var am = $('#am').val();
    var t1 = $('#t1').val();
    var t2 = $('#t2').val();
    var tc = $('#tc').val();
    var c1 = $('#c1').val();
    var c2 = $('#c2').val();
    var mo = $('#mo').val();
    var co = $('#co').val();
    var calle = $('#calle').val();
    var ni = $('#ni').val();
    var ne = $('#ne').val();
    var col = $('#col').val();
    var del = $('#del').val();
    var cp = $('#cp').val();
    var edo = $('#edo').val();
    var pais = $('#pais').val();

    if ($('#check').is(':checked')) {
      var check = 1;
    }else{
      var check = "";
    }

    $(':input[type="submit"]').prop('disabled', true);
    $.ajax({
        url: 'controllers/call_company.php',
        data: { 
            option:option,
            rfc:rfc,
            rs:rs,
            usu:usu,
            pswd:pswd,
            objeto:objeto,
            nombre1:nombre1,
            nombre2:nombre2,
            ap:ap,
            am:am,
            t1:t1,
            t2:t2,
            tc:tc,
            check:check,
            c1:c1,
            c2:c2,
            mo:mo,
            co:co,
            calle:calle,
            ni:ni,
            ne:ne,
            col:col,
            del:del,
            cp:cp,
            edo:edo,
            pais:pais
        },
        method: 'post',
        beforeSend: function(){
        },
        success: function(response){
            alert('La empresa ha sido guardada');
            menu('company/new');
        }
    });
}
//FUNCTION GO TO VIEW EDIT TURN
function editableCompany(id){
    $.ajax({
        url: 'views/company/edit.php',
        data: { id: id },
        method: 'post',
        beforeSend: function(){ 
        },
        success: function(response){
            $('#content').html(response);
        }
    });
}
//FUNCTION EDIT COMPANY
function editCompany(id){
    var id = id;
    var option = 3;
    var id_emp = $('#id_emp').val();
    var rfc = $('#rfc').val();
    var rs = $('#rs').val();
    var usu = $('#usu').val();
    var objeto = $('#objeto').val();
    var nombre1 = $('#nombre1').val();
    var nombre2 = $('#nombre2').val();
    var ap = $('#ap').val();
    var am = $('#am').val();
    var t1 = $('#t1').val();
    var t2 = $('#t2').val();
    var tc = $('#tc').val();
    var c1 = $('#c1').val();
    var c2 = $('#c2').val();
    var mo = $('#mo').val();
    var co = $('#co').val();
    var calle = $('#calle').val();
    var ni = $('#ni').val();
    var ne = $('#ne').val();
    var col = $('#col').val();
    var del = $('#del').val();
    var cp = $('#cp').val();
    var edo = $('#edo').val();
    var pais = $('#pais').val();

    if ($('#check').is(':checked')) {
      var check = 1;
    }else{
      var check = 'NULL';
    }

    $(':input[type="submit"]').prop('disabled', true);
    $.ajax({
        url: 'controllers/call_company.php', 
        data: { 
            id:id,
            id_emp:id_emp, 
            option:option,
            rfc:rfc,
            rs:rs,
            usu:usu,
            objeto:objeto,
            nombre1:nombre1,
            nombre2:nombre2,
            ap:ap,
            am:am,
            t1:t1,
            t2:t2,
            tc:tc,
            check:check,
            c1:c1,
            c2:c2,
            mo:mo,
            co:co,
            calle:calle,
            ni:ni,
            ne:ne,
            col:col,
            del:del,
            cp:cp,
            edo:edo,
            pais:pais
        },
        method: 'post',
        beforeSend: function(){
            
        },
        success: function(response){
            alert('El registro ha sido Modificado Correctamente');
              menu('company/new');
        }
    });
}


//FUNCTION DELETE COMPANY
function delCompany(id){
    var option = 2;
    var r = confirm("¿Estas seguro de Eliminar la Compañia?");
    if (r == true){
        $.ajax({
            url: 'controllers/call_company.php',
            data: { 
                option:option, 
                id: id 
            },
            method: 'post',
            beforeSend: function(){
                
            },
            success: function(response){
                alert('La empresa ha sido eliminada');
                // $('#s'+id).html('Inactivo');
                // $('#s'+id).attr('class', '');
                // $('#s'+id).addClass('badge badge-danger');
                 menu('company/new');
            }
        });

    }
}

function htmlspecialchars_decode (string, quoteStyle) { // eslint-disable-line camelcase
    let optTemp = 0
    let i = 0
    let noquotes = false
    if (typeof quoteStyle === 'undefined') {
      quoteStyle = 2
    }
    string = string.toString()
      .replace(/&lt;/g, '<')
      .replace(/&gt;/g, '>')
    const OPTS = {
      ENT_NOQUOTES: 0,
      ENT_HTML_QUOTE_SINGLE: 1,
      ENT_HTML_QUOTE_DOUBLE: 2,
      ENT_COMPAT: 2,
      ENT_QUOTES: 3,
      ENT_IGNORE: 4
    }
    if (quoteStyle === 0) {
      noquotes = true
    }
    if (typeof quoteStyle !== 'number') {
      // Allow for a single string or an array of string flags
      quoteStyle = [].concat(quoteStyle)
      for (i = 0; i < quoteStyle.length; i++) {
        // Resolve string input to bitwise e.g. 'PATHINFO_EXTENSION' becomes 4
        if (OPTS[quoteStyle[i]] === 0) {
          noquotes = true
        } else if (OPTS[quoteStyle[i]]) {
          optTemp = optTemp | OPTS[quoteStyle[i]]
        }
      }
      quoteStyle = optTemp
    }
    if (quoteStyle & OPTS.ENT_HTML_QUOTE_SINGLE) {
      // PHP doesn't currently escape if more than one 0, but it should:
      string = string.replace(/&#0*39;/g, "'")
      // This would also be useful here, but not a part of PHP:
      // string = string.replace(/&apos;|&#x0*27;/g, "'");
    }
    if (!noquotes) {
      string = string.replace(/&quot;/g, '"')
    }
    // Put this in last place to avoid escape being double-decoded
    string = string.replace(/&amp;/g, '&')
    return string
  }