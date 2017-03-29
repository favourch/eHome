<!--Header-->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="collapse navbar-collapse">
            <a href="index.php"><img src="img/logo.png" alt="" style="width: 200px;"/></a>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></a></li>
                <?php if ($_SESSION == NULL) { ?>
                    <li><a href="sign_in.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></a></li>
                    <li><a href="sign_up.php"><span class="glyphicon glyphicon-th-list"></span> Sign Up</a></a></li>
                    <?php
                }
                if ($_SESSION != NULL) {
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo ' ' . $_SESSION['fname']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="ctrl/sign_out.php"><span class="glyphicon glyphicon-off"></span> Sign out</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>