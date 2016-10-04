  <div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard</li>
				<li class="active">Data Pemohon</li>
			</ol>
		</div><!--/.row-->
		<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Pemohon</div>
					<div class="panel-body">
						<div class="canvas-wrapper">

          				<a href="<?php echo site_url('pemohon/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a><br><br>


												<div style="height:auto;width:auto; overflow:scroll;">
										    		<table class="table table-bordered table-striped" id="example1">
											    		<thead>
											    			<tr>
											    				<th>No</th>
											    				<th>Nama Lengkap</th>
											    				<th>Jabatan</th>
											    				<th>Alamat</th>
											    				<th>Kecamatan</th>
											    				<th>Kelurahan</th>
											    				<th>NIK</th>
											    				<th>No Telp</th>
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
											    				<td><?php echo $r->nama_pemohon ?></td>
											    				<td><?php echo $r->jabatan ?></td>
											    				<td><?php echo $r->alamat_pemohon ?></td>
											    				<td><?php echo $r->kecamatan_nama ?></td>
											    				<td><?php echo $r->kelurahan_nama ?></td>
											    				<td><?php echo $r->nik_pemohon ?></td>
											    				<td><?php echo $r->notelp_pemohon ?></td>
											    				<td><a href="<?php echo site_url()."/pemohon/edit/".$r->pemohon_id?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></td>
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