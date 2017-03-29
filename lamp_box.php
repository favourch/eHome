<div class="tab-pane active" id="overview">
    <br/>
    <?php
    include './DBCon.php';
    $id = $_SESSION['id'];
    $result1 = mysqli_query($con, "SELECT lamp_id FROM lamp_user WHERE user_id='$id'");
    while ($row1 = mysqli_fetch_array($result1)) {
        $lamp_id = $row1['lamp_id'];
        $result2 = mysqli_query($con, "SELECT * FROM lamp WHERE id='$lamp_id'");
        if ($row2 = mysqli_fetch_array($result2)) {
            ?>
            <div class="col-xs-6 col-sm-3 col-md-1" style="width: 240px; height: 450px;">
                <div class="thumbnail boxshadow" >

                    <div class="panel-primary">

                        <div class="panel-heading" style="height: 35px; padding-top: 1px;">
                            <h5><strong><center><?php echo $row2['location']; ?></center></strong></h5>
                        </div>

                        <div class="panel-body">
                            <div class="img-thumbnail center-block" style="width: 150px;">
                                <div style="background-size: cover;
                                     background-repeat: no-repeat;
                                     background-position: 50% 50%; overflow: hidden;">
                                     <?php if ($row2['status'] == "0") { ?>
                                        <a href="ctrl/set_lamp_status.php?id=<?php echo $row2['id']; ?>&status=1">
                                            <img class="img-responsive center-block animate" 
                                                 src="img/bulb_off.png" style="width: 100%;">
                                        </a>
                                    <?php } else { ?>
                                        <a href="ctrl/set_lamp_status.php?id=<?php echo $row2['id']; ?>&status=0">
                                            <img class="img-responsive center-block animate" 
                                                 src="img/bulb_on.png" style="width: 100%;">
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div>
                            <table class="table table-condensed table-hover" style="font-size: 95%;">
                                <tr class="success">
                                    <td><strong>Status</strong></td>
                                    <?php if ($row2['status'] == "0") { ?>
                                        <td>OFF</td>
                                    <?php } else { ?>
                                        <td>ON</td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td><strong>Type</strong></td>
                                    <td><?php echo $row2['type']; ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Watts</strong></td>
                                    <td><?php echo $row2['watts']; ?>W</td>
                                </tr>
                                <?php
                                if ($row2['status'] == "1") {
                                    $result3 = mysqli_query($con, "SELECT * FROM lamp_history WHERE lamp_id='$lamp_id' ORDER BY id DESC LIMIT 1");
                                    if ($row3 = mysqli_fetch_array($result3)) {
                                        $ontime = $row3['ontime'];
                                        $now = date('Y-m-d H:i:s');
//                                        echo $now;
//                                        echo '<br/>';
//                                        echo $ontime;
                                        $duration = round(abs(strtotime($now) - strtotime($ontime)) / (60 * 60), 2);
                                        $energy = $row2['watts'] * $duration * 60 * 60;
                                        $units = round(abs($row2['watts'] * $duration / 1000), 4);
                                        ?>
                                        <tr class="active">
                                            <td><strong>Duration</strong></td>
                                            <td><?php echo $duration; ?> hrs</td>
                                        </tr>
                                        <tr class="warning">
                                            <td><strong>Energy</strong></td>
                                            <td><?php echo $energy; ?> J</td>
                                        </tr>
                                        <tr class="danger">
                                            <td><strong>Units</strong></td>
                                            <td><?php echo $units; ?> (kWh)</td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </table>
                        </div>

                        <div class="panel-footer" style="padding-top: 0px; padding-bottom: 0px; margin-bottom: 20px;">
                            <p class="pull-right">
                                <strong><small><?php echo $row2['serial']; ?></small></strong>
                            </p>
                            <p class="pull-left">
                                <strong><small>Serial No. </small></strong>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>