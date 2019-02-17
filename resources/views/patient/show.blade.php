
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

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

      
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            
                            <div class="content">
                                <br>
                                <br>
                                <div class="author">
                                  <img class="avatar border-white" src="/asset/img/faces/face-2.jpg" alt="..."/>
                                <h4 class="title">{{$patient->nom}}<br />
                                <p href="#">{{$patient->prenom}}</p>
                                  </h4>
                                </div>
                                <hr>
                               <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5>{{$patient->age}}</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>{{$patient->telephone}}</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>{{$patient->adresse}}</h5>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <hr>
                            
                        </div>
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
                                            <td><btn  class="btn btn-sm btn-success btn-icon text-right">Detail</i></btn></td>
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
                           

    <title></title>

    <style type="text/css">
        CSS

html, body {
    width: 100%;
    height: 100%;
}

.noselect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.dropdown-container, .instructions {
    width: 200px;
    margin: 20px auto 0;
    font-size: 14px;
    font-family: sans-serif;
    overflow: auto;
}

.instructions {
    width: 100%;
    text-align: center;
}

.dropdown-button {
    float: left;
    width: 100%;
    background: whitesmoke;
    padding: 10px 12px;

    cursor: pointer;
    border: 1px solid lightgray;
    box-sizing: border-box;
    
    .dropdown-label, .dropdown-quantity {
        float: left;
    }
    
    .dropdown-quantity {
        margin-left: 4px;
    }
    
    .fa-filter {
        float: right;
    }
}

.dropdown-list {
    float: left;
    width: 100%;

    border: 1px solid lightgray;
    border-top: none;
    box-sizing: border-box;
    padding: 10px 12px;
    
    input[type="search"] {
        padding: 5px 0;
    }
    
    ul {
        margin: 10px 0;
        max-height: 200px;
        overflow-y: auto;
        
        input[type="checkbox"] {
            position: relative;
            top: 2px;
        }
    }
}

    </style>

<div class="instructions">(Click to expand and select states to filter)</div>
<div class="dropdown-container">
    <div class="dropdown-button noselect">
        <div class="dropdown-label">States</div>
        <div class="dropdown-quantity">(<span class="quantity">Any</span>)</div>
        <i class="fa fa-filter"></i>
    </div>
    <div class="dropdown-list" style="display: none;">
        <input type="search" placeholder="Search states" class="dropdown-search"/>
        <ul></ul>
    </div>
</div>

<script type="text/javascript">
    JS

$('.dropdown-container')
    .on('click', '.dropdown-button', function() {
        $(this).siblings('.dropdown-list').toggle();
    })
    .on('input', '.dropdown-search', function() {
        var target = $(this);
        var dropdownList = target.closest('.dropdown-list');
        var search = target.val().toLowerCase();
    
        if (!search) {
            dropdownList.find('li').show();
            return false;
        }
    
        dropdownList.find('li').each(function() {
            var text = $(this).text().toLowerCase();
            var match = text.indexOf(search) > -1;
            $(this).toggle(match);
        });
    })
    .on('change', '[type="checkbox"]', function() {
        var container = $(this).closest('.dropdown-container');
        var numChecked = container. find('[type="checkbox"]:checked').length;
        container.find('.quantity').text(numChecked || 'Any');
    });
// <li> template
var stateTemplate = _.template(
    '<li>' +
        '<input name="<%= abbreviation %>" type="checkbox">' +
        '<label for="<%= abbreviation %>"><%= capName %></label>' +
    '</li>'
);

// Populate list with states
_.each(usStates, function(s) {
    s.capName = _.startCase(s.name.toLowerCase());
    $('ul').append(stateTemplate(s));
});

</script>
    
                            
                            <div class="content">
                               
                                    
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

    <!-- Delay table load until everything else is loaded -->
<script>
    $(document).on('click', '.add-modal', function() {
            $('.modal-title').text('Add');
            $('#addModal').modal('show');
    });

     $(document).on('click', '.add-traitement', function() {
            $('.modal-title').text('Add');
            $('#addtraite').modal('show');
    });
</script>

     
{{-- Ajouter la consultation --}}
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
                                                <textarea rows="5" class="form-control border-input" placeholder="Observation" name="observation">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Diagnostique</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="diagnostic" name="diagnostique">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                     <hr>
                                      <h4>Prescription</h4>
                                       
                                    <div class="row">
                                        
                                          
                                        <div class="col-md-5">
                                            
                                            <div class="form-group">
                                                <label>Protocole</label>
                                           <select name="prescription" id="prescription" class="form-control border-input">
                                               <option >valeur</option>
                                               <option >valeur</option>
                                               <option>valeur</option>
                                               <option >valeur</option>
                                               <option >valeur</option>
                                               <option >valeur</option>
                                               <option >valeur</option>
                                               <option >valeur</option>
                                               <option >valeur</option>
                                           </select>
                                               
                                            </div>
                                        </div>
                                               
                                    
                                    
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Patient</label>
                                            <select name="" id="" class="form-control border-input">
                                                <option value="1">valeur</option>
                                                <option value="1">valeur</option>
                                                <option value="1">valeur</option>
                                                <option value="1">valeur</option>
                                                <option value="1">valeur</option>
                                                <option value="1">valeur</option>
                                                <option value="1">valeur</option>
                                                <option value="1">valeur</option>
                                                <option value="1">valeur</option>
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