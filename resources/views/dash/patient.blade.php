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
 
	        <table class=" table table-striped">
				<thead>
					<th>id</th>
					<th>nom</th>
				</thead>
				<tbody>
					@foreach ($patient as $item)
						<tr>
						<td>
							{{$item->nom}}
						</td>
						<td>
							{{$item->prenom}}
						</td>
						<td>
							{{$item->adresse}}
						</td>
						<td>
							{{$item->telephone}}
						</td>
						<td>
							<button class="show-modal btn btn-success" data-id="{{$item->id}}" data-nom="{{$item->nom}}" data-prenom="{{$item->prenom}}"data-age="{{$item->age}}" data-adresse="{{$item->adresse}}"data-telephone="{{$item->telephone}}">
                                            <span class="ti-eyes"></span> Show</button>
                                            <button class="edit-modal btn btn-info" data-id="{{$item->id}}" data-nom="{{$item->nom}}" data-prenom="{{$item->prenom}}"data-age="{{$item->age}}" data-adresse="{{$item->adresse}}"data-telephone="{{$item->telephone}}">
                                            <span class=""></span> Edit</button>
                                            <button class="delete-modal btn btn-danger" data-id="{{$item->id}}" data-nom="{{$item->nom}}" data-prenom="{{$item->prenom}}"data-age="{{$item->age}}" data-adresse="{{$item->adresse}}"data-telephone="{{$item->telephone}}">
                                            <span class=""></span> Delete</button>
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	 </div>

</div>
	</div>
 

        <!-- Modal form to show a post -->
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
                                <label class="control-label col-sm-2" for="id">ID:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_show" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Nom:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="nom_show" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Prenom:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="prenom_show" cols="40" rows="5" disabled>
                                </div>
							</div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="content">adresse:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="adresse_show" cols="40" rows="5" disabled></textarea>
                                </div>
							</div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="content">Telephone:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="telephone_show" cols="40" rows="5" disabled>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		

		 <div id="editModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
					<form class="form-horizontal" role="form" action="" method="PUT">
							{{ csrf_field() }}
							
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="id">ID:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_edit" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Nom:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="nom_edit" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Prenom:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="prenom_edit" cols="40" rows="5" >
                                </div>
							</div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="content">adresse:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="adresse_edit" cols="40" rows="5" ></textarea>
                                </div>
							</div>
							<div class="form-group">
                                <label class="control-label col-sm-2" for="content">Telephone:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="telephone_edit" cols="40" rows="5" >
                                </div>
							</div>
							<div class="modal-footer">
							
                            <button type="submit" class="btn btn-warning">Editez</button>
							</a>
                        </div>
                        </form>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>

     

        <!-- Modal form to delete a form -->
        <div id="deleteModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <h3 class="text-center">Are you sure you want to delete the following post?</h3>
                        <br />
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="id">ID:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_delete" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Title:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="title_delete" disabled>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                                <span id="" class='glyphicon glyphicon-trash'></span> Delete
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
                    </div>
                </div>
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
    	
   
$(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            $('#id_show').val($(this).data('id'));
            $('#nom_show').val($(this).data('nom'));
            $('#prenom_show').val($(this).data('prenom'));
            $('#adresse_show').val($(this).data('adresse'));
            $('#telephone_show').val($(this).data('telephone'));
            $('#showModal').modal('show');
        });
        // Edit a post
        $(document).on('click', '.edit-modal', function() {
            $('.modal-title').text('Show');
            $('#id_edit').val($(this).data('id'));
            $('#nom_edit').val($(this).data('nom'));
            $('#prenom_edit').val($(this).data('prenom'));
            $('#adresse_edit').val($(this).data('adresse'));
            $('#telephone_edit').val($(this).data('telephone'));
            
            $('#editModal').modal('show');
        });
		 </script>
</html>
