<div class="row">
	<!-- list barang -->
	<div class="col-md-9">
		<div class="page-header">
			<h1>Sarung Terbaru <small>selalu up to date</small></h1>
		</div>
		<?php foreach($sarung as $s):?>
			<?php
			//get thumbnails
			$thumb = $this->m_sarung-> fotoSarung($s['id_sarung']);
			if(!empty($sarung)){
				$thumb = base_url('resource/img/sarung/'.$thumb['gambar']);
			}else{
				$thumb = base_url('resource/img/sarung/defaultthumb.png');
			}
			?>
			<div class="item row">
				<div class="col-md-2"><p><small>23/01/2014</small></p><img class="item-img" src="<?php echo $thumb ?>"></div>
				<div class="col-md-6">
					<small><a style="color:#A1A1A1" href="<?php echo site_url('p/merek/'.$s['id_merk'])?>"><?php echo $s['merek']?></a></small>
					<h4><a href="<?php echo site_url('p/sarung/view/'.$s['id_sarung'])?>"><?php echo $s['nama']?></a></h4>
					<p><?php echo substr($s['deskripsi'], 0,200);?>...</p>
				</div>
				<div class="harga-stok col-md-2">
					<center>
						<span style="font-size:25px" class="glyphicon glyphicon-shopping-cart"></span><br/>
						<strong><?php echo $s['jumlah']?> Kodi</strong>
					</center>
				</div>
				<div class="harga-stok col-md-2">
					<center>
						<span style="font-size:21px">Rp</span><br/>
						<strong><?php echo number_format($s['harga'])?></strong>
					</center>
				</div>
			</div>
		<?php endforeach;?>
		<a class="btn btn-primary" href="<?php echo site_url('p/sarung');?>">Lihat Semua Sarung <span class="glyphicon glyphicon-chevron-right"></span></a>
		<div class="page-header">
			<h1>Berita Terbaru <small>jangan sampai ketinggalan</small></h1>
		</div>
		<?php foreach($berita as $b):?>
			<div class="item row">
				<div class="col-md-2"><p><small><?php echo $b['updatedate']?></small></p><p>oleh <?php echo $b['username']?></p></div>
				<div class="col-md-10">
					<h4><a href="<?php echo site_url('p/berita/'.$b['id_berita']);?>"><?php echo $b['judul']?></a></h4>
					<p><?php
						echo substr($b['konten'], 0,100)?></p>
					</div>
				</div>
			<?php endforeach;?>
		</div>
		<!-- end of list barang -->

		<!-- sidebar -->
		<div class="col-md-3"> <?php $this->load->view('user/sidebar');?></div>
		<!-- end of sidebar -->
	</div>

	<!-- Footer -->
	<center><br/>
		<div class="page-footer">
			<h5>Didukung oleh :</h5><br/>
			<div class="row" >
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="<?php echo base_url('resource/img/sponsor/BHS.png'); ?>" alt="Sarung Merk BHS">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="<?php echo base_url('resource/img/sponsor/gajah duduk.png'); ?>" alt="Sarung Gajah Duduk">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="<?php echo base_url('resource/img/sponsor/wadimor.jpg'); ?>" alt="Sarung Wadimor">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="<?php echo base_url('resource/img/sponsor/cendana.png'); ?>" alt="Sarung Cendana">
					</a>
				</div>
			</div>
			<p>© 2015 Toko Sarung Hasaniyyin</p>
			<p>
				Toko Grosir Sarung Hasaniyyin Webstore </br>
				Jl. Cempaka 5 No. 3, Kel. Poncol, Kab. Pekalongan </br>
				Jawa Tengah Indonesia </br>
				Telp Toko (0274)-998877 </br></br>

				HOTLINE 087733498000 (Senin s/d Sabtu :  08:30 WIB s/d 18:15 WIB) </br>
				Informasi : info@hasaniyyin.net   |   Marketing : sales@hasaniyyin.net   |   SMS : 087733498000
			</p>
		</div>
	</center>

</div>
</div>
</div>
