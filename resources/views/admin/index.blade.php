  @extends('dashboard.layout.master')

  @section('content')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- /.col-md-3 -->
  @if(count($contacts)==0)
    <h1 style="padding:100px; margin-left:100px; background-color: grey; border:2px solid grey; font-size:40px; color:#880000;" align="center">No Result Is Found....</h1>
 @endif
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
  <?php
  if(($contact->image)==''){
  ?>
  <img class="media-object" src="http://placehold.it/100x100" alt="...">
  <?php } else {?>
  <img class="media-object" src="/uploads/{{$contact->image}}"  alt="..." width="100px" height="100px" >
  <?php }?>
  </a>
  </div>
  <div class="media-body">

  <h4 class="media-heading">Contact <?php echo $i;?></h4>
  <address>
  <strong>{{$contact->first_name.' '.$contact->middle_name.' '.$contact->last_name }}</strong><br>
  {{$contact->address or ''}}<br>
  @foreach($contact->details as $detail)
 
  @if($detail->type && $detail->type->type_name =='phone' )
  {{$detail->type->type_name }} : {{$detail->phoneNo_email or ''}}
  <br>
  @endif

  @endforeach
  @foreach($contact->details as $detail)
  @if($detail->type && $detail->type->type_name =='email')
  {{$detail->type->type_name or ''}} : {{$detail->phoneNo_email or ''}}
  <br>
  @endif

  @endforeach
 

  Group: @foreach ($contact->groups as $group) 
  {{$group->groupType->group_name or ''}} , 
  @endforeach
  <br>
  Location:@foreach ($contact->locations as $location) 
  {{$location->locationType->location_name or ''}} , 
  @endforeach
  </address>
  </div>
  </div>
  </td>
  <td width="100" class="middle">
  <div>
  <a href="contacts/{{$contact->id}}/edit" class="btn btn-circle btn-default btn-xs" title="Edit">
  <i class="glyphicon glyphicon-edit"></i>
  </a>


  <form  method="post" action="contacts/{{$contact->id}}">
  <input type='hidden' name='_token' value='{{csrf_token()}}'>
  <input type="hidden" name="_method" value="DELETE">
  <button type="submit"><i class="glyphicon glyphicon-remove"></i></button>
  </form>


  </div>
  </td>
  </tr>
  @endforeach

  </table>            
  </div>

  <div class="text-center">
  <nav>
  {{$contacts->links() }}
  </nav>
  </div>
  </div>
  </div>
  </div>



  <!--  <script src="{{ asset('components/AdminLTE/dist/js/jquery.js') }}"></script> -->

  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop
