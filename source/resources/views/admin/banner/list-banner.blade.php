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
          <div class="box box-info">
            <div class="box-body pad">
              
            	@if (session('update_status'))
				    <div class="alert alert-success">
				    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				        <span>{{ session('update_status') }}</span>
				    </div>
				@endif

              <!-- CMS Listing table -->  
              <table class="table table-bordered table-responsive cms-list">
              	<thead>
	              	<tr>
	              		<th>#</th>
	              		<th>Banner Text</th>
	              		<th>Sub Text</th>
	              		<th>Image</th>
	              		<th>Sequence No</th>
	              		<th>status</th>
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
	              				<td>{{ $banner->sequence_no }}</td>
	              				<td>{{ $banner->status }}</td>
	              				<td><a class="btn btn-info" href="{{ URL('ssfs-admin/banners/'.$banner->id) }}"><i class="fa fa-edit"></a></td>
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
    
    </section>

@endsection