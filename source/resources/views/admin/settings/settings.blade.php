@extends('admin.theme.layout')

@section('content')
	
	
	<section class="content-header">
	  <h1>
	    Settings
	    <small>Update</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="#">Settings</a></li>
	  </ol>
	</section>

	<!-- Main content -->
    <section class="content">
	    <div class="row">
	       	<div class="col-md-12">
	          	<div class="box box-info">
	            	<div class="box-body pad">
	              
		            	@if (session('message'))
						    <div class="alert alert-success">
						    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						        <span>{{ session('message') }}</span>
						    </div>
						@endif

						{{ Form::open(['route' => ['settings.update'], 'method' => 'POST']) }}
						

						@foreach ($settings as $setting)
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
								    	
								    	{{ Form::label('', $setting->label, ['class' => '']) }}

								    	@if($setting->field_type == 'textbox')

								    		{{ Form::text($setting->name, $setting->value,['class' => 'form-control', 'placeholder' => 'Please Enter '.$setting->label]) }}

								    	@elseif($setting->field_type == 'number')

								    		{{ Form::number($setting->name, $setting->value,['class' => 'form-control', 'placeholder' => 'Please Enter '.$setting->label]) }}

								    	@elseif($setting->field_type == 'textarea')

								    		{{ Form::textarea($setting->name, $setting->value, ['class' => 'form-control']) }}

								    	@else 


								    	@endif

										<div class="err-block">
											<span class="text-danger">{{ $errors->first($setting->name) }}</span>
										</div>
									</div>
								</div>
							</div>

						@endforeach

						<div class="row pad-top pad-bottom">
							<div class="col-md-6">
								<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
								<a href="{{ route('ssfs.admin.dashboard')}}" class="btn btn-danger" style="margin-left:10px"><i class="fa fa-close"></i> Cancel</a>
							</div>
						</div>
						
						{{ Form::close() }}

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection