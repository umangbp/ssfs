@extends('admin.theme.layout')

@section('content')
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
		CMS
		<small>Edit</small>
	  </h1>
	  <ol class="breadcrumb">
		<li><a href="{{ route('ssfs.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('cms') }}">CMS</a></li>
		<li><a href="#">Edit</a></li>
	  </ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-body pad-left">

						@if (session('update_failed'))
						    <div class="alert alert-danger">
						    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						        <span>{{ session('update_failed') }}</span>
						    </div>
						@endif

						{{ Form::model($cms_data,['route' => ['cms.update', $cms_data->id], 'method' => 'PUT']) }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							    	
							    	{{ Form::label('slug', 'Slug*', ['class' => '']) }}
							    	{{ Form::text('slug',null,['class' => 'form-control', 'placeholder' => 'Please Enter Slug', 'disabled' => true]) }}
									<div class="err-block">
										<span class="text-danger">{{ $errors->first('slug') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group"> 	
							    	{{ Form::label('title', 'Title*', ['class' => '']) }}
							    	{{ Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Please Title Here']) }}

							    	<div class="err-block">
										<span class="text-danger">{{ $errors->first('title') }}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								{{ Form::label('content', 'Content*', ['class' => '']) }}
								{{ Form::textarea('content',null, ['id' => 'content-editor']) }}

								<div class="err-block">
										<span class="text-danger">{{ $errors->first('content') }}</span>
									</div>
							</div>
						</div>
						<div class="row pad-top pad-bottom">
							<div class="col-md-6">
								<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
								<a href="{{ route('cms')}}" class="btn btn-danger" style="margin-left:10px"><i class="fa fa-close"></i> Cancel</a>
							</div>
						</div>
						
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection