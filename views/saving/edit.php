<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
    if($_REQUEST['id']){
        // Save Settings
        include '../../includes/config.php';
        include '../../controllers/savings.php';
        include '../../models/savings.php';
        $saveInstance = new c_save($host,$user,$pass,$db);
        $id = $_REQUEST['id'];
    ?>
        <div class="card">
            <h2 class="">Edición de Objetivo de Ahorro</h2>

            <div class="card card-body">
                <?php $saveInstance->editableGoal($id); ?>
            </div>
        </div>
    <?php
    }else{
        echo "Sin permisos, solo puedes acceder a esta área de la forma adecuada";
    }
?>

<script>
    calculate();

    $("select").change(function(){
        calculate();
    });

    $('#quantity').bind('input', function() { 
        calculate();
    });

    function calculate(){
        var save = $('#quantity').val(); // get the current value of the input field.
        var periodicity = $("#idgoal").val();
        var strategy = $("#idstrategy").val();
        var savings = 0;

        if(strategy==1){
            if(periodicity==1){
                for (let i = 1; i <= 365; i++) {
                    savings += parseInt(save*i);
                }
            }else if(periodicity==2){
                for (let i = 1; i <= 52; i++) {
                    savings += parseInt(save*i);
                }
            }else if(periodicity==3){
                for (let i = 1; i <= 12; i++) {
                    savings += parseInt(save*i);
                }
            }

        }else if(strategy==2){
            if(periodicity==1){
                savings = save * 365;
            }else if(periodicity==2){
                savings = save * 52;
            }else if(periodicity==3){
                savings = save * 12;
            }
        
        }else if(strategy==3){
            $('#quantity').val(0);
        }

        $('#total').val(savings);
        
    }

    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
    })


    (function() {
        'use strict';
        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit()
    })()
</script>
