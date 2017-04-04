<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CoolData-Tracker</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    CoolData-Tracker
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="view.php">
                        <i class="pe-7s-user"></i>
                        <p>View Report</p>
                    </a>
                </li>
                <li>
                    <a href="all.php">
                        <i class="pe-7s-note2"></i>
                        <p>All Report</p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                           <a href="view.php">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Download Report</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>




 <div class="content">
            
              
    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><center>View Report</center></h4><hr>
                            </div>
                            <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5" style="border-right: black solid 1px;">
                                        
                                            <form action="view_report.php" method="post">


                                    <div class="row">   
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Team Name</label>
                                                <input type="text" class="form-control" name="tname" placeholder="" value="">
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Date From :</label>
                                                <input type="date" class="form-control" name="dfrom1" id="dfrom1" placeholder="" value=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Date To :</label>
                                                <input type="date" class="form-control" name="dto1" id="dto1" oninput="func();" placeholder="" value=""> 
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <script>
                                    function func()
                                    {
                                        if(document.getElementById("dfrom1").value > document.getElementById("dto1").value)
                                        {
                                            window.alert("Date error");
                                            document.getElementById("dfrom1").value="";
                                            document.getElementById("dto1").value="";
                                        }
                                    }
                                    </script>

                                    <div class="row">
                                       <div class="col-md-8">
                                            <div class="form-group">
                                                <label>View Report</label><br>
                                                <button class="btn btn-primary btn-block" name="thesubmit" formaction="team_report.php">Submit</button>
                                            </div>
                                        </div>   
                                    </div>

                                </form> 
                                        
                                    </div>

                                    <div class="col-sm-5" >
                                        <form action="view_report.php" method="post">


                                    <div class="row">   
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="text" class="form-control" name="uname" [id="uname" onclick="name();"] placeholder="" value="">
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Date From :</label>
                                                <input type="date" class="form-control" name="dfrom2" id="dfrom2" placeholder="" value=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Date To :</label>
                                                <input type="date" class="form-control" name="dto2" id="dto2" oninput="func2();" placeholder="" value=""> 
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <script>
                                    function func2()
                                    {
                                        if(document.getElementById("dfrom2").value > document.getElementById("dto2").value)
                                        {
                                            window.alert("Date error");
                                            document.getElementById("dfrom2").value="";
                                            document.getElementById("dto2").value="";
                                        }
                                    }
                                 /*   function name()
                                    {
                                        if(document.getElementById("uname").value == true)
                                        {
                                            window.alert("name error");
                                            document.getElementById("dfrom2").value="";
                                            document.getElementById("dto2").value="";
                                        }
                                    }   */
                                    </script>

                                    <div class="row">
                                       <div class="col-md-8">
                                            <div class="form-group">
                                                <label>View Report</label><br>
                                                <button class="btn btn-primary btn-block" name="thesubmit" formaction="user_report.php">Submit</button>
                                            </div>
                                        </div>   
                                    </div>

                                </form> 
                                    </div>
                                    <div class="col-sm-1"></div>
                                    
                            </div>
                        </div>
    </div>              
</div>




</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    

</html>


                               
                               