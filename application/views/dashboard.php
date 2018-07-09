 
        <div id="content-wrapper">
           <div id="page-wrapper"> 
                <div  id="calendar" style="overflow-y: hidden;"></div>
            </div>

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
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
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
                        <div class="col-sm-4"><input type="text" class="form-control"> </div>
                        <label class="col-sm-1 control-label">Email</label>
                        <div class="col-sm-5"><input type="text" class="form-control"></div>
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
                        <div class="col-sm-5">
                            <select class="form-control m-b" name="account">
                                <option>Morning</option>
                                <option>Evening</option>
                                <option>Night</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">No. of Guests</label>
                        <div class="col-sm-4">
                            <select class="form-control m-b" name="guestsNumbers">
                                <option>Less than 100</option>
                                <option>101-250</option>
                                <option>250-500</option>
                                <option>500-650</option>
                                <option>More than 650</option>                        
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10" name='dates'></div>
                        
                    </div>

                    <div class="hr-line-dashed"></div>
                    <!-- <label class="col-sm-2 control-label">Other Services</label> -->
                    <div class="form-group">
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


                

                </form>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
                <!-- /.modal-content -->
            </div>

            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->