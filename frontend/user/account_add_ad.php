<?php include('../components/page_head.php') ?>
<div class="select-cat">
  <div class="row-fluid">
    <!-- Select Category -->
    <div class="span3">
      <select multiple="multiple" name="selectmultiple" id="selectmultiple">
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
      </select>
    </div>
    <div class="span3">
      <select multiple="multiple" name="selectmultiple" id="selectmultiple">
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
      </select>
    </div>
    <div class="span2">
      <select multiple="multiple" name="selectmultiple" id="selectmultiple">
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
      </select>
    </div>
    <div class="span2">
      <select multiple="multiple" name="selectmultiple" id="selectmultiple">
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
        <option>Otomobile -></option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="span12">
      <div class="submit-btn pull-right">
        <a href="#"class="devam-btn-blue">Devam</a>
      </div>
    </div>
  </div>
</div>
<form class="form-horizontal add-ad" novalidate="">

  <div class="row"><div class="span12 block-head"><h4>Genel Bİlgİler</h4></div></div>
  <div class="row ">
    <!-- General Information -->
    <div class="span1"></div>
    <div class="span11 ">
      <div class="row-fluid">
        <div class="span8">
          <div class="control-group">
            <label class="control-label">Kategori :</label>
            <div class="select-cat ad-tree">
              <ul class="breadcrumb account-tree">
                <li><a href="#">Otomobile</a> <span class="divider">></span></li>
                <li><a href="#">BMC</a> <span class="divider">></span></li>
                <li class="active">220-10 </li>
              </ul>
            </div> 
          </div>
        </div>
        <div class="span4">
          <div class="submit-btn pull-right">
            <a class="btn-yal" href="#">Kategori Değiştir</a>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"  for="adTitle" >İlan Başlığı :</label>
        <div class="controls">
          <input type="text" class='full-input' name="adTitle" id="adTitle" required="" data-validation-required-message='Lütfen ilan başlığı giriniz'>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="adDetails">İlan açıklaması :</label>
        <div class="controls">
          <textarea id="adDetails"  name="adDetails" class="tiny" cols="30" rows="5" data-validation-required-message="Lütfen ilan açıklaması giriniz" required=""></textarea>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="fiyat">Fiyat :</label>
        <div class="controls">
          <input type="text" name="fiyat" id="fiyat" required="" data-validation-required-message='Lütfen fiyat giriniz'>
          <select class='input-mid' name="fiyat" id="money-code">
            <option>TL</option>
            <option>USD</option>
            <option>URO</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="year">Yıl :</label>
        <div class="controls">
          <select name="year" id="year" required="" data-validation-required-message='Lütfen yıl giriniz'>
            <option></option>
            <option>1970</option>
            <option>1975</option>
            <option>1980</option>
            <option>1985</option>
            <option>1990</option>
            <option>2000</option>
            <option>2005</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="km">KM :</label>
        <div class="controls">
          <input type="text"name="km" id="km" required="" data-validation-required-message='Lütfen kaç km giriniz'>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="color">Renk :</label>
        <div class="controls">
          <select name="color" id="color" required="" data-validation-required-message='Lütfen renk giriniz'>
            <option></option>
            <option>kırmızı</option>
            <option>beyaz</option>
            <option>siyah</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="mSize">Motor Hacmi :</label>
        <div class="controls">
          <select name="mSize" id="mSize" required="" data-validation-required-message='Lütfen motor hacmi giriniz'>
            <option></option>
            <option>1.4</option>
            <option>1.5</option>
            <option>1.6</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="mPower">Motor Gücü :</label>
        <div class="controls">
          <select name="mPower" id="mPower" required="" data-validation-required-message='Lütfen motor gücü giriniz'>
            <option></option>
            <option>50</option>
            <option>75</option>
            <option>100</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="vites">Vites Tipi :</label>
        <div class="controls">
          <select name="vites" id="vites" required="" data-validation-required-message='Lütfen vites tipi giriniz'>
            <option></option>
            <option>otomatik</option>
            <option>normal</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="mType">Çekiş :</label>
        <div class="controls">
          <select name="mType" id="mType" required="" data-validation-required-message='Lütfen çekiş giriniz'>
            <option></option>
            <option>FF</option>
            <option>FR</option>
            <option>MF </option>
            <option>FMR </option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="oilType">Yakıt :</label>
        <div class="controls">
          <select name="oilType" id="oilType" required="" data-validation-required-message='Lütfen yakıt giriniz'>
            <option></option>
            <option>Gaz</option>
            <option>Benzin</option>
            <option>Dizel</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="style">Kasa Tipi :</label>
        <div class="controls">
          <select name="style" id="style" required="" data-validation-required-message='Lütfen kasa tipi giriniz'>
            <option></option>
            <option>Sedan</option>
            <option>Hatchback</option>
            <option>Station Wagon</option>
            <option>Coupe</option>
            <option>Convertible</option>
            <option>Roadster</option>
            <option>Minivan </option>
            <option>Minivan </option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="plaka">Plaka / Uyruk :</label>
        <div class="controls">
          <select name="plaka" id="plaka" required="" data-validation-required-message='Lütfen plaka / uyruk giriniz'>
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="garanti">Garanti :</label>
        <div class="controls">
          <select name="garanti" id="garanti" required="" data-validation-required-message='Lütfen garanti giriniz'>
            <option></option>
            <option>1 Yıl</option>
            <option>2 Yıl</option>
            <option>3 Yıl</option>
            <option>Hayır</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="takas">Takas :</label>
        <div class="controls">
          <select name="takas" id="takas" required="" data-validation-required-message='Lütfen takas giriniz'>
            <option></option>
            <option>Evet</option>
            <option>Hayır</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="durumu">Durumu :</label>
        <div class="controls">
          <select name="durumu" id="durumu" required="" data-validation-required-message='Lütfen durumu giriniz'>
            <option></option>
            <option>sıfır</option>
            <option>İkinci</option>
          </select>
        </div>      
      </div>
      <div class="control-group">
        <label class="control-label" for="fimden">Kimden :</label>
        <div class="controls">
          <select name="fimden" id="fimden" required="" data-validation-required-message='Lütfen fimden giriniz'>
            <option></option>
            <option>sahibinden</option>
            <option>sahibinden</option>
          </select>
        </div>      
      </div>
    </div>
  </div>
  <!-- Car details -->
  <div class="row"><div class="span12 block-head"><h4>Güvenlik</h4></div></div>
  <div class="row-fluid info-check">
    <div class="span3 first">
      <div>
        <input type="checkbox" class="checkbox" name="ABS" id='ABS'>
        <label class="control-label" for="ABS">ABS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="BAS" id='BAS'>
        <label class="control-label" for="BAS">BAS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="EBD" id='EBD'>
        <label class="control-label" for="EBD">EBD</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Diz" id='Diz'>
        <label class="control-label" for="Diz">Hava Yastığı (Diz)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Lastik" id='Lastik'>
        <label class="control-label" for="Lastik">Lastik Arıza Göstergesi</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yokus" id='Yokus'>
        <label class="control-label" for="Yokus">Yokuş Kalkış Desteği</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="ASR " id='ASR '>
        <label class="control-label" for="ASR ">ASR </label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Distronic" id='Distronic'>
        <label class="control-label" for="Distronic">Distronic</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Gece" id='Gece'>
        <label class="control-label" for="Gece">Gece Görüş</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Perde" id='Perde'>
        <label class="control-label" for="Perde">Hava Yastığı (Perde)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Kilit" id='Kilit'>
        <label class="control-label" for="Kilit">Merkezi Kilit</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Zırhlı" id='Zırhlı'>
        <label class="control-label" for="Zırhlı">Zırhlı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="Airmatic" id='Airmatic'>
        <label class="control-label" for="Airmatic">Airmatic</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="ESP" id='ESP'>
        <label class="control-label" for="ESP">ESP</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Surucu" id='Surucu'>
        <label class="control-label" for="Surucu">Hava Yatığı (Sürücü)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Tavan" id='Tavan'>
        <label class="control-label" for="Tavan">Hava Yatığı (Tavan)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Seritten" id='Seritten'>
        <label class="control-label" for="Seritten">Şeritten Ayrılma İkazı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="AAS" id='AAS'>
        <label class="control-label" for="AAS">AAS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="ESP2" id='ESP2'>
        <label class="control-label" for="ESP2">ESP</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yolcu" id='Yolcu'>
        <label class="control-label" for="Yolcu">Hava Yatığı (Yolcu)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Isofix" id='Isofix'>
        <label class="control-label" for="Isofix">Isofix</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="serit" id='serit'>
        <label class="control-label" for="serit">Şerit Değiştirme Yardımcısı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="Alarm" id='Alarm'>
        <label class="control-label" for="Alarm">Alarm</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="EDL" id='EDL'>
        <label class="control-label" for="EDL">EDL</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yan" id='Yan'>
        <label class="control-label" for="Yan">Hava Yatığı (Yan)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Immobilizer" id='Immobilizer'>
        <label class="control-label" for="Immobilizer">Immobilizer</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="VSA" id='VSA'>
        <label class="control-label" for="VSA">VSA</label>
      </div>
    </div>
  </div>
  <div class="row"><div class="span12 block-head"><h4>İÇ DOMANIM</h4></div></div>
  <div class="row-fluid info-check">
    <div class="span3 first">
      <div>
        <input type="checkbox" class="checkbox" name="ABS" id='ABS'>
        <label class="control-label" for="ABS">ABS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="BAS" id='BAS'>
        <label class="control-label" for="BAS">BAS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="EBD" id='EBD'>
        <label class="control-label" for="EBD">EBD</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Diz" id='Diz'>
        <label class="control-label" for="Diz">Hava Yastığı (Diz)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Lastik" id='Lastik'>
        <label class="control-label" for="Lastik">Lastik Arıza Göstergesi</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yokus" id='Yokus'>
        <label class="control-label" for="Yokus">Yokuş Kalkış Desteği</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="ASR " id='ASR '>
        <label class="control-label" for="ASR ">ASR </label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Distronic" id='Distronic'>
        <label class="control-label" for="Distronic">Distronic</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Gece" id='Gece'>
        <label class="control-label" for="Gece">Gece Görüş</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Perde" id='Perde'>
        <label class="control-label" for="Perde">Hava Yastığı (Perde)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Kilit" id='Kilit'>
        <label class="control-label" for="Kilit">Merkezi Kilit</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Zırhlı" id='Zırhlı'>
        <label class="control-label" for="Zırhlı">Zırhlı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="Airmatic" id='Airmatic'>
        <label class="control-label" for="Airmatic">Airmatic</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="ESP" id='ESP'>
        <label class="control-label" for="ESP">ESP</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Surucu" id='Surucu'>
        <label class="control-label" for="Surucu">Hava Yatığı (Sürücü)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Tavan" id='Tavan'>
        <label class="control-label" for="Tavan">Hava Yatığı (Tavan)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Seritten" id='Seritten'>
        <label class="control-label" for="Seritten">Şeritten Ayrılma İkazı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="AAS" id='AAS'>
        <label class="control-label" for="AAS">AAS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="ESP2" id='ESP2'>
        <label class="control-label" for="ESP2">ESP</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yolcu" id='Yolcu'>
        <label class="control-label" for="Yolcu">Hava Yatığı (Yolcu)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Isofix" id='Isofix'>
        <label class="control-label" for="Isofix">Isofix</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="serit" id='serit'>
        <label class="control-label" for="serit">Şerit Değiştirme Yardımcısı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="Alarm" id='Alarm'>
        <label class="control-label" for="Alarm">Alarm</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="EDL" id='EDL'>
        <label class="control-label" for="EDL">EDL</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yan" id='Yan'>
        <label class="control-label" for="Yan">Hava Yatığı (Yan)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Immobilizer" id='Immobilizer'>
        <label class="control-label" for="Immobilizer">Immobilizer</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="VSA" id='VSA'>
        <label class="control-label" for="VSA">VSA</label>
      </div>
    </div>
  </div>

  <div class="row"><div class="span12 block-head"><h4>DİŞ DOMANIM</h4></div></div>
  <div class="row-fluid info-check">
    <div class="span3 first">
      <div>
        <input type="checkbox" class="checkbox" name="ABS" id='ABS'>
        <label class="control-label" for="ABS">ABS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="BAS" id='BAS'>
        <label class="control-label" for="BAS">BAS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="EBD" id='EBD'>
        <label class="control-label" for="EBD">EBD</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Diz" id='Diz'>
        <label class="control-label" for="Diz">Hava Yastığı (Diz)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Lastik" id='Lastik'>
        <label class="control-label" for="Lastik">Lastik Arıza Göstergesi</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yokus" id='Yokus'>
        <label class="control-label" for="Yokus">Yokuş Kalkış Desteği</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="ASR " id='ASR '>
        <label class="control-label" for="ASR ">ASR </label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Distronic" id='Distronic'>
        <label class="control-label" for="Distronic">Distronic</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Gece" id='Gece'>
        <label class="control-label" for="Gece">Gece Görüş</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Perde" id='Perde'>
        <label class="control-label" for="Perde">Hava Yastığı (Perde)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Kilit" id='Kilit'>
        <label class="control-label" for="Kilit">Merkezi Kilit</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Zırhlı" id='Zırhlı'>
        <label class="control-label" for="Zırhlı">Zırhlı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="Airmatic" id='Airmatic'>
        <label class="control-label" for="Airmatic">Airmatic</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="ESP" id='ESP'>
        <label class="control-label" for="ESP">ESP</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Surucu" id='Surucu'>
        <label class="control-label" for="Surucu">Hava Yatığı (Sürücü)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Tavan" id='Tavan'>
        <label class="control-label" for="Tavan">Hava Yatığı (Tavan)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Seritten" id='Seritten'>
        <label class="control-label" for="Seritten">Şeritten Ayrılma İkazı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="AAS" id='AAS'>
        <label class="control-label" for="AAS">AAS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="ESP2" id='ESP2'>
        <label class="control-label" for="ESP2">ESP</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yolcu" id='Yolcu'>
        <label class="control-label" for="Yolcu">Hava Yatığı (Yolcu)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Isofix" id='Isofix'>
        <label class="control-label" for="Isofix">Isofix</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="serit" id='serit'>
        <label class="control-label" for="serit">Şerit Değiştirme Yardımcısı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="Alarm" id='Alarm'>
        <label class="control-label" for="Alarm">Alarm</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="EDL" id='EDL'>
        <label class="control-label" for="EDL">EDL</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yan" id='Yan'>
        <label class="control-label" for="Yan">Hava Yatığı (Yan)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Immobilizer" id='Immobilizer'>
        <label class="control-label" for="Immobilizer">Immobilizer</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="VSA" id='VSA'>
        <label class="control-label" for="VSA">VSA</label>
      </div>
    </div>
  </div>
  <div class="row"><div class="span12 block-head"><h4>Multimedya</h4></div></div>
  <div class="row-fluid info-check">
    <div class="span3 first">
      <div>
        <input type="checkbox" class="checkbox" name="ABS" id='ABS'>
        <label class="control-label" for="ABS">ABS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="BAS" id='BAS'>
        <label class="control-label" for="BAS">BAS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="EBD" id='EBD'>
        <label class="control-label" for="EBD">EBD</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Diz" id='Diz'>
        <label class="control-label" for="Diz">Hava Yastığı (Diz)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Lastik" id='Lastik'>
        <label class="control-label" for="Lastik">Lastik Arıza Göstergesi</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yokus" id='Yokus'>
        <label class="control-label" for="Yokus">Yokuş Kalkış Desteği</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="ASR " id='ASR '>
        <label class="control-label" for="ASR ">ASR </label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Distronic" id='Distronic'>
        <label class="control-label" for="Distronic">Distronic</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Gece" id='Gece'>
        <label class="control-label" for="Gece">Gece Görüş</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Perde" id='Perde'>
        <label class="control-label" for="Perde">Hava Yastığı (Perde)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Kilit" id='Kilit'>
        <label class="control-label" for="Kilit">Merkezi Kilit</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Zırhlı" id='Zırhlı'>
        <label class="control-label" for="Zırhlı">Zırhlı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="Airmatic" id='Airmatic'>
        <label class="control-label" for="Airmatic">Airmatic</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="ESP" id='ESP'>
        <label class="control-label" for="ESP">ESP</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Surucu" id='Surucu'>
        <label class="control-label" for="Surucu">Hava Yatığı (Sürücü)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Tavan" id='Tavan'>
        <label class="control-label" for="Tavan">Hava Yatığı (Tavan)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Seritten" id='Seritten'>
        <label class="control-label" for="Seritten">Şeritten Ayrılma İkazı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="AAS" id='AAS'>
        <label class="control-label" for="AAS">AAS</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="ESP2" id='ESP2'>
        <label class="control-label" for="ESP2">ESP</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yolcu" id='Yolcu'>
        <label class="control-label" for="Yolcu">Hava Yatığı (Yolcu)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Isofix" id='Isofix'>
        <label class="control-label" for="Isofix">Isofix</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="serit" id='serit'>
        <label class="control-label" for="serit">Şerit Değiştirme Yardımcısı</label>
      </div>
    </div>
    <div class="span3">
      <div>
        <input type="checkbox" class="checkbox" name="Alarm" id='Alarm'>
        <label class="control-label" for="Alarm">Alarm</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="EDL" id='EDL'>
        <label class="control-label" for="EDL">EDL</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Yan" id='Yan'>
        <label class="control-label" for="Yan">Hava Yatığı (Yan)</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="Immobilizer" id='Immobilizer'>
        <label class="control-label" for="Immobilizer">Immobilizer</label>
      </div>
      <div>
        <input type="checkbox" class="checkbox" name="VSA" id='VSA'>
        <label class="control-label" for="VSA">VSA</label>
      </div>
    </div>
  </div>
  <!-- Add Photo -->
  <div class="row"><div class="span12 block-head"><h4>Foto Ekle</h4></div></div>
  <div class="row photo-add">
    <div class="span11"><textarea id="adDetails"  name="adDetails" cols="30" rows="5"></textarea></div>
    <div class="span1"><a href=""><img src="<?=$base_url;?>assets/frontend/img/add.png" class="action">Ekle</a></div>
    <div class="span1"><a href=""><img src="<?=$base_url;?>assets/frontend/img/del.png" class="action">Sil</a></div>
    <div class="span4 pull-right">
      <div class="submit-btn  pull-right">
        <a class="devam-btn-blue" href="#">Yükle</a>
      </div>
    </div>

  </div>
  <div class="row-fluid photo-added">
    <ul class="thumbnails">
      <li class="span2">
        <a class="thumbnail" href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/car-photo.png"></a>
        <a href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/home-photo.png"></a>
        <a href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/del-photo.png" class="pull-right"></a>
      </li>
      <li class="span2">
        <a class="thumbnail" href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/empty-photo.png"></a>
        <a href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/del-photo.png" class="pull-right"></a>
      </li>
      <li class="span2">
        <a class="thumbnail" href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/empty-photo.png"></a>
        <a href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/del-photo.png" class="pull-right"></a>
      </li>
      <li class="span2">
        <a class="thumbnail" href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/empty-photo.png"></a>
        <a href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/del-photo.png" class="pull-right"></a>
      </li>
      <li class="span2">
        <a class="thumbnail" href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/empty-photo.png"></a>
        <a href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/del-photo.png" class="pull-right"></a>
      </li>
      <li class="span2">
        <a class="thumbnail" href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/empty-photo.png"></a>
        <a href="#"><img alt="" src="http://localhost/otopazari/assets/frontend/img/del-photo.png" class="pull-right"></a>
      </li>
    </ul>    
  </div>
  <!-- Captcha section -->
  <div class="row-fluid blue-border">
    <div class="span2">
      <p class='bold'>Güvenlik Kodu </p>
      <img alt="" src="http://localhost/otopazari/assets/frontend/img/kodu.png">
    </div>
    <div class="span4 captch-txt">
      <div class="control-group">
        <label class="control-label" for="captcha">Lütfen sağdaki harfleri aşağıdaki kutuya yazınız</label>
        <div class="controls">
          <input type="text" name="fiyat" id="fiyat" required="" data-validation-required-message='Lütfen güvenlik kodu giriniz'>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Information -->
  <div class="row"><div class="span12 block-head"><h4>İletişim</h4></div></div>
  <div class="row">
    <div class="span3 adrs">
      <p>Adı Soyadı : Hasan Uzun</p>
      <p>Tel : 0212 654 55 44</p>
      <p>Tel : 0212 654 55 44</p>
      <p>Cep : 0536 000 00 00</p>
    </div>
    <div class="span3">
      <div class="submit-btn">
        <a href="#" class="devam-btn-blue uppercase">Güncelle</a>
      </div>
    </div>
    <div class="span12">
      <div class="submit-btn pull-right">
        <button type="submit" class="devam-btn-blue uppercase">Kaydet Devam Et</a>
      </div>
    </div>
  </div>
</form>

<?php include('../components/page_tail.php') ?>