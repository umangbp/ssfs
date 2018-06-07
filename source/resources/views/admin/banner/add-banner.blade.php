@extends('admin.theme.layout')

@section('content')
	
	
	<section class="content-header">
	  <h1>
	    Banner
	    <small>Add</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Banners</a></li>
	    <li><a>Add</a></li>
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
						        <span>{{ session('invalid_file	') }}</span>
						    </div>
						@endif

						{{ Form::open(['route' => ['banner.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							    	
							    	{{ Form::label('banner_text_label', 'Banner Text', ['class' => '']) }}
							    	{{ Form::text('banner_text',null,['class' => 'form-control', 'placeholder' => 'Please Enter Banner Text']) }}
									<div class="err-block">
										<span class="text-danger">{{ $errors->first('banner_text') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group"> 	
							    	{{ Form::label('banner_sub_text_label', 'Banner Sub Text', ['class' => '']) }}
							    	{{ Form::text('banner_sub_text',null,['class' => 'form-control', 'placeholder' => 'Please Enter Sub Text Here']) }}

							    	<div class="err-block">
										<span class="text-danger">{{ $errors->first('banner_sub_text') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('sequence_no_label', 'Sequence No (Banners will be displayed based on this sequence no)*', ['class' => '']) }}
								{{ Form::number('sequence_no',null,['class' => 'form-control', 'placeholder' => 'Please Enter Sequence No Here']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('sequence_no') }}</span>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" style="padding-top: 10px">
								{{ Form::label('banner_image_label', 'Banner Image (image should be of size 1920x740)', ['class' => '']) }}
								{{ Form::file('banner_image',null,[]) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('banner_image') }}</span>
									</div>
							</div>
						</div>
						<div class="row pad-top pad-bottom">
							<div class="col-md-6">
								<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Add</button>
								<a href="{{ route('banner.list')}}" class="btn btn-danger" style="margin-left:10px"><i class="fa fa-close"></i> Cancel</a>
							</div>
						</div>
						
						{{ Form::close() }}

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection