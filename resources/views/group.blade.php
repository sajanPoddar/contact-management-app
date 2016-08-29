@extends('layouts.master')
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
 <strong>Create a New Contact Group</strong>
</div> 
<form method="post" action="group">
<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="group" class="control-label col-md-3">Group Name:</label>
		<input type="text" name="group_name" id="name" class="form-control" placeholder="Add a Contact Group">
	</div>
	<div class="panel-footer">
	<button type="submit" class="btn btn-primary">SAVE</button>
	</div>
</form>
</div>
<!-- <div class="panel panel-default">
	<div class="panel-heading">
		<strong>List of All Contact Groups</strong>
	</div>
	@foreach($allGroup as $singleGroup)
	<div class="panel-footer">
		{{$singleGroup->group_name}}
	</div>
	@endforeach
</div> -->
<!-- List of Current Groups -->
@if (count($allGroup) > 0)
<div class="panel panel-default">
	<div class="panel-heading">
		List of Current Contact Groups
	</div>
	<div class="panel-body">
		<table class="table table-striped task-table">
			<!-- Table Heading -->
			<thead>
				<th>Contact Group</th>
				<th>&nbsp;</th>
			</thead>
			<!-- Table Body -->
			<tbody>
				@foreach ($allGroup as $singleGroup)
				<tr>
					<!-- Group Name -->
					<td class="table-text">
						<div>{{ $singleGroup->group_name }}</div>
					</td>
					<td>
						<!-- Delete Button -->
						<form action="{{ url('group/'.$singleGroup->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit" class="btn btn-danger"><i class="fa fa-trash">Delete</i></button>
						</form>
					</td>
				</tr>
				@endForeach
			</tbody>
		</table>
	</div>
</div>
@endif
@endsection