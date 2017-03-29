<div class="tab-pane" id="status">
    <br/>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="panel panel-primary center-block">
            <div class="panel-body" style="overflow: scroll;" align="center">
                <table class="table table-striped table-hover" style="font-size: 12px;">
                    <thead>
                        <tr class="success">
                            <th>#</th>
                            <th>Serial</th>
                            <th>Location</th>
                            <th>On At (Date+Time)</th>
                            <th>On by (User ID)</th>
                            <th>Off At (Date+Time)</th>
                            <th>Off by</th>
                            <th>Duration (hrs)</th>
                            <th>Energy (J)</th>
                            <th>Units (kWh)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include './DBCon.php';
                        $query = "SELECT * FROM lamp_history";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <?php
                                $result1 = mysqli_query($con, "SELECT * FROM lamp WHERE id='" . $row['lamp_id'] . "'");
                                if ($row1 = mysqli_fetch_array($result1)) {
                                    $watts = $row1['watts'];
                                    ?>
                                    <td><?php echo $row1['serial']; ?></td>
                                    <td><?php echo $row1['location']; ?></td>
                                    <?php
                                }
                                ?>
                                <td><?php echo $row['ontime']; ?></td>
                                <td><?php echo $row['onuser']; ?></td>
                                <td><?php echo $row['offtime']; ?></td>
                                <td><?php echo $row['offuser']; ?></td>
                                <?php
                                if ($row['offuser'] != "0") {
                                    $duration_st = round(abs(strtotime($row['offtime']) - strtotime($row['ontime'])) / (60 * 60), 2);
                                    $energy_st = $watts * $duration_st * 60 * 60;
                                    $units_st = round(abs($watts * $duration_st / 1000), 4);
                                } else {
                                    $duration_st = "-";
                                    $energy_st = "-";
                                    $units_st = "-";
                                }
                                ?>
                                <td><?php echo $duration_st; ?></td>
                                <td><?php echo $energy_st; ?></td>
                                <td><?php echo $units_st; ?></td>
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