<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    

    	<div class="sidebar-wrapper">
           
            <div class="logo text-center">
                
                  <img class="img-responsive" src="/asset/img/logo.png" alt="" srcset="">
            </div>

            <ul class="nav">
               
                <li>
                    <a href="{{route('protocole.index')}}">
                        <i class="ti-list"></i>
                        <p>Protocoles</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('produit.index')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Medicaments</p>
                    </a>
                </li>
                <li>
                <a href="{{route('pharma')}}">
                        <i class="ti-text"></i>
                        <p>Pharmacie</p>
                    </a>
                </li>
                <li>
                <a href="{{route('dash')}}">
                        <i class="ti-text"></i>
                        <p>Tableau de bord</p>
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
                    <div>
                         
                    </div>
                   
                </div>
                <div class="collapse navbar-collapse">
                    <br>
                    <div class="col-md-8">
                    <table class="table ">
                        <tbody>
                            <tr>
                                 <td><i></i></td>
                                <td><i class="ti-calendar"></i>
                                <script>
                                    var currentdate = new Date(); 
    var datetime =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear();

document.write(datetime);
                                </script>
                                </td>
                                <td><i class="ti-time"></i></td>
                               
                            </tr>
                                        
                            </tbody>                
                    </table>      
                    </div>
                            
                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i> 
                                    {{\Auth::User()->name}}
                                  
									
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                
                        <!-- Authentication Links -->
                        
                            <li >
                               

                               
                                    <li>
                                    <a href="{{route('logout')}}">                                            
                                            Deconnectez
                                        </a>

                                       
                                    </li>
                                    
                                    <li>
                                    <a href="{{route('dash.patient')}}">                                            
                                           Paramettre
                                        </a>

                                       
                                    </li>
                               
                            </li>
                       
                   
                                
                              </ul>
                        </li>
						
                    </ul>

                </div>
            </div>
        </nav>