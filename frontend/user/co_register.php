<?php include('../components/page_head.php') ?>
<!-- registration section -->
<div class="row-fluid reg">
	<div class="span3">
		<!-- left space -->
	</div>
	<div class="span9">
		<h2>
			Türkiye'nin en işlek oto pazarında yerinizi alın!
		</h2>
			<form class="form-horizontal reg-form" novalidate="">
				<div class="control-group extra">
					<a href="#"class="reg-type-btn">Bireysel Üyelik</a>
					<a class="reg-type-btn pull-right type-active">Kurumsal Üyelik</a>
				</div>
				<div class="control-group">
					<label class="control-label"  for="username" >Kullanıcı Adı</label>
					<div class="controls">
						<input type="text" class='reg-input' name="username" id="username" minlength="6" required="" data-validation-required-message='Lütfen kullanıcı adı giriniz' data-validation-minlength-message="Lütfen en az 6 karakter giriniz.">
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="email">E-posta</label>
					<div class="controls">
						<input type="email" class='reg-input' name="email" id="email" required="" data-validation-required-message='Lütfen e-posta giriniz' data-validation-email-message="Lütfen geçerli bir e-posta adresi giriniz.">
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label"  for="emailAgain">E-posta Tekrar</label>
					<div class="controls">
						<input type="email" class='reg-input' name="emailAgain" id="emailAgain" data-validation-matches-message="Lütfen aynı e-posta değeri tekrar giriniz." data-validation-matches-match="email" aria-invalid="true">
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Şifre</label>
					<div class="controls">
						<input type="password" class='reg-input' name="password" id="password" required=""  minlength="6"  data-validation-required-message='Lütfen şifre giriniz' data-validation-minlength-message="Lütfen en az 6 karakter giriniz."> 
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="passwordAgain">Şifre Tekrar</label>
					<div class="controls">
						<input type="password" class='reg-input' name="passwordAgain" id="passwordAgain" required="" minlength="6" data-validation-required-message='Lütfen şifreni tekrar giriniz' data-validation-minlength-message="Lütfen en az 6 karakter giriniz.">
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="gallery">Galeri Adı</label>
					<div class="controls">
						<input type="text" class='reg-input' name="gallery" id="gallery" required="" data-validation-required-message='Lütfen galeri adı giriniz'>
					</div>			
				</div>

				<div class="control-group">
					<label class="control-label" for="gallery">Galeri URL</label>
					<div class="controls">
						<input type="text" class='reg-input' name="gallery-url" id="gallery-url" required="" placeholder="otopazari.com.tr    Örnekte olduğu gibi"  data-validation-required-message='Lütfen galeri URL giriniz'>
					</div>			
				</div>

				<div class="control-group">
					<label class="control-label" for="year">Bağlı Olduğunuz Otokent </label>
					<div class="controls">
						<select class='reg-input' name="otokent" id="otokent" required="" data-validation-required-message='Lütfen bağlı olduğunuz otokent  giriniz'>
							<option></option>
							<option>Seçiniz</option>
						</select>
					</div>			
				</div>

				<div class="control-group">
					<label class="control-label" for="year">Resmi Şirket Adı</label>
					<div class="controls">
						<input type="text" class='reg-input' name="company-name" id="company-name" required="" data-validation-required-message='Lütfen resmi şirket şdı  giriniz'>
					</div>			
				</div>

				<div class="control-group">
					<label class="control-label" for="year">Vergi Dairesi</label>
					<div class="controls">
						<input type="text" class='reg-input' name="vergi-dairesi" id="vergi-dairesi" required="" data-validation-required-message='Lütfen vergi dairesi giriniz'>
					</div>			
				</div>

				<div class="control-group">
					<label class="control-label" for="year">Vergi Numarası</label>
					<div class="controls">
						<input type="text" class='reg-input' name="vergi-numarasi" id="vergi-numarasi" required="" minlength="6" data-validation-required-message='Lütfen vergi numarası giriniz' data-validation-minlength-message="Lütfen en az 6 karakter giriniz.">
					</div>			
				</div>

				<div class="control-group">
					<label class="control-label" for="name">Adı Soyadı</label>
					<div class="controls">
						<input type="text" class='reg-input' name="name" id="name" required="" minlength="6"  data-validation-required-message='Lütfen adı soyadı giriniz' data-validation-minlength-message="Lütfen en az 6 karakter giriniz.">
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="il">İl</label>
					<div class="controls">
						<select  class='reg-input'  name="il" id="il">
							<option>İstanbul</option>
						</select>
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="ilce">İlçe</label>
					<div class="controls">
						<select  class='reg-input' name="ilce" id="ilce">
							<option>Bağcılar</option>
						</select>
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label">Semt</label>
					<div class="controls">
						<select  class='reg-input'>
							<option>Yüzyıl(100. yıl) Mh</option>
						</select>
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="adres">Adres</label>
					<div class="controls">
						<textarea rows="5" cols="30" class="reg-textarea" name="adres" id="adres"  required="" data-validation-required-message='Lütfen adres giriniz'></textarea>
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="telefon">1. Telefon</label>
					<div class="controls">
						<select class='reg-input input-mid' name="telefon" id="telefon">
							<option>212</option>
							<option>213</option>
							<option>221</option>
						</select>
						<input type="text" class='reg-input tel'>
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="telefon2">2. Telefon</label>
	 					<div class="controls">
							<select class='reg-input input-mid' name="telefon2" id="telefon2">
								<option>212</option>
								<option>213</option>
								<option>221</option>
							</select>
							<input type="text" class='reg-input tel'>
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="mobile-code">Cep Telefonu</label>
					<div class="controls">
						<select class='reg-input input-mid' name="mobile-code" id="mobile-code">
							<option></option>
							<option>536</option>
							<option>550</option>
							<option>505</option>
						</select>
						<input type="text" class='reg-input tel' name="mobile" id="mobile" required="" data-validation-required-message='Lütfen cep telefonu giriniz'>
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="">Operatör</label>
						<div class="controls">
							<label class="radio inline"><input type="radio" value="0" name='Operater' checked>Turkcell</label>
							<label class="radio inline"><input type="radio" value="1"  name='Operater'>Vodafone</label>
							<label class="radio inline"><input type="radio" value="1"  name='Operater'>Avea</label>
						</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="">Güvenlik Rasmi</label>
					<div class="controls">
						captcha photo
					</div>			
				</div>
				<div class="control-group">
					<label class="control-label" for="captcha">Güvenlik Kodu</label>
					<div class="controls">
						<input type="text" class='reg-input'  name="captcha" id="captcha" required="" required="" data-validation-required-message='Lütfen güvenlik kodu giriniz'>
					</div>			
				</div>
				<div class="control-group last">
					<label class="control-label" for="">Üyelik Sözleşmesi</label>
					<div class="controls">
						<input type="checkbox" class="checkbox" name="policey" id='policey' data-val="true" required="" data-validation-required-message='Lütfen güvenlik kodu giriniz'>
						Otopazari.com.tr'ya üye olmak için lütfen<br> 
						<span>üyelik sözleşmesini</span> okuyup onaylayınız
					</div>			
				</div>
				<div class="control-group extra">
					<button class="btn submit-btn pull-right" type="submit" id="submit" >Kaydet</button>
				</div>
		</form>
	</div>
</div>
<?php include('../components/page_tail.php') ?>
