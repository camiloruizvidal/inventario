$(document).ready(function () {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    /*$.ajax({
     url: 'source/Ajax/veragenda.php',
     //dataType: 'json',
     async: false,
     success: function (datos)
     {
     datos = JSON.parse(datos);
     }
     });*/
    var calendar = $('#calendar').fullCalendar({

        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay)
        {
            var title = prompt('Título del evento');
            if (title)
            {
                calendar.fullCalendar('renderEvent', {
                    title: title,
                    start: start,
                    end: end,
                    allDay: allDay
                },
                true);
            }
            calendar.fullCalendar('unselect');
        },
        editable: true,
        //           events: datos
        events: {
                url: 'source/Ajax/veragenda.php'
            }
    });


});
