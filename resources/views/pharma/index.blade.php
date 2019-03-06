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

@include('layouts.dash')


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-3">
                                    <label for="">Recherche</label>
                                    <input class="form-control border-input" type="text" placeholder="recherche" class="ti-search"> 
                               
                                </div>
                               
                                <div class="col-md-3 pull-right">
                                   <label for="">Quantitee</label>
                                <input class="form-control border-input" placeholder="Quantitee" type="number" id="qty" name="qty">
                                </div>
                            </div>
                          

                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                       
                                        <th>Nom</th>
                                    	<th>Prix</th>
                                    	
                                    	<th>Ajoutez</th>
                                    	<th>Detail</th>
                                    	
                                    </thead>
                                    <tbody>
                                    
                                        @foreach ($produit as $item)
                                            <tr>
                                           
                                           <td>
                                               {{$item->libelle}}
                                           </td>
                                           <td>
                                               {{$item->prix}}
                                           </td> 
                                           <td>
                                           <button class="show-modal btn btn-success btn-sm" data-id="{{$item->id}}"data-nom="{{$item->libelle}}" data-prix="{{$item->prix}}"  data-total="{{$item->prix}}">Ajoutez</button>
                                            </td>
                                            <td>  
                                             <button class="detail-modal btn btn-success btn-sm " data-nom="{{$item->libelle}}" data-formule="{{$item->formule}}" data-indication="{{$item->indication}}" data-Prix="{{$item->prix}}" data-stock="{{$item->stock}}" data-categorie="
                                                 {{$item->categorie->categorie_nom}}">Details
                                            </td>
                                        </tr>
                                       
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                               
                               {{$produit->links()}}

                            
                            </div>
                             
                        </div>
                    </div>


                   


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                
				
            </div>
        </footer>


    </div>
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
  

     $(document).on('click', '.show-modal', function() {
            $('#id_show').val($(this).data('id'));
            $('#nom_show').val($(this).data('nom'));
            $('#prix_show').val($(this).data('prix'));
            $('#qty_show').val($('#qty').val());
            $('#total_show').val($(this).data('prix')*$('#qty').val());
            $('#showModal').modal('show');
        });
    </script>
    <script>
     $(document).on('click', '.detail-modal', function() {
            $('#nom_').val($(this).data('nom'));
            $('#formule_show').val($(this).data('formule'));
            $('#indication_show').val($(this).data('indication'));
            $('#prix_').val($(this).data('prix'));
            $('#stock_show').val($(this).data('stock'));
            $('#categorie_show').val($(this).data('categorie'));
            $('#detailModal').modal('show');
             });
    </script>

        <div id="showModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-body">
                    <form class="form-horizontal" role="form" action="{{route('addTocart')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="id" id="id_show" hidden>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="id">Nom:</label>
                                <div class="col-sm-10">
                                    <input id="nom_show" type="text" class="form-control border-input"  name="libelle" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Prix:</label>
                                <div class="col-sm-10">
                                   <input id="prix_show" type="text" class="form-control border-input"  name="produit_prix" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Qty:</label>
                                <div class="col-sm-10">
                                   <input id="qty_show" type="number" class="form-control border-input"  name="qty">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label col-sm-2" name="nom_show" for="content">Total:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="total_show"  cols="40" rows="5" disabled>
                                </div>
                            </div>
                       
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success " >
                                Validez
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class=''></span> Annulez
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>


      <div id="detailModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="id">Nom:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nom_" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Categorie:</label>
                                <div class="col-sm-10">
                                     <input class="form-control" id="categorie_show" cols="40" rows="5" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Formule:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="formule_show" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Indication:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="indication_show" cols="40" rows="5" disabled></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Prix:</label>
                                <div class="col-sm-10">
                                   <input class="form-control" id="prix_" cols="40" rows="5" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">stock:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="stock_show" cols="40" rows="5" disabled>
                                </div>
                            </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>

 
</html>