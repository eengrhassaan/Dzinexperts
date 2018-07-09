   <!--  <div class="col-lg-12 text-center" style="padding:5px;"><small>&copy; 2017 by <a target="_blank" href="http://rudiliu.com">Rudi Liu</a></small></div> -->
        <!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url()?>assets/js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-editable.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-editable.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>

    <div  id="calendar">
             </div>


    <!-- Full Calendar Scripts and CSS Start-->
   <!--  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    <link rel="stylesheet" href="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.css" />
    <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script> -->
    <!-- Full Calendar Scripts and CSS Ends-->
    <!-- wrapper -->
    <link href="<?php echo base_url() ?>scripts/bootstrap-yearcalendar/bootstrap-year-calendar.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url() ?>scripts/bootstrap-yearcalendar/bootstrap-year-calendar.js"></script>
    
    <script type="text/javascript">
    $(function() {
        $('#calendar').calendar(
            
            );
    });




  
function editEvent(event) {
    $('#myModal input[name="event-index"]').val(event ? event.id : '');
    $('#myModal input[name="event-name"]').val(event ? event.name : '');
    $('#myModal input[name="event-end-date"]').val(event.startDate);
    $('#myModal').modal('show');
}
function deleteEvent(event) {
    var dataSource = $('#calendar').data('calendar').getDataSource();
    for(var i in dataSource) {
        if(dataSource[i].id == event.id) {
            dataSource.splice(i, 1);
            break;
        }
    }
    
    $('#calendar').data('calendar').setDataSource(dataSource);
}
function saveEvent() {
    var event = {
        id: $('#event-modal input[name="event-index"]').val(),
        name: $('#event-modal input[name="event-name"]').val(),
        location: $('#event-modal input[name="event-location"]').val(),
        startDate: $('#event-modal input[name="event-start-date"]').datepicker('getDate'),
        endDate: $('#event-modal input[name="event-end-date"]').datepicker('getDate')
    }
    
    var dataSource = $('#calendar').data('calendar').getDataSource();
    if(event.id) {
        for(var i in dataSource) {
            if(dataSource[i].id == event.id) {
                dataSource[i].name = event.name;
                dataSource[i].location = event.location;
                dataSource[i].startDate = event.startDate;
                dataSource[i].endDate = event.endDate;
            }
        }
    }
    else
    {
        var newId = 0;
        for(var i in dataSource) {
            if(dataSource[i].id > newId) {
                newId = dataSource[i].id;
            }
        }
        
        newId++;
        event.id = newId;
    
        dataSource.push(event);
    }
    
    $('#calendar').data('calendar').setDataSource(dataSource);
    $('#event-modal').modal('hide');
}
$(function() {
    var currentYear = new Date().getFullYear();
    $('#calendar').calendar({ 
        enableContextMenu: true,
        minDate : new Date(),
        enableRangeSelection: false,
        contextMenuItems:[
            {
                text: 'Update',
                click: editEvent
            },
            {
                text: 'Delete',
                click: deleteEvent
            }
        ],
        // selectRange: function(e) {
        //     editEvent({ startDate: e.startDate, endDate: e.endDate });
        // },
        clickDay: function (e) {
            // body...
            var temp = e.date.toLocaleDateString('en-GB');
            var temp = e.date.toDateString();
            // $('#myModal input[name="event-index"]').val(event ? event.id : '');
            // $('#myModal input[name="event-name"]').val(event ? event.name : '');
            // document.getElementbyName('event-end-date').value= temp;
            //First remove the added input field
            $('#myModal input[name="event-end-date"]').remove();
            
            $('#myModal div[name="dates"]').append('<input disabled="true" type="text" class="form-control" name="event-end-date" value="'+temp+'" />' );
            $('#myModal').modal('show');
            $('#myModal input[name="event-end-date"]').val(temp);
        },
        mouseOnDay: function(e) {
            if(e.events.length > 0) {
                var content = '';
                
                for(var i in e.events) {
                    content += '<div class="event-tooltip-content">'
                                    + '<div class="event-name" style="color:' + e.events[i].color + '">' + e.events[i].name + '</div>'
                                    + '<div class="event-location">' + e.events[i].location + '</div>'
                                + '</div>';
                }
            
                $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: content
                });
                
                $(e.element).popover('show');
            }
        },
        mouseOutDay: function(e) {
            if(e.events.length > 0) {
                $(e.element).popover('hide');
            }
        },
        dayContextMenu: function(e) {
            $(e.element).popover('hide');
        },
        dataSource: [
            {
                id: 0,
                name: 'Google I/O',
                location: 'San Francisco, CA',
                startDate: new Date(currentYear, 4, 28),
                endDate: new Date(currentYear, 4, 29)
            },
            {
                id: 1,
                name: 'Microsoft Convergence',
                location: 'New Orleans, LA',
                startDate: new Date(currentYear, 2, 16),
                endDate: new Date(currentYear, 2, 19)
            },
            {
                id: 2,
                name: 'Microsoft Build Developer Conference',
                location: 'San Francisco, CA',
                startDate: new Date(currentYear, 3, 29),
                endDate: new Date(currentYear, 4, 1)
            },
            {
                id: 3,
                name: 'Apple Special Event',
                location: 'San Francisco, CA',
                startDate: new Date(currentYear, 8, 1),
                endDate: new Date(currentYear, 8, 1)
            },
            {
                id: 4,
                name: 'Apple Keynote',
                location: 'San Francisco, CA',
                startDate: new Date(currentYear, 8, 9),
                endDate: new Date(currentYear, 8, 9)
            },
            {
                id: 5,
                name: 'Chrome Developer Summit',
                location: 'Mountain View, CA',
                startDate: new Date(currentYear, 10, 17),
                endDate: new Date(currentYear, 10, 18)
            },
            {
                id: 6,
                name: 'F8 2015',
                location: 'San Francisco, CA',
                startDate: new Date(currentYear, 2, 25),
                endDate: new Date(currentYear, 2, 26)
            },
            {
                id: 7,
                name: 'Yahoo Mobile Developer Conference',
                location: 'New York',
                startDate: new Date(currentYear, 7, 25),
                endDate: new Date(currentYear, 7, 26)
            },
            {
                id: 8,
                name: 'Android Developer Conference',
                location: 'Santa Clara, CA',
                startDate: new Date(currentYear, 11, 1),
                endDate: new Date(currentYear, 11, 4)
            },
            {
                id: 9,
                name: 'LA Tech Summit',
                location: 'Los Angeles, CA',
                startDate: new Date(currentYear, 10, 17),
                endDate: new Date(currentYear, 10, 17)
            }
        ]
    });
    
    $('#save-event').click(function() {
        saveEvent();
    });
});
    </script>
    </div>
    <!-- /#wrapper -->

</body>

</html>