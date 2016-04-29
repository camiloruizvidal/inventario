$(document).ready(function () {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var calendar = $('#calendar').fullCalendar({
        lang: 'es',
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
            if (title) {
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true // make the event "stick"
                        );
            }
            calendar.fullCalendar('unselect');
        },
        editable: true,
        events: [
            {
                title: 'Entrega de mercancía',
                start: new Date(y, m, 1)
            },
            {
                title: 'Auditoría',
                start: new Date(y, m, d + 5),
                end: new Date(y, m, d + 7)
            },
            {
                id: 999,
                title: 'Generar reporte del mes',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false
            },
            {
                id: 999,
                title: 'Entregar inventario a supervisor',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false
            },
            {
                title: 'Reunión',
                start: new Date(y, m, d, 10, 30),
                allDay: false
            },
            {
                title: 'Cumpleaños de María',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false
            },
            {
                title: 'Cierre de inventario',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false
            },
            {
                title: 'EGrappler.com',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://EGrappler.com/'
            }
        ]
    });
});
