 
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
                        <div style="overflow: hidden" id="calendar" class="calendar">
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
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