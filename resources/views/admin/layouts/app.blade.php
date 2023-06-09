<!DOCTYPE html>
<html lang="en">
    
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset ('admin/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset ('admin/assets/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/feathericon.min.css')}}">
		
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/morris/morris.css')}}">
		<link rel="stylesheet" href="{{ asset('admin/assets/icon/themify-icons.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

		
		<!--[if lt IE 9]>
			<script src="{{ asset('admin/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{ asset('admin/assets/js/respond.min.js')}}"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			@include('admin.layouts.header')

			@include('admin.layouts.menu')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->



					@section('main-section')
                    @show 
					
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('admin/assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js')}}"></script>    
		<script src="{{ asset('admin/assets/plugins/morris/morris.min.js')}}"></script>  
		<script src="{{ asset('admin/assets/js/chart.morris.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="{{ asset ('admin/assets/ckeditor/ckeditor.js')}}"></script>
		<script  src="{{ asset ('admin/assets/js/script.js')}}"></script>
		<script  src="{{ asset('custom/admin.js') }}"></script>

		<script>

  		$('#slider-photo').change(function(e){

			const photo_url = URL.createObjectURL(e.target.files[0]);
			$('img#product_image_load').attr('src', photo_url);



		});

</script>
		
	

		
    </body>
 
</html> 