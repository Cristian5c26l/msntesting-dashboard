<?php
// User Settings
include '../../includes/config.php';
include '../../controllers/evaluation.php';
include '../../models/evaluation.php';
$evalInstance = new c_eval($host,$user,$pass,$db);
session_start();
$idUser = $_SESSION["idSession"];

?>
<div class="card">
    <h2 class="">Detección de Necesidades de Capacitación</h2>
    <div class="alert alert-primary alert-dismissable fade show">   
        <p>A continuación encontrará una serie de preguntas abiertas que deberá contestar de  manera especifica y detallada para lograr recabar la mayor información en cuanto a sus necesidades de capacitación.</p>
    </div>
    <div class="card card-body">
        <form class="row" onsubmit="addEvalCap(); return false;">
            <div class="form-group col-lg-4">
                <select class="form-control" id="user" required disabled>
                    <option value="">Elige un Empleado</option>
                    <?php echo $evalInstance->selectedUser($idUser); ?>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <input id="date" type="text" class="datepicker form-control" value="" placeholder="Fecha de Evaluación">
            </div>
            <div class="form-group col-lg-4">
                <input id="area" class="form-control" type="hidden" value="" placeholder="Área" disabled>
                <input id="areadesc" class="form-control" type="text" value="" placeholder="Área" disabled>
            </div>
            <div class="form-group col-lg-4">
                <input id="age" class="form-control" type="text" value="" placeholder="Edad" required>
            </div>
            <div class="form-group col-lg-4">
                <input id="birthday" type="text" class="datepicker form-control" value="" placeholder="Fecha de Nacimiento">
            </div>
            <div class="form-group col-lg-6">
                <input id="job" class="form-control" type="text" value="" placeholder="Puesto" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="obj" class="form-control" type="text" value="" placeholder="Objetivo del Puesto" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="obj" class="form-control" type="text" value="" placeholder="Objetivo del Puesto" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="agejob" class="form-control" type="text" value="" placeholder="Antiguedad en el Puesto" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="agesite" class="form-control" type="text" value="" placeholder="Antiguedad en el Despacho" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="study" class="form-control" type="text" value="" placeholder="¿Estudia?" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="whatstudy" class="form-control" type="text" value="" placeholder="¿Qué Estudia?" required>
            </div>
            <div class="form-group col-lg-6">
                <select class="form-control" id="education" required>
                    <option value="">¿Nivel Edicativo?</option>
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
                    <option value="Medio Superior">Medio Superior: Bachillerato/Vocacional</option>
                    <option value="Superior">Superior: Licenciatura/Ingeniería</option>
                    <option value="Maestria">Maestría</option>
                    <option value="Doctorado">Doctorado</option>
                </select>
            </div>
            <div class="form-group col-lg-12">
                <input id="r" class="form-control" type="text" value="" placeholder="Experiencia en el área (mencione los puestos desempeñados hasta la actualidad en la empresa, así como años de servicio en cada uno de ellos)" required>
            </div>
            <div class="form-group col-lg-6">
                <select class="form-control" id="r2" required>
                    <option value="">¿Conoce el perfil y descripción de su puesto?</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-lg-12">
                <input id="r3" class="form-control" type="text" value="" placeholder="De acuerdo a su criterio, indique las 3 responsabilidades / actividades más importantes de su puesto" required>
            </div>
            <div class="form-group col-lg-12">
                <input id="r4" class="form-control" type="text" value="" placeholder="¿Describa cuáles son los conocimientos, habilidades y aptitudes para cumplir adecuadamente con las responsabilidades de su puesto actual?" required>
            </div>
            <div class="form-group col-lg-12">
                <input id="r5" class="form-control" type="text" value="" placeholder="Indique la función que más le gusta de su puesto. ¿Por qué?" required>
            </div>
            <div class="form-group col-lg-12">
                <input id="r6" class="form-control" type="text" value="" placeholder="Indique la función menos agradable de su puesto. ¿Por qué?" required>
            </div>
            <div class="form-group col-lg-12">
                <input id="r7" class="form-control" type="text" value="" placeholder="¿Qué conocimientos generales necesitaria para su buen desempeño laboral? (relaciones humanas en el trabajo, conocimientos técnicos, seguridad e higiene, calidad en el" required>
            </div>
            <div class="form-group col-lg-12">
                <input id="r8" class="form-control" type="text" value="" placeholder="¿Qué conocimientos y habilidades especifcas de su puesto considera necesitaría desarrollar?" required>
            </div>
            <div class="form-group col-lg-12">
                <input id="r9" class="form-control" type="text" value="" placeholder="¿Qué problemas tiene para realizar su trabajo satisfactoriamente?" required>
            </div>
            <div class="form-group col-lg-12">
                <input id="r10" class="form-control" type="text" value="" placeholder="¿Si la respuesta anterior es positiva, indique a que cree que se deben los problemas que no le permiten realizar su trabajo satisfactoriamente?" required>
            </div>
            <div class="form-group col-lg-12">
                <input id="r11" class="form-control" type="text" value="" placeholder="¿Qué sugiere para mejorar el desempeño general de su área y del despacho?" required>
            </div>

            <div class="form-group col-lg-12 alert alert-primary alert-dismissable fade show">
                <p><b>Favor de Numerar sus Respuestas</b></p> 
                <p>A continuación encontrará una serie de tablas (Cajas de Texto) en donde deberá anotar el nombre de las funciones en las que considera tiene dificultad para desarrollarlas y requieren capacitación especifica (se anexa un ejemplo en la primer celda)</p>
            </div>

            <div class="form-group col-lg-6">
                <div class="alert alert-success alert-dismissable fade show">
                    <p><b>Favor de Numerar sus Respuestas</b></p>
                    <br>
                    <br>
                    <br>
                </div>
                <textarea rows="11" cols="2" id="t1" class="form-control" placeholder="Evaluaciones de Desempeño&#10;1.-&#10;2.-&#10;3.-&#10;4.-&#10;5.-&#10;6.-&#10;7.-&#10;8.-&#10;9.-&#10;10.-" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
            </div>
            <div class="form-group col-lg-6">
                <div class="alert alert-success alert-dismissable fade show">
                    <p><b>Favor de Numerar sus Respuestas</b></p>
                    <p>Escriba el nombre del curso requerido para mejorar el desempeño de la función  mencionada</p>
                </div>
                <textarea rows="11" cols="2" id="t2" class="form-control" placeholder="Valuación de Puestos&#10;1.-&#10;2.-&#10;3.-&#10;4.-&#10;5.-&#10;6.-&#10;7.-&#10;8.-&#10;9.-&#10;10.-" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
            </div>

            <div class="form-group col-lg-6">
                <div class="alert alert-success alert-dismissable fade show">
                    <p><b>Favor de Numerar sus Respuestas</b></p>
                    <p>¿Por qué lo requiere? (indique para cada una de esas funciones los conocimientos y habilidades que considera le hacen falta)</p>
                </div>
                <textarea rows="11" cols="2" id="t3" class="form-control" placeholder="Análisis y conocimiento del método de evaluación por puntos&#10;1.-&#10;2.-&#10;3.-&#10;4.-&#10;5.-&#10;6.-&#10;7.-&#10;8.-&#10;9.-&#10;10.-" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
            </div>

            <div class="form-group col-lg-6">
                <div class="alert alert-success alert-dismissable fade show">
                    <p><b>Favor de Numerar sus Respuestas</b></p>
                    <p>¿Cómo se aplicará el curso requerido en sus funciones y actividades?</p>
                </div>
                <textarea rows="11" cols="2" id="t4" class="form-control" placeholder="Evaluciones de desempeño 2022&#10;1.-&#10;2.-&#10;3.-&#10;4.-&#10;5.-&#10;6.-&#10;7.-&#10;8.-&#10;9.-&#10;10.-" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
            </div>

            <div class="form-group col-lg-6">
                <div class="alert alert-success alert-dismissable fade show">
                    <p><b>Favor de Numerar sus Respuestas</b></p>
                    <p>¿En qué mejorará su desempeño de acuerdo a esa función al recibir la capacitación que le hace falta?</p>
                </div>
                <textarea rows="11" cols="2" id="t5" class="form-control" placeholder="Evaluaciones objetivas en base a un método específico&#10;1.-&#10;2.-&#10;3.-&#10;4.-&#10;5.-&#10;6.-&#10;7.-&#10;8.-&#10;9.-&#10;10.-" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
            </div>

            <div class="form-group col-lg-6">
                <div class="alert alert-success alert-dismissable fade show">
                    <p><b>Favor de Numerar sus Respuestas</b></p>
                    <p>¿Plazo en el que se podrán evaluar resutados de capacitación?  A < = 06 meses B < = 12 meses C > = 12 meses</p>
                </div>
                <textarea rows="11" cols="2" id="t6" class="form-control" placeholder="Primer trimestre&#10;1.-&#10;2.-&#10;3.-&#10;4.-&#10;5.-&#10;6.-&#10;7.-&#10;8.-&#10;9.-&#10;10.-" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
            </div>

            <div class="form-group col-lg-6">
                <div class="alert alert-success alert-dismissable fade show">
                    <p><b>Favor de Numerar sus Respuestas</b></p>
                    <p>Entregables específicos una vez culminada la capacitación de acuerdo a su función</p>
                </div>
                <textarea rows="11" cols="2" id="t7" class="form-control" placeholder="Evaluaciones y tabuladores salariales actualizados&#10;1.-&#10;2.-&#10;3.-&#10;4.-&#10;5.-&#10;6.-&#10;7.-&#10;8.-&#10;9.-&#10;10.-" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" required></textarea>
            </div>

            <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar</button>
            </div>
        </form>
    </div>
</div>

<script>
    $('#data-table').dataTable();

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    })

    UserArea();
    function UserArea(){
        option = 1;
        var user = '<?php echo $idUser; ?>';
        if(user==1){
            user = 19;
        }

        $.ajax({
            url: 'controllers/call_evaluation.php',
            data: { option:option, id:user },
            method: 'post',
            beforeSend: function(){
                
            },
            success: function(response){
                //alert(response);
                res = response.split(",");
                $('#area').val(res[0]);
                $('#areadesc').val(res[1]);
            }
        });
    }
</script>
