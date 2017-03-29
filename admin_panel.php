<div class="panel panel-primary center-block">
    <div class="panel-heading">User Details</div>
    <div class="panel-body" style="overflow: scroll;" align="center">
        <table class="table table-hover table-bordered" style="width: 1000px;">
            <thead>
                <tr class="warning">
                    <th><span class="glyphicon glyphicon-pushpin"></span></th>
                    <th><span class="glyphicon glyphicon-user"></span></th>
                    <th><span class="glyphicon glyphicon-user"></span></th>
                    <th><span class="glyphicon glyphicon-envelope"></span></th>
                    <th><span class="glyphicon glyphicon-earphone"></span></th>
                    <th><span class="glyphicon glyphicon-bookmark"></span></th>
                    <th><span class="glyphicon glyphicon-tags"></span></th>
                    <th><span class="glyphicon glyphicon-tag"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './DBCon.php';
                $query = "SELECT * FROM user";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['email']; ?></td>

                        <?php if ($row['status'] == '2') { ?>
                            <td>
                                <span class="glyphicon glyphicon-check"></span>
                            </td>
                            <td>
                                <a href="ctrl/set_user_status.php?id=<?php echo $row['id']; ?>&status=3"><span class="glyphicon glyphicon-unchecked"></span></a>
                            </td>
                        <?php } elseif ($row['status'] == '3') { ?>
                            <td>
                                <a href="ctrl/set_user_status.php?id=<?php echo $row['id']; ?>&status=2"><span class="glyphicon glyphicon-unchecked"></span></a>
                            </td>
                            <td>
                                <span class="glyphicon glyphicon-check"></span>
                            </td>
                        <?php } else { ?>
                            <td>
                                <span class="glyphicon glyphicon-cog"></span>
                            </td>
                            <td>
                                <span class="glyphicon glyphicon-cog"></span>
                            </td>
                        <?php } ?>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>