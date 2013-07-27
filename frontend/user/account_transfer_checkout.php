<?php include('../components/page_head.php'); ?>
<?php $nav_title = "Reklam ödemesi havale bölümü"; ?>
<?php include('../components/account_chechout_nav.php'); ?>
<div class="row-fluid chechout reg">
  <div class="row"><div class="span3 block-head"><h4>Seçtiğiniz Reklam Paletleri</h4></div></div>
    <div class="row">
      <div class="span12 full-width bill-list">
        <form class="form-horizontal reg-form pay-form" novalidate="">
            <div class="row">
              <div class="span6">
                <div class="row-fluid">
                  <div class="control-group">
                    <label for="gallery" class="control-label">Galeri Adı</label>
                    <div class="controls">
                      <input type="text" data-validation-required-message="Lütfen galeri adı giriniz" required="" id="gallery" name="gallery" class="reg-input">
                    </div>      
                  </div>
                  <div class="control-group">
                    <label for="gallery-url" class="control-label">Galeri URL</label>
                    <div class="controls">
                      <input type="text" data-validation-required-message="Lütfen galeri URL giriniz" placeholder="otopazari.com.tr    Örnekte olduğu gibi" required="" id="gallery-url" name="gallery-url" class="reg-input">
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="vergi-dairesi" class="control-label">Vergi Dairesi</label>
                    <div class="controls">
                      <input type="text" data-validation-required-message="Lütfen vergi dairesi giriniz" required="" id="vergi-dairesi" name="vergi-dairesi" class="reg-input" aria-invalid="false">
                    </div> 
                  </div>
                  <div class="control-group">
                    <label for="vergi-numarasi" class="control-label">Vergi Numarası</label>
                    <div class="controls">
                      <input type="text" data-validation-minlength-message="Lütfen en az 6 karakter giriniz." data-validation-required-message="Lütfen vergi numarası giriniz" minlength="6" required="" id="vergi-numarasi" name="vergi-numarasi" class="reg-input">
                    </div> 
                  </div>
                  <div class="control-group">
                    <label for="name" class="control-label">Adı</label>
                    <div class="controls">
                      <input type="text" data-validation-minlength-message="Lütfen en az 6 karakter giriniz." minlength="6" data-validation-required-message="Lütfen adı giriniz" required="" id="name" name="name" class="reg-input">
                    </div> 
                  </div>
                  <div class="control-group">
                    <label for="last" class="control-label">Soyadı</label>
                    <div class="controls">
                      <input type="text" data-validation-minlength-message="Lütfen en az 6 karakter giriniz." minlength="6" data-validation-required-message="Lütfen soyadı giriniz" required="" id="last" name="last" class="reg-input">
                    </div> 
                  </div>
                </div>
              </div>
              <div class="span6 full-width bill-list">
                <div class="row-fluid">
                  <div class="control-group">
                    <label for="il" class="control-label">Şehir</label>
                    <div class="controls">
                      <select id="il" name="il" class="reg-input">
                        <option>İstanbul</option>
                      </select>
                    </div>      
                  </div>
                  <div class="control-group">
                    <label for="ilce" class="control-label">İlçe</label>
                    <div class="controls">
                      <select id="ilce" name="ilce" class="reg-input" aria-invalid="false">
                        <option>Eyüp</option>
                      </select>
                    </div>      
                  </div>
                  <div class="control-group">
                    <label class="control-label" for='Semt'>Semt</label>
                    <div class="controls">
                      <select class="reg-input" name='Semt' id='Semt'>
                        <option>Eyüp Mah.</option>
                      </select>
                    </div>      
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="adres">Adres</label>
                    <div class="controls">
                      <textarea rows="2" class="reg-textarea" name="adres" id="adres"  required="" data-validation-required-message='Lütfen adres giriniz'></textarea>
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
                </div>            
              </div>
            </div>
            <div class="row">
              <div class="span12">
                <div class="submit-btn-pay pull-right">
                  <input type="submit" class="devam-btn-blue" value='Gücelle'></a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    <div class="row"><div class="span3 block-head"><h4>Kredi Kartı Ödeme Bilgileri</h4></div></div>
    <div class="row">
      <div class="span12 full-width bill-list">
        <form class="form-horizontal reg-form pay-form" novalidate="">
          <div class="row">
            <div class="span12 pay-txt">
              <div class="row-fluid">
                <h5>Lütfen bankanızı seçiniz:</h5>
                 <div class="control-group">
                  <label class="control-label" for="bank">Banka Adı</label>
                    <div class="controls">
                      <select class='reg-input' name="bank" id="bank">
                        <option>Akbank</option>
                        <option>Akbank</option>
                        <option>Akbank</option>
                      </select>
                  </div>      
                </div>
                <p>
                  Havale ile <strong>29 TL</strong> tutarındaki ödemeyi aşağıdaki seçmiş olduğunuz hesap numarasına yapınız Havakenizi yaptıktan sonra talebinize
                  en kısa sürede yanıt verilecektir. işleminizin hızlı bir şekilde tamamlanması için dekontunuzu <strong>info@otopazari.com.tr</strong> adresine gönderiniz
                  ya da 0212 654 21 21 fakslayınız. Sorunlarınız için 0212 659 78 60 no'lu telfonu arayınız  
                </p>
            </div>
          </div>
          <div class="row">
            <div class="span12">
              <div class="submit-btn-pay pull-right">
                <input type="submit" class="devam-btn-blue" value="Devam Et">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('../components/page_tail.php') ?>
