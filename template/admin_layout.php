<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_heading;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/metisMenu.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
    <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../scripts/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7+1/js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    <script src='https://cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7+1/js/sb-admin-2.min.js'></script>
    <script src='https://cdn.jsdelivr.net/jquery.metismenu/2.7.0/metisMenu.min.js'></script>
    <script src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js" type="text/javascript"></script>

</head>
<body>

<div id="admin-layout">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar_header">
            <a class="navbar-brand" href="#">Admin Home</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Messeges
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION ['username']; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="logout"><i class="fa fa-sign-out-alt fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="admin" class="active"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tasks fa-fw"></i> Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="adminvechile">Vechiles </a>
                            </li>
      
                            <li>
                                <a href="adminoffer">Offers </a>
                            </li>

                            <li>
                                <a href="adminbooking">Bookings </a>
                            </li>


                            <li>
                                <a href="#">Locations </a>

                            <li>

                            <li>
                                <a href="#">Customers <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="admincustomers">New</a>
                                    </li>
                                    <li>
                                        <a href="oldcustomer">Old</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="adminusers">Admins </a>
                            </li>
                    
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope fa-fw"></i> Messages<span class="fa arrow"></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="mesg">Unread </a>
                                <a href="oldmesg">Old </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $page_title;?></h1>
                </div>
            </div>
             <?php echo $page_content;?>
            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="../scripts/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../scripts/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../scripts/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../scripts/startmin.js"></script>

<script src="../scripts/dataTables/jquery.dataTables.min.js"></script>
<script src="../scripts/dataTables/dataTables.bootstrap.min.js"></script>

</body>
</html>
