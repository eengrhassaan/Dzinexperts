 
       <!--  <div id="content-wrapper">
            

            <?php if($this->session->flashdata('success')):?>
                &nbsp;<div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php elseif($this->session->flashdata('error')):?>
                &nbsp;<div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
                </div>
            <?php endif;?>
<!--         </div>

    </div> -->
    <div class="content animate-panel">
        <div class="row">
            <div class="hpanel hblue">
                    <div class="panel-heading hbuilt">
                        <!-- <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div> -->
                        Calendar
                    </div>
                    <div class="panel-body">
                        <div  style="overflow: hidden;" id="calendar" class="calendar">
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            Example text
        </span>
        Company 2015-2020
    </footer>

</div>







<!-- Moved From Footer -->
<script src="<?php echo base_url() ?>scripts/vendor/jquery/dist/jquery.min.js"></script>

<script src="<?php echo base_url() ?>scripts/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/jquery-flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/flot.curvedlines/curvedLines.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/jquery.flot.spline/index.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="<?php echo base_url() ?>scripts/scripts/homer.js"></script>
<script src="<?php echo base_url() ?>scripts/scripts/charts.js"></script>

<script>

    $(function () {

        /**
         * Flot charts data and options
         */
        var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
        var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: [ "#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);



    });
</script>

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">Event Inquiry</h4>
                <!-- <small class="font-bold">Lorem Ipsum is simply dummy text.</small> -->
            </div>
            <div class="modal-body">
                <!-- Input fields Inquiry/booking form -->
                <form method="get" class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-10"><input type="text" name="event-name" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Contact Number</label>
                    <div class="col-sm-4"><input type="text" class="form-control"> 
                    </div>

                    <label class="col-sm-1 control-label">Email</label>
                    <div class="col-sm-5"><input type="text" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label">Event</label>
                    <div class="col-sm-4"><select class="form-control m-b" name="account">
                        <option>Mehndi/Mayon</option>
                        <option>Wedding</option>
                        <option>Valima Reception</option>
                        <option>Birthday Party</option>
                        <option>Coorporate Event</option>
                        <option>School Function</option>                        
                    </select>
                    </div>
                    
                    <label class="col-sm-1 control-label">Event Time</label>
                    <div class="col-sm-5"><select class="form-control m-b" name="account">
                        <option>Morning</option>
                        <option>Evening</option>
                        <option>Night</option>
                    </select>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">No. of Guests</label>
                    <div class="col-sm-4"><select class="form-control m-b" name="guestsNumbers">
                        <option>1-50</option>
                        <option>50-100</option>
                        <option>100-150</option>
                        <option>150-200</option>
                        <option>200-250</option>
                        <option>250-300</option>                        
                    </select>
                    </div>
                </div>


                <div class="hr-line-dashed"></div>

                <div class="form-group"><label class="col-sm-2 control-label">Other Services</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline"> <input type="checkbox" class="i-checks" >Lady's Staff</label>
                        <label class="checkbox-inline"> <input type="checkbox" class="i-checks">Segregation</label>
                        <label class="checkbox-inline"> <input type="checkbox" class="i-checks">Rampwalk</label>
                    
                        <label class="checkbox-inline"> <input type="checkbox" class="i-checks" >Colddrink</label>
                        <label class="checkbox-inline"> <input type="checkbox" class="i-checks">Dancefloor</label>
                        <label class="checkbox-inline"> <input type="checkbox" class="i-checks">Water on Table</label>
                    
                        <label class="checkbox-inline"> <input type="checkbox" class="i-checks">Water on Table</label>
                    
                    </div>
                </div>


                </div>



                <div class="form-group"><label class="col-sm-2 control-label">Date</label>

                    <div class="col-sm-10" name='dates'>
                    </div>
                <div class="hr-line-dashed"></div>
                </form>
                <!-- <input type="text" name="event-start-date"/> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>





    <!-- jQuery 2.1 -->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->


    
<link href="<?php echo base_url() ?>scripts/bootstrap-yearcalendar/bootstrap-year-calendar.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url() ?>scripts/bootstrap-yearcalendar/bootstrap-year-calendar.js"></script>
<script src="<?php echo base_url() ?>scripts/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- </div> -->
    <!-- /#wrapper -->
 <script type="text/javascript">
    // $(function() {
    //     $('#calendar').calendar(
    //         );
    // });

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
            // var temp = e.date.toLocaleDateString('en-GB');
            // var temp = e.date.toDateString();
            // // $('#myModal input[name="event-index"]').val(event ? event.id : '');
            // // $('#myModal input[name="event-name"]').val(event ? event.name : '');
            // // document.getElementbyName('event-end-date').value= temp;
            // //First remove the added input field
            // $('#myModal input[name="event-end-date"]').remove();
            
            // $('#myModal div[name="dates"]').append('<input disabled="true" type="text" class="form-control" name="event-end-date" value="'+temp+'" />' );

            $('#myModal').modal('show');
            // $('#myModal input[name="event-end-date"]').val(temp);
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