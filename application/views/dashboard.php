        <style type="text/css">
            .calendar {
    width: 700px;
}
.calendar, .calendar table {
    border: 0;
    margin: 0;
}
.calendar, .calendar table, .calendar td {
    text-align: center;
}
.calendar .year{
    font-family:Verdana; 
    font-size:18pt; 
    color:#ff9900;
}
.calendar .month{
    width: 25%;
    vertical-align: top;
     border: 1px dashed red;
}
.calendar .month table{
    font-size:10pt;
    font-family:Verdana;
    padding: 5px;

}
.calendar .month th{
    text-align: center;
    font-size:12pt;
    font-family:Arial;
    color:#666699;
}
.calendar .month td{
    font-size:8pt;
    font-family:Verdana;
}
.calendar .month .days td{
    color:#666666;
    font-weight: bold;
    padding: 2px;
}
.calendar .month .sat{
    color:#0000cc;
}
.calendar .month .sun{
    color:#cc0000;
}
.calendar .month .today{
    background:#ff0000;
    color: #ffffff;
}
</style>
       
        <div id="page-wrapper">
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
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Dashboard</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row text-center">
                        <?php 
                            $months=array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',    'October', 'November', 'December');
                        
                            $current_month=date('n');
                            $current_year=date('Y');
                            $current_day=date('d');
                            $month=0;
                            echo '<table class="calendar">';
                            echo '<th colspan="4" class="year">'.$current_year.'</th>';

                            // Table of months
                            for ($row=1; $row<=3; $row++) {
                                echo '<tr>';
                                for ($column=1; $column<=4; $column++) {
                                    echo '<td class="month">';
                                    $month++;
                                    // Month Cell
                                    $first_day_in_month=date('w',mktime(0,0,0,$month,1,$current_year));
                                    $month_days=date('t',mktime(0,0,0,$month,1,$current_year));
        
                                     // in PHP, Sunday is the first day in the week with number zero (0)
                                    // to make our calendar works we will change this to (7)
                                    if ($first_day_in_month==0){
                                        $first_day_in_month=7;
                                    }
                                    echo '<table>';
                                    echo '<th colspan="7">'.$months[$month-1].'</th>';
                                    echo '<tr class="days"><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td>';
                                    echo '<td class="sat">Sa</td><td class="sun">Su</td></tr>';
                                    echo '<tr>';
                                    for($i=1; $i<$first_day_in_month; $i++) {
                                        echo '<td> </td>';
                                    }
                                    for($day=1; $day<=$month_days; $day++) {
                                        $pos=($day+$first_day_in_month-1)%7;
                                        $class = (($day==$current_day) && ($month==$current_month)) ? 'today' : 'day';
                                        $class .= ($pos==6) ? ' sat' : '';
                                        $class .= ($pos==0) ? ' sun' : '';

                                        echo '<td class="'.$class.'">'.$day.'</td>';
                                        if ($pos==0) echo '</tr><tr>';
                                    }
                                    echo '</tr>';
                                    echo '</table>';
                                    echo '</td>';
                                }
                                echo '</tr>';
                            }
                            echo '</table>';
                        ?>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- wrapper -->
