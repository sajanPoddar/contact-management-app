 @extends('dashboard.layout.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    

  
    <!-- navbar part-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand text-uppercase" href="#">            
            My contact
          </a>
        </div>
        <!-- /.navbar-header part-->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <div class="nav navbar-right navbar-btn">
            <a href="contacts" class="btn btn-default">
              <i class="glyphicon glyphicon-plus"></i> 
              Add Contact
            </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- content part-->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item active">All Contact <span class="badge">10</span></a>
            <a href="" class="list-group-item">Family <span class="badge">4</span></a>
            <a href="" class="list-group-item">Friends <span class="badge">3</span></a>
            <a href="" class="list-group-item">Other <span class="badge">3</span></a>
          </div>
        </div><!-- /.col-md-3 -->

        <div class="col-md-9">
          <div class="panel panel-default">
            <table class="table">
            <?php 
             $i=0;
            ?>
            @foreach($contacts as $contact)
            <?php
              $i++;
            ?>
              <tr>
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="http://placehold.it/100x100" alt="...">
                      </a>
                    </div>
                    <div class="media-body">

                      <h4 class="media-heading">Contact <?php echo $i;?></h4>
                      <address>
                        <strong>{{$contact->first_name}}</strong><br>
                      {{$contact->address}}
                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <a href="#" class="btn btn-circle btn-default btn-xs" title="Edit">
                      <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    <a href="#" class="btn btn-circle btn-danger btn-xs" title="Edit">
                      <i class="glyphicon glyphicon-remove"></i>
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
             
            </table>            
          </div>

          <div class="text-center">
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop
   