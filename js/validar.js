$(function ()
{
    validarLogin();
});
function validarLogin()
{
    var name = '#login';
    $(name).submit(function (e)
    {
        e.preventDefault();
        $.ajax({
            url: $(name).attr('action'),
            type: $(name).attr('method'),
            data: $(name).serialize(),
            success: function (data)
            {
                var data = JSON.parse(data);
                if (data.SiValida)
                {
                    window.location.href = data.url;
                }
                else
                {
                    
                }
            }
        });
    });
}
