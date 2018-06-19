@extends('admin.theme.layout')

@section('content')
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    Meta
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
				    <div class="alert alert-danger">
				    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				        <span>{{ session('err_message') }}</span>
				    </div>
				@endif

              <!-- CMS Listing table -->  
            
            <div class="pull-right" style="padding-bottom: 20px;padding-top: 10px;">
      			<a class="btn btn-primary" href="{{ route('meta.create') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Add New Meta</a>
      		</div>
      		<div>
              <table class="table table-bordered table-responsive cms-list">
              	<thead>
	              	<tr>
	              		<th>#</th>
	              		<th>Page Name</th>
	              		<th>Meta Title</th>
	              		<th>Meta Description</th>
	              		<th>Meta Keywords</th>
	              		<th>Status</th>
	              		
	              		<th>Actions</th>
	              	</tr>
              	</thead>
              	
              	<tbody>

	              	@isset($meta)

	              		@foreach($meta as $key => $info)

	              			<tr>
	              				<td>{{ $key+1 }}</td>
	              				<td>{{ $info['page_name'] }}</td>
	              				<td>{{ $info['meta_title'] }}</td>
	              				<td>{{ $info['meta_description'] }}</td>
	              				<td>{{ $info['meta_keywords'] }}</td>
	              				<td width="100" class="text-center">
	              					@if($info['status'] == 1)
	              						<span class="badge badge-pill badge-primary">Active</span>
	              					@else
	              						<span class="badge badge-danger">Inactive</span>
	              					@endif
	              					
	              				</td>
	              				
	              				<td  width="110">
	              					<a class="btn btn-info" href="{{ URL('ssfs-admin/meta/'.$info['id']) }}"><i class="fa fa-edit"></i></a>
	              					<a class="btn btn-danger" href="{{ URL('ssfs-admin/meta/delete/'.$info['id']) }}"><i class="fa fa-trash"></i></a>
	              				</td>

	              			</tr>
	              		@endforeach

	              	@endisset

	              	@empty($meta)
	              			<tr>
	              				<td  colspan="7" class="text-center"><span>No Meta Info Available</span></td>
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