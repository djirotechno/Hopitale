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
    <meta name="_token" content="{{ csrf_token() }}"/>

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
    <link href="assets/css/themify-icons.css" rel="stylesheet">

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
<div class="container">
    <div class="row">
        <div class="main-panel pull-right">
            <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar bar1"></span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">Table List</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
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
                                <ul class="nav navbar-nav navbar-right">
                                
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
                                
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>
    </div>
    <div class="row">
            <div class="col-md-8 col-lg-10 col-md-offset-2">
           
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul>
                        <li><i class="fa fa-file-text-o"></i> All the current Posts</li>
                        <a href="#" class="add-modal"><li>Add a Post</li></a>
                    </ul>
                </div>
            
                <div class="panel-body">
                     {{ csrf_field() }}
                        <table class="table table-striped table-bordered table-hover" id="postTable" style="visibility:;">
                            <thead>
                                <tr>
                                    <th valign="middle">#</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                               
                            </thead>
                            <tbody>
                                @foreach($categories as $indexKey => $post)
                                    <tr >
                                        <td class="col1">{{ $indexKey+1 }}</td>
                                        <td>{{$post->categorie_nom}}</td>
                                        <td>
                                            {{App\Post::getExcerpt($post->content)}}
                                        </td>
                                        
                                       
                                        <td>
                                            <button class="show-modal btn btn-success" data-id="{{$post->id}}" data-title="{{$post->categorie_nom}}">
                                            <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                            <button class="edit-modal btn btn-info" data-id="{{$post->id}}" data-title="{{$post->categorie_nom}}">
                                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                            <button class="delete-modal btn btn-danger" data-id="{{$post->id}}" data-title="{{$post->categorie_nom}}">
                                            <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div><!-- /.panel-body -->
            </div><!-- /.panel panel-default -->
        </div><!-- /.col-md-8 -->
    </div>
        <!-- Modal form to add a post -->
        <div id="addModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Categorie:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title_add" autofocus>

                              
                                    <p class="errorTitle text-center alert alert-danger hidden"></p>
                                </div>
                            </div>
                            
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success add" data-dismiss="modal">
                                <span id="" class='glyphicon glyphicon-check'></span> Add
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
                        </div>
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
                                <label class="control-label col-sm-2" for="title">Title:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="title_show" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Content:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="content_show" cols="40" rows="5" disabled></textarea>
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

        <!-- Modal form to edit a form -->
        <div id="editModal" class="modal fade" role="dialog">
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
                                    <input type="text" class="form-control" id="id_edit" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title_edit" autofocus>
                                    <p class="errorTitle text-center alert alert-danger hidden"></p>
                                </div>
                            </div>
                            
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                                <span class='glyphicon glyphicon-check'></span> Edit
                            </button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <span class='glyphicon glyphicon-remove'></span> Close
                            </button>
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

</div>

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
        $(window).load(function(){
            $('#postTable').removeAttr('style');
        })
    </script>

    <script>
        $(document).ready(function(){
            $('.published').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });
            
        });
        
    </script>

    <!-- AJAX CRUD operations -->
    <script type="text/javascript">
        // add a new post
        $(document).on('click', '.add-modal', function() {
            $('.modal-title').text('Add');
            $('#addModal').modal('show');
        });
        $('.modal-footer').on('click', '.add', function() {
            $.ajax({
                type:'POST',
                url:'/categorie/post',
                data:{
                    '_token': $('input[name=_token]').val(),
                    'categorie_nom': $('#title_add').val(),
                   
                },
                success: function(data) {
                    $('.errorTitle').addClass('hidden');
                    $('.errorContent').addClass('hidden');
                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);
                        if (data.errors.title) {
                            $('.errorTitle').removeClass('hidden');
                            $('.errorTitle').text(data.errors.title);
                        }
                        if (data.errors.content) {
                            $('.errorContent').removeClass('hidden');
                            $('.errorContent').text(data.errors.content);
                        }
                    } else {
                        toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                        $('#postTable').prepend("<tr class='item" + data.id + "'><td class='col1'>" + data.id + "</td><td>" + data.categorie_nom + "</td><td><button class='show-modal btn btn-success' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr></tr>");
                        
                        
                       
                        $('.col1').each(function (index) {
                            $(this).html(index+1);
                        });
                    }
                },
            });
        });
        // Show a post
        $(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            $('#id_show').val($(this).data('id'));
            $('#title_show').val($(this).data('title'));
            
            $('#showModal').modal('show');
        });
        // Edit a post
        $(document).on('click', '.edit-modal', function() {
            $('.modal-title').text('Edit');
            $('#id_edit').val($(this).data('id'));
            $('#title_edit').val($(this).data('title'));
           
            id = $('#id_edit').val();
            $('#editModal').modal('show');
        });
        $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'PUT',
                url: '/categorie/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                    
                    'categorie_nom': $('#title_edit').val(),
                    
                },
                success: function(data) {
                    $('.errorTitle').addClass('hidden');
                    $('.errorContent').addClass('hidden');
                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#editModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);
                        if (data.errors.title) {
                            $('.errorTitle').removeClass('hidden');
                            $('.errorTitle').text(data.errors.title);
                        }
                        if (data.errors.content) {
                            $('.errorContent').removeClass('hidden');
                            $('.errorContent').text(data.errors.content);
                        }
                    } else {
                        toastr.success('Successfully updated Post!', 'Success Alert', {timeOut: 5000});
                        $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td class='col1'>" + data.id + "</td><td>" + data.title + "</td><td>" + data.content + "</td><td class='text-center'><input type='checkbox' class='edit_published' data-id='" + data.id + "'></td><td>Right now</td><td><button class='show-modal btn btn-success' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                        if (data.is_published) {
                            $('.edit_published').prop('checked', true);
                            $('.edit_published').closest('tr').addClass('warning');
                        }
                        $('.edit_published').iCheck({
                            checkboxClass: 'icheckbox_square-yellow',
                            radioClass: 'iradio_square-yellow',
                            increaseArea: '20%'
                        });
                        $('.edit_published').on('ifToggled', function(event) {
                            $(this).closest('tr').toggleClass('warning');
                        });
                        $('.edit_published').on('ifChanged', function(event){
                            id = $(this).data('id');
                            $.ajax({
                                type: 'POST',
                                url: "{{ URL::route('changeStatus') }}",
                                data: {
                                    '_token': $('input[name=_token]').val(),
                                    'id': id
                                },
                                success: function(data) {
                                    // empty
                                },
                            });
                        });
                        $('.col1').each(function (index) {
                            $(this).html(index+1);
                        });
                    }
                }
            });
        });
        
        // delete a post
        $(document).on('click', '.delete-modal', function() {
            $('.modal-title').text('Delete');
            $('#id_delete').val($(this).data('id'));
            $('#title_delete').val($(this).data('title'));
            $('#deleteModal').modal('show');
            id = $('#id_delete').val();
        });
        $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
                type: 'DELETE',
                url: '/categorie/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
                    toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                    $('.item' + data['id']).remove();
                    $('.col1').each(function (index) {
                        $(this).html(index+1);
                    });
                }
            });
        });
    </script>

</body>
</html>