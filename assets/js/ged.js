/* Task */

function newTask(){
    var option = 1;
    var task = $('#task').val();
    var idarea = $('#idarea').val();
    var object = $('#object').val();
    var coju = $('#coju').val();
    var type = $('#type').val();
    var auth = $('#auth').val();
    var messenger = $('#messenger').val();
    var desc = $('#desc').val();

    $.ajax({
        url: 'controllers/call_task.php',
        data: { task:task, idarea:idarea, object:object, coju:coju, type:type, auth:auth, messenger:messenger, desc:desc, option:option },
        method: 'post',
        beforeSend: function(){
            
        },
        success: function(response){
            alert('Tu tarea ha sido guardada');
            menu('task/new');
        }
    });
}

function editableTask(id){
    var id = id;
    
    $.ajax({
        url: 'views/task/edit.php',
        data: { id:id },
        method: 'post',
        beforeSend: function(){
            
        },
        success: function(response){
            $('#content').html(response);
        }
    });
}

function editTask(id){
    var id = id;
    var option = 2;
    var task = $('#task').val();
    var idarea = $('#idarea').val();
    var object = $('#object').val();
    var coju = $('#coju').val();
    var type = $('#type').val();
    var auth = $('#auth').val();
    var messenger = $('#messenger').val();
    var desc = $('#desc').val();

    $.ajax({
        url: 'controllers/call_task.php',
        data: { id:id, task:task, idarea:idarea, object:object, coju:coju, type:type, auth:auth, messenger:messenger, desc:desc, option:option },
        method: 'post',
        beforeSend: function(){
            
        },
        success: function(response){
            alert('El registro ha sido guardado Correctamente');
            menu('task/new');
        }
    });
}

/* Modal Task */

function modalTask(task,id,employe){
    $('#largeModalLabel').html(task);
    //$('.modal-body').html(message);
    $('#largeModal').modal('show');
    $('#largeModal').modal({ keyboard: false,
        show: true
    });
    // Jquery draggable
    $('#largeModal').draggable({
        handle: ".modal-header"
    });
    msgTask(id,employe);
}

function msgTask(id,employe){
    var option = 6;
    //init ajax
    $.ajax({
        url: 'controllers/call_task.php',
        data: { id:id, employe:employe, option:option },
        method: 'post',
        beforeSend: function(){
            
        },
        success: function(response){
            response = htmlspecialchars_decode(response);
            $('.modal-body').html(response);
            $('#idTask').val(id);
        }
    });
}

function taskResp(){
    var option = 8;
    var id = $('#idTask').val();
    var msg = $('#resp').val();
    //init ajax
    $.ajax({
        url: 'controllers/call_task.php',
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

function msgResp(){
    var option = 8;
    var id = $('#idTask').val();
    var msg = $('#resp').val();
    //init ajax
    $.ajax({
        url: 'controllers/call_task.php',
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

function editStatusTask(id,status,badge){
    option = 4;

    $.ajax({
        url: 'controllers/call_task.php',
        data: { id:id, status:status, option:option },
        method: 'post',
        beforeSend: function(){
            
        },
        success: function(response){
            alert('El registro ha sido actualizado');
            if(badge==1){
                $('#s'+id).attr('class','badge badge-success');
                $('#s'+id).html('Listo');
            }else if(badge==2){
                $('#s'+id).attr('class','badge badge-info');
                $('#s'+id).html('Pendiente');
            }else if(badge==3){
                $('#s'+id).attr('class','badge badge-stoped');
                $('#s'+id).html('Detenido');
            }
            var area = $('#perc').val();
            percentTask(area);
        }
    });
}

function assignTask(ticket,id,name){
    var option = 5;
    var r = confirm("¿Estas seguro de Asignar a "+name+"?");
    if (r == true){
        //init ajax
        $.ajax({
            url: 'controllers/call_task.php',
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

function assignPriorityTask(idTicket,id,name){
    var option = 9;
    //init ajax
    $.ajax({
        url: 'controllers/call_task.php',
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

function delTask(id){
    var option = 7;
    var r = confirm("¿Estas seguro de Eliminar la Tarea?");
    if (r == true){

        $.ajax({
            url: 'controllers/call_task.php',
            data: { option:option, id: id },
            method: 'post',
            beforeSend: function(){
                
            },
            success: function(response){
                alert('La Tarea ha sido eliminada');
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

function percentTask(idarea){
    var idarea = idarea;

    $.ajax({
        url: 'controllers/call_task.php',
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

function changeJob(id,job){
    var option = 7;
    var r = confirm("¿Estas seguro de Cambiar el Empleo?");
    if (r == true){
        $.ajax({
            url: 'controllers/ajaxcall.php',
            data: { option:option, id:id, job:job },
            method: 'post',
            beforeSend: function(){
                
            },
            success: function(response){
                alert('La asignación ha sido Cambiada Correctamente');
            }
        });

    }
}