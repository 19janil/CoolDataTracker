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
                                <h4 class="title">Profile Report</h4>
                            </div>
                            <div class="content">
                                <form>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <?php
                                                require_once('connection.php');
                                                $t = $_POST['uname'];
                                                $res = mysqli_query($con , "SELECT * FROM tsalesteaminformation , tuserreportinghierarchy, tuserinfromations WHERE tuserreportinghierarchy.LeadsUserID = tsalesteaminformation.TeamLeadID AND tuserinfromations.FullName="."'".$t."'");
                                                $row = mysqli_fetch_array($res);
                                                echo '<input type="text" class="form-control" disabled placeholder="City" value="'.$row['ID'].'"> ';
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <?php
                                                require_once('connection.php');
                                                 $t = $_POST['uname'];
                                                $res = mysqli_query($con , "SELECT * FROM tsalesteaminformation , tuserreportinghierarchy, tuserinfromations WHERE tuserreportinghierarchy.LeadsUserID = tsalesteaminformation.TeamLeadID AND tuserinfromations.FullName="."'".$t."'");
                                                $row = mysqli_fetch_array($res);
                                                echo '<input type="text" class="form-control" disabled placeholder="City" value="'.$row['FullName'].'"> ';
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <?php
                                                require_once('connection.php');
                                                 $t = $_POST['uname'];
                                                $res = mysqli_query($con , "SELECT * FROM tsalesteaminformation , tuserreportinghierarchy, tuserinfromations WHERE tuserreportinghierarchy.LeadsUserID = tsalesteaminformation.TeamLeadID AND tuserreportinghierarchy.MemberUserId = tuserinfromations.ID AND tuserinfromations.FullName="."'".$t."'");
                                                $row = mysqli_fetch_array($res);
                                                echo '<input type="text" class="form-control" disabled placeholder="City" value="'.$row['EMailAddress'].'"> ';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Team</label>
                                                <?php
                                                require_once('connection.php');
                                                 $t = $_POST['uname'];
                                                $res = mysqli_query($con , "SELECT * FROM tsalesteaminformation , tuserreportinghierarchy, tuserinfromations WHERE tuserreportinghierarchy.LeadsUserID = tsalesteaminformation.TeamLeadID AND tuserreportinghierarchy.MemberUserId = tuserinfromations.ID AND tuserinfromations.FullName="."'".$t."'");
                                                $row = mysqli_fetch_array($res);
                                                echo '<input type="text" class="form-control" disabled placeholder="City" value="'.$row['TeamName'].'"> ';
                                                ?>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <?php
                                                require_once('connection.php');
                                            
                                                 $date = $_POST['dfrom2'];
                                                 
                                                echo "<input type='text' class='form-control' disabled placeholder='City' value=$date >";
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date (TO)</label>
                                                <?php
                                                require_once('connection.php');
                                            
                                              
                                                 $date1 = $_POST['dto2'];
                                                echo "<input type='text' class='form-control' disabled placeholder='-' value=$date1 >";
                                                ?>
                                            </div>
                                        </div>

                                        
                                    </div>

                                    
                                </form>

                    


                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2014 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="columnchart_values" style="width: 900px; height: 400px;"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Above Average
                                        <i class="fa fa-circle text-warning"></i> Average
                                        <i class="fa fa-circle text-danger"></i> Below Average
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="piechart" style="width: 650px; height: 480px;>
                                <div class="footer">
                                    
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   
                </nav>
                
            </div>
        </footer>

    </div>
</div>




<!----- bar chart ------>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    
    function drawChart() {
      var d = [
        ["Element", "Density", { role: "style" } ]
      ];
      <?php
            require_once('connection.php');
           
            $date = $_POST['dfrom2'];
$a1 = mysqli_query($con ,"SELECT * FROM tsalesreports, tprouctsalesdataprocessed WHERE tprouctsalesdataprocessed.ID = tsalesreports.RecipientID AND tsalesreports.ReportDate = "."'".$date."'");
while($row = mysqli_fetch_array($a1)){
    $a = $row['SalesCount'];
    $b = $row['ProductCode'];
settype($a, "int");
?>
      d.push([<?php echo "'"."$b"."'"; ?>,<?php echo "$a"; ?>,"red"]);
      <?php } ?>
      for (var i = d.length - 1; i >= 1; i--) {
        if(d[i][1] <= 30)
          d[i][2]='red';
        else if(d[i][1] <= 60)
          d[i][2]='green';
        else if(d[i][1] <= 90)
          d[i][2]='blue';
      };
      var data= google.visualization.arrayToDataTable(d);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);


      var options = {
        
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

<!----- pie chart ------>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var d = [
        ["Element", "Density"]
      ];
      <?php
          $t = $_POST['uname']; 
          $date = $_POST['dfrom2'];
$a1 = mysqli_query($con ,"SELECT * FROM tuserinfromations, tsalesreports, tprouctsalesdataprocessed WHERE tuserinfromations.ID = tprouctsalesdataprocessed.ID = tsalesreports.RecipientID AND tsalesreports.ReportDate = "."'".$date."' AND tuserinfromations.FullName = 2");
            while($row = mysqli_fetch_array($a1)){
                $a = $row['SalesCount'];
                $b = $row['ProductCode'];
            settype($a, "int");
    ?>
      d.push([<?php echo "'".$b."'" ?>,<?php echo $a ?>]);
      <?php } ?>
        var data=google.visualization.arrayToDataTable(d);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


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
