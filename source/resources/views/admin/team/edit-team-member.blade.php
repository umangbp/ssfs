@extends('admin.theme.layout')

@section('content')
	
	
	<section class="content-header">
	  <h1>
	    Team Members
	    <small>Edit</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Team Members</a></li>
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

						

						{{ Form::model($member,['route' => ['team-members.update', $member->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							    	
							    	{{ Form::label('first_name', 'First Name', ['class' => '']) }}
							    	{{ Form::text('first_name',null,['class' => 'form-control', 'placeholder' => 'Please Enter First Name']) }}
									<div class="err-block">
										<span class="text-danger">{{ $errors->first('first_name') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('last_name', 'Last Name', ['class' => '']) }}
								{{ Form::text('last_name',null,['class' => 'form-control', 'placeholder' => 'Please Enter Last Name']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('last_name') }}</span>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('designation', 'Designation', ['class' => '']) }}
								{{ Form::text('designation',null,['class' => 'form-control', 'placeholder' => 'Please Enter Designation']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('designation') }}</span>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" style="padding-top: 10px">
								<div>
									{{ Form::label('image', 'Image', ['class' => '']) }}
								</div>
								<div>
									<img src="{{$member->image}}" width="150" height="150">
								</div>
								<div style="padding-top: 10px;">
									{{ Form::file('image',null,[]) }}	
									<div class="err-block">
										<span class="text-danger">{{ $errors->first('image') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row pad-top pad-bottom">
							<div class="col-md-6">
								<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
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