$(document).ready(function () {
    $("#regismut").on("click", function () {
        $(".global-loader").show();
        var nombre = $("#Nombre").val();
        if(nombre.length == 0){
            $(".global-loader").hide();
            ToastifyError("El nombre es requerido");
            return false;
        }

        $.ajax({
            url: "php/insert/Mutuales.php",
            type: "POST",
            data: { nombre: nombre },
            success: function (data) {
                if (data == 1 || data == "1") {
                    $(".global-loader").hide();
                    ToastifySuccess("Se ha registrado correctamente");
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                } else if(data == 0 || data == "0"){
                    $(".global-loader").hide();
                    ToastifyError("El nombre ya existe");
                }else{
                    $(".global-loader").hide();
                    ToastifyError(data);
                }
            },
            error: function (data) {
                $(".global-loader").hide();
                ToastifyError("Error al registrar");
            }
        });
    });
});


function Eliminar(id){
    $(".global-loader").show();
    swal.fire({
        title: "¿Está seguro de eliminar?",
        text: "No podrá recuperar el registro",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, eliminar",
        cancelButtonText: "No, cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "php/eliminar/Mutuales.php",
                type: "POST",
                data: { id: id },
                success: function (data) {
                    if (data == 1 || data == "1") {
                        $(".global-loader").hide();
                        ToastifySuccess("Se ha eliminado correctamente");
                        setTimeout(function () {
                            location.reload();
                        }, 1500);
                    } else {
                        $(".global-loader").hide();
                        ToastifyError(data);
                    }
                },
                error: function (data) {
                    $(".global-loader").hide();
                    ToastifyError("Error al eliminar");
                }
            });
        } else {
            $(".global-loader").hide();
            swal.fire("Cancelado", "El registro no ha sido eliminado", "error");
        }
    }
    );
}