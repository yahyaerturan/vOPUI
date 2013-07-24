<?php include('../components/page_head.php') ?>
<?php include('../components/account_navigation.php') ?>
<div class="row-fluid">
  <div class="account-message">
    <div class="span3">
      <ul class="nav">
        <li class="active">
          <a href="">Gelen Mesajlar (5)</a>
        </li>
        <li>
           <a href="">Gonder Mesajlar (5)</a>
        </li>
        <li>
           <a href="">Oku Mesajlar (5)</a>
        </li>
      </ul>
    </div>
    <div class="span9 inbox-mess send-mess">
      <div class="row">
        <div class="span3 first"><span>Kime : <a href="">Ümit Karabas</a></span><br> 24 Ara 2012, 11:30</div>
        <div class="span5 first">
          <p>Thank to you for change my live, Thank to you for change my live, Thank to you for change my live</p>
        </div>
        <div class="span4 action-btn-inbox">
          <div class="submit-btn pull-left">
            <a href="#"class="devam-btn-blue">Cevapla</a>
          </div>  
          <div class="submit-btn pull-left">
            <a href="#"class="devam-btn-blue">Sil</a>
          </div>
          <div class="submit-btn pull-left">
            <a href="#"class="devam-btn-blue">Oku</a>
          </div>  
        </div>
      </div>

      <div class="row send-mess">
        <div class="span12"><h4>Mesajınız</h4></div>
        <div class="span9">
          <textarea rows="5"></textarea>
        </div>
        <div class="span8 action-btn-inbox ">
          <div class="submit-btn pull-right">
            <a href="#"class="btn-yal">Gönder</a>
          </div>  
        </div>
      </div>

    </div>
  </div>
</div>
<?php include('../components/page_tail.php') ?>