var id_archivos = "";
var id_cotizaciones = "";
var id_facturas = "";
var id_articulos = "";

function agregar_articulo() {

    var datos_articulo = new FormData();
    var file = document.getElementById("foto_articulo").files[0];

    datos_articulo.append('foto_articulo', file);
    datos_articulo.append('nombre_articulo', $("#select_articulos option:selected").val());
    datos_articulo.append('partida', $('#partida_a').val());
    datos_articulo.append('no_solicitud', $('#no_solicitud_a').val());
    datos_articulo.append('cantidad', $('#cantidad_a').val());
    datos_articulo.append('importe', $('#importe_a').val());
    datos_articulo.append('observaciones', $('#observaciones_a').val());
    datos_articulo.append('garantia', $('#garantia_a').val());
    datos_articulo.append('ubicacion', $("#ubicacion_a option:selected").val());

    $.ajax({
        url: "../articulos/nuevo",
        type: "POST",
        data: datos_articulo,
        contentType: false,
        processData: false,
        cache: false,
        beforeSend: function () {

        },
        error: function () {
            $.notify({
                // options
                message: 'Ocurrio un error al agregar el articulo, verifica los datos'
            }, {
                // settings
                type: 'danger'
            });
        },
        success: function (data) {
            $('#articulosModal').modal('hide');
            $('#tabla-articulos').show();
            $('#tabla-articulos > tbody:last-child').append('<tr><td>' + data.no_solicitud + '</td><td>' + data.nombre_articulo +
                '</td><td>' + data.partida + '</td><td>' + data.ubicacion + '</td><td>' + data.observaciones + '</td><td>' + data.cantidad + '</td><td>' + data.importe +
                '</td><td><a id="pop" href="../images/articulos/' + data.nombre_archivo + '" target="_blank"><img src="../images/jpg.png" width="30px"></a></td><td><button type="button" class="btn btn-sm bg-red btn-eliminar-art" value="'
                + data.id_articulo + '" >Eliminar</button></td></tr>');
            id_articulos = data.id_articulo + '-' + id_articulos;
            $('#id_articulos').val(id_articulos);
            $.notify({
                // options
                message: 'El articulo fue agregado correctamente'
            }, {
                // settings
                type: 'success'
            });
        }
    });
}

function agregar_cotizacion() {
    var datos_cotizacion = new FormData();
    var inputFileImage = document.getElementById("archivos_cot");
    var file = inputFileImage.files[0];
    datos_cotizacion.append('archivos_cot', file);
    datos_cotizacion.append('fecha_cotizacion', $('#fecha_cotizacion').val());
    datos_cotizacion.append('id_proveedor_cot', $("#proveedores_cotizacion option:selected").val());
    datos_cotizacion.append('no_cotizacion', $('#no_cotizacion').val());
    datos_cotizacion.append('descripcion_cot', $('#descripcion_cot').val());
    datos_cotizacion.append('total_cot', $('#total_cot').val());
    datos_cotizacion.append('tipo_cotizacion', $('#tipo_cotizacion option:selected').val());

    $.ajax({
        url: "../solicitudes/cotizacion",
        type: "POST",
        data: datos_cotizacion,
        contentType: false,
        processData: false,
        cache: false,
        beforeSend: function () {

        },
        error: function () {
            $.notify({
                // options
                message: 'Ocurrio un error al agregar cotizacion, verifica los datos'
            }, {
                // settings
                type: 'danger'
            });
        },
        success: function (data) {
            $('#tabla-cotizaciones').show();
            $('#tabla-cotizaciones > tbody:last-child').append('<tr><td>' + data.no_cotizacion + '</td><td>' + data.fecha +
                '</td><td>' + data.nombre_proveedor + '</td><td>' + data.descripcion + '</td><td>' + data.total + '</td><td><a href="../images/cotizaciones/' + data.nombre_archivo + '" target="_blank"><img src="../images/pdf.png" width="30px"></a></td><td><button type="button" class="btn btn-sm bg-red btn-eliminar-cot" value="' + data.id_cotizacion + '" >Eliminar</button></td></tr>');
            id_cotizaciones = data.id_cotizacion + '-' + id_cotizaciones;
            document.getElementById('id_cotizaciones').value = id_cotizaciones;
            limpiar_cotizacion();
            $.notify({
                // options
                message: 'La cotizacion se agrego correctamente'
            }, {
                // settings
                type: 'success'
            });
        }
    });
}

function agregar_factura() {

    var datos_factura = new FormData();
    var inputFileImage = document.getElementById("archivos_facturas");
    var file = inputFileImage.files[0];

    datos_factura.append('archivos_factura', file);
    datos_factura.append('fecha_factura', $('#fecha_factura').val());
    datos_factura.append('id_proveedor_factura', $("#proveedores_factura option:selected").val());
    datos_factura.append('no_factura', $('#no_factura').val());
    datos_factura.append('descripcion_factura', $('#descripcion_factura').val());
    datos_factura.append('total_factura', $('#total_factura').val());

    $.ajax({
        url: "../solicitudes/factura",
        type: "POST",
        data: datos_factura,
        contentType: false,
        processData: false,
        cache: false,
        beforeSend: function () {

        },
        error: function () {
            $.notify({
                // options
                message: 'Ocurrio un error al agregar la factura, verifica los datos'
            }, {
                // settings
                type: 'danger'
            });
        },
        success: function (data) {
            $('#tabla-facturas').show();
            $('#tabla-facturas > tbody:last-child').append('<tr><td>' + data.no_factura + '</td><td>' + data.fecha +
                '</td><td>' + data.nombre_proveedor + '</td><td>' + data.descripcion + '</td><td>' + data.total + '</td><td><a href="../images/facturas/' + data.nombre_archivo + '" target="_blank"><img src="../images/pdf.png" width="30px"></a></td><td><button type="button" class="btn btn-sm bg-red btn-eliminar-fact" value="' + data.id_factura + '" >Eliminar</button></td></tr>');
            id_facturas = data.id_factura + '-' + id_facturas;
            document.getElementById('id_facturas').value = id_facturas;
            limpiar_facturas();
            $.notify({
                // options
                message: 'La factura se agregó correctamente'
            }, {
                // settings
                type: 'success'
            });
        }
    });
}

function limpiar_cotizacion() {
    $('#no_cotizacion').val("");
    $('#descripcion_cot').val("");
    $('#total_cot').val("");
    $('#fecha_cotizacion').val();
}

function limpiar_facturas() {
    $('#no_factura').val("");
    $('#descripcion_factura').val("");
    $('#total_factura').val("");

}

function agregar_archivos() {

    var archivos_add = new FormData();
    var inputFileImage = document.getElementById("archivos_adicionales");
    var file = inputFileImage.files[0];

    archivos_add.append('archivos_adicionales', file);
    archivos_add.append('tipo_documento', $("#tipo_documento option:selected").val());

    $.ajax({
        url: "cursos_online",
        type: "POST",
        data: archivos_add,
        contentType: false,
        processData: false,
        cache: false,
        beforeSend: function () {

        },
        error: function () {

        },
        success: function (data) {
            $('#tabla-archivos_adicionales').show();
            $('#tabla-archivos_adicionales > tbody:last-child').append('<tr><td>' + data.tipo_documento + '</td><td><a href="../images/archivos_adicionales/' + data.nombre_archivo + '" target="_blank"><img src="../images/pdf.png" width="30px"></a></td><td><button type="button" class="btn btn-sm bg-red btn-eliminar-archivos" value="' + data.id_archivos + '" >Eliminar</button></td></tr>');
            id_archivos = data.id_archivo + '-' + id_archivos;
            document.getElementById('id_archivos').value = id_archivos;
            $.notify({
                // options
                message: 'Archivo agregado correctamente'
            }, {
                // settings
                type: 'success'
            });
        }
    });
}

$(document).on('click', '.btn-eliminar-archivos', function (event) {
    var nombre_tabla = 'archivos';
    dataId = $(this).val();
    eliminar_archivos(nombre_tabla, dataId);
    event.preventDefault();
    $(this).closest('tr').remove();
});

/*function set_partida() {
    var id = $('#select_articulos').val();
    //var no_sol = $('#no_solicitud').val();
    $.ajax({
        url: "../solicitudes/lista_art/" + id,
        type: "POST",
        contentType: false,
        processData: false,
        cache: false,
        beforeSend: function () {

        },
        error: function () {
            $.notify({
                // options
                message: 'Ocurrio un error al buscar el articulo'
            }, {
                // settings
                type: 'danger'
            });
        },
        success: function (data) {
            $('#partida_a').val(data[0].partida);
            //$('#no_solicitud_a').val(no_sol);
        }
    });
}

$(document).on('click', '.btn-eliminar-art', function (event) {
    var nombre_tabla = 'articulo';
    dataId = $(this).val();
    eliminar_archivos(nombre_tabla, dataId);
    event.preventDefault();
    $(this).closest('tr').remove();
});

$(document).on('click', '.btn-eliminar-fact', function (event) {
    var nombre_tabla = 'factura';
    dataId = $(this).val();
    eliminar_archivos(nombre_tabla, dataId);
    event.preventDefault();
    $(this).closest('tr').remove();
});

$(document).on('click', '.btn-eliminar-cot', function (event) {
    var nombre_tabla = 'cotizacion';
    dataId = $(this).val();
    eliminar_archivos(nombre_tabla, dataId);
    event.preventDefault();
    $(this).closest('tr').remove();
});



function eliminar_archivos(nombre, id) {
    var datos_tabla = {tabla: nombre};
    $.ajax({
        url: "../solicitudes/eliminar/" + id,
        type: "DELETE",
        data: datos_tabla,
        beforeSend: function () {

        },
        error: function () {
            $.notify({
                // options
                message: 'Ocurrio un error al eliminar el registro'
            }, {
                // settings
                type: 'danger'
            });
            return false;
        },
        success: function (data) {
            $.notify({
                // options
                message: 'El archivo se eliminó correctamente'
            }, {
                // settings
                type: 'success'
            });
            return true;
        }
    });
}

$(document).ready(function () {
   $("#select_usuarios").change(function () {
       var id = $('#select_usuarios').val();
       $.ajax({
           url: "../usuarios/user/" + id,
           type: "POST",
           contentType: false,
           processData: false,
           error: function () {
               $.notify({
                   // options
                   message: 'Ocurrio un error al buscar la unidad, por favor contacte con el administrador'
               }, {
                   // settings
                   type: 'danger'
               });
           },
           success: function (data) {
               var nombre_usuario = $("#select_usuarios option:selected").text();
               $('#usuario_mercado').val(nombre_usuario);
               $('#area').val(data.direccion);
           }
       });
   });
});*/