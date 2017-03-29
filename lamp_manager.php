<div class="tab-pane" id="lamp_manager">
    <br/>
    <div class="col-md-6">
        <div class="panel panel-primary center-block">
            <div class="panel-heading">Lamp Details</div>
            <div class="panel-body" style="overflow: scroll;" align="center">
                <table class="table table-hover table-bordered" style="font-size: 12px;">
                    <thead>
                        <tr class="warning" >
                            <th><span class="glyphicon glyphicon-pushpin"></span></th>
                            <th><span class="glyphicon glyphicon-barcode"></span></th>
                            <th><span class="glyphicon glyphicon-screenshot"></span></th>
                            <th><span class="glyphicon glyphicon-flash"></span></th>
                            <th><span class="glyphicon glyphicon-th"></span></th>
                            <th><span class="glyphicon glyphicon-star"></span></th>
                            <th><span class="glyphicon glyphicon-star-empty"></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include './DBCon.php';
                        $query = "SELECT * FROM lamp";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['serial']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td><?php echo $row['watts']; ?></td>

                                <?php if ($row['status'] == '1') { ?>
                                    <td><span class="glyphicon glyphicon-check"></span></td>
                                    <td><span class="glyphicon glyphicon-unchecked"></span></td>
                                <?php } elseif ($row['status'] == '0') { ?>
                                    <td><span class="glyphicon glyphicon-unchecked"></span></td>
                                    <td><span class="glyphicon glyphicon-check"></span></td>
                                <?php } ?>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div><div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
        </div>
    </div>

    <div class="col-md-6">
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