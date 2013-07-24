 <?php include('../components/page_head.php') ?>
<?php include('../components/account_navigation.php') ?>
<!-- registration section -->
<div class="row-fluid reg">
	<div class="span3">
		<!-- left space -->
	</div>
	<div class="span9">
		<h5>
			Galerinize ait logo amblem- galeri resmi ve hakkınızda tanıtıcı yazınızı yazar safnızı oluşturun
		</h5>
			<form class="form-horizontal reg-form" novalidate="">
				<div class="control-group extra">
					<a href="#"class="reg-type-btn type-active">Galeri</a>
					<a class="reg-type-btn pull-right">Otogaz</a>
				</div>
				<div class="upload-group" id='control-group'>
					<label class="control-label"  for="gLogo" >Galeri Logosu</label>
					<div class="controls">
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-new thumbnail small"><img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /></div>
							<div class="fileupload-preview fileupload-exists thumbnail small"></div>
							<span class="btn btn-file">
								<span class="fileupload-new">resim seçin</span>
								<span class="fileupload-exists">Değiştirmek</span>
								<input type="file" name="gLogo" id="gLogo" required="" data-validation-required-message='Lütfen e-posta giriniz'/>
							</span>
							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Sil</a>
						</div>
					</div>			
				</div>

				<div class="upload-group" >
					<label class="control-label"  for="gPhoto" >Galeri Görselleri</label>
					<div class="controls">
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-new thumbnail big"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
							<div class="fileupload-preview fileupload-exists thumbnail big"></div>
							<div>
								<span class="btn btn-file">
									<span class="fileupload-new">resim seçin</span>
									<span class="fileupload-exists">Değiştirmek</span>
									<input type="file" name="gLogo" id="gLogo"/>
								</span>
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Sil</a>
							</div>
						</div>
					</div>			
				</div>

				<div class="upload-group">
					<label class="control-label"  for="adTitle1" >Reklam Başlığı</label>
					<div class="controls">
						<input type="text" class='reg-input' name="adTitle1" id="adTitle1">
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-new thumbnail small"><img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /></div>
							<div class="fileupload-preview fileupload-exists thumbnail small"></div>
							<span class="btn btn-file">
								<span class="fileupload-new">resim seçin</span>
								<span class="fileupload-exists">Değiştirmek</span>
								<input type="file"/>
							</span>
							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Sil</a>
						</div>
					</div>			
				</div>

				<div class="upload-group">
					<label class="control-label"  for="adTitle2" >Reklam Başlığı</label>
					<div class="controls">
						<input type="text" class='reg-input' name="adTitle2" id="adTitle2">
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-new thumbnail small"><img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /></div>
							<div class="fileupload-preview fileupload-exists thumbnail small"></div>
							<span class="btn btn-file">
								<span class="fileupload-new">resim seçin</span>
								<span class="fileupload-exists">Değiştirmek</span>
								<input type="file"/>
							</span>
							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Sil</a>
						</div>
					</div>			
				</div>

				<div class="upload-group">
					<label class="control-label"  for="adTitle3" >Reklam Başlığı</label>
					<div class="controls">
						<input type="text" class='reg-input' name="adTitle3" id="adTitle3">
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-new thumbnail small"><img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /></div>
							<div class="fileupload-preview fileupload-exists thumbnail small"></div>
							<span class="btn btn-file">
								<span class="fileupload-new">resim seçin</span>
								<span class="fileupload-exists">Değiştirmek</span>
								<input type="file"/>
							</span>
							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Sil</a>
						</div>
					</div>			
				</div>

				<div class="upload-group">
					<label class="control-label"  for="adTitle4" >Reklam Başlığı</label>
					<div class="controls">
						<input type="text" class='reg-input' name="adTitle4" id="adTitle4">
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-new thumbnail small"><img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" /></div>
							<div class="fileupload-preview fileupload-exists thumbnail small"></div>
							<span class="btn btn-file">
								<span class="fileupload-new">resim seçin</span>
								<span class="fileupload-exists">Değiştirmek</span>
								<input type="file"/>
							</span>
							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Sil</a>
						</div>
					</div>			
				</div>

				<div class="control-group">
					<label class="control-label" for="gAbout">Galeri Hakkında</label>
					<div class="controls">
						<textarea rows="5" cols="30" class="reg-textarea" name="gAbout" id="gAbout"  required="" data-validation-required-message='Lütfen galeri hakkında giriniz'></textarea>
					</div>			
				</div>

				<div class="upload-group">
					<h4>Markalar</h4>
			    <ul class="thumbnails">
				    <div  class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
				    <div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
					</ul>
					<ul class="thumbnails">
				    <div  class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
				    <div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-marka.png" alt=""></a></li>
							<input type="checkbox" class="marka-check">
						</div>
					</ul>
				</div>

				<div class="upload-group bank-check">
					<h4>Bankalar</h4>
			    <ul class="thumbnails">
				    <div  class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-bank.png" alt=""></a></li>
							<select class='select-bank'>
								<option>Olmasın</option>
								<option>Tek Çekim</option>
								<option>2Taksit</option>
								<option>3Taksit</option>
								<option>4Taksit</option>
								<option>5Taksit</option>
								<option>6Taksit</option>
								<option>7Taksit</option>
								<option>8Taksit</option>
								<option>9Taksit</option>
								<option>10Taksit</option>
								<option>11Taksit</option>
								<option>12Taksit</option>
							</select>
						</div>
				    <div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-bank.png" alt=""></a></li>
							<select class='select-bank'>
								<option>Olmasın</option>
								<option>Tek Çekim</option>
								<option>2Taksit</option>
								<option>3Taksit</option>
								<option>4Taksit</option>
								<option>5Taksit</option>
								<option>6Taksit</option>
								<option>7Taksit</option>
								<option>8Taksit</option>
								<option>9Taksit</option>
								<option>10Taksit</option>
								<option>11Taksit</option>
								<option>12Taksit</option>
							</select>
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-bank.png" alt=""></a></li>
							<select class='select-bank'>
								<option>Olmasın</option>
								<option>Tek Çekim</option>
								<option>2Taksit</option>
								<option>3Taksit</option>
								<option>4Taksit</option>
								<option>5Taksit</option>
								<option>6Taksit</option>
								<option>7Taksit</option>
								<option>8Taksit</option>
								<option>9Taksit</option>
								<option>10Taksit</option>
								<option>11Taksit</option>
								<option>12Taksit</option>
							</select>
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-bank.png" alt=""></a></li>
							<select class='select-bank'>
								<option>Olmasın</option>
								<option>Tek Çekim</option>
								<option>2Taksit</option>
								<option>3Taksit</option>
								<option>4Taksit</option>
								<option>5Taksit</option>
								<option>6Taksit</option>
								<option>7Taksit</option>
								<option>8Taksit</option>
								<option>9Taksit</option>
								<option>10Taksit</option>
								<option>11Taksit</option>
								<option>12Taksit</option>
							</select>
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-bank.png" alt=""></a></li>
							<select class='select-bank'>
								<option>Olmasın</option>
								<option>Tek Çekim</option>
								<option>2Taksit</option>
								<option>3Taksit</option>
								<option>4Taksit</option>
								<option>5Taksit</option>
								<option>6Taksit</option>
								<option>7Taksit</option>
								<option>8Taksit</option>
								<option>9Taksit</option>
								<option>10Taksit</option>
								<option>11Taksit</option>
								<option>12Taksit</option>
							</select>
						</div>
						<div class="span2">
				    	<li><a href="#" class="thumbnail"><img src="<?=$base_url;?>assets/frontend/img/gal-bank.png" alt=""></a></li>
							<select class='select-bank'>
								<option>Olmasın</option>
								<option>Tek Çekim</option>
								<option>2Taksit</option>
								<option>3Taksit</option>
								<option>4Taksit</option>
								<option>5Taksit</option>
								<option>6Taksit</option>
								<option>7Taksit</option>
								<option>8Taksit</option>
								<option>9Taksit</option>
								<option>10Taksit</option>
								<option>11Taksit</option>
								<option>12Taksit</option>
							</select>
						</div>
					</ul>
					
				</div>

				<div class="control-group">
					<button class="btn submit-btn pull-right" type="submit" id="submit" >Kaydet</button>
				</div>
		</form>
	</div>
</div>
<?php include('../components/page_tail.php') ?>
