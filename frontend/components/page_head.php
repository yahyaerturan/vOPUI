<?php 
	$base_url = '';
	if($_SERVER['HTTP_HOST'] == 'localhost') {
	  $base_url = 'http://localhost/vOPUI/';
	} else {
	  $base_url = 'http://www.vopui.dev/';
	}
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Oto pazarı</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=$base_url;?>assets/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?=$base_url;?>assets/bootstrap/css/bootstrap-responsive.css" />
	<link rel="stylesheet" href="<?=$base_url;?>assets/bootstrap/css/bootstrap-fileupload.css" />
	<link rel="stylesheet" href="<?=$base_url;?>assets/frontend/css/style.css" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript" src="<?=$base_url;?>assets/frontend/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
		    selector: ".tiny"
		 });
		</script>
</head>
<body>
<!-- start page -->
<div class="container page">
	<div class="row">
		<div class="header pull-left">
			<!-- logo section -->
			<div class="span5 logo">
				<a href="<?=$base_url;?>" class="brand"><img src="<?=$base_url;?>assets/frontend/img/logo.png"></a>
			</div>
			<!-- header button -->
			<div class="span7">
				<!-- login button -->
				<div class="pull-right login">
					<img src="<?=$base_url;?>assets/frontend/img/face.png"><a href="#" class="btn btn-link">Facebook ile Giriş</a>
					<a href="#" class="btn login-btn">Giriş Yap</a>
					<a href="#" class="btn login-btn">Üye ol</a>
				</div>
				<!-- navigation -->
				<ul class="nav nav-pills pull-right">
				  <li class="active"><a href="#">İlan ver</a></li>
		          <li><a href="#">Haberler</a></li>
		          <li><a href="#">Galeriler</a></li>
		          <li><a href="#">Otogazcılar</a></li>
		          <li><a href="#">Bana özel</a></li>
		        </ul>
		        <!-- search form -->
	            <form class="pull-right">
			    	<div class="input-prepend input-append">
						<input type="text" placeholder="" class='search'>
						<button class="btn s-btn">Ara</button>
					</div>
			    </form>
			</div>
		</div>
	</div>
