$(document).ready(function () {
    $("#ComunaForm").on("submit", function(e){
        e.preventDefault();
        var form = $(this);
        var data = form.serialize();
        $.ajax({
            type: "POST",
            url: "php/insert/comunas.php",
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


function Editar(id){
    $.ajax({
        type: "POST",
        url: "php/cargaredit/comunas.php",
        data: {id: id},
        success: function(data){
            $(".content").html(data);            
        }
    });
}

function actualizarcomuna(id){
    var nombre = $("#nombre").val();
    $.ajax({
        type: "POST",
        url: "php/update/comunas.php",
        data: {id: id, nombre: nombre},
        success: function(data){
            if(data == 1 || data == "1"){
                ToastifySuccess("Registro actualizado correctamente");
                setTimeout(function(){
                    location.reload();
                }, 1500);
            }else{
                ToastifyError("Error al actualizar")
            }
        }
    });
}

function Eliminar(id){
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
                        ToastifySuccess("Registro eliminado correctamente");
                        setTimeout(function(){
                            location.reload();
                        }, 1500);
                    }else{
                        ToastifyError("Error al eliminar")
                    }
                }
            });
        }else{
            ToastifyInfo("Operacion cancelada");
        }
    });

}
