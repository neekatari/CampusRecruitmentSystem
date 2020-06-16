<?php include_once './master.php'; ?>
<html>
    <head>
        <title>Jquery Fullcalandar Integration with PHP and Mysql</title>



       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        

        <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
        
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>
        
        <script>
            $(document).ready(function (){
                var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    header: {   
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events: 'load.php',
                    selectable: true,
                    selectHelper: true,
                    eventLimit: true,
                     //eventColor: '#378006',
                    select: function ()
                    {
                        
                        //alert(title + place + speaker + topic + "asdasd" + detail);
                        
                        $('#myModal').modal('show');
                        var title = $('#ename').val();
                        var place = $('#place').val();
                        var speaker = $('#speaker').val();
                        var topic = $('#topic').val();
                        var detail = $('#detail').val();
                        var color=$('#color').val();
                        //var title = prompt("Enter Event Title");
                        if (title !== '' && place !== '' && speaker !== '' && topic !== '' && detail !== '' && color !=='')
                        {
                            alert('if');
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                            $.ajax({
                                url: "insert.php",
                                type: "POST",
                                data: {title: title, place: place, speaker: speaker, topic: topic, detail: detail, start: start, end: end, color:color},
                                eventcolor: color,
                                success: function ()
                                {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("Added Successfully");
                                }
                            });
                        }
                    },
                   eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
                    },
                    editTable:true,
                        eventResize: function (event)
                            {
                                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                                var title = event.title;
                                var id = event.id;
                                $.ajax({
                                    url: "update.php",
                                    type: "POST",
                                    data: {title: title, start: start, end: end, id: id},
                                    success: function () {
                                        calendar.fullCalendar('refetchEvents');
                                        alert('Event Update');
                                    }
                                });
                            },
                    eventDrop: function (event)
                    {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        var title = event.title;
                        var id = event.id;
                        $.ajax({
                            url: "update.php",
                            type: "POST",
                            data: {title: title, start: start, end: end, id: id},
                            success: function ()
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event Updated");
                            }
                        });
                    },
                    eventClick: function (event)//update 15-march
                    {
                        if (confirm("Are you sure you want to remove it?"))
                        {
                            var id = event.id;
                            $.ajax({
                                url: "delete.php",
                                type: "POST",
                                data: {id: id},
                                success: function ()
                                {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("Event Removed");
                                }
                            });
                        }
                    }
                });
            });

        </script>
    </head>
    <body>
        <form action="#" method="post">
        <div class="container" style="margin-top: 100px;">
            <div id="calendar"></div>
            <div class="modal fade" id="myModal" >
                <div class="modal-dialog modal-lg" style="z-index: 20 !important;">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Event </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body row ">

                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-user-circle" area-hidden="true"></i> Event name</label>
                                    <input type="text" name="ename" id="ename" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-paste" aria-hidden="true"></i> Place</label>
                                    <input type="text" name="place" id="place" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>

                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-user" aria-hidden="true"></i> speaker</label>
                                    <input type="text" name="speaker" id="speaker" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-arrow-down" aria-hidden="true"></i> topic</label>
                                    <input type="text" name="topic" id="topic" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-user" aria-hidden="true"></i> Other Details</label>
                                    <textarea  name="detail" id="detail" class="form-control" id="exampleInputEmail1"></textarea>
                                </div>
                            </div>
<!--                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group label-floating">


                                    <label class="control-label"><i class="fa fa-user" aria-hidden="true"></i> start date</label>
                                    <input type="text" name="start" class="form-control" id="start exampleInputEmail1" readonly>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group label-floating">


                                    <label class="control-label"><i class="fa fa-user" aria-hidden="true"></i> start date</label>
                                    <input type="text" name="end" class="form-control" id="end exampleInputEmail1" readonly>

                                </div>
                            </div>-->
                            <div class="col-sm-10 col-sm-offset-1">
                                
                                <div class=" form-group">
                                    <label for="color" class="col-sm-2 control-label">Color</label>
                                    <select name="color" class="form-control" id="color">
                                        
                                        <option value="">Choose</option>
                                        <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                        <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                                        <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                        <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                        <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                        <option style="color:#000;" value="#000">&#9724; Black</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary col-sm-1" name="add" id="add" data-dismiss="modal" />
                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </form>
    </body>
     
        
</html>
