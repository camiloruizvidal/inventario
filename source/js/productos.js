$(function ()
{
    CargarProductos(1);
    $('#formulario').EnviarFormSimple();
    $('#id_producto_presentacion').load('source/Ajax/select_presentacion_producto.php');
    $('#id_producto_tipo').load('source/Ajax/select_tipo_producto.php');

});
function CargarProductos(pag)
{

    $.ajax({
        url: 'source/Ajax/VerProductos.php',
        type: 'POST',
        data: {pag: pag},
        success: function (data) {
            $('#ListProductos').html(data);
        }
    });
}
