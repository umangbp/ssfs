@extends('admin.theme.layout')

@section('content')
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    Careers
	    <small>List</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Careers</a></li>
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
				    <div class="alert alert-success">
				    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				        <span>{{ session('err_message') }}</span>
				    </div>
				@endif

              <!-- CMS Listing table -->  
            
            <div class="pull-right" style="padding-bottom: 20px;padding-top: 10px;">
      			<a class="btn btn-primary" href="{{ route('careers.create') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Add New Job Opening</a>
      		</div>
      		<div>
              <table class="table table-bordered table-responsive cms-list">
              	<thead>
	              	<tr>
	              		<th>#</th>
	              		<th>Job Title</th>
	              		<th>Job Description</th>
	              		<th>Job Location</th>
	              		<th>Status</th>
	              		<th>Posted On</th>
	              		<th>Actions</th>
	              	</tr>
              	</thead>
              	
              	<tbody>

	              	@isset($careers)

	              		@foreach($careers as $career)

	              			<tr>
	              				<td>{{ $career->id }}</td>
	              				<td>{{ $career->job_title }}</td>
	              				<td>{{ $career->job_description }}</td>
	              				<td>{{ $career->job_location }}</td>
	              				<td width="100" class="text-center">
	              					@if($career->status == 1)
	              						<span class="badge badge-pill badge-primary">Active</span>
	              					@else
	              						<span class="badge badge-danger">Inactive</span>
	              					@endif
	              					
	              				</td>
	              				<td>{{ $career->created_at }}</td>
	              				<td  width="110">
	              					<a class="btn btn-info" href="{{ URL('ssfs-admin/careers/'.$career->id) }}"><i class="fa fa-edit"></i></a>
	              					<a class="btn btn-danger" href="{{ URL('ssfs-admin/career/delete/'.$career->id) }}"><i class="fa fa-trash"></i></a>
	              				</td>

	              			</tr>
	              		@endforeach

	              	@endisset

	              	@empty($careers)
	              			<tr>
	              				<td  colspan="5" class="text-center"><span>No Job Openings Available</span></td>
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