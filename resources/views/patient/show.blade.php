
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">

    <!-- CSFR token for ajax call -->
    

    <title>Manage Posts</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/css/animate.min.css">
    <link rel="stylesheet" href="/asset/css/paper-dashboard.css">
    <link rel="stylesheet" href="/asset/css/demo.css">
    

        <link rel="stylesheet" href="/asset/multiselect/css/bootstrap-multiselect.css" type="text/css">

    

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

    <style>
        .panel-heading {
            padding: 0;
        }
        .panel-heading ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .panel-heading li {
            float: left;
            border-right:1px solid #bbb;
            display: block;
            padding: 10px 10px;
            text-align: center;
        }
        .panel-heading li:last-child:hover {
            background-color: #ccc;
        }
        .panel-heading li:last-child {
            border-right: none;
        }
        .panel-heading li a:hover {
            text-decoration: none;
        }

        .panel{
            margin-top: 10px;
        }
       
    </style>

</head>




<body>

@include('layouts.navbar')

      
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Consultations</h4>
                            </div>
                            <div class="content">
                                
                                    @foreach ($consult as $item)
                                    <table class="table">
                                        <tr>
                                            <td>
                                                {{$item->id}}
                                            </td>
                                             <td>
                                                {{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}
                                            </td>
                                            <td>
                                                <button class="btn btn-primary show-modal" data-date="consulter le :{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}" data-observation="{{$item->observation}}" data-diagnostic="{{$item->diagnostic}}" data-prescription="{{$item->prescription}}">
                                                    Detail
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                     @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <button class="btn btn-primary add-modal">Consultez</button>
                            </div>
                            <div class="content">
                               <hr>

                               <div class="row">
                                   <div class="col-md-3 ">
                                        <label for="">SEXE</label>
                                   <h5>{{$patient->sexe}}</h5>
                                    </div>
                                    <div class="col-md-3 ">
                                        <label for="">NOM</label>
                                        <h5>{{$patient->nom}}</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">PRENOM</label>
                                        <h5>{{$patient->prenom}}</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">AGE</label>
                                        <h5>{{$patient->age}}</h5>
                                    </div>
                                   
                                </div>
                                <hr>
                               <div class="row">
                                    <div class="col-md-3 ">
                                        <label for="">ADRESSE</label>
                                        <h5>{{$patient->adresse}}</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Telephone</label>
                                        <h5>{{$patient->telephone}}</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">NATIONALITE</label>
                                        <h5>senegal</h5>
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
     <script type="text/javascript" src="/asset/multiselect/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="/asset/multiselect/js/bootstrap-3.3.2.min.js"></script>
        <script type="text/javascript" src="/asset/multiselect/js/prettify.min.js"></script>
        <script type="text/javascript" src="/asset/multiselect/js/bootstrap-multiselect.js"></script>
    

    <!-- Delay table load until everything else is loaded -->
        <script>
            $(document).on('click', '.add-modal', function() {
                    $('.modal-title').text('Add');
                    $('#addModal').modal('show');
            });

            $(document).on('click', '.show-modal', function() {
                    $('#date_show').val($(this).data('date'));
                    $('#observation_show').val($(this).data('observation'));
                    $('#diagnostic_show').val($(this).data('diagnostic'));
                    $('#prescription_show').val($(this).data('prescription'));
                    $('#showModal').modal('show');
                });
            
        </script>
       



       


        <div id="showModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="id">Date consultation:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="date_show" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Observation:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="observation_show" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Diagnostic:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="diagnostic_show" cols="40" rows="5" disabled></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Prescription:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="prescription_show" cols="40" rows="5" disabled></textarea>
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
                                <form action="{{route('consult.store',$patient)}}" method="POST">
                                   {{ csrf_field() }}
                                   
                                <input hidden name="patient_id" value="{{$patient->id}}">
                                    
                                        

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Observation</label>
                                                 <textarea rows="5" class="form-control border-input" placeholder="Observation" name="observation"></textarea>
                                                 {!!$errors->first('observation','<p>:message</p>')!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Diagnostique</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="diagnostic" name="diagnostic"></textarea>
                                                {!!$errors->first('diagnostic','<p>:message</p>')!!}
                                            </div>
                                        </div>
                                    </div>
                                     <hr>
                                      <h4>Prescription</h4>
                                       
                                    <div class="row">
                                        
                                          
                                        <div class="col-md-5">
                                            
                                            <div class="form-group">
                                                <label>Protocole</label>
                                           <select name="protocole" id="protocole" class="form-control border-input">
                                                 <option value="null">Protocole</option>
                                               @foreach ($protocole as $item)
                                               <option value="{{$item->protocole_nom}}">{{$item->protocole_nom}}</option>                                                   
                                               @endforeach
                                              
                                           </select>
                                               
                                            </div>
                                        </div>
                                               
                                    
                                    
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Medicament</label>
                                            <select name="medicament" id="medicament" class="form-control border-input">
                                                 <option value="null">Medicament</option>
                                               @foreach ($produit as $item)
                                               <option value="{{$item->libelle}}">{{$item->libelle}}</option>                                                   
                                               @endforeach
                                              
                                           </select>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button  type="submit" class="btn btn-info btn-fill btn-wd">OK</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>

</html>