  <div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard</li>
				<li class="active">Data Perusahaan</li>
			</ol>
		</div><!--/.row-->
		<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Perusahaan</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
                   
							  <a href="<?php echo site_url('perusahaan/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a><br><br>
							    			
							    	<div style="height:auto;width:auto; overflow:scroll;">
							    		<table class="table table-bordered table-striped" id="example1">
								    		<thead>
								    			<tr>
								    				<th>No</th>
								    				<th>Nama Perusahaan</th>
								    				<th>Status</th>
								    				<th>Alamat</th>
								    				<th>Kecamatan</th>
								    				<th>Kelurahan</th>
								    				<th>Nomor Telp</th>
								    				<th>Jenis Usaha</th>
								    				<th>Kapasitas Produksi</th>
								    				<th>Luas Lahan</th>
								    				<th>Luas Bangunan</th>
								    				<th>Kondisi Lahan Saat Ini</th>
								    				<th>Aksi</th>
								    			</tr>
								    		</thead>
								    		<?php
												if($sql->num_rows()>0) {
													$no=1;
													foreach ($sql->result() as $r) {
								    		?>
								    			<tr>
								    				<td><?php echo $no++ ?></td>
								    				<td><?php echo $r->nama_perusahaan ?></td>
								    				<td><?php echo $r->status_perusahaan ?></td>
								    				<td><?php echo $r->alamat_perusahaan ?></td>
								    				<td><?php echo $r->kecamatan_nama; ?></td>
								    				<td><?php echo $r->kelurahan_nama ?></td>
								    				<td><?php echo $r->notelp_perusahaan ?></td>
								    				<td><?php echo $r->jenis_usaha ?></td>
								    				<td><?php echo $r->kapasitas_produksi ?> Unit</td>
								    				<td><?php echo $r->luas_lahan ?> M</td>
								    				<td><?php echo $r->luas_bangunan ?> M</td>
								    				<td><?php echo $r->kondisi ?></td>
								    				<td><a href="<?php echo site_url()."/perusahaan/edit/".$r->perusahaan_id ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></td>
								    			</tr>
								    		<?php }} ?>
							    		</table>
							    	</div>
							    	<!-- END -->		
                		</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
