window.onload = function () {
    //alert("Hola");
    listarcomunas();  
}

$(document).ready(function(){
    $("#UserForm").on("submit", function(e){
        e.preventDefault();
        var rut = $("#UserRut").val();
        var pass = $("#UserPassword").val();
        var pass2 = $("#UserPassword1").val();
        if(validaRut(rut)){
            if(pass == pass2){

            var form = $(this);
            var data = form.serialize();
            $.ajax({
                url: "php/insert/usuarios.php",
                type: "POST",
                data: data,
                success: function(data){
                    if(data == 1 || data == "1"){
                        ToastifySuccess("Registro insertado correctamente");
                        setTimeout(function(){
                            window.location.href = "usuarios.php";
                        }, 1500);
                    }else if(data == 0 || data == "0"){
                        ToastifyError("Error Al Registrar");
                    }else{
                        ToastifyError(data);
                    }
                }
            });
            }else{
                ToastifyError("Las contraseñas no coinciden");
            }
        }else{
            ToastifyError("Rut Invalido");
        }
    }
    );
});

function Editar(id){
    
}