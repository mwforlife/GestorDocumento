window.onload = function () {
    //alert("Hola");
    listarcomunas();
    listarciudades();
    $(".form-control").attr("autocomplete","off");
}

$(document).ready(function () {
    $("#EnterpriseForm").on("submit", function (e) {
        e.preventDefault();
        $(".global-loader").show();
        var form = $(this);
        var url = "php/insert/empresas.php";
        var data = form.serialize();
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data) {
                if (data == 1 || data == "1") {
                    $(".global-loader").hide();
                    ToastifySuccess("Empresa registrada correctamente");
                    setTimeout(function () {
                        //window.location.href = "empresas.php";
                    }, 1000);
                }else if(data == 0 || data == "0"){
                    $(".global-loader").hide();
                    ToastifyError("Error al registrar la empresa");
                }if(data == 2 || data == "2"){
                    $(".global-loader").hide();
                    ToastifyError("La empresa ya se encuentra registrada");
                }else{
                    $(".global-loader").hide();
                    ToastifyError(data);
                }
            }
        });
    }
    );
});

function Eliminar(id){
    $(".global-loader").show();
    swal.fire({
        title: "¿Está seguro de eliminar la empresa?",
        text: "No podrá recuperar la información",
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
                type: "POST",
                url: "php/eliminar/empresas.php",
                data: {id:id},
                success: function (data) {
                    if (data == 1 || data == "1") {
                        $(".global-loader").hide();
                        ToastifySuccess("Empresa eliminada correctamente");
                        setTimeout(function () {
                            window.location.href = "empresas.php";
                        }, 1000);
                    }else if(data == 0 || data == "0"){
                        $(".global-loader").hide();
                        ToastifyError("Error al eliminar la empresa");
                    }else{
                        $(".global-loader").hide();
                        ToastifyError(data);
                    }
                }
            });
        }else{
            $(".global-loader").hide();
            ToastifyError("Operación cancelada");
        }
    });
}

function more(id){
    
}