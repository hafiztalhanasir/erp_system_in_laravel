<!-- Mainly scripts -->
<script src="{{ asset('js/plugins/fullcalendar/moment.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- Custom and plugin javascript -->
<script src="{{ asset('js/hr.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
<!-- jQuery UI  -->
<script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
<!-- Full Calendar -->
<script src="{{ asset('js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<!-- d3 and c3 charts -->
<script src="{{ asset('js/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset('js/plugins/c3/c3.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
<!-- Sweetalert -->
<script src="{{ asset('js/plugins/sweetalert/sweetalert2.min.js') }}"></script>
<!-- Validation -->
<script src="{{ asset('js/plugins/jqueryvalidation/jqueryvalidate.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('js/plugins/select2/select2.full.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });
        /* initialize the external events
         -----------------------------------------------------------------*/
        $('#external-events div.external-event').each(function () {
            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 9999999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
        });
        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function () {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2)
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d + 4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ]
        });
    });
</script>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function () {
        $(document.body).on("click", ".client-link", function (e) {
            e.preventDefault()
            $(".selected .tab-pane").removeClass('active');
            $($(this).attr('href')).addClass("active");
        });
    });
</script>

<!-- Toaster Scripts -->
<script>
    function showToast(status, msg) {
        let toast = $('.toast');
        toast.find('.toast-header strong').html(status);
        toast.find('.toast-body').html(msg);
        if(status === 'Success') {
            toast.find('.toast-header .fa-square').addClass('text-navy');
        }else if(status === 'Error') {
            toast.find('.toast-header .fa-square').addClass('text-danger');
        }
        toast.toast({
            delay: 5000,
            animation: true
        });
        toast.toast('show');
    }
</script>
