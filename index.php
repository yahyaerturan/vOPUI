<?php
  $base_url = '';
  if($_SERVER['HTTP_HOST'] == 'localhost') {
    $base_url = 'http://localhost/vOPUI/';
  } elseif ($_SERVER['HTTP_HOST'] == 'http://vopui.vayesweb.com') {
    $base_url = 'http://vopui.vayesweb.com';
  } else {
    $base_url = 'http://www.vopui.dev';
  }
?>
<html>
<head>
  <meta name="robots" content="noindex, nofollow">
</head>
<body>
  <a href="<?=$base_url;?>frontend/home.php">Home page</a> <br/>

  <a href="<?=$base_url;?>frontend/ad_show.php">ad show</a> <br/>
  <a href="<?=$base_url;?>frontend/ad_show_two.php">ad show 2</a> <br/>
  <hr>

  <a href="<?=$base_url;?>frontend/user/co_register.php">Company Register</a> <br/>
  <a href="<?=$base_url;?>frontend/user/register.php">Register</a><br/><br/>

  <br/><a href="<?=$base_url;?>frontend/user/login.php?page=login">Login</a> <br/>
  <a href="<?=$base_url;?>frontend/user/login.php?page=forget">Forget</a> <br/><br/>


  <a href="<?=$base_url;?>frontend/user/account.php">Account</a><br/>
  <a href="<?=$base_url;?>frontend/user/account_activity.php">Account Activity</a><br/><br/>

  <a href="<?=$base_url;?>frontend/user/account_sms.php">Account SMS</a><br/>
  <a href="<?=$base_url;?>frontend/user/account_sms_buy.php">Account SMS Buy</a><br/>

  <a href="<?=$base_url;?>frontend/user/account_contract_date.php">Account Contract Date</a><br/><br/>
  <a href="<?=$base_url;?>frontend/user/account_fav_search.php">Account Fav Search </a><br/>

  <a href="<?=$base_url;?>frontend/user/account_fav_cat.php">Account Fav Category </a><br/>
  <a href="<?=$base_url;?>frontend/user/account_fav_seller.php">Account Fav Seller </a><br/>
  <a href="<?=$base_url;?>frontend/user/account_active_ad.php">Account Active Ad </a><br/>
  <a href="<?=$base_url;?>frontend/user/account_select_cat.php">Account Select Category</a><br/><br/>


  <a href="<?=$base_url;?>frontend/user/account_messages.php">Account Inbox messages </a><br/>
  <a href="<?=$base_url;?>frontend/user/account_sent_messages.php">Account sent messages </a><br/>
  <a href="<?=$base_url;?>frontend/user/account_send_messages.php">Account send messages </a><br/><br/>

  <a href="<?=$base_url;?>frontend/user/account_add_gallery.php">Account add new gallery </a><br/>
  <a href="<?=$base_url;?>frontend/user/account_add_gallery_step2.php">Account add new gallery </a><br/>
  <a href="<?=$base_url;?>frontend/user/account_gallery_checkout.php">Account gallery checkout</a><br/><br/>


  <a href="<?=$base_url;?>frontend/user/account_fav_ad.php">Account Fav Ad. </a><br/>
  <a href="<?=$base_url;?>frontend/user/account_add_ad.php">Account add new  Ad.</a><br/>
  <a href="<?=$base_url;?>frontend/user/account_added_ad.php">Account added Ad.</a><br/>
  <a href="<?=$base_url;?>frontend/user/account_select_ad_package.php">Account Select Ad Package</a><br/>

  <a href="<?=$base_url;?>frontend/user/account_ad_checkout.php">Account finish add Ad. </a><br/>
  <br/>
  <a href="<?=$base_url;?>frontend/user/account_ad_pay.php">Account Ad. pay</a><br/>
  <a href="<?=$base_url;?>frontend/user/account_transfer_pay.php">Account transfer pay</a><br/>
  <a href="<?=$base_url;?>frontend/user/account_transfer_checkout.php">Account transfer checkout</a><br/>

  <a href="<?=$base_url;?>frontend/user/account_credit_checkout.php">Account credit card checkout</a><br/><br/>

  <a href="<?=$base_url;?>frontend/user/account_mobile_pay.php">Account mobile pay</a><br/>
  <a href="<?=$base_url;?>frontend/user/account_change_mobnum.php">Account change mobile number</a><br/>

</body>
</html>

