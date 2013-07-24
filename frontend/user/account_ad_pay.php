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
            <label class="radio buy-rad pull-left"><input type="radio" value="1" name="checkout" checked>Kerdi Kartı </label>
            <label class="radio buy-rad pull-left"><input type="radio" value="1" name="checkout">Havale </label>
            <label class="radio buy-rad pull-left"><input type="radio" value="1" name="checkout">Mobil Ödeme</label>
          </div>
        </div>
        <div class="span5 bill-txt">Seçtiğiniz ödeme tipine ait bilgileri girmek için 'onayla' butonuna tıklayarak ödeme seyfasınz gidiniz.</div>
      </div>
    </div>
    <div class="span4 pull-right">
      <div class="submit-btn  pull-right">
        <a href="#" class="devam-btn-blue">Devam Et</a>
      </div>
    </div>
  </div>
</div>
<?php include('../components/page_tail.php') ?>