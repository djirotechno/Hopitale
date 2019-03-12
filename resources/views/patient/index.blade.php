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
    <link rel="stylesheet" href="/dataTables/css/dataTables.bootstrap.min.css">
    {{-- Datatable jquery --}}
    <link rel="/dataTables/css/jquery.dataTables.min.css">

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
                                
                                <button type="submit" class="btn btn-info btn-fill btn-wd pull-right add-modal">Nouveau</button>  
                            </div>
                            

                            <div class="content table-responsive table-full-width">
                                <table id="example" class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>NOM</th>
                                    	<th>PRENOM</th>
                                    	<th>TELEPHONE</th>
                                    	
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($patient as $item)
                                        <tr>
                                        	<td>{{$item->id}}</td>
                                        	<td>{{$item->nom}}</td>
                                        	<td>{{$item->prenom}}</td>
                                        	<td>{{$item->telephone}}</td>
                                            <td>
                                            <a href="/patient/{{$item->id}}"><button class="btn btn-info btn-sm">Detail </button></a>
                                            </td>
                                            
                                        </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                                 {{$patient->links()}}
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

    <!-- jQuery -->
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> --}}
    {{-- <script src="/asset/js/jquery.min.js"></script> --}}
    <script src="/dataTables/js/jquery-3.3.1.min.js" ></script>
      <script src="/dataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/dataTables/js/jquery.dataTables.min.js"></script>



    <!-- Bootstrap JavaScript -->
    <script src="/asset/js/bootstrap.min.js"></script>
    <script src="/dataTables/js/dataTables.bootstrap.min.js"></script> 
	<script type="text/javascript" src="/asset/toastr/toastr.min.js"></script>
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}

    <!-- icheck checkboxes -->
    <script type="text/javascript" src="/asset/icheck/icheck.min.js"></script>

<script>

    window.print();
    $(document).ready(function() {
			$('#example').DataTable();
		} );
    $(document).on('click', '.add-modal', function() {
            $('.modal-title').text('Add');
            $('#addModal').modal('show');
    });
</script>
     

      <div id="addModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                   
                    <div class="modal-body">
                        <div class="content">
            <div class="container-fluid">
                <div class="row">
                                 <form action="{{route('patient.store')}}" method="POST">
                                 {{ csrf_field() }}
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sexe</label>
                                                <select type="text" class="form-control border-input" placeholder="Sexe" name="sexe">
                                                        <option value="F">F</option>
                                                        <option value="M">M</option>
                                                </select>
                                              
                                                {!!$errors->first('sexe','<p>:message</p>')!!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control border-input" placeholder="Nom" name="nom">
                                                {!!$errors->first('nom','<p>:message</p>')!!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input type="text" class="form-control border-input" placeholder="Prenom" name="prenom" >
                                                {!!$errors->first('prenom','<p>:message</p>')!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="number" class="form-control border-input" name="age" placeholder="Age">
                                                {!!$errors->first('age','<p>:message</p>')!!}
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="number" class="form-control border-input" name="telephone" placeholder="telephone">
                                                {!!$errors->first('telephone','<p>:message</p>')!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Adresse</label>
                                                <input type="text" class="form-control border-input" name="adresse" placeholder="Adresse" >
                                                {!!$errors->first('adresse','<p>:message</p>')!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">OK</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>

 
</html>
