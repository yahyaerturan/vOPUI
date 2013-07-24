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
				<a class="reg-type-btn type-active">Bireysel Üyelik</a>
				<a href="#" class="reg-type-btn pull-right">Kurumsal Üyelik</a>
			</div>
			<div class="control-group">
				<label class="control-label"  for="username" >Kullanıcı Adı</label>
				<div class="controls">
					<input type="text" class='reg-input' name="username" id="username" required="" data-validation-required-message='Lütfen kullanıcı adı giriniz' minlength="6"  data-validation-minlength-message="Lütfen en az 6 karakter giriniz.">
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
				<label class="control-label" for="r-password">Şifre Tekrar</label>
				<div class="controls">
					<input type="password" class='reg-input' name="r-password" id="r-password" required="" minlength="6" data-validation-required-message='Lütfen şifreni tekrar giriniz' data-validation-minlength-message="Lütfen en az 6 karakter giriniz.">
				</div>			
			</div>
			<div class="control-group">
				<label class="control-label" for="name">Adı Soyadı</label>
				<div class="controls">
					<input type="text" class='reg-input' name="name" id="name" required="" data-validation-required-message='Lütfen adı soyadı giriniz' minlength="6" data-validation-minlength-message="Lütfen en az 6 karakter giriniz.">
				</div>			
			</div>
			<div class="control-group">
				<label class="control-label" for="year">Doğum Tarihi </label>
				<div class="controls">
					<select class='reg-input birth' name="day" id="day" required="" data-validation-required-message='Lütfen gün seçiniz'><option value="">Gün</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option> </select>
					<select class='reg-input birth' name="month" id="month" required="" data-validation-required-message='Lütfen ay seçiniz'><option value="">Ay</option><option value="1">Ocak</option><option value="2">Şubat</option><option value="3">Mart</option><option value="4">Nisan</option><option value="5">Mayıs</option><option value="6">Haziran</option><option value="7">Temmuz</option><option value="8">Ağustos</option><option value="9">Eylül</option><option value="10">Ekim</option><option value="11">Kasım</option><option value="12">Aralık</option> </select>
					<select class='reg-input birth' name="year" id="year" required="" data-validation-required-message='Lütfen yıl seçiniz'><option value="">Yıl</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option> </select>	
				</div>			
			</div>
			<div class="control-group">
				<label class="control-label"  for="sex">Cinsiyet </label>
				<div class="controls">
					<label class="radio inline"><input type="radio" value="0" name='sex' checked> Erkek</label>
					<label class="radio inline"><input type="radio" value="1"  name='sex'> Kadın</label>
				</div>			
			</div>
			<div class="control-group">
				<label class="control-label" for="tcnum">T.C & Vergi No</label>
				<div class="controls">
					<input type="number" class='reg-input' name="tcnum" id="tcnum" required=""  data-validation-required-message='Lütfen T.C & vergi No giriniz' minlength="11" data-validation-minlength-message="Lütfen en az 11 karakter giriniz."  maxlength="11" data-validation-number-message="Lütfen geçerli bir numara giriniz.">
				</div>			
			</div>
			<div class="control-group">
				<label class="control-label" for="vergi">Vergi Dairesi</label>
				<div class="controls">
					<input type="text" class='reg-input' name="vergi" id="vergi">
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
						<option></option>
					</select>
				</div>			
			</div>
			<div class="control-group">
				<label class="control-label">Semt</label>
				<div class="controls">
					<select  class='reg-input' disabled="">
						<option></option>
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
					<input type="text" class='reg-input tel' name="mobile" id="mobile" required="" data-validation-required-message='Lütfen cep telefonu giriniz' maxlength="11" data-validation-number-message="Lütfen geçerli bir numara giriniz.">
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
					<input type="text" class='reg-input'  name="captcha" id="captcha" required="" data-validation-required-message='Lütfen güvenlik kodu giriniz'>
				</div>			
			</div>
			<div class="control-group last">
				<label class="control-label" for="">Üyelik Sözleşmesi</label>
				<div class="controls">
					<input type="checkbox" class="checkbox" name="policey" id='policey'data-val="true" required="" data-validation-required-message='Lütfen güvenlik kodu giriniz'>
						Otopazari.com.tr'ya üye olmak için lütfen<br> 
						<span>üyelik sözleşmesini</span> okuyup onaylayınız
				</div>			
			</div>
			<div class="control-group extra">
				<button class="btn submit-btn pull-right" type="submit" >Kaydet</button>
			</div>
		</form>
	</div>
</div>
<?php include('../components/page_tail.php') ?>
