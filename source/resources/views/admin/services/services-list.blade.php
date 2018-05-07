@extends('admin.theme.layout')

@section('content')
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    Services
	    <small>List</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('ssfs.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="{{ route('services.list') }}">services</a></li>
	  </ol>
	</section>

	<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-body pad">
              
            	@if (session('update_succ'))
				    <div class="alert alert-success">
				    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				        <span>{{ session('update_succ') }}</span>
				    </div>
				@endif

              <!-- CMS Listing table -->  
              <table class="table table-bordered table-responsive cms-list">
              	<thead>
	              	<tr>
	              		<th>#</th>
	              		<th>Title</th>
	              		<th>Short Description</th>
	              		<th>Description</th>
	              		<th>Position</th>
	              		<th>Last Updated</th>
	              		<th>Actions</th>
	              	</tr>
              	</thead>
              	
              	<tbody>

	              	@isset($services)

	              		@foreach($services as $service)

	              			<tr>
	              				<td>{{ $service['id'] }}</td>
	              				<td>{{ $service['title'] }}</td>
	              				<td><?php echo mb_strimwidth(strip_tags($service['short_desc']),0,50,'...') ?></td>
	              				<td><?php echo mb_strimwidth(strip_tags($service['description']),0,100,'...') ?></td>
	              				<td>{{ $service['position'] }}</td>
	              				<td>{{ $service['updated_at'] }}</td>
	              				<td><a class="btn btn-info" href="{{ URL('ssfs-admin/services/'.$service['id']) }}"><i class="fa fa-edit"></a></td>
	              			</tr>
	              		@endforeach

	              	@endisset

	              	@empty($services)
	              			<tr>
	              				<td  colspan="7" class="text-center"><span>No Service Available</span></td>
	              			</tr>
	              	@endempty
              	
              	</tbody>
              </table>
              <!-- /CMS Listing table -->  
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>

@endsection