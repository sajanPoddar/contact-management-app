<div class="bd-example">
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">New Group</h4>
          </div>
          <div class="modal-body">
           <form method="post" action="groups" enctype="multipart/form-data">
               <input type='hidden' name='_token' value='{{csrf_token()}}'>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Group Name</label>
                <input type="text" name="group_name" class="form-control" id="blog_title">
              </div>
              
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Group</button>
          </div>
          </form>
</div>
</div>
</div>
<div class="bd-example">
    
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">New Location</h4>
          </div>
          <div class="modal-body">
           <form method="post" action="locations" enctype="multipart/form-data">
               <input type='hidden' name='_token' value='{{csrf_token()}}'>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Location Name</label>
                <input type="text" name="location_name" class="form-control" id="blog_title">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Location Info</label>
                <input type="text" name="info" class="form-control" id="blog_title">
              </div>
              
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Location</button>
          </div>
          </form>
                                  </div>
                                </div>
                              </div>

                              <div class="bd-example">
    
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">Search Group</h4>
          </div>
          <div class="modal-body">
           <form action="admin" method="get">    
          
<div class="input-group">
<input type="text" name="location_search" id="search" class="form-control" placeholder="location_search" aria-describedby="basic-addon1">
<span class="input-group-btn">
<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
</span>
</div>

</form>
<form action="admin" method="get">    
          
<div class="input-group">
<input type="text" name="group_search" id="search" class="form-control" placeholder="group_search" aria-describedby="basic-addon1">
<span class="input-group-btn">
<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
</span>
</div>

</form>
<form action="admin" method="get">    
          
<div class="input-group">
<input type="text" name="search" id="search" class="form-control" placeholder="First_name search" aria-describedby="basic-addon1">
<span class="input-group-btn">
<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
</span>
</div>

</form>
              
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
          
</div>
</div>
</div>


<div class="bd-example">
    
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">Search </h4>
          </div>
          <div class="modal-body">
           <form action="admin" method="get">    
          
<div class="input-group">
<label for='firstname'> First_name </label>
<input type="text" name="first" id="search" class="form-control" placeholder="first_search" aria-describedby="basic-addon1">
</div> 
          
<div class="input-group">
<label for='firstname'> Group </label>
 <select name='group' class="selectpicker form-control" data-width="100%">
        <option value="null">select group</option>
         @foreach($groups as $group)
            <option  value="{{$group->id}}">{{$group->group_name}}</option>
                    
          @endforeach
  </select>
</div>   
          
<div class="input-group">
<label for='firstname'> Location </label>
 <select name='location' class="selectpicker form-control" data-width="100%">
           <option value="null">select location</option>
           @foreach($locations as $location)
                <option  value="{{$location->id}}">{{$location->location_name}}</option>
                
             @endforeach
      </select>
</div>
<div class="clearfix">
<button  class="btn btn-primary pull-right " type="submit"><i class="glyphicon glyphicon-search"></i>Search</button>
</div>
</form>
              
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
          
</div>
</div>
</div>