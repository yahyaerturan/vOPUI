<?php include('../components/page_head.php') ?>
<?php $nav_title = "Relkam ödemesi" ?>
<?php include('../components/account_chechout_nav.php') ?>
<div class="row-fluid chechout">
  <div class="row"><div class="span3 block-head"><h4>Seçtiğiniz Reklam Paletleri</h4></div></div>
  <div class="row">
    <div class="span12 full-width">
      <div class="row">
        <div class="span12">
          <div class="row with-hr">
            <div class="span5"><h5 class='h5'>Anasayfa Virtrini</h5></div>
            <div class="span1 pull-right total-txt"><span class="total">50 TL</span></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="row">
            <div class="span5"></div>
            <div class="span4 with-hr pull-right">
              <div class="row-fluid">
                <div class="span7 total-txt"><div class="total-txt-l">Ara Toplam:</div></div>
                <div class="span5 total-txt"><span class="total pull-right">50 TL</span></div>
              </div>
              <div class="row-fluid">
                <div class="span7 total-txt"><div class="total-txt-l">+KDV:</div></div>
                <div class="span5 total-txt"><span class="total pull-right">9.00 TL</span></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="span5"></div>
            <div class="span4 pull-right">
              <div class="row-fluid">
                <div class="span7 total-txt price"><div class="total-txt-l">Toplam:</div></div>
                <div class="span5 total-txt"><span class="price pull-right">59.00 TL</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row"><div class="span3 block-head"><h4>Ödeme Şekli</h4></div></div>
  <div class="row">
    <div class="span8 blue-border">
      <div class="row">
        <div class="span7 ">
          <div class="bill-txt">Lütfen bir Ödeme şekli seçin </div>
          <div class="bill-txt">
            <label class="radio buy-rad pull-left"><input type="radio" value="0" name="checkout" class='pay'>Kerdi Kartı </label>
            <label class="radio buy-rad pull-left"><input type="radio" value="1" name="checkout" class='pay'>Havale </label>
            <label class="radio buy-rad pull-left"><input type="radio" value="2" name="checkout" class='pay'>Mobil Ödeme</label>
          </div>
        </div>
        <div class="span5 bill-txt">Seçtiğiniz ödeme tipine ait bilgileri girmek için 'onayla' butonuna tıklayarak ödeme seyfasınz gidiniz.</div>
      </div>
    </div>
  </div>

  <div class="row-fluid credit-card">
    <div class="span12 title">
      <ul class="breadcrumb checkout-head uppercase">
        <li>Reklam ödemesi Kredi kartı bölümü</li>
      </ul>
    </div>
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
                  <input type="submit" class="devam-btn-blue" value='Gücelle'>
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
              <div class="span6 pay-txt">
                <div class="row-fluid">
                  <h5><span>1</span> Lütfen bankanızı seçiniz:</h5>
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
                  <h5><span>2</span> Lütfen taksit sayısı seçiniz:</h5>
                  <div class="control-group">
                    <div class="controls">
                      <label class="radio inline"><input type="radio" value="0" name='taksit' checked> Peşin: 59.00 TL</label>
                    </div>      
                  </div>
                </div>
              </div>
              <div class="span6 pay-txt">
                <div class="row-fluid">
                  <span>3</span>
                  <div class="control-group">
                    <label for="name" class="control-label">Kart üzerindeki isim:</label>
                    <div class="controls">
                      <input type="text" data-validation-required-message="Lütfen kart üzerindeki isim giriniz" required="" id="name" name="name" class="reg-input">
                    </div> 
                  </div>
                  <div class="control-group">
                    <label for="kart" class="control-label">Kart numarası:</label>
                    <div class="controls">
                      <input type="text" data-validation-required-message="Lütfen kart numarası giriniz" required="" id="kart" name="kart" class="reg-input input-mini">
                      <input type="text" data-validation-required-message="Lütfen kart numarası giriniz" required="" id="kart" name="kart" class="reg-input input-mini">
                      <input type="text" data-validation-required-message="Lütfen kart numarası giriniz" required="" id="kart" name="kart" class="reg-input input-mini">
                      <input type="text" data-validation-required-message="Lütfen kart numarası giriniz" required="" id="kart" name="kart" class="reg-input input-mini">
                    </div> 
                  </div>
                  <div class="control-group">
                    <label for="kodu" class="control-label">Güvenlik kodu:</label>
                    <div class="controls">
                      <input type="text"data-validation-required-message="Lütfen güvenlik kodu giriniz" required="" id="kodu" name="kodu" class="reg-input">
                    </div> 
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="Tipi">Güvenlik Tipi:</label>
                      <div class="controls">
                        <select class='reg-input' name="Tipi" id="Tipi">
                          <option></option>
                        </select>
                    </div>      
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="tarih">Son kullanma tarihi:</label>
                      <div class="controls">
                        <select class='reg-input input-mid' name="tarih" id="tarih">
                          <option></option>
                        </select>
                        <select class='reg-input input-mid' name="tarih" id="tarih">
                          <option></option>
                        </select>
                    </div>      
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span12">
                <div class="submit-btn-pay pull-right">
                  <input type="submit" class="devam-btn-blue" value="Devam Et">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row-fluid transfer">
    <div class="span12 title">
      <ul class="breadcrumb checkout-head uppercase">
        <li>
          Reklam ödemesi havale bölümü
        </li>
      </ul>
    </div>
    <div class="row-fluid chechout">
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
                      <input type="submit" class="devam-btn-blue" value='Gücelle'>
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
  </div>

  <div class="row-fluid mobile-pay">
    <div class="span12 title">
      <ul class="breadcrumb checkout-head uppercase">
        <li>Reklam ödemesi mobile bölümü</li>
      </ul>
    </div>
  </div>

</div>
<?php include('../components/page_tail.php') ?>
