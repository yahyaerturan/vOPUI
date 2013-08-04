<?php include('components/page_head.php') ?>
<?php include('components/page_navigation_action.php') ?>
<div class="row home">
	<?php include('components/head_section.php'); ?>
	<div class="span12">
    <div class="row">
      <div class="span3 advance-search">
        <div class="row-fluid advance-search-form">
          <div class="span12 gray-border">
            <div class="row"><div class="span12"><div class="block-head uppercase"><h4>DETAYLI ARAMA</h4></div></div></div>
            <div class="row">
              <div class="span12"><select><option>Sıralama Seçiniz</option></select></div>
            </div>
            <div class="row">
              <div class="span12"><select><option>Sıralama Seçiniz</option></select></div>
            </div>
            <div class="row">
              <div class="span12"><select><option>Sıralama Seçiniz</option></select></div>
            </div>
            <div class="row">
              <div class="span12"><div class="submit-btn pull-right"><a class="devam-btn-blue" href="#">Ara</a></div></div>
            </div>
            <div class="row">
              <div class="span12"><select><option>Tüm şehirler</option></select></div>
            </div>
            <div class="row">
              <div class="span12"><select><option>Tüm ilçeler</option></select></div>
            </div>
            <div class="row dotted-bottom-border">
              <div class="span12">
                <p>Fiyat</p>
                <input type="text" class="reg-input input-mini"> 
                <span> - </span>
                <input type="text" class="reg-input input-mini">
              </div>
            </div>
            <div class="row dotted-bottom-border">
              <div class="span12">
                <p>Yıl</p>
                <input type="text" class="reg-input input-mini"> 
                <span> - </span>
                <input type="text" class="reg-input input-mini">
              </div>
            </div>
            <div class="row dotted-bottom-border">
              <div class="span12">
                <p>Km</p>
                <input type="text" class="reg-input input-mini"> 
                <span> - </span>
                <input type="text" class="reg-input input-mini">
              </div>
            </div>
            
            <div class="row">
              <div class="span12 accordion" id="adv-select">
                <div class="row">
                  <div class="span12">
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse-1" data-toggle="collapse" data-parent="#adv-select" class="accordion-toggle">Rerk<i></i></a>
                      </div>
                      <div class="accordion-body collapse in" id="collapse-1">
                        <div>
                          <select multiple="multiple">
                            <option>Hapsi</option>
                            <option>Kırmızı</option>
                            <option>siyah</option>
                            <option>bayaz</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse-2" data-toggle="collapse" data-parent="#adv-select" class="accordion-toggle">Motor Hacmi<i></i></a>
                      </div>
                      <div class="accordion-body collapse in" id="collapse-2">
                        <div>
                          <select multiple="multiple">
                            <option>Hapsi</option>
                            <option>Kırmızı</option>
                            <option>siyah</option>
                            <option>bayaz</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse-3" data-toggle="collapse" data-parent="#adv-select" class="accordion-toggle">Motor Gücü<i></i></a>
                      </div>
                      <div class="accordion-body collapse in" id="collapse-3">
                        <div>
                          <select multiple="multiple">
                            <option>Hapsi</option>
                            <option>Kırmızı</option>
                            <option>siyah</option>
                            <option>bayaz</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse-4" data-toggle="collapse" data-parent="#adv-select" class="accordion-toggle">yakıt<i></i></a>
                      </div>
                      <div class="accordion-body collapse in" id="collapse-4">
                        <div>
                          <select multiple="multiple">
                            <option>Hapsi</option>
                            <option>Kırmızı</option>
                            <option>siyah</option>
                            <option>bayaz</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse-5" data-toggle="collapse" data-parent="#adv-select" class="accordion-toggle collapsed">Vites<i></i></a>
                      </div>
                      <div class="accordion-body collapse" id="collapse-5">
                        <div><select multiple="multiple"><option>Hapsi</option></select></div>
                      </div>
                    </div>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse-6" data-toggle="collapse" data-parent="#adv-select" class="accordion-toggle collapsed">Kasa Tipi<i></i></a>
                      </div>
                      <div class="accordion-body collapse" id="collapse-6">
                        <div><select multiple="multiple"><option>Hapsi</option></select></div>
                      </div>
                    </div>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse-7" data-toggle="collapse" data-parent="#adv-select" class="accordion-toggle collapsed">Vites<i></i></a>
                      </div>
                      <div class="accordion-body collapse" id="collapse-7">
                        <div><select multiple="multiple"><option>Hapsi</option></select></div>
                      </div>
                    </div>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a href="#collapse-8" data-toggle="collapse" data-parent="#adv-select" class="accordion-toggle collapsed">Kasa Tipi<i></i></a>
                      </div>
                      <div class="accordion-body collapse" id="collapse-8">
                        <div><select multiple="multiple"><option>Hapsi</option></select></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span12">
                <p><input type="checkbox" class="checkbox"> Fotoğraflı ilanlar</p>
              </div>
            </div>
            <div class="row">
              <div class="span12"><div class="submit-btn pull-right"><a class="devam-btn-blue" href="#">Ara</a></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('components/page_tail.php') ?>
