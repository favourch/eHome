<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>       
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Description" content="www.eboxteam.com"/>
        <meta name="author" content="L.D. Chanaka Lakmal"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Sign In</title>
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

        <div class="col-xs-12 col-sm-12 col-md-12 container" style="padding-top: 75px; padding-bottom: 25px;">

            <?php if ($_SESSION != NULL) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Warning!</strong> Please, Sign out first....</a>
                </div>
            <?php } else { ?>
                <div class = "panel panel-primary center-block" style = "width: 400px;">
                    <div class="panel-heading">User Login</div>
                    <div class = "panel-body">
                        <form id = "signin_form" class = "form-horizontal" action = "ctrl/search_user.php" method = "POST">
                            <div class = "form-group">
                                <img class = "img-circle center-block" src = "img/user.png"/>
                            </div>
                            <?php
                            if ($_GET != NULL) {
                                if ($_GET["id"] == "0") {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Warning!</strong> Invalid username or password.<br/> Please try again.
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <div class = "form-group">
                                <label class = "col-sm-4 control-label">Username</label>
                                <div class = "col-sm-7">
                                    <input id = "un" type = "text" class = "form-control" placeholder = "Username" name = "un">
                                </div>
                            </div>
                            <div class = "form-group">
                                <label class = "col-sm-4 control-label">Password</label>
                                <div class = "col-sm-7">
                                    <input id = "pw" type = "password" class = "form-control" placeholder = "Password" name = "pw">
                                </div>
                            </div>
                            <div class = "form-group">
                                <div class = "col-sm-offset-1 col-sm-10">
                                    <button type = "submit" class = "btn btn-primary btn-block">Sign In</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center">
                            <a href="#">If you forgot your password, please contact admin</a>
                        </div>
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