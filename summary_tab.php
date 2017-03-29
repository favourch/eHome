<div class="tab-pane" id="summary">
    <br/>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="panel panel-primary center-block">
            <div class="panel-body" style="overflow: scroll;" align="center">
                <table class="table table-striped table-hover" style="font-size: 12px;">
                    <thead>
                        <tr class="success">
                            <th>#</th>
                            <th>Serial No.</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Watts</th>
                            <th>Duration (hrs)</th>
                            <th>Energy (J)</th>
                            <th>Units (kWh)</th>
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
                                <?php
                                $duration_su = 0;
                                $result1 = mysqli_query($con, "SELECT * FROM lamp_history WHERE lamp_id='" . $row['id'] . "'");
                                while ($row1 = mysqli_fetch_array($result1)) {
                                    if ($row1['offtime'] == "0000-00-00 00:00:00") {
                                        $now = date('Y-m-d H:i:s');
                                        $duration_su += round(abs(strtotime($now) - strtotime($row1['ontime'])) / (60 * 60), 2);
                                    } else {
                                        $duration_su += round(abs(strtotime($row1['offtime']) - strtotime($row1['ontime'])) / (60 * 60), 2);
                                    }
                                }
                                ?>
                                <td><?php echo $duration_su; ?></td>
                                <?php
                                $energy_su = $row['watts'] * $duration_su * 60 * 60;
                                $units_su = round(abs($row['watts'] * $duration_su / 1000), 4);
                                ?>
                                <td><?php echo $energy_su; ?></td>
                                <td><?php echo $units_su; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>