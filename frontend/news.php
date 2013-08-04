<?php include('components/page_head.php') ?>
<div class="row-fluid">
	<div class="span8">
		<div class="carousel slide" id="my-carousel">
			<ol class="carousel-indicators">
				<li data-target="#my-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#my-carousel" data-slide-to="1"></li>
				<li data-target="#my-carousel" data-slide-to="2"></li>
				<li data-target="#my-carousel" data-slide-to="3"></li>
			</ol>
		
			<div class="carousel-inner">
				<div class="item active">
					<img src="http://lorempixel.com/1170/500" alt="Demo" />
					<div class="carousel-caption">
						<h4>Some title</h4>
						<p>Some description.</p>
					</div>
				</div>
				<div class="item">
					<img src="http://lorempixel.com/1170/500/people" alt="Demo" />
				</div>
				<div class="item">
					<img src="http://lorempixel.com/1170/500/city" alt="Demo" />
				</div>
				<div class="item">
					<img src="http://lorempixel.com/1170/500/sports" alt="Demo" />
				</div>
			</div>
			<a href="#my-carousel" class="carousel-control left" data-slide="prev">&lsaquo;</a>
			<a href="#my-carousel" class="carousel-control right" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	<div class="span4">
		<img src="<?=$base_url;?>assets/frontend/img/news/1.png">
	</div>
</div>
<?php include('components/page_tail.php') ?>
