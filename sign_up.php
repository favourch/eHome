<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Description" content="www.eboxteam.com"/>
        <meta name="author" content="L.D. Chanaka Lakmal"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Sign Up</title>
        <link rel="shortcut icon" href="img/favicon.png">

        <link rel="stylesheet" type="text/css" href="bootstrap/css/megamenu.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/carousel.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">

        <script type="text/javascript" src="bootstrap/javascript/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/megamenu.js"></script>

        <script type="text/javascript" src="js/validate.js"></script>
    </head>
    <body>

        <?php include './header.php'; ?>

        <div class="container" style="padding-top: 75px; padding-bottom: 25px;">
            <?php if ($_SESSION != NULL) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Warning!</strong> Please, Sign out first....</a>
                </div>
                <?php
            } else {
                if ($_GET != NULL) {
                    if ($_GET["id"] == "1") {
                        ?>
                        <div class="center-block" style="width: 750px;">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Success!</strong> Thank you for providing your data.                
                            </div>
                        </div>
                        <?php
                    } else if ($_GET["id"] == "0") {
                        ?>
                        <div class="center-block" style="width: 750px;">
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Warning!</strong> Some of your data seemed to be incorrect. Please fill this form with correct data.                
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

                <!--Form-->
                <div class="panel panel-primary center-block" style="width: 700px;">
                    <div class="panel-heading">User Registration</div>
                    <div class="panel-body">

                        <form id="reg_form" class="form-horizontal" onsubmit="validateForm1(this);
                                return false;" action="ctrl/save_user.php" method="POST">

                            <div class="form-group">
                                <div class="col-lg-12 text-muted" >
                                    <small><b>NOTE:</b> All fields are required to be filled with accurate data.</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">First Name</label>
                                <div class="col-sm-7">
                                    <input id="fname" type="text" class="form-control" placeholder="First Name" name="fname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Last Name</label>
                                <div class="col-sm-7">
                                    <input id="lname" type="text" class="form-control" placeholder="Last Name" name="lname">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Address</label>
                                <div class="col-sm-7">
                                    <textarea id="address" class="form-control" rows="3" placeholder="Address" name="address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Mobile</label>
                                <div class="col-sm-7">
                                    <input id="mobile" type="tel" class="form-control" placeholder="Mobile" name="mobile" maxlength="10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-7">
                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>

                            <hr/>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Username</label>
                                <div class="col-sm-7">
                                    <input id="un" type="text" class="form-control" placeholder="Username" name="un">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-7">
                                    <input id="pw" type="password" class="form-control" placeholder="Password" name="pw">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Confirm Password</label>
                                <div class="col-sm-7">
                                    <input id="cpw" type="password" class="form-control" placeholder="Password" name="cpw">
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
            <?php } ?>
        </div>    

        <?php include './footer.php'; ?>

        <script type="text/javascript" src="bootstrap/javascript/dropdown.js"></script>
        <script>
                        //Dropdown Menu
                        $('.dropdown-toggle').dropdown();
        </script>
    </body>
</html>