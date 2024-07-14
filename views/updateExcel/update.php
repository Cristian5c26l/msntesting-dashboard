<style>
.dropzone {
    text-align: center;
    font-size: 18px;
}

.glyphicon-download {
  font-size: 1.5em;
}

#DropZoneFiddle {
  cursor: pointer;
  border: 1px #ccc;
  border: dotted;
  padding: 30px 0;
}
</style>

<form action="" class="dropzone" id="DropZoneFiddle">
    
</form>

<script>
    $(".dropzone").dropzone({
        url: "processExcel.php",
        paramName: "file", //the parameter name containing the uploaded file
        clickable: true,
        maxFilesize: 5, //in mb
        //maxFiles: 4, // allowing any more t han this will stress a basic php/mysql stack
        //addRemoveLinks: true,
        acceptedFiles: '.xls,.xlsx', //allowed filetypes
        dictDefaultMessage: "Carga tus Archivos Aquí <i class='material-icons md-36 align-middle mb-1 text-primary'>archive</i>", //override the default text
        init: function() {
            this.on("sending", function(file, xhr, formData) {
                formData.append("step", "upload"); // Append all the additional input data of your form here!
                formData.append("title", file.name);
            });
            this.on("success", function(file, responseText) {
                //auto remove buttons after upload
                $("#div-files").html(responseText);
                /*var _this = this;
                _this.removeFile(file);*/
                alert('Archivo Cargado');
            });
        }
    });

</script>