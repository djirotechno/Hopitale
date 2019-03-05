<!doctype html>
<html lang="en">
<head>
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

@include('layouts.navbar')


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <input type="text" placeholder="recherche"> <i class="ti-search" autofocus></i>
                                
                                <button type="button" class="btn btn-info btn-fill btn-wd pull-right add">Nouveau</button>  
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    	<th>ID</th>
                                    	<th>NOM</th>
                                    	<th>DESCRIPTION</th>
                                    	<th>Action</th>
                                    
                                    </thead>
                                    <tbody>
                                        @foreach ($proto as $item)
                                            <tr>
                                        	<td>{{$item->id}}</td>
                                        	<td>{{$item->protocole_nom}}</td>
                                            <td>{{$item->protocole_desc}}</td>
                                            <td>
                                               <button class="show-modal btn btn-success"  data-title="{{$item->protocole_nom}}"
                                                 
                                                   data-produit="@foreach ($item->produits as $produit){{$produit->libelle}}  @endforeach ">Voir</button>
                                            {{-- <a href="/protocole/{{$item->id}}">Detail</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$proto->links()}}
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



</body>

    <!-- jQuery -->
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> --}}
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

<script>
    $(document).on('click', '.add', function() {
            $('.modal-title').text('Nouveau');
            $('#addModal').modal('show');
    });
</script>
<script>
     $(document).on('click', '.show-modal', function() {
            $('#title_show').val($(this).data('title'));
            $('#content_show').val($(this).data('content'));
            $('#produit_show').val($(this).data('produit'));
            $('#showModal').modal('show');
        });
</script>
        <div id="addModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                    <form class="form-horizontal" role="form" action="{{route('protocole.store')}}" method="POST">
                        {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Protocole:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" name="protocole_nom" id="protocole_nom" >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Description:</label>
                                <div class="col-sm-10">
                                     <textarea type="name" class="form-control" name="protocole_desc" id="protocole_desc"></textarea>
                                </div>
                            </div>
                           <button type="submit" class="btn btn-success pull-right">ok</button>
                            <div class="clearfix"></div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>



        <div id="showModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Protocole:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="title_show" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Produit:</label>
                                <div class="col-sm-10">
                                     <textarea type="name" class="form-control" id="produit_show" disabled>
                                </div>
                            </div>
                           
                        </form>
                        
                    </div>
                </div>
        </div>
 
</html>
