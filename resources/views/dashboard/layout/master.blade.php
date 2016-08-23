  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    @include('dashboard.partials.stylesheet')
  <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script  src="{{ asset('components/jquery/dist/countries.js') }}"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    @include('dashboard.partials.header')
  <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand text-uppercase" href="admin">            
              My contact
            </a>
          </div>
          <!-- /.navbar-header portion-->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <div class="nav navbar-right navbar-btn">
              <a href="contacts" class="btn btn-default">
                <i class="glyphicon glyphicon-plus"></i> 
                Add Contact
              </a>
            
              
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="glyphicon glyphicon-plus"></i> Add Group</button>
    
            
              
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class="glyphicon glyphicon-plus"></i> Add Location</button>

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class="glyphicon glyphicon-search"></i> search</button>
    
            
            <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo"><i class="glyphicon glyphicon-search"></i>Advance search</button>

            <form action="admin" method="get">    
                      
            <div class="input-group " style='width:50%; margin-top:2px; float: left; '>
            <input type="text" name="search" id="search" class="form-control" placeholder=" search" aria-describedby="basic-addon1">
            <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </span>
            </div>

            </form>

</div>
</div>
    
            </div> 
          </div>
        </div>
      </nav>
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
      

    
      <!-- navbar part-->
      

      <!-- content part-->
      <div class="container">
        <div class="row">
      <div class="col-md-3">
            <div class="list-group">
              <a href="admin" class="list-group-item active">All Contact <span class="badge">{{ App\Models\Contact::count() }}</span></a>
             @foreach($groups as $group)
              <a href="groups/{{$group->id}}" class="list-group-item">{{$group->group_name}}   <span class="badge">{{$group->groups->count()}}</span></a>
             @endforeach
            </div>
          </div>
    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    @include('dashboard.partials.mainsidebar')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
    
                              
  
  
  @include('dashboard.partials.modal')

                            </div>
                          </div>
                      </div>
                  </div>
             </div>

    @include('dashboard.partials.footer')

    <!-- Control Sidebar -->
    @include('dashboard.partials.controlsidebar')
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.0 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <script language="javascript">print_country("country");</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
      
  <script type="text/javascript">
  $(".js-example-basic-multiple").select2();
  </script>    



  @include('dashboard.partials.script')
  </body>
  </html>
