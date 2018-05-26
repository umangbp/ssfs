@extends('admin.theme.layout')

@section('content')
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    Banner
	    <small>List</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Banners</a></li>
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
      			<a class="btn btn-primary" href="{{ route('banner.create') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Add New Banner</a>
      		</div>
      		<div>
              <table class="table table-bordered table-responsive cms-list">
              	<thead>
	              	<tr>
	              		<th>#</th>
	              		<th>Banner Text</th>
	              		<th>Sub Text</th>
	              		<th>Image</th>
	              		<th>Sequence No</th>
	              		<th>Status</th>
	              		<th>Actions</th>
	              	</tr>
              	</thead>
              	
              	<tbody>

	              	@isset($banners)

	              		@foreach($banners as $banner)

	              			<tr>
	              				<td>{{ $banner->id }}</td>
	              				<td>{{ $banner->banner_text }}</td>
	              				<td>{{ $banner->banner_sub_text }}</td>
	              				<td class="text-center"><img src="{{ $banner->banner_image }}" width="150px" height="80px" /></td>
	              				<td width="100" class="text-center">{{ $banner->sequence_no }}</td>
	              				<td width="100" class="text-center">
	              					@if($banner->status == 1)
	              						<span class="badge badge-pill badge-primary">Active</span>
	              					@else
	              						<span class="badge badge-danger">Inactive</span>
	              					@endif
	              					
	              				</td>
	              				<td  width="110">
	              					<a class="btn btn-info" href="{{ URL('ssfs-admin/banners/'.$banner->id) }}"><i class="fa fa-edit"></i></a>
	              					<a class="btn btn-danger" href="{{ URL('ssfs-admin/banners/delete/'.$banner->id) }}"><i class="fa fa-trash"></i></a>
	              				</td>

	              			</tr>
	              		@endforeach

	              	@endisset

	              	@empty($banners)
	              			<tr>
	              				<td  colspan="5" class="text-center"><span>No Banner Available</span></td>
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