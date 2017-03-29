<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">

            <div class="panel panel-primary center-block" >
                <div class="panel-heading">Lamp Registration</div>
                <div class="panel-body">

                    <form id="reg_form" class="form-horizontal" onsubmit="validateForm2(this);
                            return false;" action="ctrl/save_lamp.php" method="POST">

                        <div class="form-group">
                            <div class="col-lg-12 text-muted" >
                                <small><b>NOTE:</b> All fields are required to be filled with accurate data.</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Serial No.</label>
                            <div class="col-sm-7">
                                <input id="sno" type="text" class="form-control" placeholder="Serial No. Pasted on the Lamp" name="sno">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Location</label>
                            <div class="col-sm-7">
                                <input id="loc" type="text" class="form-control" placeholder="Location of the Lamp" name="loc">
                            </div>
                        </div>

                        <hr/>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Lamp Type</label>
                            <div class="col-sm-7">
                                <input id="type" type="text" class="form-control" placeholder="CFL / Incandescent / LED" name="type">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Watts</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <input id="watts" type="text" class="form-control" placeholder="Watts" name="watts" maxlength="5">
                                    <span class="input-group-addon">W</span>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-10">
                                <button type="submit" class="btn btn-primary pull-right">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>