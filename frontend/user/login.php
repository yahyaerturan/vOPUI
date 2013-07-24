<?php include('../components/page_head.php'); ?>
<!-- Center page section -->
<div class="row c-page">
	<!-- Login section -->
	<h4 class="head">Üye Girişi</h4>
	<div class="span4">
		<div class="hero-unit login-form">
			<?php if($_GET['page']=='login')	{ include('login_block.php'); }?>
			<?php if($_GET['page']=='forget')	{ include('forget_block.php'); }?>
		</div>
	</div>
	<div class="span4 column2 ">
		<h4>Ücretsiz üye olsun</h4>
		<p class="bold">
			otopazari.com.tr'ye üye<br>
			olduğunuzda
		</p>
		<p>
			Ücretsiz ve kolay ilan vererek aracınızı satabilir veya kiralayabilirsiniz.
		</p>
		<p>
			Bana özelden ilanınızın görüntülenme sayısını takip edebilir, diğer kullanıcılar ile mesajlaşabilirsiniz.
		</p>
		<p>
			Sosyal paylaşım sitelerinde ilanınızı paylaşabilirsiniz.
		</p>
		<a href="#" class="btn reg-btn">Üye Ol</a>
	</div>
	<div class="span4 column2">
		<h4>Facebook ile bağlan !</h4>
		<p class="bold">
			Facebook Hesabınızla<br>
			Otopazari.com.tr'ye Hızlıca Keyıt Olun
		</p>
		<a href="#" class="face"><img src="<?=$base_url;?>assets/frontend/img/face-btn.png"></a>
	</div>
</div>
<?php include('../components/page_tail.php') ?>
