<?php

    require('../models/Conexion.php');

    $con = new Conexion();

    require_once('./c_verCancionesLista.php')
?>

<script>

    const bpmSeteado = document.querySelector('#ppm');

    function elimarAca(BPM) {

        /* var pregunta = confirm("¿Seguro que quieres eliminar esta mascota?");
        if (pregunta) {
            $.ajax({
                url: '../../controllers/C_EliminarMascota.php',
                type: 'POST',
                dataType: 'html',
                data: {id: id},
            }) // Obtengo la respuesta si es válida y actualizamos las etiquetas de los id correspondientes.
            .done(function(respuesta) {
                $("#datos_mascotas").html(respuesta);
                $("#alert_mascota_eliminado").show();

                setTimeout(function () {
                    $("#alert_mascota_eliminado").slideUp(500);
                }, 3000);
            })
            .fail(function() {
                console.log("Error en buscar datos de la mascota.")
            });
        } */
    }
</script>