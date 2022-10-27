//Funcion cargar regiones
function listarregiones(){
    $.ajax({
        type: "POST",
        url: "php/cargar/regiones.php",
        success: function(data){
            $(".regiones").html(data);
        }
    });
}

//Funcion listar comunas
function listarcomunas(){
    var region = $(".regiones").val();
    $.ajax({
        type: "POST",
        url: "php/cargar/comunas.php",
        data: "id="+region,
        success: function(data){
            $(".comunas").html(data);
        }
    });
}

//Tipo Session
$(document).ready()