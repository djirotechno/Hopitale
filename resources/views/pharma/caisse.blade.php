<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/css/animate.min.css">
    <link rel="stylesheet" href="/asset/css/paper-dashboard.css">
    <link rel="stylesheet" href="/asset/css/demo.css">

    {{-- <link rel="styleeheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

    <!-- icheck checkboxes -->
    <link rel="stylesheet" href="/asset/icheck/square/yellow.css">
    

    {{-- <link rel="stylesheet" href="https://raw.githubusercontent.com/fronteed/icheck/1.x/skins/square/yellow.css"> --}}

    <!-- toastr notifications -->
    {{-- <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}"> --}}
    <link rel="stylesheet" href="/asset/toastr/toastr.min.css">


    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}"> --}}
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/asset/css/themify-icons.css" rel="stylesheet">
</head>
<body>
    @include('layouts.dash')
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
                                        <p>Vente du mois</p>
	                                        <div class="numbers">
	                                          
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
	                                        <div class="icon-big icon-warning text-center">
	                                            <i class="ti-stat"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
                                        <p>situation stock</p>
	                                        <div class="numbers">
	                                          
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
	                                            <p>Total Vente</p>
	                                           <span>{{\App\Cart::sum('total')}}</span> 
	                                            
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
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Vente</p>
												 {{\App\Cart::count()}}
	                                        </div>
										</div>
	                                </div>
										<hr />
	                                
	                            </div>
	                        </div>
	                    </div>
                  </div>
    </div>
<div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                       
                                        <th>Date</th>
                                    	<th>Medicament</th>
                                    	
                                    	<th>PRIX</th>
                                    	<th>Qty</th>
                                    	<th>Somme</th>
                                    	
                                    </thead>
                                    <tbody>
                                    
                                        @foreach ($caisse as $item)
                                            <tr>
                                           
                                           <td>
                                               {{$item->created_at}}
                                           </td>
                                           <td>
                                               {{$item->produit_nom}}
                                           </td> 
                                           <td>
                                               {{$item->prix}}
                                           </td> 
                                           <td>
                                               {{$item->qty}}
                                           </td> 
                                          
                                           <td>
                                               {{$item->total}}
                                           </td> 
                                        </tr>
                                       
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                               
                

                            
                            </div>

</body>
<script src="/asset/js/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script> --}}

    <!-- Bootstrap JavaScript -->
    <script src="/asset/js/bootstrap.min.js"></script>
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script> --}}

    <!-- toastr notifications -->
    <script type="text/javascript" src="/asset/toastr/toastr.min.js"></script>
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}

    <!-- icheck checkboxes -->
    <script type="text/javascript" src="/asset/icheck/icheck.min.js"></script>
</html>





