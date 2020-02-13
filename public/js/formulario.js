// Recorrer los elementos y hacer que onchange ejecute una funcion para comprobar el valor de ese input
$(document).ready(function(){

    "use strict";

    $("#ClientePersonalidadJuridica").change(function () {
        var y = $("#ClientePersonalidadJuridica").val();
        if (y == 'Persona Moral') {
            $("#cliente_RazonSocial").show(100);
        } else {
            $("#cliente_RazonSocial").hide();
        }
    });

}())