<!doctype html>
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
    {{-- <link rel="stylesheet" href="/dataTables/css/dataTables.bootstrap.min.css"> --}}
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
    @include('layouts.dash')
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <button type="submit" class="btn btn-info btn-fill btn-wd  add-modal center">Nouveau</button>  
                            </div>
                            

                            <div class="content table-responsive table-full-width">
								<table id="example" class="table table-striped" >
									<thead>
									<tr>
										<th>Id</th>
										<th>Nom</th>
										<th>Description</th>
										<th>Detail</th>
										
									</tr>
									</thead>
									<tbody>
										@foreach ($protocole as $item)
											<tr>
											<td>{{$item->id}}</td>
											<td>{{$item->protocole_nom}}</td>
											<td>{{$item->protocole_desc}}</td>
											<td>
												<button class="show-modal btn btn-success btn-sm " data-id="{{$item->id}}" data-nom="{{$item->protocole_nom}}" data-desc="{{$item->protocole_desc}}" data-produit="@foreach ($item->produits as $produit){{$produit->libelle}}  @endforeach ">Details
											</td>
											
										</tr>
										@endforeach
										
									</tbody>                        
								</table>
                            </div>
                             
                        </div>
                    </div>
                </div>
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
    {{-- <script src="/dataTables/js/dataTables.bootstrap.min.js"></script>  --}}
<script type="text/javascript" src="/asset/toastr/toastr.min.js"></script>
    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}

    <!-- icheck checkboxes -->
    <script type="text/javascript" src="/asset/icheck/icheck.min.js"></script>
   
		<script>

			$(document).ready(function() {
			$('#example').DataTable();
		} );

			$(document).on('click', '.add-modal', function() {
				
					$('#addModal').modal('show');
				});
		
			$(document).on('click', '.show-modal', function() {
					$('#nom_show').val($(this).data('nom'));
					$('#id_show').val($(this).data('id'));
					$('#desc_show').val($(this).data('desc'));
					$('#produit_show').val($(this).data('produit'));
					$('#showModal').modal('show');
				});
		</script>
			<div id="showModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						
						<div class="modal-body">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="control-label col-sm-2" for="id">ID:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="id_show" disabled>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="content">Nom:</label>
									<div class="col-sm-10">
										<input class="form-control" id="nom_show" cols="40" rows="5" disabled>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="title">Description:</label>
									<div class="col-sm-10">
										<input type="name" class="form-control" id="desc_show" disabled>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="title">Produit:</label>
									<div class="col-sm-10">
										<textarea type="text" class="form-control" id="produit_show" disabled>

										</textarea>
									</div>
								</div>
								
								
							</form>
							
							
						</div>
					</div>
				</div>
			</div>


      		<div id="addModal" class="modal fade" role="dialog">
            	<div class="modal-dialog">
                	<div class="modal-content">
                   
                    	<div class="modal-body">
                        	<div class="content">
								<div class="container-fluid">
									<div class="row">
											<form action="{{route('protocole.store')}}" method="POST">
												{{ csrf_field() }}
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label>NOM</label>
																<input type="text" class="form-control border-input"  name="protocole_nom">
																{!!$errors->first('protocole_nom','<p>:message</p>')!!}
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>Description</label>
																<input type="text" class="form-control border-input"  name="protocole_desc" >
																{!!$errors->first('protocole_desc','<p>:message</p>')!!}
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
            	</div>
        	</div>

</html>
