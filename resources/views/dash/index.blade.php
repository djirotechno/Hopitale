<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/asset/img/apple-icon.png">
	<link rel="icon" type="/asset/image/png" sizes="96x96" href="/asset/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Paper Dashboard by Creative Tim</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/asset/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="/asset/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/asset/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/asset/css/themify-icons.css" rel="stylesheet">

</head>
<body>

	<div class="wrapper">
	   @include('layouts.dash')

	   
	        


	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-warning text-center">
	                                            <i class="ti-server"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Patient</p>
	                                          
                                                    {{\App\Patient::count()}}
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="footer">
	                                    <hr />
	                                    <div class="stats">
	                                       <i class="ti-reload"></i> 
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-success text-center">
                                                
                                                <i class="ti-pulse"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Consultation</p>
	                                            {{\App\Consultation::count()}}
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="footer">
	                                    <hr />
	                                    <div class="stats">
	                                        <i class="ti-reload"></i> 
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-danger text-center">
	                                            <i class="ti-wallet"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Medicament</p>
	                                            {{\App\Produit::count()}}
	                                            
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="footer">
	                                    <hr />
	                                    <div class="stats">
	                                       <i class="ti-reload"></i> 
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="content">
	                                <div class="row">
										
										
	                                    <div class="col-xs-5">
	                                        <div class="numbers">
	                                            <p>Femmes</p>
	                                             {{\App\Patient::where('sexe','F')->count()}}
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Hommes</p>
												 {{\App\Patient::where('sexe','M')->count()}}
	                                        </div>
										</div>
	                                </div>
										<hr />
	                                
	                            </div>
	                        </div>
	                    </div>
	                </div>
	               
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Consultation</h4>
	                                <p class="category">Maladies diagnostiquee</p>
	                            </div>
	                            <div class="content">
	                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

	                                <div class="footer">
	                                    <div class="chart-legend">
	                                        <i class="fa fa-circle text-info"></i> 
	                                        <i class="fa fa-circle text-danger"></i> 
	                                        <i class="fa fa-circle text-warning"></i> 
	                                    </div>
	                                    <hr>
	                                    <div class="stats">
	                                        <i class="ti-timer"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="card ">
	                            <div class="header">
	                                <h4 class="title">Patients</h4>
	                                <p class="category">Flux de patient dans l'annee</p>
	                            </div>
	                            <div class="content">
	                                <div id="chartActivity" class="ct-chart"></div>

	                                <div class="footer">
	                                    <div class="chart-legend">
	                                        <i class="fa fa-circle text-info"></i> 
	                                        <i class="fa fa-circle text-warning"></i>
	                                    </div>
	                                    <hr>
	                                    <div class="stats">
	                                        <i class="ti-check"></i> 
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>


	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>

	                        <li>
	                            <a href="http://www.creative-tim.com">
	                                Creative Tim
	                            </a>
	                        </li>
	                        <li>
	                            <a href="http://blog.creative-tim.com">
	                               Blog
	                            </a>
	                        </li>
	                        <li>
	                            <a href="http://www.creative-tim.com/license">
	                                Licenses
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <div class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
	                </div>
	            </div>
	        </footer>

	    </div>
	</div>


</body>

    <!--   Core JS Files   -->
    <script src="/asset/js/jquery.min.js" type="text/javascript"></script>
	<script src="/asset/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/asset/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="/asset/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/asset/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/asset/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="/asset/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	

    	});
    </script>
    
    <script>
        Chartist.Pie('#chartPreferences', {
  labels: ['62%','32%','6%'],
  series: [62, 32, 6]
});
    </script>

</html>
