   @extends('dashboard.layout.master')

  @section('content')

   <!-- Content Wrapper. Contains page content -->
   



              <form method="post" action="contacts/{{$contact->id}}" enctype="multipart/form-data">
               <input type='hidden' name='_token' value='{{csrf_token()}}'>
               <input type="hidden" name="_method" value="PUT">

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
                          <input type="text" name="first_name" id="name" value="{{$contact->first_name}}" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="control-label col-md-3">Middle Name</label>
                        <div class="col-md-8">
                          <input type="text" name="middle_name" value="{{$contact->middle_name}}"  id="name" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="control-label col-md-3">Last Name</label>
                        <div class="col-md-8">
                          <input type="text" name="last_name"
                          value="{{$contact->last_name}}"  id="name" class="form-control">
                        </div>
                      </div>

                     

                      <div class="form-group">
                        <label for="name" class="control-label col-md-3">Address</label>
                        <div class="col-md-8">
                          <textarea name="address" 
                           id="address" rows="3" class="form-control">{{$contact->address}} </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="control-label col-md-3">Notes</label>
                        <div class="col-md-8">
                          <textarea name="notes" id="address" rows="3" class="form-control">{{$contact->notes}}</textarea>
                        </div>
                      </div>
                     
                      <div class="form-group" id="add-new-group">
                        <div class="col-md-offset-3 col-md-8">
                          <div class="input-group">
                            <input type="text" name="new_group" id="new_group"  class="form-control">
                            <span class="input-group-btn">
                              <a href="#" class="btn btn-default">
                                <i class="glyphicon glyphicon-ok"></i>
                              </a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                      
                        <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                        <?php if(($contact->image)==''){?>
                          <img src="http://placehold.it/150x150" alt="Photo">
                          <?php } else {?>
                            <img src="/uploads/{{$contact->image}}" width="150px" height="150px" alt="Photo">
                          <?php }?>
                        </div>
                        
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                          
                        </div>

                        <div class="text-center">
                          <span class="btn btn-default btn-file"><span class="fileinput-new">Choose Photo</span><span class="fileinput-exists">Change</span><input type="file" 
                          name="image"></span>
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
                        <button type="submit" class="btn btn-primary">Update</button>
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
      

      
      
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @stop