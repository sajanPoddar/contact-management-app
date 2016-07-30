 @extends('dashboard.layout.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    

  
    <!-- navbar part-->
   
    <!-- navbar manager-->
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
            <a href="form.html" class="btn btn-default">
              <i class="glyphicon glyphicon-plus"></i> 
              Add Contact
            </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- content portion-->
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



            <form method="post" action="contacts" enctype="multipart/form-data">
             <input type='hidden' name='_token' value='{{csrf_token()}}'>

        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Add Contact</strong>
            </div>  


            <div class="panel-body">
              <div class="form-horizontal">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">First Name</label>
                      <div class="col-md-8">
                        <input type="text" name="first_name" id="name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Middle Name</label>
                      <div class="col-md-8">
                        <input type="text" name="middle_name" id="name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Last Name</label>
                      <div class="col-md-8">
                        <input type="text" name="last_name" id="name" class="form-control">
                      </div>
                    </div>

                   <!--  <div class="form-group">
                      <label for="company" class="control-label col-md-3">Location</label>
                      <div class="col-md-8">
                            <select name="group" id="group" class="form-control">
                          <option value="">Select Location</option>
                          <option value="1">Dhaka</option>
                          <option value="2">Comilla</option>
                          <option value="3">Noakhali</option>
                          <option value="3">Anywhere</option>
                        </select>
                      </div>
                    </div> -->

                    <!-- <div class="form-group">
                      <label for="email" class="control-label col-md-3">Email</label>
                      <div class="col-md-8">
                        <input type="text" name="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="phone" class="control-label col-md-3">Phone</label>
                      <div class="col-md-8">
                        <input type="text" name="phone" id="phone" class="form-control">
                      </div>
                    </div> -->

                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Address</label>
                      <div class="col-md-8">
                        <textarea name="address" id="address" rows="3" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Notes</label>
                      <div class="col-md-8">
                        <textarea name="notes" id="address" rows="3" class="form-control"></textarea>
                      </div>
                    </div>
                    <div id="p_scents">
                    <p>
                    <div class="form-group" id="p_scnt">
                    
                      <label for="group" class="control-label col-md-3">Phone/E-mail</label>
                      <div class="col-md-3">
                        <select name="contact_type_id[]" id="group" class="form-control">
                          <option value="">contact type</option>
                          @foreach($contact_type as $type)
                          <option value="{{$type->id}}">{{$type->type_name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-5">
                      <div class="input-group">
                          <input type="text" name="phoneNo_email[]" id="new_group" class="form-control">
                          <!-- <a href="#" id="add-group-btn" class="btn btn-default btn-block">Add Group</a>  -->
                          
                        </div>
                        

                          <!--  <div id="p_scents">
                              <p>
                                <label for="p_scnts">
                                  
                                </label>
                            </p>
                            </div> -->
                      </div>
                      
                    </div>
                    </p> 
                    </div>
                    
                  <h2><a href="#" id="addScnt">Add Another Input Box</a></h2>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                        <img src="http://placehold.it/150x150" alt="Photo">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                      <div class="text-center">
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Choose Photo</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="panel-footer">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                      <button type="submit" class="btn btn-primary">Save</button>
                      <a href="#" class="btn btn-default">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

               </form>

      </div>
    </div>
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
    <script>
    $("#add-new-group").hide();
    $('#add-group-btn').click(function () {      
      $("#add-new-group").slideToggle(function() {
        $('#new_group').focus();
      });
      return false;
    });
    </script>
  </body> -->

    <script src="{{ asset('components/AdminLTE/dist/js/jquery.js') }}"></script> 

    <script>
    $(function() {
        var scntDiv = $('#p_scents');
        var i = $('#p_scents p').size() + 1;
        
        $('#addScnt').live('click', function() {
                $('<p><div class="form-group" id="p_scnt"><label for="group" class="control-label col-md-3">Phone/E-mail</label><div class="col-md-3"><select name="contact_type_id[]" id="group" class="form-control"><option value="">contact type</option>@foreach($contact_type as $type)<option value="{{$type->id}}">{{$type->type_name}}</option>@endforeach</select></div><div class="col-md-5"><div class="input-group"><input type="text" name="phoneNo_email[]" id="new_group" class="form-control"></div></div> <a href="#" id="remScnt">Remove</a></div></p>').appendTo(scntDiv);
                i++;
                return false;
        });
        
        $('#remScnt').live('click', function() { 
                if( i > 2 ) {
                        $(this).parents('#p_scnt').remove();
                        i--;
                }
                return false;
        });
});
    </script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop