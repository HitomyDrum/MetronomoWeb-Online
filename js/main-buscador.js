$(buscar_datos_canciones());

//================= Buscamos Productos ================//
function buscar_datos_canciones(consulta) {
    $.ajax({
        url: './controller/c_verCanciones.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta) {
        $("#datos").html(respuesta);
    })
    .fail(function() {
        console.log("Error en buscar datos del producto.")
    })
}

// Cuando se escriba algo en la caja de busqueda, ejecutamos la función buscar_datos_canciones
$(document).on('keyup', '#caja_busqueda_canciones', function(){
    var valor = $(this).val();
    if(valor != "") {
        buscar_datos_canciones(valor)
    } else {
        buscar_datos_canciones()
    }
});