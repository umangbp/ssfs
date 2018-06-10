<!DOCTYPE html>
<html>
<head>
	<title>Something Went Wrong</title>
	<link rel="stylesheet" href="{{ mix('front/css/all.css') }}" media='all'>

	<style type="text/css">
		.err-block{
			margin-top: 10%;
		}	

		.text-err, .err-btn{
			padding-top: 20px;
		}
	</style>

</head>
<body>
	<div class="container text-center err-block">
		<div>
			<img src="{{ url('front/images/SSFS_LOGO.png') }}">	
		</div>
		<div class="text-err">
			<h1>Ooops! Something Went Wrong.</h1>
		</div>
		<div class="err-btn">
			<a href="http://192.168.0.103:9002" class="tnit-btn tnit-btn_v1">Back To Home</a>
		</div>
	</div>

	 <script src="{{ mix('front/js/all.js') }}"></script>
</body>
</html>

	