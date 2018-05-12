<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SSFS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  
  <link rel="stylesheet" type="text/css" href="{{ mix('admin/css/all.css') }}">

  {{-- <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}"> --}}

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>        


</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    
    <header class="main-header">
      @include('admin.theme.header')
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      @include('admin.theme.sidebar')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>

    <footer class="main-footer">
      @include('admin.theme.footer')
    </footer>

  </div>
<!-- ./wrapper -->


<script src="{{ mix('admin/js/all.js') }}"></script>

<script type="text/javascript">

  if($('#content-editor').val() !== undefined){
    CKEDITOR.replace( 'content-editor' );
  }

</script>

<script type="text/javascript">

  if($('#short_desc-editor').val() !== undefined){
    CKEDITOR.replace('short_desc-editor');
  }

  if($('#description-editor').val() !== undefined){
    CKEDITOR.replace('description-editor');  
  }
  
</script>

</body>
</html>
