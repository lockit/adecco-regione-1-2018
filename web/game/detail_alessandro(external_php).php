<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form email</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Incude db_conn_alessandro.php from /php and setting of the detailPageField return as
    $show variable -->
    <?php

    include 'php/db_conn_alessandro.php';

    $show = detailPageField(htmlspecialchars($_GET["id"]));

    ?>

    <style media="screen">

    #background{
      background: #ffffff;
      overflow: auto;
      float: left;
      height: 850px;
    }
    box{
      width: 100%;
      height: 300px;
      background: #ffffff;
      padding: 0.3%;
    }

    boarderbox{
      background: #ffffff;
      padding: 0.3%;
      margin: 3%;
    }
    .container-fluid {
    }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Contact form</h1>

                        <background id="background" class="col-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="container-fluid">
                            <div class="row">

                              <boarderbox class="col-lg-3">
                                <box class="col-sm-12">
                                  <div class="col-sm-3">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/81P3rmr4CEL._SL1500_.jpg"
                                       alt="questo è una immagine con source assoluto"
                                       style="width:400px;height:600px";
                                       />
                                  </div>
                                </box>
                              </boarderbox>

                              <boarderbox class="col-lg-5">
                                <box class="col-sm-6">
                                  <div class="col-sm-12">

                                    <p> Name: <?php echo $show['name']; ?><br></p>
                                    <p> Developer: <?php echo $show['developer']; ?><br></p>
                                    <p> Publisher: <?php echo $show['publisher']; ?><br></p>
                                    <p> Genre: <?php echo $show['genre']; ?><br></p>

                                  </div>
                                </box>
                              </boarderbox>

                            </div>
                          </div>
                        </background>

                        <br /><br />
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script src="../js/contact_form.js"></script>
</body>

</html>
