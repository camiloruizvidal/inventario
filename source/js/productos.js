$(function ()
{
    CargarProductos(1);
    $('#formulario').EnviarForm();
});
function CargarProductos(pag)
{
    
    $.ajax({
        url:  'source/Ajax/VerProductos.php',
        type: 'POST',
        data:{pag:pag},
        success: function (data) {
            
        }
    });
}
