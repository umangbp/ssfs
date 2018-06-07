@extends('admin.theme.layout')

@section('content')
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    Team Members
	    <small>List</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Team Members</a></li>
	  </ol>
	</section>

	<!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		
      	</div>
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-body pad">
              
            	@if (session('message'))
				    <div class="alert alert-success">
				    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				        <span>{{ session('message') }}</span>
				    </div>
				@endif

				@if (session('err_message'))
				    <div class="alert alert-danger">
				    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				        <span>{{ session('err_message') }}</span>
				    </div>
				@endif

              <!-- CMS Listing table -->  
            
            <div class="pull-right" style="padding-bottom: 20px;padding-top: 10px;">
      			<a class="btn btn-primary" href="{{ route('team-members.create') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Add New Member</a>
      		</div>
      		<div>
              <table class="table table-bordered table-responsive cms-list">
              	<thead>
	              	<tr>
	              		<th>#</th>
	              		<th>First Name</th>
	              		<th>Last Name</th>
	              		<th>Designation</th>
	              		<th>Image</th>
	              		<th>Status</th>
	              		<th>Created At</th>
	              		<th>Actions</th>
	              	</tr>
              	</thead>
              	
              	<tbody>

	              	@isset($team_members)

	              		@foreach($team_members as $key => $member)

	              			<tr>
	              				<td>{{ $key + 1 }}</td>
	              				<td>{{ $member['first_name'] }}</td>
	              				<td>{{ $member['last_name'] }}</td>
	              				<td>{{ $member['designation'] }}</td>
	              				<td><img src="{{ $member['image'] }}" width="100" height="100"></td>
	              				<td width="100" class="text-center">
	              					@if($member['status'] == 1)
	              						<span class="badge badge-pill badge-primary">Active</span>
	              					@else
	              						<span class="badge badge-danger">Inactive</span>
	              					@endif
	              				</td>
	              				<td>{{ $member['created_at'] }}</td>
	              				<td  width="110">
	              					<a class="btn btn-info" href="{{ URL('ssfs-admin/team-members/'.$member['id']) }}"><i class="fa fa-edit"></i></a>
	              					<a class="btn btn-danger" href="{{ URL('ssfs-admin/team-members/delete/'.$member['id']) }}"><i class="fa fa-trash"></i></a>
	              				</td>
	              			</tr>
	              		@endforeach

	              	@endisset

	              	@empty($team_members)
	              			<tr>
	              				<td  colspan="8" class="text-center"><span>No Team Member Available</span></td>
	              			</tr>
	              	@endempty
              	
              	</tbody>
              </table>
              </div>
            </div>
          </div>

        </div>
       
      </div>
    
    </section>

@endsection