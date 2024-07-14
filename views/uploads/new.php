<?php 
    $id = $_POST['id'];
?>

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
    <input type="hidden" id="idFile" value="<?php echo $id; ?>">
</form>

<script>
    $(".dropzone").dropzone({
        url: "upload.php",
        paramName: "file", //the parameter name containing the uploaded file
        clickable: true,
        maxFilesize: 2, //in mb
        //maxFiles: 4, // allowing any more t han this will stress a basic php/mysql stack
        //addRemoveLinks: true,
        acceptedFiles: '.png,.jpg,.pdf,.doc,.docx', //allowed filetypes
        dictDefaultMessage: "Carga tus Archivos Aquí <i class='material-icons md-36 align-middle mb-1 text-primary'>archive</i>", //override the default text
        init: function() {
            this.on("sending", function(file, xhr, formData) {
                var id = $('#idFile').val();
                formData.append("step", "upload"); // Append all the additional input data of your form here!
                formData.append("id", id); // Append all the additional input data of your form here!
                formData.append("title", file.name);
            });
            this.on("success", function(file, responseText) {
                //auto remove buttons after upload
                $("#div-files").html(responseText);
                /*var _this = this;
                _this.removeFile(file);*/
            });
        }
    });

</script>