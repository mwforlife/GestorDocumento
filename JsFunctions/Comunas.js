$(document).ready(function () {
    $("#ComunaForm").on("submit", function(e){
        e.preventDefault();
        $(".global-loader").show();
        var form = $(this);
        var data = form.serialize();
        $.ajax({
            type: "POST",
            url: "php/insert/comunas.php",
            data: data,
            success: function(data){
                if(data == 1 || data == "1"){
                    $(".global-loader").hide();
                    ToastifySuccess("Registro insertado correctamente");
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }else{
                    $(".global-loader").hide();
                    ToastifyError("Error al Registrar")
                }
            }
        });
    }
    );
});


function Editar(id){
    $(".global-loader").show();
    $.ajax({
        type: "POST",
        url: "php/cargaredit/comunas.php",
        data: {id: id},
        success: function(data){
            $(".global-loader").hide();
            $(".content").html(data);            
        }
    });
}

function actualizarcomuna(id){
    $(".global-loader").hide();
    var nombre = $("#nombre").val();
    $.ajax({
        type: "POST",
        url: "php/update/comunas.php",
        data: {id: id, nombre: nombre},
        success: function(data){
            if(data == 1 || data == "1"){
                $(".global-loader").hide();
                ToastifySuccess("Registro actualizado correctamente");
                setTimeout(function(){
                    location.reload();
                }, 1500);
            }else{
                $(".global-loader").hide();
                ToastifyError("Error al actualizar")
            }
        }
    });
}

function Eliminar(id){
    $(".global-loader").show();
    swal.fire({
        title: "¿Estas seguro?",
        text: "Una vez eliminado no se podra recuperar",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Eliminar",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: "php/eliminar/comunas.php",
                data: {id: id},
                success: function(data){
                    if(data == 1 || data == "1"){
                        $(".global-loader").hide();
                        ToastifySuccess("Registro eliminado correctamente");
                        setTimeout(function(){
                            location.reload();
                        }, 1500);
                    }else{
                        $(".global-loader").hide();
                        ToastifyError("Error al eliminar")
                    }
                }
            });
        }else{
            $(".global-loader").hide();
            ToastifyInfo("Operacion cancelada");
        }
    });

}
