<?php include('components/page_head.php') ?>
<div class="row home">
	<?php include('components/head_section.php'); ?>
	<div class="row">
		<div class="span12">
			<div class="row block-head">
				<div class="span2"><div class="uppercase"><h4 class="black">DETAYLI ARAMA</h4></div></div>
				<div class="span10">
						<div class="row search-filter boder-left">
							<div class="span2">
								<label class="radio"><input type="radio" value="1" name="month">Tüm İlanlar</label>
							</div>
							<div class="span2">
								<label class="radio"><input type="radio" value="1" name="month">Sahibinden</label>
							</div>
							<div class="span2">
								<label class="radio"><input type="radio" value="1" name="month">Galeriden</label>
							</div>
							<div class="span3 pull-right">
								<select id="Semt" name="Semt">
                  <option>Sıralama Seçiniz</option>
                </select>
							</div>
						</div>
				</div>
			</div>
			
			<div class="row">
			  <div class="span12">
			    <div class="table-account table-ad table-ad-active">
			    	<table class="table">
							<thead>
								<tr>
									<th class="table-th">Foto</th>
									<th class="table-th">Marka</th>
									<th class="table-th">Seri - Model</th>
									<th class="table-th">İlan Başlığı</th>
									<th class="table-th">Yıl</th>
									<th class="table-th"> KM</th>
									<th class="table-th">Renk</th>
									<th class="table-th"><a class="sort" href="#">Fiyat</a></th>
									<th class="table-th"><a class="sort" href="#"> İlan Tarihi</a></th>
									<th class="table-th">il / ilçe</th>	
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="blue"><a class="thumbnail" href="#"><img src="http://localhost/vOPUI/assets/frontend/img/car.png"></a></td>
									<td class="blue">Mercedes - Benz</td>
									<td class="blue">C-200 Avangrade Kompasör</td>
									<td class="blue">sahibenden temiz garaj</td>
									<td class="blue">1998</td>
									<td class="blue">123456</td>
									<td class="blue">Siyah</td>
									<td class="price blue">91.000TL</td>
									<td class="blue">18 Aralık 2012</td>
									<td class="blue">
										İstanbul beylikdüzü
									</td>
								</tr>
								<tr>
									<td class="red"><a class="thumbnail" href="#"><img src="http://localhost/vOPUI/assets/frontend/img/car.png"></a></td>
									<td class="red">Mercedes - Benz</td>
									<td class="red">C-200 Avangrade Kompasör</td>
									<td class="red">sahibenden temiz garaj</td>
									<td class="red">1998</td>
									<td class="red">123456</td>
									<td class="red">Siyah</td>
									<td class="price red">91.000TL</td>
									<td class="red">18 Aralık 2012</td>
									<td class="red">
										İstanbul beylikdüzü
									</td>
								</tr>
								<tr>
									<td class="white"><a class="thumbnail" href="#"><img src="http://localhost/vOPUI/assets/frontend/img/car.png"></a></td>
									<td class="white">Mercedes - Benz</td>
									<td class="white">C-200 Avangrade Kompasör</td>
									<td class="white">sahibenden temiz garaj</td>
									<td class="white">1998</td>
									<td class="white">123456</td>
									<td class="white">Siyah</td>
									<td class="price white">91.000TL</td>
									<td class="white">18 Aralık 2012</td>
									<td class="white">
										İstanbul beylikdüzü
									</td>
								</tr>
								<tr>
									<td class="green"><a class="thumbnail" href="#"><img src="http://localhost/vOPUI/assets/frontend/img/car.png"></a></td>
									<td class="green">Mercedes - Benz</td>
									<td class="green">C-200 Avangrade Kompasör</td>
									<td class="green">sahibenden temiz garaj</td>
									<td class="green">1998</td>
									<td class="green">123456</td>
									<td class="green">Siyah</td>
									<td class="price green">91.000TL</td>
									<td class="green">18 Aralık 2012</td>
									<td class="green">
										İstanbul  beylikdüzü
									</td>
								</tr>
								<tr>
									<td class="gray"><a class="thumbnail" href="#"><img src="http://localhost/vOPUI/assets/frontend/img/car.png"></a></td>
									<td class="gray">Mercedes - Benz</td>
									<td class="gray">C-200 Avangrade Kompasör</td>
									<td class="gray">sahibenden temiz garaj</td>
									<td class="gray">1998</td>
									<td class="gray">123456</td>
									<td class="gray">Siyah</td>
									<td class="price gray">91.000TL</td>
									<td class="gray">18 Aralık 2012</td>
									<td class="gray">
										İstanbul  beylikdüzü
									</td>
								</tr>
							</tbody>
						</table>
			    </div>
			  </div>
			</div>
			<div class="row">
				<div class="span12 ad-pagination">
					<div class="pagination pagination-centered">
						<ul>
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li><a href="">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span3"></div>
				<div class="span6">
					<div class="save-search">
						<h4>Favori Aramalarım</h4>
						<p>Yukarıdaki lesteye yeni bir ilan eklendiğinde size e-post ile haber vermemizi ister misiniz?</p>
						<div class="submit-btn pull-right"><a href="#" class='btn-yal'>Aramayı Kaydet</a></div>
					</div>
				</div>
				<div class="span3"></div>
			</div>
		</div>
	</div>
</div>
<?php include('components/page_tail.php') ?>
