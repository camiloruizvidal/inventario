$(function ()
{
    $.ajax({
        url: 'source/Ajax/ReportesVentasYear.php',
        success: function (data) {
            data=JSON.parse(data);
            $('#area-chart').graficar({
                titulo: 'Comparación de ventas',
                subtitulo: data.year,
                tipo_char: 'area',
                serie_x: data.serx,
                title_y: 'Promedio de ventas por mes ($)',
                data: data.data
            });
        }
    });
});
