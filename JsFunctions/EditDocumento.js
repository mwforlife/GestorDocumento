function agregarcampo(valor){
    $("#summernote").summernote('editor.insertText', "{"+valor+"}");
}

function generarDocumento(id){
    $(".global-loader").show();
    //Capturar el contenido del editor
    var contenido = $("#summernote").summernote('code');
    console.log(contenido);
    $.ajax({
        url: "php/pdf/generardocumento.php",
        type: "POST",
        data: {contenido: contenido, id: id},
        success: function(data){
            $(".global-loader").hide();
            
        }
    });
    $(".global-loader").hide();

}