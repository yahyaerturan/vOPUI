<!-- navigation Bar -->
<div class="navbar">
<div class="navbar-inner buttom-nav bold">
	<div class="container">
		<ul class="nav">
			<li><a href="#">Hakkımızda</a></li>
			<li class="divider-vertical"><a href="#">Yasal Uyarı</a></li>
			<li class="divider-vertical"><a href="#">Üyelik Sözleşmesi</a></li>
			<li class="divider-vertical"><a href="#">Gizlilik Politikası</a></li>
			<li class="divider-vertical"><a href="#">Yardım</a></li>
			<li class="divider-vertical"><a href="#">RSS</a></li>
			<li class="divider-vertical"><a href="#">Reklam </a></li>
			<li class="divider-vertical"><a href="#">İletişim</a></li>
		</ul>
	</div>
</div>
</div> <!-- end navbar -->	
<footer>
	<div class="row">
		<div class="span4">
			<a class="social-btn" href="#"><img src="<?=$base_url;?>assets/frontend/img/face-.png"></a>
			<a class="social-btn" href="#"><img src="<?=$base_url;?>assets/frontend/img/twitter.png"></a>
			<a class="social-btn" href="#"><img src="<?=$base_url;?>assets/frontend/img/google.png"></a>
			<a class="social-btn" href="#"><img src="<?=$base_url;?>assets/frontend/img/linkedin.png"></a>
			<a class="social-btn" href="#"><img src="<?=$base_url;?>assets/frontend/img/flicker.png"></a>
			<a class="social-btn" href="#"><img src="<?=$base_url;?>assets/frontend/img/rss.png"></a>
		</div>	
		<div class="span7 pull-right">
			Bize Ulaşın
			<img src="<?=$base_url;?>assets/frontend/img/7gun.png">
			Çağrı Merkezi: <span> 0850 500 17 17</span> Posta: <span><a href="#">info@otopazari.com.tr</a></span>
		</div>
	</div>
	<div class="copyright">
		<p class='pull-right'>Copyright 2005 - 2013 otopazari.com.tr</p>
	</div>
</footer>

</div>
<!-- end page -->
<!-- JavaScript -->
<script type="text/javascript" src="<?=$base_url;?>assets/jquery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="<?=$base_url;?>assets/jquery/jqBootstrapValidation.js"></script>
<script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>

<script src="<?=$base_url;?>assets/bootstrap/js/bootstrap.js"></script>
<script src="<?=$base_url;?>assets/bootstrap/js/bootstrap-fileupload.js"></script>
<script>
	$(document).ready(function(){
		$('.fileupload').fileupload()
		$('#myCarousel').carousel({
        interval: 5000
    });
    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length -1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
    });
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid', function (e) {
            var id = $('.item.active').data('slide-number');
    });
	});
</script>
</body>
</html>