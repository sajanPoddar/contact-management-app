   @extends('dashboard.layout.master')

  @section('content')

   <!-- Content Wrapper. Contains page content -->
    
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
      

    
      <!-- navbar part-->
     
      <!-- navbar manager-->
      

      <!-- content portion-->
     



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

                       <div class="form-group">
                        <label for="company" class="control-label col-md-3">Location</label>
                        <div class="col-md-8">
                             <!--  <select onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" name ="country"></select>
                          
                          <select name ="state" id ="state" class="form-control"></select> -->

                           <select  name="location_id[]" class="js-example-basic-multiple form-control" multiple="multiple" >
                       @foreach($locations as $location)
                    <option  value="{{$location->id}}">{{$location->location_name}}</option>
                    
                       @endforeach
                  </select>
                        </div>
                      </div> 

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
                      <div class="form-group">
                        <label for="company" class="control-label col-md-3">GROUP</label>
                        <div class="col-md-8">
                       
                      <select  name="group_id[]" class="js-example-basic-multiple form-control" multiple="multiple" >
                       @foreach($groups as $group)
                    <option  value="{{$group->id}}">{{$group->group_name}}</option>
                    
                       @endforeach
                  </select>
                          
                        </div>
                      </div> 
                      <div id="p_scents">
                      
                      <div class="form-group" >
                      
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
                          

                          
                        </div>
                        
                      </div>
                       
                     

                      </div>
                      <div id="p_scents1">
                         <h2 style="float:right; margin-right:-50px; margin-top:-10px;"><a href="#" id="addScnt">Add<i class="fa fa-plus-square-o" aria-hidden="true"></i>
                      </a></h2>
                      </div>
                      
                    
                      
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
      
     


    

  <!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> --> 
  <script>
      $(document).ready(function() {
          var scntDiv = $('#p_scents1');
          var i = 1;
          
          $('#addScnt').on('click', function(e) {
                  e.preventDefault();
                  i++;
                  $(scntDiv).append('<div class="form-group"><label for="group" class="control-label col-md-3">Phone/E-mail</label><div class="col-md-3"><select name="contact_type_id[]" id="group" class="form-control"><option value="">contact type</option>@foreach($contact_type as $type)<option value="{{$type->id}}">{{$type->type_name}}</option>@endforeach</select></div><div class="col-md-5"><div class="input-group"><input type="text" name="phoneNo_email[]" id="new_group" class="form-control"></div></div><a href="#" style="float:right;" id="remScnt">Remove</a></div>');
                  
                  
          });
          
          $(scntDiv).on('click','#remScnt', function(e){ 
            e.preventDefault();
            $(this).parent('.form-group').remove();
                        i--;
                  
                                          })
  });
      </script>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @stop
   

