<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDACY Makers Day</title>
  <script src="libs/jquery/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
  <script src="libs/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="libs/styles.css">
  <script src="libs/scripts.js"></script>
  <script src="libs/data/movies.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Moovies</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="navbar-form navbar-left">
          <form class="form-inline">
            <div class="form-group">
              <label class="sr-only" for="exampleInputAmount">Search for a movie</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <span class="glyphicon glyphicon-search"></span>
                </div>
                <input type="text" class="form-control" id="input-moviename" placeholder="Search for a movie">
              </div>
              <div id="search-button" type="button" class="btn btn-primary">Search</div>
            </div>
          </form>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <section id="movies-list" class="row">


    <!-- Movie list is inserted in this section dinamically via jQuery -->
  </section>
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
                               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <form class="navbar-form navbar-left">
                                    <form class="form-inline">
                                        <div class="form-group">
                                        <label class="sr-only" for="exampleInputAmount">Search for a movie</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-search"></span>
                                            </div>
                                            <input type="text" class="form-control" id="input-moviename" placeholder="Search for a movie">
                                        </div>
                                        <div id="search-button" type="button" class="btn btn-sm btn-primary">Search</div>
                                        </div>
                                    </form>
                                    </form>
                                </div><!-- /.navbar-collapse -->
                                
                                
                            </div>
                            

                            <div class="content table-responsive table-full-width">
                                
                                    
                               
                              

                            
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


    <script>
        $(document).ready(function() {


    // Load all movies that are included via the file /data/movies.js

    var allMovies = $code;
    renderMovies(allMovies);
    $('#search-button').click(function() {
               $("#movies-list").empty();
        // Get the value of the movie name search field
        var movieTitle = $('#input-moviename').val();
        var result =[];
        if (movieTitle !== '' && movieTitle !== undefined){
             $.each(allMovies, function(key, val){
             if (movieTitle.toLowerCase() == val.libelle.toLowerCase()){
               result.push('<div id="' + key + '"><h4>' + val.title + '</h4>'  </div>');
               result.push(val);

             }
        });
        }    
        

         else  {
            result = allMovies;
         }
        
         renderMovies(result);
    
        // Print out the value searched for
        //alert("You searched for " + result);
    })

});
    </script>


     
            

 
</html>

</body>
</html>
