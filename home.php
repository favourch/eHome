<?php session_start(); ?>
<html>
    <head>
        <!--<meta http-equiv="refresh" content="15">--> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Description" content="www.eboxteam.com"/>
        <meta name="author" content="L.D. Chanaka Lakmal"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>eHome</title>
        <link rel="shortcut icon" href="img/favicon.png">

        <link rel="stylesheet" type="text/css" href="bootstrap/css/megamenu.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/carousel.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">

        <script type="text/javascript" src="bootstrap/javascript/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/modal.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/megamenu.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/bootstrap.js"></script>

        <style type="text/css">
            .boxshadow:hover{
                box-shadow: 4px 4px 6px #cccccc;
                -moz-box-shadow: 4px 4px 6px #cccccc;
                -webkit-box-shadow: 4px 4px 6px #cccccc;
            }
            .animate:hover{
                transform: scale(1.05);
                /*transform: rotate(360deg);*/
                transition-duration: 0.4s;
            }
        </style>
    </head>
    <body>
        <?php include './header.php'; ?>

        <div class="container" style="padding-top: 75px;"> 

            <div class="container marketing" style="padding-top: 5px;">
                <div class="row">
                    <?php if ($_SESSION == NULL) { ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Warning!</strong> Please, <a href="sign_in.php">Sign in</a>....</a>
                        </div>
                        <?php
                    } else {
                        if ($_SESSION['status'] == "1") {
                            ?>

                            <?php include './admin_panel.php'; ?>

                        <?php } else { ?>

                            <ul class="nav nav-tabs">
                                <li class=" active"><a href="#overview" data-toggle="tab">Overview</a></li>
                                <li class=""><a href="#status" data-toggle="tab">Status</a></li>
                                <li class=""><a href="#summary" data-toggle="tab">Summary</a></li>
                                <li class="pull-right"><a href="#lamp_manager" data-toggle="tab"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Lamp Manager</a></li>
                            </ul>

                            <div class="tab-content">
                                <?php include './lamp_box.php'; ?>
                                <?php include './status_tab.php'; ?>
                                <?php include './summary_tab.php'; ?>
                                <?php include './lamp_manager.php'; ?>
                            </div>

                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php include './footer.php'; ?>

        <script type="text/javascript" src="bootstrap/javascript/affix.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/alert.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/button.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/carousel.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/collapse.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/dropdown.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/holder.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/modal.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/popover.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/scrollspy.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/tab.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/tooltip.js"></script>
        <script type="text/javascript" src="bootstrap/javascript/transition.js"></script>
        <script>
            //Dropdown Menu
            $('.dropdown-toggle').dropdown();

            //Tab Pane
            $('#myTab a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });
        </script>
    </body>
</html>
