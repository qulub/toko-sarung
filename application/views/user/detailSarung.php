      <div class="row">
      	<!-- list barang -->
      	<div class="col-md-9">
      		<!-- start detail barang -->
      		<br/>
      		<div class="col-md-12">
      			<?php
				//get thumbnails
      			$thumb = $this->m_sarung->fotoSarung($view['id_sarung']);
      			if(!empty($thumb)){
      				$thumb = base_url('resource/img/sarung/'.$thumb['gambar']);
      			}else{
      				$thumb = base_url('resource/img/sarung/efaultthumb.png');
      			}
      			?>
      			<div class="col-md-4">
      				<img class="thumbdetail_primary" src="<?php echo $thumb?>" class="item_gambar">
      				<!-- semua gambar sarung -->
      				<?php foreach($gambar as $g):?>
      					<a href="#"><img class="thumbdetail" src="<?php echo base_url('resource/img/sarung/'.$g['gambar'])?>"/></a>
      				<?php endforeach;?>
      			</div>
      			<div class="col-md-8"><h3><a href="#"><?php echo $view['nama']?></a></h3><h4>Rp <?php echo number_format($view['harga'])?>/kodi</h4>
      				<h4>Stok <?php echo $view['jumlah']?> Kodi</h4>
      				<form class="form-inline" role="form">
      					<div class="form-group">
      						<label class="sr-only" for="exampleInputEmail2">Jumlah Kodi</label>
      						<input style="width:200px" type="number" min="1" max="<?php echo $view['jumlah']?>" class="form-control" id="exampleInputEmail2" placeholder="Jumlah Kodi" required>
      					</div>
      					<button onclick="return alert('belum ron')" type="submit" class="btn btn-info">Booking</button>
      				</form>
      				<hr/>
      				<p><?php echo nl2br($view['deskripsi'])?></p>
      			</div>
      		</div>
      		<div class="col-md-12">
      			<hr/>
      			<strong>Sarung terbaru</strong>
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
      						<h4><a href="<?php echo site_url('p/sarung/'.$s['id_sarung'])?>"><?php echo $s['nama']?></a></h4>
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
      		</div>

      		<!-- end detail barang -->
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
      					<img data-src="holder.js/100%x120" alt="...">
      				</a>
      			</div>
      			<div class="col-xs-6 col-md-3">
      				<a href="#" class="thumbnail">
      					<img data-src="holder.js/100%x120" alt="...">
      				</a>
      			</div>
      			<div class="col-xs-6 col-md-3">
      				<a href="#" class="thumbnail">
      					<img data-src="holder.js/100%x120" alt="...">
      				</a>
      			</div>
      			<div class="col-xs-6 col-md-3">
      				<a href="#" class="thumbnail">
      					<img data-src="holder.js/100%x120" alt="...">
      				</a>
      			</div>
      		</div>
      		fhghhf
      	</div>
      </center>

  </div>
</div>
</div>

<!-- Modal Login -->
<div class="modal fade" id="id_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Login Anggota</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary" style="float: left; margin-right: 5px;">Login</button>
							<span><p style="margin-top: 5px;">Lupa Password? <a href="#">Klik di sini</a></p></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="id_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Daftar Member</h4>
			</div>
			<div class="modal-body">
				<input type="text" class="form-control" placeholder="Nama Lengkap"><br/>
				<input type="text" class="form-control" placeholder="Email"><br/>
				<input type="text" class="form-control" placeholder="Nomor Telepon / Handphone"><br/>
				<input type="text" class="form-control" placeholder="Password">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Daftar</button>
			</div>
		</div>
	</div>
</div>
