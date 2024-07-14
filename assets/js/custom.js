/*Custom JS*/



/*Function to Login*/



function login(){

    var option = 1;

    var username = $('#username').val();

    var password = $('#password').val();



    $.ajax({

        url: 'controllers/ajaxcall.php',

        data: { option: option, username: username, password: password },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            console.log(response);

            window.location.href = "./";

        }

    });

}



/* function to Logout */



function logout(exit){

    var exit = exit;

    var option = 100;

    $.ajax({

        url: 'controllers/ajaxcall.php',

        data: { option: option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            console.log(response);

            if(exit == 1){

                window.location.href = "../login.php";

            }else{

                window.location.href = "./login.php";

            }

        }

    });

}



function recoveryPass(){

    var email = $('#email').val();

    var option = 2;

    $.ajax({

        url: 'controllers/ajaxcall.php',

        data: { option: option, email:email },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            //console.log(response);

            if(response==0){

                alert('Verifica tu correo, es posible que no exista');

            }else{

                alert('Un link de recuperación ha sido enviado a tu correo/email');

                $('#email').val('')

            }

        }

    });

}



/* User Settings and controls*/

function addUser(){

    var option = 4;



    var r = confirm("Asegurate que los datos esten correctos antes de continuar, ¿Deseas Continuar?");

    if (r == true){



        var name = $('#name').val();

        var last = $('#last').val();

        var email = $('#email').val();

        var phone = $('#phone').val();

        var mobile = $('#mobile').val();

        var gender = $('#gender').val();

        var birthday = $('#birthday').val();

        var street = $('#street').val();

        var num_ext = $('#num_ext').val();

        var num_int = $('#num_int').val();

        var cp = $('#cp').val();

        var username = $('#username').val();

        var password = $('#password').val();

        var date_in = $('#date_in').val();

        var area = $('#area').val();

        var job = $('#job').val();



        $.ajax({

            url: 'controllers/ajaxcall.php',

            data: { option:option, name:name, last:last, email:email, phone:phone, mobile:mobile, gender:gender, 

                birthday:birthday, street:street, num_ext:num_ext, num_int:num_int, cp:cp, username:username, password:password, 

                date_in:date_in, area:area, job:job },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El Empleado ha sido Agregado');

                console.log(response);

                menu('user/user');

            }

        });



    } else {

        //cancel

    }    

}





function editUser(){

    var option = 5;

    

    var id = $('#id').val();

    var name = $('#name').val();

    var last = $('#last').val();

    var email = $('#email').val();

    var phone = $('#phone').val();

    var mobile = $('#mobile').val();

    var gender = $('#gender').val();

    var birthday = $('#birthday').val();

    var street = $('#street').val();

    var num_ext = $('#num_ext').val();

    var num_int = $('#num_int').val();

    var cp = $('#cp').val();

    var date_in = $('#date_in').val();

    var area = $('#area').val();



    $.ajax({

        url: 'controllers/ajaxcall.php',

        data: { option:option, id:id, name:name, last:last, email:email, phone:phone, mobile:mobile, gender:gender, 

            birthday:birthday, street:street, num_ext:num_ext, num_int:num_int, cp:cp, date_in:date_in, area:area },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El Registro ha sido Editado');

            console.log(response);

            menu('user/user');

        }

    });

}



function edit(id){

    

    $.ajax({

        url: 'views/user/editUser.php',

        data: { id: id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



//directory controls

function addDir(){

    var option = 10;

    var type = $('#type').val();

    var name = $('#name').val();

    var corp = $('#corp').val();

    var email = $('#email').val();

    var phone = $('#phone').val();

    var ext = $('#ext').val();

    var mobile = $('#mobile').val();

    var other = $('#other').val();



    $.ajax({

        url: 'controllers/ajaxcall.php',

        data: { option:option, name:name, corp:corp, email:email, phone:phone, ext:ext, mobile:mobile, other:other, type:type },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El Registro ha sido Agregado');

            console.log(response);

            menu('reception/list');

        }

    });

}



function editableDir(id){

    

    $.ajax({

        url: 'views/reception/editlist.php',

        data: { id: id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editDir(){

    var option = 11;



    var id = $('#id').val();

    var name = $('#name').val();

    var corp = $('#corp').val();

    var email = $('#email').val();

    var phone = $('#phone').val();

    var ext = $('#ext').val();

    var mobile = $('#mobile').val();

    var other = $('#other').val();



    $.ajax({

        url: 'controllers/ajaxcall.php',

        data: { option:option, id:id, name:name, corp:corp, email:email, phone:phone, ext:ext, mobile:mobile, other:other },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El Registro ha sido Editado');

            console.log(response);

            menu('reception/list');

        }

    });

}



function delDir(id){

    var option = 12;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/ajaxcall.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('reception/list');

            }

        });



    } else {

        //cancel

    }

}



//End Directory



function del(id){

    var option = 6;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/ajaxcall.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('user/user');

            }

        });



    } else {

        //cancel

    }

}



/* End User Settings And Controls*/



/*Menu controls*/



function menu(page,opt){

    //send vars

    

    //init ajax

    $.ajax({

        url: 'views/'+page+'.php',

        data: { },

        method: 'post',

        beforeSend: function(){

            $('').html();

        },

        success: function(response){

            $('#content').html(response);

            if(opt==1){



            }

        }

    });

}



/* New Ticket */



function newTicket(){

    var option = 1;

    var title = $('#title').val();

    var idarea = $('#idarea').val();

    var comment = $('#comment').val();



    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { title:title, idarea:idarea, comment:comment, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Tu ticket ha sido enviado, trataremos de resolver tu problema a la brevedad');

            menu('support/newticket');

        }

    });

}



function editableTicket(id){

    var id = id;

    

    $.ajax({

        url: 'views/support/editTicket.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editTicket(id){

    var id = id;

    var option = 2;

    var title = $('#title').val();

    var idarea = $('#idarea').val();

    var comment = $('#comment').val();



    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { id:id, title:title, idarea:idarea, comment:comment, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            console.log('editando...');

            menu('support/newticket');

        }

    });

}



/* Modal Tickets */



function modalTicket(title,message,id,employe){

    $('#largeModalLabel').html(title);

    //$('.modal-body').html(message);

    $('#largeModal').modal('show');

    $('#largeModal').modal({ keyboard: false,

        show: true

    });

    // Jquery draggable

    $('#largeModal').draggable({

        handle: ".modal-header"

    });

    msgTickets(id,employe,message);

}



function msgTickets(id,employe,message){

    var option = 6;

    //init ajax

    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { id:id, employe:employe, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            response = htmlspecialchars_decode(response);

            $('.modal-body').html(response);

            $('#idTicket').val(id);

        }

    });

}



function ticketResp(){

    var option = 8;

    var id = $('#idTicket').val();

    var msg = $('#resp').val();

    //init ajax

    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { id:id, msg:msg, option:option },

        method: 'post',

        beforeSend: function(){

            

        }, 

        success: function(response){

            var fullTickets = $('.modal-body');

            fullTickets.append('<div class="alert alert-success" role="alert">'+msg+'</div>');

            $('#resp').val('');

        }

    });

}



function editStatusTicket(id,status){

    option = 4;



    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { id:id, status:status, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El registro ha sido actualizado');

            if(status==1){

                $('#s'+id).attr('class','badge badge-success');

                $('#s'+id).html('Listo');

            }else if(status==2){

                $('#s'+id).attr('class','badge badge-info');

                $('#s'+id).html('Pendiente');

            }else if(status==8){

                $('#s'+id).attr('class','badge badge-stoped');

                $('#s'+id).html('Prestamo');

            }else{

                $('#s'+id).attr('class','badge badge-stoped');

                $('#s'+id).html('Detenido');

            }

            var area = $('#perc').val();

            percent(area);

        }

    });

}



function assignTicket(ticket,id,name){

    var option = 5;

    var r = confirm("¿Estas seguro de Asignar a "+name+"?");

    if (r == true){

        //init ajax

        $.ajax({

            url: 'controllers/call_tickets.php',

            data: { id:id, ticket:ticket, option:option },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                $('#a'+ticket).html(name);

                sendEM(ticket,2,name);

            }

        });

    }else{

        //cancel

    }

}



function assignPriority(idTicket,id,name){

    var option = 9;

    //init ajax

    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { id:id, idTicket:idTicket, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#p'+idTicket).html(name);

            $('#p'+idTicket).attr('class', '');

            $('#p'+idTicket).addClass('badge badge-primary');

        }

    });

}



function delTicket(id){

    var option = 7;

    var r = confirm("¿Estas seguro de Eliminar el Ticket?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_tickets.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El ticket ha sido eliminado');

                $('#s'+id).html('Inactivo');

                $('#s'+id).attr('class', '');

                $('#s'+id).addClass('badge badge-danger');



                //var area = $('#perc').val();

                //percent(area);

            }

        });



    } else {

        //cancel

    }

}



function percent(idarea){

    var idarea = idarea;



    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { option:99, idarea:idarea },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#percent').html('Avance '+response+'%');

            $('#perc').val(idarea);

        }

    });

}



function sendE(email,subject,comment){

    var email = email;

    var subject = subject;

    var comment = comment;



    $.ajax({

        url: 'mailer/contacto.php',

        data: { email:email, subject:subject, comment:comment },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            //console.log('send');

            console.log(response);

        }

    });

}



function sendEM(id,subject=null,name){

    var id = id;

    var email = $('#e'+id).html();

    var name = name;

    

    $.ajax({

        url: 'mailer/contacto.php',

        data: { email:email, subject:subject, name:name },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            console.log('send');

        }

    });



}



function changePs(){

    var email = $('#email').val();

    var password = $('#password').val();

    var confirm = $('#confirm').val();

    var key = $('#key').val();

    var option = 3;

    

    if(confirm==password){



        $.ajax({

            url: 'controllers/ajaxcall.php',

            data: { option:option, email:email, password:password, confirm:confirm, key:key },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                $('#password').val('');

                $('#confirm').val('');

                alert('Tu password ha sido cambiado Correctamente');

            }

        });

    }else{

        alert('Verifica que tu password y la confirmación de este sean iguales');

    }    

}



function reportticket(){

    var option = 21;

    var dini = $('#dini').val();

    var dend = $('#dend').val();

    var area = $('#area').val();

    var emp = $('#emp').val();

    var ini = new Date(dini);

    var end = new Date(dend);



    if(end>=ini){

        $.ajax({

            url: 'controllers/call_tickets.php',

            data: { option:option, dini:dini, dend:dend, area:area, emp:emp },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                var obj  = JSON.parse(response);



                google.charts.load('current', {'packages':['corechart']});

                google.charts.setOnLoadCallback(drawChart(obj));

                google.charts.setOnLoadCallback(drawChart(obj));

          

                function drawChart(obj) {



                    var realizados = parseInt(obj[0].listo,10);

                    var pendientes = parseInt(obj[0].pendiente,10);

                    var eliminados = parseInt(obj[0].eliminado,10);

                    

                    var data = google.visualization.arrayToDataTable([

                        ['Tickets', 'No. Tickets'],

                        ['Realizados', realizados],

                        ['Pendientes', pendientes],

                        ['Eliminados', eliminados],

                    ]);

            

                    var options = {

                        title: 'No. Tickets'

                    };

            

                    var chart = new google.visualization.PieChart(document.getElementById('tickets'));

            

                    chart.draw(data, options);

                }

            }

        });

    }else{

        alert('La Fecha de inicio debe ser menor a la fecha de Fin');

    }

}



//Insumes



function newInsume(){

    var option = 1;

    var iduser = $('#iduser').val();

    var name = $('#name').val();

    var area = $('#idarea').val();

    var description = $('#description').val();

    var qty = $('#qty').val();

    var expiration = $('#expiration').val();

    var expire = $('#expire').val();

    var type = 1;

    

    if(expiration==0 || expiration=='0'){

        expire = "";

    }



    $.ajax({

        url: 'controllers/call_inventory.php',

        data: { name:name, iduser:iduser, area:area, description:description, qty:qty, type:type, expire:expire, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            //alert(response);

            alert('El insumo ha sido Agregado');

            menu('inventory/newinsume');

        }

    });

}



function editableInsume(id){



    $.ajax({

        url: 'views/inventory/editinsume.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editInsume(){

    var option = 2;

    var id = $('#id').val();

    var name = $('#name').val();

    var area = $('#idarea').val();

    var description = $('#description').val();

    var qty = $('#qty').val();

    var expiration = $('#expiration').val();

    var expire = $('#expire').val();

    var type = 1;

    

    if(expiration==0 || expiration=='0'){

        expire = "";

    }



    $.ajax({

        url: 'controllers/call_inventory.php',

        data: { id:id, name:name, area:area, description:description, qty:qty, type:type, expire:expire, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El insumo ha sido Editado');

            menu('inventory/newinsume');

        }

    });

}



function addInsume(){

    var option = 3;

    var id = $('#idInsume1').val();

    var added = $('#added').val();

    var comment = $('#comment1').val();

    var expiration = $('#expiration1').val();

    var expire = $('#expire1').val();

    

    if(expiration==0 || expiration=='0'){

        expire = "";

    }



    var r = confirm("¿Estas segur@ de agregar "+added+" Unidades");

    if (r == true){

    

        $.ajax({

            url: 'controllers/call_inventory.php',

            data: { id:id, qty:added, comment:comment, expire:expire, option:option },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('Se ha agregado el stock al Insumo');

                menu('inventory/newinsume');

            }

        });

    }

}



function restInsume(){

    var option = 4;

    var id = $('#idInsume2').val();

    var rest = $('#rest').val();

    var comment = $('#comment2').val();



    var r = confirm("¿Estas segur@ de reducir "+rest+" Unidades");

    if (r == true){



        $.ajax({

            url: 'controllers/call_inventory.php',

            data: { id:id, qty:rest, comment:comment, option:option },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('Se ha disminuido el stock del insumo');

                menu('inventory/newinsume');

            }

        });

    }

}



function delInsume(id){

    var option = 5;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_inventory.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('inventory/newinsume');

            }

        });



    } else {

        //cancel

    }

}



function detailInsume(id){



    $.ajax({

        url: 'views/inventory/detailinsume.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editableDetail(id){



    $.ajax({

        url: 'views/inventory/editdetail.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editDetail(){

    var option = 9;

    var id = $('#idInsume').val();

    var modify = $('#modify').val();

    var sumrest = $('#sumrest').val();

    var comment = $('#comment').val();

    var expiration = $('#expiration').val();

    var expire = $('#expire').val();

    

    if(expiration==0 || expiration=='0'){

        expire = "";

    }else if(sumrest==3 || sumrest=='3'){

        expire = "";

    }



    var r = confirm("¿Estas segur@ de modificar este registro");

    if (r == true){



        $.ajax({

            url: 'controllers/call_inventory.php',

            data: { id:id, qty:modify, comment:comment, sumrest:sumrest, expire:expire, option:option },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('Se ha modificado el stock del insumo');

                menu('inventory/newinsume');

            }

        });

    }

}



function delDetail(id){

    var option = 10;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_inventory.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('inventory/newinsume');

            }

        });



    } else {

        //cancel

    }

}



function newinsarea(){

    var option = 6;

    var name = $('#name').val();



    $.ajax({

        url: 'controllers/call_inventory.php',

        data: { name:name, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El área de insumos ha sido agregada');

            menu('inventory/newarea');

        }

    });

}



function editableAreaInsume(id){



    $.ajax({

        url: 'views/inventory/editarea.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editAreaInsume(id){

    var option = 7;

    var name = $('#name').val();



    $.ajax({

        url: 'controllers/call_inventory.php',

        data: { id:id, name:name, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El Área de insumo fue correctamente editada');

            menu('inventory/newarea');

        }

    });

}



function delAreaInsume(id){

    var option = 8;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_inventory.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El Registro ha sido eliminado');

            }

        });



    } else {

        //cancel

    }

}



/* Modal Insumes */



function modalInsume(id,type){

    //$('.modal-body').html(message);

    $('#idInsume'+type).val(id);

    $('#largeModal'+type).modal('show');

    $('#largeModal'+type).modal({ keyboard: false,

        show: true

    });

    // Jquery draggable

    $('#largeModal'+type).draggable({

        handle: ".modal-header"

    });

}



function msgTickets(id,employe,message){

    var option = 6;

    //init ajax

    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { id:id, employe:employe, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            response = htmlspecialchars_decode(response);

            $('.modal-body').html(response);

            $('#idTicket').val(id);

        }

    });

}



//panel Blog



function addblog(){

    var option = 2;

    var data = tinyMCE.get('basic-conf').getContent();

    var title = $('#title').val();

    var author = $('#author').val();

    var type = $('#type').val();



    if(type==""){

        alert('Debes Seleccionar donde se publicara');

    }else{

        $.ajax({

            url: 'controllers/call_panel.php',

            data: { option:option, title:title, author:author, data:data, type:type },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('Tu Publicación ha sido guardada correctamente');

                menu('com/blog');

    

            }

        });

    }



}



function editblog(){

    var option = 4;

    var id = $('#id').val();

    var data = tinyMCE.get('basic-conf').getContent();

    var title = $('#title').val();

    var author = $('#author').val();

    

    $.ajax({

        url: 'controllers/call_panel.php',

        data: { option:option, id:id, data:data, title:title, author:author },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Tu Publicación ha sido guardada correctamente');

            menu('com/blog');



        }

    });

}



function editableBlog(id){



    $.ajax({

        url: 'views/com/editblog.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function delBlog(id){

    var option = 5;

    var r = confirm("¿Estas seguro de Eliminar la Publicación?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_panel.php',

            data: { option:option, id:id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('La Publicación ha sido eliminada');

                menu('com/blog');

            }

        });



    } else {

        //cancel

    }

}



function changeBlog(id,type){

    var option = 3;

    var id = id.substring(1, id.length);



    var r = confirm("¿Estas seguro de Cambiar el Lugar de la Publicación?");

    if (r == true){

        $.ajax({

            url: 'controllers/call_panel.php',

            data: { option:option, id:id, type:type },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('La Publicación Cambio Exitosamente de Lugar');

            }

        });

    }else{

        //do nothing

    }

}



function addImgBlog(id){



    $.ajax({

        url: 'views/uploads/new.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function addVotation(id){

    var option = 10;



    $.ajax({

        url: 'controllers/call_panel.php',

        data: { option:option, id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            if(response == 0 || response =='0'){

                alert('Se ha agregado para Votación');

            }else{

                alert('Se quitara la opción de Votación');

            }

        }

    });

}



function like(id,vote){

    var option = 11;

    var vote = vote;



    $.ajax({

        url: 'controllers/call_panel.php',

        data: { option:option, id:id, vote:vote },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            if(response > 0 || response !='0'){

                alert('¡Lo sentimos, solo puedes votar una vez!');

            }else{

                alert('¡Gracias por tu voto!');

            }

        }

    });

}



function more(id){

    var id = id;

    var option = 1;



    $.ajax({

        url: 'controllers/call_panel.php',

        data: { option:option, id:id },

        method: 'post',

        beforeSend: function(){

           

        },

        success: function(response){

            $('#vm').html(response);

            //$('.modal-body').html(message);

            $('#largeModal').modal('show');

            $('#largeModal').modal({ keyboard: false,

                show: true

            });

            // Jquery draggable

            $('#largeModal').draggable({

                handle: ".modal-header"

            });

        }

    });

}



function upload(){

    var form = $('#form');

    var title = $('#title').val();

    var type = $('#type').val();

    var file = $("#file")[0].files[0];       //el array pertenece al elemento



    if(title && file) 

    {



        var formData = new FormData();                  

        formData.append('title', title);

        formData.append('file', file);



        $.ajax({

            url: 'upload.php',

            data: formData,

            cache: false,

            contentType: false,

            processData: false,

            type: 'POST',

            success: function(data){

                alert(data);

            }

        });

    }

    return false;

}



/* Evaluations */



function addEval(){

    var option = 2;



    var user = $('#user').val();

    var date_eval = $('#date_eval').val();

    var duration = $('#duration').val();

    var dateini = $('#date_ini').val();

    var dateend = $('#date_end').val();

    var area = $('#area').val();

    var job = $('#job').val();

    var special = $('#special').val();



    var r = confirm("¿Estas seguro de agregar una Evaluación?");

    if (r == true){

        $.ajax({

            url: 'controllers/call_evaluation.php',

            data: { option:option, user:user, date_eval:date_eval, duration:duration, dateini:dateini, dateend:dateend, area:area, job:job, special:special },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('Agregaste Correctamente una Evaluación');

            }

        });

    }else{

        //do nothing

    }

}



function addEvalCap(){

    var option = 11;



    var user = $('#user').val();

    var date_cap = $('#date').val();

    var area = $('#area').val();

    var age = $('#age').val();

    var birthday = $('#birthday').val();

    var job = $('#job').val();

    var obj = $('#obj').val();

    var agejob = $('#agejob').val();

    var agesite = $('#agesite').val();

    var study = $('#study').val();

    var whatstudy = $('#whatstudy').val();

    var education = $('#education').val();

    var r = $('#r').val();

    var r2 = $('#r2').val();

    var r3 = $('#r3').val();

    var r4 = $('#r4').val();

    var r5 = $('#r5').val();

    var r6 = $('#r6').val();

    var r7 = $('#r7').val();

    var r8 = $('#r8').val();

    var r9 = $('#r9').val();

    var r10 = $('#r10').val();

    var r11 = $('#r11').val();



    var t1 = $('#t1').val();

    var t2 = $('#t2').val();

    var t3 = $('#t3').val();

    var t4 = $('#t4').val();

    var t5 = $('#t5').val();

    var t6 = $('#t6').val();

    var t7 = $('#t7').val();



    var rs = confirm("¿Estas seguro de Enviar tus Respuestas?");

    if (rs == true){

        $.ajax({

            url: 'controllers/call_evaluation.php',

            data: { option:option, user:user, date_cap:date_cap, area:area, age:age, birthday:birthday, job:job, obj:obj, agejob:agejob, agesite:agesite, study:study, whatstudy:whatstudy, education:education,

            r:r, r2:r2, r3:r3, r4:r4, r5:r5, r6:r6, r7:r7, r8:r8, r9:r9, r10:r10, r11:r11,

            t1:t1, t2:t2, t3:t3, t4:t4, t5:t5, t6:t6, t7:t7  },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('Agregaste Correctamente una Evaluación');

            }

        });

    }else{

        //do nothing

    }

}



function sendFolio(id,folio){

    var option = 22;

    var folio = stringEscape(folio);



    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { option:option, id:id, folio:folio },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Folio guardado Correctamente');

            menu('buy/tickets');

        }

    });

}



function sendExp(id,folio){

    var option = 22;

    var folio = stringEscape(folio);



    $.ajax({

        url: 'controllers/call_tickets.php',

        data: { option:option, id:id, folio:folio },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Folio guardado Correctamente');

            menu('archive/files');

        }

    });

}



/* Archive */

function newRequire(){

    var option = 11;

    var title = $('#title').val();

    var idarea = $('#idarea').val();

    var coju = $('#coju').val();

    var exp = $('#exp').val();

    var comment = $('#comment').val();



    if(coju=="" && exp==""){

        alert('Se Requiere Coju o Número de Expediente');

    }else{

        $.ajax({

            url: 'controllers/call_tickets.php',

            data: { title:title, idarea:idarea, coju:coju, exp:exp, comment:comment, option:option },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                sendE('archivo@rand.com.mx','Petición de Archivo'+coju,comment);

                sendE('archivo8@rand.com.mx','Petición de Archivo'+coju,comment);

                sendE('aux.archivo@rand.com.mx','Petición de Archivo'+coju,comment);

                alert('Tu petición ha sido enviada, trataremos de atenderte a la brevedad');

                menu('archive/newrequire');

            }

        });

    }

}



/* Project */



function newProject(){

    var option = 1;

    var project = $('#project').val();

    var idarea = $('#idarea').val();

    var description = $('#description').val();



    $.ajax({

        url: 'controllers/call_projects.php',

        data: { project:project, idarea:idarea, description:description, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Proyecto Agregado');

            menu('project/newproject');

        }

    });

}



function editableProject(id){

    var id = id;

    

    $.ajax({

        url: 'views/project/editproject.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editProject(id){

    var id = id;

    var option = 2;

    var project = $('#project').val();

    var idarea = $('#idarea').val();

    var description = $('#description').val();



    $.ajax({

        url: 'controllers/call_projects.php',

        data: { id:id, project:project, idarea:idarea, description:description, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            console.log('editando...');

            menu('project/newproject');

        }

    });

}



function delProject(id){

    var option = 3;

    var r = confirm("¿Estas seguro de Eliminar el Proyecto?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_projects.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El Proyecto ha sido eliminado');

                $('#s'+id).html('Inactivo');

                $('#s'+id).attr('class', '');

                $('#s'+id).addClass('badge badge-danger');

            }

        });



    } else {

        //cancel

    }

}



function detailProject(id){



    $.ajax({

        url: 'views/project/detailProject.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



/* Project Task */



function newTaskPro(){

    var option = 11;

    var title = $('#title').val();

    var idproject = $('#idproject').val();

    var comment = $('#comment').val();



    $.ajax({

        url: 'controllers/call_projects.php',

        data: { title:title, idproject:idproject, comment:comment, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('La Tarea ha sido agregada correctamente');

            menu('project/newtask');

        }

    });

}



function editableTaskPro(id){

    var id = id;

    

    $.ajax({

        url: 'views/project/edittask.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editTaskPro(id){

    var id = id;

    var option = 12;

    var title = $('#title').val();

    var idproject = $('#idproject').val();

    var comment = $('#comment').val();



    $.ajax({

        url: 'controllers/call_projects.php',

        data: { id:id, title:title, idproject:idproject, comment:comment, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            console.log('editando...');

            alert('La Tarea ha sido Editada Correctamente');

            menu('project/newtask');

        }

    });

}



function delTaskPro(id){

    var option = 13;

    var r = confirm("¿Estas seguro de Eliminar la Tarea?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_projects.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('La Tarea ha sido eliminada');

                $('#s'+id).html('Inactivo');

                $('#s'+id).attr('class', '');

                $('#s'+id).addClass('badge badge-danger');

            }

        });



    } else {

        //cancel

    }

}



function editStatusTaskPro(id,status){

    option = 4;



    $.ajax({

        url: 'controllers/call_projects.php',

        data: { id:id, status:status, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El registro ha sido actualizado');

            if(status==1){

                $('#s'+id).attr('class','badge badge-success');

                $('#s'+id).html('Listo');

            }else if(status==2){

                $('#s'+id).attr('class','badge badge-info');

                $('#s'+id).html('Pendiente');

            }else if(status==7){

                $('#s'+id).attr('class','badge badge-stoped');

                $('#s'+id).html('Fix');

            }else{

                $('#s'+id).attr('class','badge badge-stoped');

                $('#s'+id).html('Detenido');

            }

            //var area = $('#perc').val();

            //percent(area);

        }

    });

}



function assignTaskPro(task,id,name){

    var option = 5;

    var r = confirm("¿Estas seguro de Asignar a "+name+"?");

    if (r == true){

        //init ajax

        $.ajax({

            url: 'controllers/call_projects.php',

            data: { id:id, task:task, option:option },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                $('#a'+task).html(name);

                sendEM(task,2,name);

            }

        });

    }else{

        //cancel

    }

}



function assignPriorityTaskPro(idTask,id,name){

    var option = 9;

    //init ajax

    $.ajax({

        url: 'controllers/call_projects.php',

        data: { id:id, idTask:idTask, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#p'+idTask).html(name);

            $('#p'+idTask).attr('class', '');

            $('#p'+idTask).addClass('badge badge-primary');

        }

    });

}



function percentProject(idproject){

    var idproject = idproject;



    $.ajax({

        url: 'controllers/call_projects.php',

        data: { option:99, idproject:idproject },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            //alert(response);

            $('#percent2').html('Avance '+response+'%');

            $('#perc2').val(idproject);

        }

    });

}



/* Organization */



function addOrg(){

    var iduser = $('#iduser').val();

    var idboss = $('#idboss').val();

    var lvl = $('#lvlusr').val();



    $.ajax({

        url: 'controllers/call_org.php',

        data: { option:3, iduser:iduser, idboss:idboss, lvl:lvl },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El usuario ha sido agregado correctamente');

        }

    });

}



function selectEmp(id){



    $.ajax({

        url: 'controllers/call_org.php',

        data: { option:1, id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            //alert(response);

            $('#idboss').html(response);

        }

    });

}



function changeLvl(id,lvl){



    $.ajax({

        url: 'controllers/call_org.php',

        data: { option:2, id:id, lvl:lvl },

        method: 'post',

        beforeSend: function(){



        },

        success: function(response){

            alert('El nivel ha sido Cambiado');

        }

    })

}



function boss(e){

    var option= e.options[e.selectedIndex];

    var lvl = option.getAttribute("lvl");

    var lvlusr = parseInt(lvl)+1;

    $('#lvl').val(lvl);

    $('#lvlusr').val(lvlusr);

}



function profile(id){

    

    $.ajax({

        url: 'views/organization/profile.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){



        },

        success: function(response){

            $('#content').html(response);

        }

    })

}



/* QR */



function qr(id){

    var id = id;

    $("#qr").html(''); 



    var div = document.querySelector("#qr");



    var qr = new QRious({

        element: div,

        value: id, // La URL o el texto

        size: 150,

        backgroundAlpha: 0, // 0 para fondo transparente

        foreground: "#000", // Color del QR

        level: "H", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)

    });



    div.appendChild(qr.image);



    qrModal();

}



function fullqrP(){



    $.ajax({

        url: 'controllers/ajaxcall.php',

        data: { option:13 },

        dataType: 'json',

        method: 'post',

        beforeSend: function(){



        },

        success: function(response){

            var ids = response;



            $("#qr").html('');

            var div = document.querySelector('#qr');



            for(var i=0; i<ids.length; i++){



                var qr = new QRious({

                    element: div,

                    value: ids[i]

                    });

                    

                div.appendChild(qr.image);

                //console.log(ids[i]);

            }



            qrModal();

        }

    })

}



function qrModal(){

    $('#largeModal').modal('show');

    $('#largeModal').modal({ keyboard: false,

        show: true

    });

    // Jquery draggable

    $('#largeModal').draggable({

        handle: ".modal-header"

    });

}



/* Fact */



function addfact(){

    var option = 1;

    var folio = $('#folio').val();

    var company = $('#company').val();

    var provider = $('#provider').val();

    var description = $('#description').val();

    

    $.ajax({

        url: 'controllers/call_fact.php',

        data: { option:option, folio:folio, company:company, provider:provider, description:description },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El registro se guardo correctamente');

            menu('buy/newfact');



        }

    });



}



function editablefact(id){



    $.ajax({

        url: 'views/buy/editfact.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editfact(){

    var option = 3;

    var id = $('#id').val();

    var folio = $('#folio').val();

    var company = $('#company').val();

    var provider = $('#provider').val();

    var description = $('#description').val();

    var img = $('#img').val();

    

    $.ajax({

        url: 'controllers/call_fact.php',

        data: { option:option, id:id, folio:folio, company:company, provider:provider, description:description, img:img },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Tu registro ha sido guardado correctamente');

            menu('buy/newfact');



        }

    });

}



function delfact(id){

    var option = 2;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_fact.php',

            data: { option:option, id:id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('buy/newfact');

            }

        });



    } else {

        //cancel

    }

}



function addimgfact(id){



    $.ajax({

        url: 'views/uploads/newfact.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function modalfact(doc){

    //$('.modal-body').html(message);

    var str = doc;

    var extArray = str.split(".");

    var ext = extArray[extArray.length - 1];

    if(ext=="jpg" || ext=="png"){

        $("#image").attr("src", "assets/images/"+doc);

        $('#largeModal').modal('show');

        $('#largeModal').modal({ keyboard: false,

            show: true

        });

    }else{

        window.open("assets/images/"+doc,'_blank');

    }

}



/* service */



function newService(){

    var option = 1;

    var service = $('#service').val();

    var idarea = $('#idarea').val();

    var description = $('#description').val();



    $.ajax({

        url: 'controllers/call_services.php',

        data: { service:service, idarea:idarea, description:description, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Servicio Agregado');

            menu('service/newservice');

        }

    });

}



function editableService(id){

    var id = id;

    

    $.ajax({

        url: 'views/service/editservice.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editService(id){

    var id = id;

    var option = 2;

    var service = $('#service').val();

    var idarea = $('#idarea').val();

    var description = $('#description').val();



    $.ajax({

        url: 'controllers/call_services.php',

        data: { id:id, service:service, idarea:idarea, description:description, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            console.log('editando...');

            menu('service/newservice');

        }

    });

}



function delService(id){

    var option = 3;

    var r = confirm("¿Estas seguro de Eliminar el Servicio?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_services.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El Servicio ha sido eliminado');

                $('#s'+id).html('Inactivo');

                $('#s'+id).attr('class', '');

                $('#s'+id).addClass('badge badge-danger');

            }

        });



    } else {

        //cancel

    }

}



function detailService(id){



    $.ajax({

        url: 'views/service/detailservice.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



/* Service Alerts */



function newAlert(){

    var option = 11;

    var title = $('#title').val();

    var idservice = $('#idservice').val();

    var comment = $('#comment').val();

    var date = $('#date').val();

    var paytype = $('#paytype').val();



    $.ajax({

        url: 'controllers/call_services.php',

        data: { title:title, idservice:idservice, comment:comment, date:date, paytype:paytype, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('La alerta ha sido agregada correctamente');

            menu('service/newalert');

        }

    });

}



function editableAlert(id){

    var id = id;

    

    $.ajax({

        url: 'views/service/editalert.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editAlert(id){

    var id = id;

    var option = 12;

    var title = $('#title').val();

    var idservice = $('#idservice').val();

    var comment = $('#comment').val();

    var date = $('#date').val();

    var paytype = $('#paytype').val();



    $.ajax({

        url: 'controllers/call_services.php',

        data: { id:id, title:title, idservice:idservice, comment:comment, date:date, paytype:paytype, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            console.log('editando...');

            alert('La Alerta ha sido Editada Correctamente');

            menu('service/newalert');

        }

    });

}



function delAlert(id){

    var option = 13;

    var r = confirm("¿Estas seguro de Eliminar la Alerta?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_services.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('La Alerta ha sido eliminada');

                $('#s'+id).html('Inactivo');

                $('#s'+id).attr('class', '');

                $('#s'+id).addClass('badge badge-danger');

            }

        });



    } else {

        //cancel

    }

}



function editStatusAlert(id,status,type,period){

    option = 4;



    $.ajax({

        url: 'controllers/call_services.php',

        data: { id:id, status:status, type:type, period:period, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El registro ha sido actualizado');

            if(status==1){

                $('#s'+id).attr('class','badge badge-success');

                $('#s'+id).html('Listo');

            }else if(status==2){

                $('#s'+id).attr('class','badge badge-info');

                $('#s'+id).html('Pendiente');

            }else if(status==7){

                $('#s'+id).attr('class','badge badge-stoped');

                $('#s'+id).html('Detenido');

            }

            menu('service/newalert');

            //var area = $('#perc').val();

            //percent(area);

        }

    });

}



function assignAlert(alert,id,name){

    var option = 5;

    var r = confirm("¿Estas seguro de Asignar a "+name+"?");

    if (r == true){

        //init ajax

        $.ajax({

            url: 'controllers/call_projects.php',

            data: { id:id, alert:alert, option:option },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                $('#a'+alert).html(name);

                sendEM(alert,2,name);

            }

        });

    }else{

        //cancel

    }

}



function assignPriorityAlert(idAlert,id,name){

    var option = 9;

    //init ajax

    $.ajax({

        url: 'controllers/call_projects.php',

        data: { id:id, idAlert:idAlert, option:option },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#p'+idAlert).html(name);

            $('#p'+idAlert).attr('class', '');

            $('#p'+idAlert).addClass('badge badge-primary');

        }

    });

}



//directory provider controls

function addProv(){

    var option = 1;

    var area = $('#area').val();

    var name = $('#name').val();

    var corp = $('#corp').val();

    var service = $('#service').val();

    var email = $('#email').val();

    var phone = $('#phone').val();

    var mobile = $('#mobile').val();

    var other = $('#other').val();



    $.ajax({

        url: 'controllers/call_list.php',

        data: { option:option, area:area, name:name, corp:corp, service:service, email:email, phone:phone, mobile:mobile, other:other },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El Registro ha sido Agregado');

            console.log(response);

            menu('buy/list');

        }

    });

}



function editableProv(id){

    

    $.ajax({

        url: 'views/buy/editlist.php',

        data: { id: id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editProv(){

    var option = 2;



    var id = $('#id').val();

    var area = $('#area').val();

    var name = $('#name').val();

    var corp = $('#corp').val();

    var service = $('#service').val();

    var email = $('#email').val();

    var phone = $('#phone').val();

    var mobile = $('#mobile').val();

    var other = $('#other').val();



    $.ajax({

        url: 'controllers/call_list.php',

        data: { option:option, id:id, area:area, name:name, corp:corp, service:service, email:email, phone:phone, mobile:mobile, other:other },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El Registro ha sido Editado');

            console.log(response);

            menu('buy/list');

        }

    });

}



function delProv(id){

    var option = 3;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_list.php',

            data: { option:option, id: id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('buy/list');

            }

        });



    } else {

        //cancel

    }

}



//End Directory



//Insumes



function newInsumeSys(){

    var option = 1;

    var idmark = $('#idmark').val();

    var idsize = $('#idsize').val();

    var name = $('#name').val();

    var description = $('#description').val();

    var st = $('#st').val();

    var mac = $('#mac').val();

    var code = $('#code').val();

    var ubication = $('#ubication').val();

    var sku = $('#sku').val();

    var type = $('#type').val();



    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, idmark:idmark, idsize:idsize, name:name, description:description, st:st, mac:mac, code:code, sku:sku, ubication:ubication, type:type },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            //alert(response);

            alert('El insumo ha sido Agregado');

            menu('sysinv/newinsume');

        }

    });

}



function editableInsumesys(id){



    $.ajax({

        url: 'views/sysinv/editinsume.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editInsumeSys(){

    var option = 2;

    var id = $('#id').val();

    var idmark = $('#idmark').val();

    var idsize = $('#idsize').val();

    var name = $('#name').val();

    var description = $('#description').val();

    var st = $('#st').val();

    var mac = $('#mac').val();

    var code = $('#code').val();

    var sku = $('#sku').val();

    var ubication = $('#ubication').val();

    var type = $('#type').val();



    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, id:id, idmark:idmark, idsize:idsize, name:name, description:description, st:st, mac:mac, code:code, sku:sku, ubication:ubication, type:type },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El insumo ha sido Editado');

            menu('sysinv/newinsume');

        }

    });

}



function delInsumeSys(id){

    var option = 3;

    var r = confirm("¿Estas seguro de Eliminar el Registro? Se borraran los registros (expediente) asociados en caso de haberlos");

    if (r == true){



        $.ajax({

            url: 'controllers/call_sysinv.php',

            data: { option:option, id:id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('sysinv/newinsume');

            }

        });



    } else {

        //cancel

    }

}



function confInsumesys(id){



    $.ajax({

        url: 'views/sysinv/assignate.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function assignateInsume(){

    var option = 7;

    var id = $('#id').val();

    var iduser = $('#iduser').val();

    var idmotive = $('#idmotive').val();



    if(iduser==0){

        option = 8;

    }



    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, id:id, iduser:iduser, idmotive:idmotive },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El insumo ha sido Asignado o Desasignado Correctamente');

            menu('sysinv/newinsume');

        }

    });

}



function serviceInsumesys(id){

    

    $.ajax({

        url: 'views/sysinv/newsupport.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function responsive(id, iduserins) {//id = idpc

    // console.log({ iduserins });
    
    $.ajax({

        url: 'views/sysinv/responsive.php',

        data: { id:id, iduserins: iduserins },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function addMaintenance(){

    var option = 10;



    var idpc = $('#idpc').val();

    var component = $('#component').val();

    var description = $('#description').val();

    var type = $('#type').val();

    var wresult = $('#wresult').val();

    var result = $('#result').val();



    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, idpc:idpc, component:component, description:description, type:type, wresult:wresult, result:result },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Se ha agregado el Expediente');

            menu('sysinv/newinsume');

        }

    });

}



function editableMaintenance(id){



    $.ajax({

        url: 'views/sysinv/editsupport.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editMaintenance(){

    var option = 11;



    var id = $('#id').val();

    var idpc = $('#idpc').val();

    var component = $('#component').val();

    var description = $('#description').val();

    var type = $('#type').val();

    var wresult = $('#wresult').val();

    var result = $('#result').val();



    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, id:id, idpc:idpc, component:component, description:description, type:type, wresult:wresult, result:result },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Se ha agregado el Expediente');

            menu('sysinv/newinsume');

        }

    });

}



function delMaintenance(id,component){

    var option = 12;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_sysinv.php',

            data: { option:option, id:id, component:component },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('sysinv/newinsume');

            }

        });



    } else {

        //cancel

    }

}



function qrSystem(id){

    var id = id;

    $("#qr").html(''); 



    var div = document.querySelector("#qr");



    var qr = new QRious({

        element: div,

        value: id, // La URL o el texto

        size: 150,

        backgroundAlpha: 0, // 0 para fondo transparente

        foreground: "#000", // Color del QR

        level: "H", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)

    });



    div.appendChild(qr.image);



    qrModal();

}



function fullqrSystem(){



    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:14 },

        dataType: 'json',

        method: 'post',

        beforeSend: function(){



        },

        success: function(response){

            var ids = response;



            $("#qr").html('');

            var div = document.querySelector('#qr');



            for(var i=0; i<ids.length; i++){



                var qr = new QRious({

                    element: div,

                    value: ids[i]

                    });

                var contain = document.createElement('div');

                contain.setAttribute('class','col-md-2');

                contain.setAttribute('style','display:inline-block; width:12%; border: solid 1px; padding: 10px; margin:10px; text-align: center;');    

                var p = document.createElement('p');

                var text = document.createTextNode(ids[i]);



                div.appendChild(contain);

                contain.appendChild(qr.image);

                p.appendChild(text);

                contain.appendChild(p);

                //console.log(ids[i]);

            }



            qrModal();

        }

    })

}



function reviewQR(code){

    var option = 15;

    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, code:code },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            //alert(response);

            if(response=="0" || response==0){

                alert('Este código no esta registrado: '+code);

            }

            console.log('procesando');

            $('#component-view').html('...');

            $('#component-view').html(response);

            historyQR(code);

        }

    });

}



function addQRHistory(code,verify){



    var r = confirm("¿Estas seguro de Guardar la Revisión?");

    if (r == true){

        var option = 16;

        var code = code;

        var verify = verify;

        var comment = $('#comment').val();



        $.ajax({

            url: 'controllers/call_sysinv.php',

            data: { option:option, code:code, verify:verify, comment:comment },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                $('#comment').val('');

                historyQR(code);

            }

        });

    }else{

        

    }    

}



function historyQR(code){

    var option = 17;

    

    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, code:code },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#component-history').html('...');

            if(response=="0" || response==0){

                $('#component-history').html('Aún no se ha registrado una Revisión');

            }else{

                $('#component-history').html(response);

            }

        }

    });

}



function addBackup(id){



    var r = confirm("¿Estas seguro de Registrar el Respaldo?");

    if (r == true){

        var option = 18;

        var comment = $('#comment').val();

        

        $.ajax({

            url: 'controllers/call_sysinv.php',

            data: { option:option, id:id, comment:comment },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                $('#comment').val('');

                historyBackup(id);

            }

        });

    }else{



    }

}



function newBackup(){



    var r = confirm("¿Estas seguro de Registrar el Respaldo?");

    if (r == true){

        var option = 18;

        var id = $('#iduser').val();

        var comment = $('#comment').val();

        

        $.ajax({

            url: 'controllers/call_sysinv.php',

            data: { option:option, id:id, comment:comment },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('Se ha agregado el Registro');

                menu('support/newbackup');

            }

        });

    }else{



    }

}



function editableBackup(id){



    $.ajax({

        url: 'views/support/editbackup.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editBackup(){

    var option = 20;



    var id = $('#id').val();

    var iduser = $('#iduser').val();

    var comment = $('#comment').val();



    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, id:id, iduser:iduser, comment:comment },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Se ha Editado el Expediente');

            menu('support/newbackup');

        }

    });

}



function historyBackup(id){

    var option = 19;

    

    $.ajax({

        url: 'controllers/call_sysinv.php',

        data: { option:option, id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#component-backup').html('...');

            if(response=="0" || response==0){

                $('#component-backup').html('Aún no se ha registrado una Revisión');

            }else{

                $('#component-backup').html(response);

            }

        }

    });

}



/* Domain */



function addDomain(){

    var option = 1;



    var ubication = $('#ubication').val();

    var area = $('#area').val();

    var iduser = $('#iduser').val();

    var user = $('#user').val();

    var pass = $('#pass').val();

    var email = $('#email').val();

    var emailpass = $('#emailpass').val();

    var anydesk = $('#anydesk').val();

    var ip = $('#ip').val();

    var mac = $('#mac').val();

    var pcname = $('#pcname').val();



    $.ajax({

        url: 'controllers/call_domain.php',

        data: { option:option, ubication:ubication, area:area, iduser:iduser, user:user, pass:pass, email:email, emailpass:emailpass, anydesk:anydesk, ip:ip, mac:mac, pcname:pcname },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Se ha agregado el Registro');

            menu('domain/newdomain');

        }

    });

}



function editableDomain(id){



    $.ajax({

        url: 'views/domain/editdomain.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editDomain(){

    var option = 2;



    var id = $('#id').val();

    var ubication = $('#ubication').val();

    var area = $('#area').val();

    var iduser = $('#iduser').val();

    var user = $('#user').val();

    var pass = $('#pass').val();

    var email = $('#email').val();

    var emailpass = $('#emailpass').val();

    var anydesk = $('#anydesk').val();

    var ip = $('#ip').val();

    var mac = $('#mac').val();

    var pcname = $('#pcname').val();



    $.ajax({

        url: 'controllers/call_domain.php',

        data: { option:option, id:id, ubication:ubication, area:area, iduser:iduser, user:user, pass:pass, email:email, emailpass:emailpass, anydesk:anydesk, ip:ip, mac:mac, pcname:pcname },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('Se ha editado el Registro');

            menu('domain/newdomain');

        }

    });

}



function delDomain(id){

    var option = 3;

    var r = confirm("¿Estas seguro de Eliminar el Registro?");

    if (r == true){



        $.ajax({

            url: 'controllers/call_domain.php',

            data: { option:option, id:id },

            method: 'post',

            beforeSend: function(){

                

            },

            success: function(response){

                alert('El registro ha sido eliminado');

                menu('domain/newdomain');

            }

        });



    } else {

        //cancel

    }

}



function getEmail(){

    var option = 4;

    var id = $('#iduser').val();



    $.ajax({

        url: 'controllers/call_domain.php',

        data: { option:option, id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            if(id==0 || id===""){

                $('#email').val('');

            }else{

                $('#email').val(response);

                getUserInfo(id);

            }



        }

    });

}



function getUserInfo(id){



    var option = 5;



    $.ajax({

        url: 'controllers/call_domain.php',

        data: { option:option, id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            var obj  = JSON.parse(response);



            var abbr = $("#ubication").find(':selected').data('abbr');

            var ar = $('#area').val();

            ar = ar.substring(0,3);

            ar = ar.toUpperCase();



            var user = obj[0].myname.toLowerCase();

            var user = user.charAt(0);



            var lastname = obj[0].lastname.toLowerCase();

            function remove_accent(str) {var map={'À':'A','Á':'A','Â':'A','Ã':'A','Ä':'A','Å':'A','Æ':'AE','Ç':'C','È':'E','É':'E','Ê':'E','Ë':'E','Ì':'I','Í':'I','Î':'I','Ï':'I','Ð':'D','Ñ':'N','Ò':'O','Ó':'O','Ô':'O','Õ':'O','Ö':'O','Ø':'O','Ù':'U','Ú':'U','Û':'U','Ü':'U','Ý':'Y','ß':'s','à':'a','á':'a','â':'a','ã':'a','ä':'a','å':'a','æ':'ae','ç':'c','è':'e','é':'e','ê':'e','ë':'e','ì':'i','í':'i','î':'i','ï':'i','ñ':'n','ò':'o','ó':'o','ô':'o','õ':'o','ö':'o','ø':'o','ù':'u','ú':'u','û':'u','ü':'u','ý':'y','ÿ':'y','Ā':'A','ā':'a','Ă':'A','ă':'a','Ą':'A','ą':'a','Ć':'C','ć':'c','Ĉ':'C','ĉ':'c','Ċ':'C','ċ':'c','Č':'C','č':'c','Ď':'D','ď':'d','Đ':'D','đ':'d','Ē':'E','ē':'e','Ĕ':'E','ĕ':'e','Ė':'E','ė':'e','Ę':'E','ę':'e','Ě':'E','ě':'e','Ĝ':'G','ĝ':'g','Ğ':'G','ğ':'g','Ġ':'G','ġ':'g','Ģ':'G','ģ':'g','Ĥ':'H','ĥ':'h','Ħ':'H','ħ':'h','Ĩ':'I','ĩ':'i','Ī':'I','ī':'i','Ĭ':'I','ĭ':'i','Į':'I','į':'i','İ':'I','ı':'i','Ĳ':'IJ','ĳ':'ij','Ĵ':'J','ĵ':'j','Ķ':'K','ķ':'k','Ĺ':'L','ĺ':'l','Ļ':'L','ļ':'l','Ľ':'L','ľ':'l','Ŀ':'L','ŀ':'l','Ł':'L','ł':'l','Ń':'N','ń':'n','Ņ':'N','ņ':'n','Ň':'N','ň':'n','ŉ':'n','Ō':'O','ō':'o','Ŏ':'O','ŏ':'o','Ő':'O','ő':'o','Œ':'OE','œ':'oe','Ŕ':'R','ŕ':'r','Ŗ':'R','ŗ':'r','Ř':'R','ř':'r','Ś':'S','ś':'s','Ŝ':'S','ŝ':'s','Ş':'S','ş':'s','Š':'S','š':'s','Ţ':'T','ţ':'t','Ť':'T','ť':'t','Ŧ':'T','ŧ':'t','Ũ':'U','ũ':'u','Ū':'U','ū':'u','Ŭ':'U','ŭ':'u','Ů':'U','ů':'u','Ű':'U','ű':'u','Ų':'U','ų':'u','Ŵ':'W','ŵ':'w','Ŷ':'Y','ŷ':'y','Ÿ':'Y','Ź':'Z','ź':'z','Ż':'Z','ż':'z','Ž':'Z','ž':'z','ſ':'s','ƒ':'f','Ơ':'O','ơ':'o','Ư':'U','ư':'u','Ǎ':'A','ǎ':'a','Ǐ':'I','ǐ':'i','Ǒ':'O','ǒ':'o','Ǔ':'U','ǔ':'u','Ǖ':'U','ǖ':'u','Ǘ':'U','ǘ':'u','Ǚ':'U','ǚ':'u','Ǜ':'U','ǜ':'u','Ǻ':'A','ǻ':'a','Ǽ':'AE','ǽ':'ae','Ǿ':'O','ǿ':'o'};var res='';for (var i=0;i<str.length;i++){c=str.charAt(i);res+=map[c]||c;}return res;}

            lastname = remove_accent(lastname);

            lastname = lastname.split(' ')[0];



            var username = user+lastname;



            $('#user').val(username);

            $('#emailpass').val(username+'2019$');

            $('#pass').val(username+'321$');

            $('#pcname').val('R'+id+abbr+ar);

            

        }

    });

}



function domainSearch(v){

    var option = 6;



    $.ajax({

        url: 'controllers/call_domain.php',

        data: { option:option, v:v },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#newTable').html(response);

        }

    });

}



function addPhone(){

    var option = 4;

    var iduser = $('#user').val();

    var ubication = $('#ubication').val();

    var phone = $('#phone').val();

    var ext = $('#ext').val();



    $.ajax({

        url: 'controllers/call_list.php',

        data: { option:option, iduser:iduser, ubication:ubication, phone:phone, ext:ext },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El Registro ha sido Agregado Correctamente');

            menu('phone/list');

        }

    });

}



function editablePhone(id){



    $.ajax({

        url: 'views/phone/editlist.php',

        data: { id:id },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            $('#content').html(response);

        }

    });

}



function editPhone(){

    var option = 5;

    var id = $('#id').val();

    var iduser = $('#user').val();

    var ubication = $('#ubication').val();

    var phone = $('#phone').val();

    var ext = $('#ext').val();



    $.ajax({

        url: 'controllers/call_list.php',

        data: { option:option, id:id, iduser:iduser, ubication:ubication, phone:phone, ext:ext },

        method: 'post',

        beforeSend: function(){

            

        },

        success: function(response){

            alert('El Registro ha sido Editado Correctamente');

            menu('phone/list');

        }

    });

}



/* QR */

function addQRImp(){

    var arr = [];

    $.each($("input[name='qrimp']:checked"), function(){

        arr.push($(this).val());

    });

    

    $("#qr").html('');

    var div = document.querySelector('#qr');



    var ids = arr;



    if(ids.length<1){

        alert('Necesitas Agregar un QR a tu Selección Primero');

    }else{



        for(var i=0; i<ids.length; i++){



            var qr = new QRious({

                element: div,

                value: ids[i]

                });

            var contain = document.createElement('div');

            contain.setAttribute('class','col-md-2');

            contain.setAttribute('style','display:inline-block; width:12%; border: solid 1px; padding: 10px; margin:10px; text-align: center;');    

            var p = document.createElement('p');

            var text = document.createTextNode(ids[i]);



            div.appendChild(contain);

            contain.appendChild(qr.image);

            p.appendChild(text);

            contain.appendChild(p);

            //console.log(ids[i]);

        }



        qrModal();

    }

}



function stringEscape(s) {

    return s ? s.replace(/\\/g,'\\\\').replace(/\n/g,'\\n').replace(/\t/g,'\\t').replace(/\v/g,'\\v').replace(/'/g,"\\'").replace(/"/g,'\\"').replace(/[\x00-\x1F\x80-\x9F]/g,hex) : s;

    function hex(c) { var v = '0'+c.charCodeAt(0).toString(16); return '\\x'+v.substr(v.length-2); }

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