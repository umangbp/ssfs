@extends('admin.theme.layout')

@section('content')
	
	
	<section class="content-header">
	  <h1>
	    Careers
	    <small>Add</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Careers</a></li>
	    <li><a>Add</a></li>
	  </ol>
	</section>

	<!-- Main content -->
    <section class="content">
	    <div class="row">
	       	<div class="col-md-12">
	          	<div class="box box-info">
	            	<div class="box-body pad">
	              
		            	@if (session('error'))
						    <div class="alert alert-danger">
						    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						        <span>{{ session('error') }}</span>
						    </div>
						@endif

						{{ Form::open(['route' => ['team-members.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							    	
							    	{{ Form::label('first_name', 'First Name', ['class' => '']) }}
							    	{{ Form::text('first_name','',['class' => 'form-control', 'placeholder' => 'Please Enter First Name']) }}
									<div class="err-block">
										<span class="text-danger">{{ $errors->first('first_name') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('last_name', 'Last Name', ['class' => '']) }}
								{{ Form::text('last_name','',['class' => 'form-control', 'placeholder' => 'Please Enter Last Name']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('last_name') }}</span>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('designation', 'Designation', ['class' => '']) }}
								{{ Form::text('designation','',['class' => 'form-control', 'placeholder' => 'Please Enter Designation']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('designation') }}</span>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" style="padding-top: 10px">
								{{ Form::label('image', 'Image', ['class' => '']) }}
								{{ Form::file('image',null,[]) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('image') }}</span>
									</div>
							</div>
						</div>
						<div class="row pad-top pad-bottom">
							<div class="col-md-6">
								<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Add</button>
								<a href="{{ route('team-members.list')}}" class="btn btn-danger" style="margin-left:10px"><i class="fa fa-close"></i> Cancel</a>
							</div>
						</div>
						
						{{ Form::close() }}

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection