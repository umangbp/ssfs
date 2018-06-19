@extends('admin.theme.layout')

@section('content')
	
	
	<section class="content-header">
	  <h1>
	    Meta Info
	    <small>Add</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Meta Info</a></li>
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

						{{ Form::model($meta,['route' => ['meta.update', $meta->id], 'method' => 'PUT']) }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							    	
							    	{{ Form::label('page_name', 'Page Name (must be unique and without spaces)', ['class' => '']) }}
							    	{{ Form::text('page_name',null,['class' => 'form-control', 'placeholder' => 'Please Enter Page Name']) }}
									<div class="err-block">
										<span class="text-danger">{{ $errors->first('page_name') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group"> 	
							    	{{ Form::label('meta_title_label', 'Meta Title', ['class' => '']) }}
							    	{{ Form::text('meta_title',null,['class' => 'form-control', 'placeholder' => 'Please Enter Meta Title']) }}

							    	<div class="err-block">
										<span class="text-danger">{{ $errors->first('meta_title') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('meta_description', 'Meta Description', ['class' => '']) }}
								{{ Form::textarea('meta_description',null,['class' => 'form-control', 'placeholder' => 'Please Enter Meta Description']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('meta_description') }}</span>
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('meta_keywords', 'Meta Keywords', ['class' => '']) }}
								{{ Form::textarea('meta_keywords',null,['class' => 'form-control', 'placeholder' => 'Please Enter Meta Keywords']) }}	

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
									</div>
							</div>
						</div>
						<div class="row pad-top pad-bottom">
							<div class="col-md-6">
								<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Add</button>
								<a href="{{ route('meta.list')}}" class="btn btn-danger" style="margin-left:10px"><i class="fa fa-close"></i> Cancel</a>
							</div>
						</div>
						
						{{ Form::close() }}

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection