$(document).ready(function () {
    calendario();
});
function calendario()
{
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        editable: false,
        //           events: datos
        events: {
            url: 'source/Ajax/veragenda.php'
        }
    });
}
