<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>CÔNG TY TNHH TM VÀ DV SPER</title>
		<link rel="manifest" href="http://test1sn.vn/manifest.json">
		<meta property="og:type"  content="og:article" />
		<meta property="og:image" content="http://test1sn.vn/default/skin/nobel/themes/story/media/logo.png"/> 
		<meta property="og:title" content="Công Ty Cổ Phần Giáo Dục Phát Triển Trí Tuệ Và Sáng Tạo Next Nobels"/> 
		<meta property="og:site_name" content="nextnobels.com"/> 
		<meta property="og:url" content="http://test1sn.vn/"/> 
		<meta property="og:description" content="Công Ty Cổ Phần Giáo Dục Phát Triển Trí Tuệ Và Sáng Tạo Next Nobels" />
		<meta name="keywords" content="Giáo dục" />
		<meta name="description" content="Công Ty Cổ Phần Giáo Dục Phát Triển Trí Tuệ Và Sáng Tạo Next Nobels" />

		<script type="text/javascript" src="/3rdparty/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript">
			$.noConflict();
		</script>
		<script type="text/javascript" src="/3rdparty/bootstrap3/js/bootstrap.min.js"></script>
		<link href='/3rdparty/bootstrap3/css/bootstrap.min.css' type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="/3rdparty/tinymce/tinymce.min.js"></script>
		<link type="text/css" property="stylesheet" rel="stylesheet" href="/3rdparty/font-awesome-4.6.3/css/font-awesome.min.css" />

		<script type="text/javascript">
			BASE_URL = 'http://<?php echo $_SERVER['HTTP_HOST']?>';
			BASE_REQUEST = 'http://<?php echo $_SERVER['HTTP_HOST']?>';
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular.min.js" integrity="sha256-ruP2+uorUblSeg7Tozk75u8TaSUKRCZVvNV0zRGxkRQ=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular-sanitize.min.js" integrity="sha256-FnMl43xSx3jHmcs7t2LJ3htfsCeo99XORPvzOVQN/tw=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="/js/crypt.js"></script>
		<script type="text/javascript" src="/js/angular/sper.js"></script>
		<script type="text/javascript" src="/js/array.js"></script>
		@include('frontend.sper.style')
	</head>
	<body ng-app="SperApp">
			@include('frontend.sper.account.login')
			@include('frontend.sper.account.register')
			@include('frontend.sper.banner.top')
			@include('frontend.sper.header.menu')
			
	        @yield('content')

	        @include('frontend.sper.footer.section')
	        @include('frontend.sper.footer.copyright')
			@stack('scripts')
	</body>
</html>
