$(document).ready(function(){
    $("#RegionForm").on("submit", function(e){
        e.preventDefault();
        var form = $(this);
        var data = form.serialize();
        $.ajax({
            type: "POST",
            url: "php/insert/regiones.php",
            data: data,
            success: function(data){
                if(data == 1 || data == "1"){
                    ToastifySuccess("Registro insertado correctamente");
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }else{
                    ToastifyError("Error al Registrar")
                }
            }
        });
    }
    );
});


function listarregiones(){
    $.ajax({
        type: "POST",
        url: "php/listar/regiones.php",
        success: function(data){
            $("#tabla").html(data);
        }
    });
}