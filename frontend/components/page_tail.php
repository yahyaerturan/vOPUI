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
		$('.carousel').carousel({
        pause: true,
        interval: false,
    });
    $('.carousel').on('slid.bs.carousel', function () {
    	var index = $(this).find('.item.active').index();
    	var size =  $(this).find('.item').size()
    	if(index == 0)
    	{
    		$('#first').addClass('active');
			$('#last').removeClass('active');
    	}
    	else if(index == size-1)
    	{
    		$('#last').addClass('active');
			$('#first').removeClass('active');
    	}
    	else {
    		$('#last').removeClass('active');
			$('#first').removeClass('active');
    	}
    	$('#first').bind('click',
              function(e) {
                $(this).carousel('next');
                      var index = $(this).parent().index();
                      var carousel = $('#' + $(this).closest('.carousel-inner').attr('data-target'));
                      //alert(carousel);
                      carousel.carousel(index);
                      e.preventDefault();
              }
      );
    });

    $(document).ready(
        function() {
                $('.carousel[id]').each(
                        function() {
                                var html = ' <div class="btn-toolbar"> <div class="btn-group"> <div class="carousel-nav" data-target="' + $(this).attr('id') + '">';
                                
                                for(var i = 0, d = 1; i < $(this).find('.item').size(); i++, d++ ) {
                                        html += '<button class="btn pagi"><a';
                                        if(i == 0) {
                                                html += ' class="active"';
                                        }
                                        
                                        html += ' href="#">' + d + '</button></a>';
                                }
                                
                                html += '</div></div></div>';
                                $(this).before(html);
                                $('.carousel-control.left[href="#' + $(this).attr('id') + '"]').hide();
                                window.d = d; 
                        }
                ).bind('slid',
                        function(e) {
                                var nav = $('.carousel-nav[data-target="' + $(this).attr('id') + '"] ul');
                                var index = $(this).find('.item.active').index();
                                var item = nav.find('li').get(index);
                                
                                nav.find('li a.active').removeClass('active');
                                $(item).find('a').addClass('active');
                                
                                if(index == 0) {
                                        $('.carousel-control.left[href="#' + $(this).attr('id') + '"]').fadeOut();
                                } else {
                                        $('.carousel-control.left[href="#' + $(this).attr('id') + '"]').fadeIn();
                                }
                                
                                if(index == d - 2) {
                                        $('.carousel-control.right[href="#' + $(this).attr('id') + '"]').fadeOut();
                                } else {
                                        $('.carousel-control.right[href="#' + $(this).attr('id') + '"]').fadeIn();
                                }
                                
                        }
                );
                
                $('.carousel-nav a').bind('click',
                        function(e) {
                                var index = $(this).parent().index();
                                var carousel = $('#' + $(this).closest('#testimonials').attr('data-target'));
                                carousel.carousel(index);
                                e.preventDefault();
                        }
                );
        }
);


    /*
		$('#first-ind').click( function() {
		    var item = $('#first-ind .carousel-inner .item.active');
		  	var index = item.index() + 1;
		    $('.carousel li(' + index + ')').addClass('active');
		});
		
     $("#first-ind").click(function () {
				$('#first').addClass('active');
				$('#last').removeClass('active');
			});
     $("#last-ind").click(function () {
				$('#last').addClass('active');
				$('#first').removeClass('active');
			});
			*/
	});
</script>
</body>
</html>
