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

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-body pad">

						{{ Form::model($cms_data,['route' => ['cms.update', $cms_data->id], 'method' => 'PUT']) }}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
								    	
								    	{{ Form::label('slug', 'Slug', ['class' => '']) }}
								    	{{ Form::text('slug','',['class' => 'form-control', 'placeholder' => 'Please Enter Slug']) }}
									</div>
								<div>
						  	</div>
						  	<div class="row">
							  	<div class="form-group">
							  	</div>
						  	<div class="row">
						  	<button type="submit" class="btn btn-default">Submit</button>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection