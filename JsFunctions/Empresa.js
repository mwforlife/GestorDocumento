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
                }else{
                    $(".global-loader").hide();
                    ToastifyError(data);
                }
            }
        });
    }
    );
});