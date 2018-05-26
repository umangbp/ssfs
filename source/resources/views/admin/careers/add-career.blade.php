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

						{{ Form::open(['route' => ['careers.store'], 'method' => 'POST']) }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							    	
							    	{{ Form::label('job_title_label', 'Job Title', ['class' => '']) }}
							    	{{ Form::text('job_title','',['class' => 'form-control', 'placeholder' => 'Please Enter Job Title']) }}
									<div class="err-block">
										<span class="text-danger">{{ $errors->first('job_title') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group"> 	
							    	{{ Form::label('job_description_label', 'Job Description', ['class' => '']) }}
							    	{{ Form::textarea('job_description','',['class' => 'form-control', 'placeholder' => 'Please Enter Job Description']) }}

							    	<div class="err-block">
										<span class="text-danger">{{ $errors->first('job_description') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('job_location_label', 'Job Location', ['class' => '']) }}
								{{ Form::text('job_location','',['class' => 'form-control', 'placeholder' => 'Please Enter Job Location']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('job_location') }}</span>
									</div>
							</div>
						</div>
						<div class="row pad-top pad-bottom">
							<div class="col-md-6">
								<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Add</button>
								<a href="{{ route('careers.list')}}" class="btn btn-danger" style="margin-left:10px"><i class="fa fa-close"></i> Cancel</a>
							</div>
						</div>
						
						{{ Form::close() }}

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection