$(document).ready(function () {
    "use strict";
$("#btn_rfc").click(function () {
    fr_calculaRFC();
});

    function calcula() {
        var ap_paterno = "beatriz";
        var ap_materno = "vargas";
        var nombre = "garcia";
        var rfc = "880408";
        var sexo = "M";  //h =  hombre  m= mujer
        var estado = "JC";  //falta validacion de estados

        // var ap_paterno = document.getElementById("ap_paterno").value;
        // var ap_materno = document.getElementById("ap_materno").value;
        // var nombre = document.getElementById("nombre").value;
        // var rfc = document.getElementById("datepicker").value;
        // var sexo = document.getElementById("sexo").value;

        // var estado = document.getElementById("estado").value;
        var dteNacimiento = rfc;
        //FILTRA ACENTOS
        var ap_pat_f = RFCFiltraAcentos(ap_paterno.toLowerCase());
        var ap_mat_f = RFCFiltraAcentos(ap_materno.toLowerCase());
        var nombre_f = RFCFiltraAcentos(nombre.toLowerCase());
        //GUARDA NOMBRE ORIGINAL PARA GENERAR HOMOCLAVE
        var ap_pat_orig = ap_pat_f;
        var ap_mat_orig = ap_mat_f;
        var nombre_orig = nombre_f;
        //ELIMINA PALABRAS SOBRANTES DE LOS NOMBRES
        ap_pat_f = RFCFiltraNombres(ap_pat_f);
        ap_mat_f = RFCFiltraNombres(ap_mat_f);
        nombre_f = RFCFiltraNombres(nombre_f);

        if (ap_pat_f.length > 0 && ap_mat_f.length > 0) {
            if (ap_pat_f.length < 3) {
                rfc = RFCApellidoCorto(ap_pat_f, ap_mat_f, nombre_f);
            } else {
                rfc = RFCArmalo(ap_pat_f, ap_mat_f, nombre_f);
            }
        }

        if (ap_pat_f.length == 0 && ap_mat_f.length > 0) {
            rfc = RFCUnApellido(nombre_f, ap_mat_f);
        }
        if (ap_pat_f.length > 0 && ap_mat_f.length == 0) {
            rfc = RFCUnApellido(nombre_f, ap_pat_f);
        }

        rfc = RFCQuitaProhibidas(rfc);

        rfc = rfc.toUpperCase() + dteNacimiento + homonimia(ap_pat_orig, ap_mat_orig, nombre_orig);

        rfc = RFCDigitoVerificador(rfc);

        fnCalculaCURP(nombre_f.toUpperCase(), ap_pat_f.toUpperCase(), ap_mat_f.toUpperCase(), dteNacimiento, sexo, estado);

        // document.getElementById("rfc").value = rfc;
        console.log('rfc: ', rfc)


        return false;
    }

    function fr_calculaRFC( RFC, HOMOCLAVE, NOMBRE1, NOMBRE2, APAT, AMAT, FECHA, TIPO_EVENTO ) {

        var persona_tipo = jQuery('#' + TIPO_EVENTO).val();

        if(persona_tipo !== 'Persona moral'){

            if( jQuery('#'+RFC).val() == '' ) {
               /* var nombre_uno = jQuery('#'+NOMBRE1).val();
                var nombre_dos = jQuery('#'+NOMBRE2).val();
                var nombre     =  nombre_uno + ' ' + nombre_dos;
                var pat        = jQuery('#'+APAT).val();
                var mat        = jQuery('#'+AMAT).val();
                var fecha      = jQuery('#'+FECHA).val();*/
                var ap_paterno = "beatriz";
                var ap_materno = "vargas";
                var nombre = "garcia";
                var rfc = "880408";
                var sexo = "M";  //h =  hombre  m= mujer
                var estado = "JC";  //falta validacion de estados

                 var nombre_uno = jQuery('#'+NOMBRE1).val();
                 var nombre_dos = jQuery('#'+NOMBRE2).val();
                 var nombre     =  nombre_uno + ' ' + nombre_dos;
                 var pat        = jQuery('#'+APAT).val();
                 var mat        = jQuery('#'+AMAT).val();
                 var fecha      = jQuery('#'+FECHA).val();

                if( mat == '' ) { mat = 'X'; }

                if( nombre_uno == '' ) {
                    alert('El primer nombre es necesario');
                    jQuery('#'+NOMBRE1).focus();
                } else if( pat == '' ) {
                    alert('El apellido paterno es necesario');
                    jQuery('#'+APAT).focus();
                } else if( mat == '' ) {
                    alert('El apellido materno es necesario');
                    jQuery('#'+AMAT).focus();
                } else if( fecha == '' ) {
                    alert('La fecha de nacimiento es necesaria');
                    jQuery('#'+FECHA).focus();
                } else {

                    var rfc = fr_CoreCalcularRFC(nombre, pat,  mat, fecha);
                    jQuery('#'+RFC).val(rfc);
                    jQuery.post(FR_PATH,{
                        fr_cmd:'getHomoclave',
                        Nombre: nombre,
                        Apat  :   pat,
                        Amat  :   mat,
                        Rfc   :    rfc,
                        PM    :     'true'
                    }, function(data) {
                        jQuery('#'+HOMOCLAVE).val(data);
                    },'text' );
                }
            }
        }
    }

    function fr_calculaRFC_PM( RFC, HOMOCLAVE, NOMBRE1, FECHA ) {
        if( jQuery('#'+RFC).val() == '' ) {
            var nombre_uno = jQuery('#'+NOMBRE1).val();
            var fecha      = jQuery('#'+FECHA).val();

            if( nombre_uno == '' ) {
                alert('El primer nombre es necesario');
                jQuery('#'+NOMBRE1).focus();
            } else if( fecha == '' ) {
                alert('La fecha de nacimiento es necesaria');
                jQuery('#'+FECHA).focus();
            } else {

                jQuery.post(FR_PATH,{
                    fr_cmd: 'getRFC_PM',
                    Nombre: nombre_uno,
                    fecha : fecha,
                    PM    : 'true'
                }, function(data) {
                    var arr = data.split("|");
                    jQuery('#'+RFC).val(arr[0]);
                    jQuery('#'+HOMOCLAVE).val(arr[1]);
                },'text' );
            }
        }
    }
    });


