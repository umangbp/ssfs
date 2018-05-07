@extends('admin.theme.layout')

@section('content')
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    CMS
	    <small>List</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">CMS</a></li>
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
	              		<th>Slug</th>
	              		<th>Title</th>
	              		<th>Content</th>
	              		<th>Last Updated</th>
	              		<th>Actions</th>
	              	</tr>
              	</thead>
              	
              	<tbody>

	              	@isset($cms_pages)

	              		@foreach($cms_pages as $cms_page)

	              			<tr>
	              				<td>{{ $cms_page['id'] }}</td>
	              				<td>{{ $cms_page['slug'] }}</td>
	              				<td>{{ $cms_page['title'] }}</td>
	              				<td><?php echo mb_strimwidth(strip_tags($cms_page['content']),0,100,'...') ?></td>
	              				<td>{{ $cms_page['updated_at'] }}</td>
	              				<td><a class="btn btn-info" href="{{ URL('ssfs-admin/cms/'.$cms_page['id']) }}"><i class="fa fa-edit"></a></td>
	              			</tr>
	              		@endforeach

	              	@endisset

	              	@empty($cms_pages)
	              			<tr>
	              				<td  colspan="5" class="text-center"><span>No CMS Content Available</span></td>
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