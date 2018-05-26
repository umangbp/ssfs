@extends('admin.theme.layout')

@section('content')
	
	
	<section class="content-header">
	  <h1>
	    Career
	    <small>Edit</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Careers</a></li>
	    <li><a>Edit</a></li>
	  </ol>
	</section>

	<!-- Main content -->
    <section class="content">
	    <div class="row">
	       	<div class="col-md-12">
	          	<div class="box box-info">
	            	<div class="box-body pad">
	              
		            	@if (session('invalid_file'))
						    <div class="alert alert-danger">
						    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						        <span>{{ session('invalid_file') }}</span>
						    </div>
						@endif

						@if (session('invalid_file'))
						    <div class="alert alert-danger">
						    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						        <span>{{ session('invalid_file') }}</span>
						    </div>
						@endif

						{{ Form::model($career,['route' => ['careers.update', $career->id], 'method' => 'PUT']) }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							    	
							    	{{ Form::label('job_title_label', 'Job Title', ['class' => '']) }}
							    	{{ Form::text('job_title',null,['class' => 'form-control', 'placeholder' => 'Please Enter Job Title']) }}
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
							    	{{ Form::text('job_description',null,['class' => 'form-control', 'placeholder' => 'Please Enter Job Description']) }}

							    	<div class="err-block">
										<span class="text-danger">{{ $errors->first('job_description') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('job_location_label', 'Job Location', ['class' => '']) }}
								{{ Form::text('job_location',null,['class' => 'form-control', 'placeholder' => 'Please Enter Job Location']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('job_location') }}</span>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2" style="padding-top: 10px;">
								{{ Form::label('status_career', 'Status', ['class' => '']) }}
								{{ Form::select('status',['0'=>'in-active', '1' => 'active'], $career->status, ['class'=> 'form-control']) }}	<div class="err-block">
										<span class="text-danger">{{ $errors->first('status') }}</span>
									</div>							
							</div>
						</div>
						<div class="row pad-top pad-bottom">
							<div class="col-md-6">
								<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
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