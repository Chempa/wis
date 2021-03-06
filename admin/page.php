<?php
    include '../db.php';
    include '../user.php';
    include 'auth.php';
    $u = new User();

    $q = $_GET['q'];
    $q = intval($q);
    if($q == -1 && isset($_POST['q'])){
        $s = $_POST['q'];

        $query = "select * from users
            Where category LIKE '%{$s}%' OR
                email LIKE '%{$s}%' OR
                firstname LIKE '%{$s}%' OR
                institution LIKE '%{$s}%' OR
                ismajor LIKE '%{$s}%' OR
                lastname LIKE '%{$s}%' OR
                othername LIKE '%{$s}%' OR
                phone LIKE '%{$s}%' OR
                program LIKE '%{$s}%'
        ";
        $ALL = $u->getall($con, $query);
    }
    else if($q == 1){
        $query = "select * from users";
        $ALL = $u->getall($con, $query);
    } 
    else if ($q == 2) {
        $query = "select * from users where category = 'Senior High School'";
        $ALL = $u->getall($con, $query);
    }
    else if ($q == 3) {
        $query = "select * from users where category = 'Regular University (UnderGraduate)'";
        $ALL = $u->getall($con, $query);
    }
    else if ($q == 4) {
        $query = "select * from users where category = 'Technical University (UnderGraduate)'";
        $ALL = $u->getall($con, $query);
    }
    else if ($q == 5) {
        $query = "select * from users where category = 'Regular University (Graduate)'";
        $ALL = $u->getall($con, $query);
    }
    else if ($q == 6) {
        $query = "select * from users where category = 'Technical University (Graduate)'";
        $ALL = $u->getall($con, $query);
    }else{
        $query = "select * from users";
        $ALL = $u->getall($con, $query);
    }





?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  shrink-to-fit=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
    <title>Wis Admin - Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
<!--     <meta name="viewport" content="width=device-width, initial-scale=2"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <!-- <option value="Junior High School">Junior High School</option>
                            <option value="Senior High School">Senior High School</option>
                            <option value="University (Undergraduate)">University (Undergraduate)</option>
                            <option value="University (Masters)">University (Masters)</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Lecturer">Lecturer</option> -->
                    <li class="active">
                        <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Categories</li><!-- /.menu-title -->
                    <li>
                        <a href="page.php?q=1">ALL</a>
                    </li>
                   <!--  <li>
                        <a href="page.php?q=1">JHS</a>
                    </li> -->
                  <!--   <option style="font-style: italic;" value="" disabled selected>Select One</option>
                    <option value="Senior High School">Senior High School</option>
                    <option value="Regular University (UnderGraduate)">Regular University (UnderGraduate)</option>
                    <option value="Regular University (Graduate)">Regular University (Graduate)</option>
                    <option value="Technical University (UnderGraduate)">Technical University (UnderGraduate)</option>
                    <option value="Technical University (Graduate)">Technical University (Graduate)</option> -->
                    <li>
                        <a href="page.php?q=2">SHS</a>
                    </li>
                    <li>
                        <a href="page.php?q=3">Regular University UnderGraduate</a>
                    </li>
                    <li>
                        <a href="page.php?q=4">Technical University UnderGraduate</a>
                    </li>
                    <li>
                        <a href="page.php?q=5">Regular University Graduate</a>
                    </li>
                    <li>
                        <a href="page.php?q=6">Technical University Graduate</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="./../txt wis.png"></a>
                    <a class="navbar-brand hidden" href="./">Women In Statistics</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form" action="page.php?q=-1" method="post">
                                <input id="search" name="q" class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search" oninput="handle(this)">
                                <button id="submit-search" class="search" type="submit">a fa-search"></i></button>
                                <button id="close-search" class="search-close" type="submit"><i cl<i class="fass="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <div class="orders">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Registered Users </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table" style="overflow: scroll; max-width: 100vw;">
                                    <table class="table " >
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>Modify</th>
                                                <th>Name</th>
                                                <th>Level</th>
                                                <th>Major/Minor</th>
                                                <th>Institution</th>
                                                <th>Program</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for ($i=0; $i < count($ALL); $i++) { 
                                                    $j = $ALL[$i];
                                            ?>
                                            <tr>
                                                <td class="serial"><?php echo $i+1; ?></td>
                                                <td>
                                                    <a href="delete.php?user=<?php echo $j->id; ?>" class="badge badge-danger text-white">Delete <i class="fa fa-trash"></i></a>
<!--                                                      <a disabled href="edit.php?user=<?php echo $j->id; ?>" class="btn btn-sm btn-danger text-white">Edit <i class="fa fa-edit"></i></a> -->
                                                </td>
                                                <td> <span class="name"><?php echo $j->lastname. ', ' . $j->othername . ' ' . $j->firstname; ?></span> </td>
                                                <td> <span class="product"><?php echo $j->category; ?></span> </td>
                                                <td><span><?php echo $j->ismajor; ?></span></td>
                                                <td><span><?php echo $j->institution; ?></span></td>
                                                <td><span><?php echo $j->program; ?></span></td>
                                                <td><span><?php echo $j->phone; ?></span></td>
                                                <td><span><?php echo $j->email; ?></span></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.col-lg-8 -->

                    
                </div>
            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Women In Statistics
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Chempa (credits Colorlib)</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [{
                    label: "Desktop visits",
                    data: [
                        [1, 32]
                    ],
                    color: '#5c6bc0'
                },
                {
                    label: "Tab visits",
                    data: [
                        [1, 33]
                    ],
                    color: '#ef5350'
                },
                {
                    label: "Mobile visits",
                    data: [
                        [1, 35]
                    ],
                    color: '#66bb6a'
                }
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [{
                    label: "Direct Sell",
                    data: [
                        [1, 65]
                    ],
                    color: '#5b83de'
                },
                {
                    label: "Channel Sell",
                    data: [
                        [1, 35]
                    ],
                    color: '#00bfa5'
                }
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [
                [0, 3],
                [1, 5],
                [2, 4],
                [3, 7],
                [4, 9],
                [5, 3],
                [6, 6],
                [7, 4],
                [8, 10]
            ];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }], {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    series: [
                        [0, 18000, 35000, 25000, 22000, 0],
                        [0, 33000, 15000, 20000, 15000, 300],
                        [0, 15000, 28000, 15000, 30000, 5000]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX: {
                        showGrid: true
                    }
                });

                chart.on('draw', function(data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById("TrafficChart");
                ctx.height = 150;
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                                label: "Visit",
                                borderColor: "rgba(4, 73, 203,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(4, 73, 203,.5)",
                                data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                            },
                            {
                                label: "Bounce",
                                borderColor: "rgba(245, 23, 66, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(245, 23, 66,.5)",
                                pointHighlightStroke: "rgba(245, 23, 66,.5)",
                                data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                            },
                            {
                                label: "Targeted",
                                borderColor: "rgba(40, 169, 46, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(40, 169, 46, .5)",
                                pointHighlightStroke: "rgba(40, 169, 46,.5)",
                                data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [
                    [0, 18],
                    [2, 8],
                    [4, 5],
                    [6, 13],
                    [8, 5],
                    [10, 7],
                    [12, 4],
                    [14, 6],
                    [16, 15],
                    [18, 9],
                    [20, 17],
                    [22, 7],
                    [24, 4],
                    [26, 9],
                    [28, 11]
                ],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
    <script type="text/javascript">
        function handle(el){

            if(el.value == ""){
                document.getElementById("submit-search").hidden = true;
                document.getElementById("close-search").hidden = false;
            }else{
                document.getElementById("submit-search").hidden = false;
                document.getElementById("close-search").hidden = true;
            }
        } 
        document.getElementById("submit-search").hidden = true;
    </script>
</body>

</html>
