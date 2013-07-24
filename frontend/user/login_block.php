<p>
	Üye iseniz e-posta adresinizi<br>
	ve şifrenizi girin
</p>
<!-- login form -->
<form novalidate=""> 
	<div class="control-group">
		<label class="control-label"  for="username" >Kullanıcı adı / E-posta Adresi</label>
		<div class="controls">
			<input type="text" class='reg-input' name="username" id="username" minlength="6" required="" data-validation-required-message='Lütfen kullanıcı adı giriniz' data-validation-minlength-message="Lütfen en az 6 karakter giriniz.">
		</div>			
	</div>
	<div class="control-group">
		<label class="control-label" for="password">Şifre</label>
		<div class="controls">
			<input type="password" class='reg-input' name="password" id="password" required=""  minlength="6"  data-validation-required-message='Lütfen şifre giriniz' data-validation-minlength-message="Lütfen en az 6 karakter giriniz."> 
		</div>			
	</div>
	<div><label class="checkbox inline"><input type="checkbox">Beni hatırla</label></div>	
	<p><a href="#" class="forget">Şifremi Unuttum</a></p>
	<button class="btn login-btn">Oturum aç</button>
</form>