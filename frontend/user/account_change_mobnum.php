<?php include('../components/page_head.php') ?>
<?php $nav_title = "Relkam mobile ödemesi" ?>
<?php include('../components/account_chechout_nav.php') ?>
<div class="row-fluid chechout">
  <div class="row"><div class="span11"><h4>Reklam verebilmek için cep telefonunuza gelen mesaja onay vermeniz gerekmektedir</h4></div></div>
  <div class="row gray-border mob-pay">
    <div class="span8">
      <form class="form-horizontal" novalidate="">
        <p>Cep telefonu alanına numaranızı girin, göndere basın, cebinize onay kodunuzu gönderelim</p>
        <div class="txt-code change-code">
          <h4>Cep telefonunuz</h4>
          <p>Üyeliğinize ait cep telefunu numaranız</p>
          <div class='pull-left'>
            <div class="control-group">
              <div class="controls  new-num">
                <select class='input-mid' name="mobile" id="mobile">
                  <option>Seçiniz</option>
                  <option>+90</option>
                  <option>+90</option>
                  <option>+90</option>
                </select>
                <input type="text" class='reg-input tel input-mid' name="mobile" id="mobile" required="" data-validation-required-message='Lütfen cep telefonu giriniz'>
                <input type="text" class='reg-input tel' name="mobile" id="mobile" required="" data-validation-required-message='Lütfen cep telefonu giriniz'>
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