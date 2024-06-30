<!DOCTYPE html>
<html lang="en">
<meta>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @csrf
            <label for="title">Event Title</label>
            <input type="text" class="form-control" id="title">
            <span id="titleError" class="text-danger"></span>

            <label for="description">Description</label>
            <input type="text" class="form-control" id="description">
            <span id="descriptionError" class="text-danger"></span>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="saveBtn" class="btn btn-primary">Save</button>
        </div>
        </div>
    </div>
    </div>

    <div class="calendar">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt5"> Full Calendar</h3>
                <div class="col-md-11 offset-1 mt-5 mb-5">
                    <div id="calendar">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var events = @json($events);

        $('#calendar').fullCalendar({
            header: {
                left: 'prev, next, today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            events: events,
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDays) {
                $('#bookingModal').modal('toggle');

                $('#saveBtn').click(function() {
                    var title = $('#title').val();
                    var description = $('#description').val();
                    var start_date = moment(start).format('YYYY-MM-DD');
                    var end_date = moment(end).format('YYYY-MM-DD');

                    $.ajax({
                        type: "POST",
                        url: "{{ route('calendar.store') }}",
                        dataType: "json",
                        data: { title, description, start_date, end_date },
                        success: function(response) {
                            $('#bookingModal').modal('hide');
                            $('#calendar').fullCalendar('renderEvent', {
                                title: response.title,
                                description: response.description,
                                start: response.start_date,
                                end: response.end_date
                            });

                            Swal.fire({
                                icon: "success",
                                title: "Event Added!",
                            });
                        },
                        error:function(error) {
                            if(error.responseJSON.errors) {
                                $('titleError').html(error.responseJSON.errors.title);
                                $('descriptionError').html(error.responseJSON.errors.description);
                            }
                        }
                    });
                });
            }
        })
    });
</script>
</html>