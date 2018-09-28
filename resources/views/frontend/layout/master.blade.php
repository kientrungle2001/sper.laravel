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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$.noConflict();
		</script>
		<script type="text/javascript" src="/3rdparty/bootstrap3/js/bootstrap.min.js"></script>
		<link href='/3rdparty/bootstrap3/css/bootstrap.min.css' type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="/3rdparty/tinymce/tinymce.min.js"></script>
		<link type="text/css" property="stylesheet" rel="stylesheet" href="/3rdparty/fontawesome-5.3.1/css/all.min.css" />
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />

		<script type="text/javascript">
			BASE_URL = 'http://<?php echo $_SERVER['HTTP_HOST']?>';
			BASE_REQUEST = 'http://<?php echo $_SERVER['HTTP_HOST']?>';
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular.min.js" integrity="sha256-ruP2+uorUblSeg7Tozk75u8TaSUKRCZVvNV0zRGxkRQ=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular-sanitize.min.js" integrity="sha256-FnMl43xSx3jHmcs7t2LJ3htfsCeo99XORPvzOVQN/tw=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="/js/crypt.js"></script>
		<script type="text/javascript" src="/js/array.js"></script>
		<script type="text/javascript" src="/js/main.js"></script>
		<script type="text/javascript" src="/js/api.js"></script>
		<script type="text/javascript" src="/js/angular/sper/header.js"></script>
		<script type="text/javascript" src="/js/angular/sper/service/highlight.js"></script>
		<script type="text/javascript" src="/js/angular/sper/service/section.js"></script>
		<script type="text/javascript" src="/js/angular/sper/service/detail.js"></script>
		<script type="text/javascript" src="/js/angular/sper/service/detail/product/list.js"></script>
		<script type="text/javascript" src="/js/angular/sper/service/product/detail.js"></script>
		<script type="text/javascript" src="/js/angular/sper/video/review.js"></script>
		<script type="text/javascript" src="/js/angular/sper/banner/top.js"></script>
		<script type="text/javascript" src="/js/angular/sper/banner/slideshow.js"></script>
		<script type="text/javascript" src="/js/angular/sper/account/login.js"></script>
		<script type="text/javascript" src="/js/angular/sper/account/register.js"></script>
		<script type="text/javascript" src="/js/angular/sper/service/map.js"></script>
		<script type="text/javascript" src="/js/angular/sper/service/category.js"></script>
		
		<script type="text/javascript" src="/js/angular/sper/blog/section.js"></script>
		<script type="text/javascript" src="/js/angular/sper/blog/detail.js"></script>
		<script type="text/javascript" src="/js/angular/sper/blog/lastest.js"></script>
		<script type="text/javascript" src="/js/angular/sper/blog/board.js"></script>
		<script type="text/javascript" src="/js/angular/sper/blog/others.js"></script>

		<script type="text/javascript" src="/js/angular/sper/news/board.js"></script>
		<script type="text/javascript" src="/js/angular/sper/news/detail.js"></script>
		<script type="text/javascript" src="/js/angular/sper/news/featureds.js"></script>
		<script type="text/javascript" src="/js/angular/sper/news/others.js"></script>

		<script type="text/javascript" src="/js/angular/sper/clientarea/branchmanagement.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/branchservice.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/changepassword.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/collection.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/createservice.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/editservice.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/createproduct.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/editproduct.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/feedback.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/info.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/user.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/privilege.js"></script>
		<script type="text/javascript" src="/js/angular/sper/clientarea/service.js"></script>
		<script type="text/javascript" src="/js/angular/sper/checkout/cart.js"></script>
		<script type="text/javascript" src="/js/angular/sper.js"></script>
		@include('frontend.sper.style')

		
	</head>
	<body ng-app="SperApp">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=180896868946666&autoLogAppEvents=1';
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
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
