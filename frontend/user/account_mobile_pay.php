<?php include('../components/page_head.php') ?>
<?php $nav_title = "Relkam mobile ödemesi" ?>
<?php include('../components/account_chechout_nav.php') ?>
<div class="row-fluid chechout">
  <div class="row"><div class="span11"><h4>Reklam verebilmek için cep telefonunuza gelen mesaja onay vermeniz gerekmektedir</h4></div></div>
  <div class="row gray-border mob-pay">
    <div class="span8">
      <h4>Onay Kodunuzu cep telefonunuza gönderdik</h4>
      <p><span class='phone-num'>0532 000 00 00</span> <a href="<?=$base_url;?>frontend/user/account_change_mobnum.php">(değiştir)</a> numaralı cep telefonunuza cebinden onaylı </p>
      <p>kodunuzu gönderdik. lütfen cep telefonunuza gelen kodu aşağıdaki kutuya girin ve 'Onyala' butonuna basın.</p>
      <div class="txt-code bold">
        <form class="form-horizontal" novalidate="">
          <div class='pull-left'>
            <div class="control-group">
              <label class="control-label bold" for="cart">Kerdi Kartı : </label>
              <div class="controls">
                <input type="text" class='reg-input tel' name="cart" id="cart" required="" data-validation-required-message='Lütfen kerdi kartı giriniz'>
              </div>
            </div>
          </div>
          <div class="submit-btn pull-left">
            <input type="submit" class="btn-yal" value="Gönder">
          </div>
        </form>
      </div>

    </div>
    <div class="span3 pull-right">
      <img src="<?=$base_url;?>assets/frontend/img/mobile.png">
    </div>
  </div>
</div>
<?php include('../components/page_tail.php') ?>