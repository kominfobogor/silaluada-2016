<form method="POST" action="<?php echo site_url('perusahaan/simpan')?>" enctype="multipart/form-data"> 
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="margin:0">
        <!-- Content Header (Page header) -->


        <section class="content-header">
          <h1>
           Aplikasi Perizinan Lingkungan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Perusahaan</li>
            <li class="active">Tambah Perusahaan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Perusahaan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

							    		<table class="table">
								    		<tr>
								    			<th>Nama Perusahaan</th>
								    			<td>:</td>
								    			<td><input type="text" name="nama" class="form-control" required=""></td>
								    		</tr>
								    		<tr>
												<th>Status Perusahaan</th>
												<td>:</td>
												<td>
													<select name="status" class="form-control">
														<?php 
														$stat = array(	'' => '',
																		'Milik Pemerintah' => 'Milik Pemerintah',
																		'Milik Yayasan' => 'Milik Yayasan',
																		'Milik Perusahaan' => 'Milik Perusahaan',
																		'Milik Perorangan' => 'Milik Perorangan');
														foreach ($stat as $r) {
														?>
							        					<option value="<?php echo $r ?>"><?php echo $r ?></option>
							        					<?php } ?>
							        				</select>
												</td>
							    			</tr>
								    		<tr>
								    			<th>Alamat</th>
								    			<td>:</td>
								    			<td><textarea name="alamat" class="form-control"></textarea></td>
								    		</tr>
								    		<tr>
							        			<td><label>Kecamatan</label></td>
							        			<td>:</td>
							        			<td>
							        				<select name="kecamatan" id="kec" class="form-control">
							        					<option></option>
									        			<?php 
															$sql = $this->supermodel->queryManual('select * from kecamatan');
															if($sql->num_rows()>0) {
																foreach ($sql->result() as $r) {
														 ?>
														<option value="<?php echo $r->kecamatan_id ?>"><?php echo $r->kecamatan_nama ?></option>
														<?php }} ?>
													</select>
							        			</td>
							        		</tr>
							        		<tr>
							        			<td><label>Kelurahan</label></td>
							        			<td>:</td>
							        			<td>
							        				<select name="kelurahan" id="kel" class="form-control">
							        					<option></option>
							        				</select>
							        			</td>
							        		</tr>
								    		<tr>
								    			<th>No. Telp</th>
								    			<td>:</td>
								    			<td><input type="number" name="no_telp" class="form-control"></td>
								    		</tr>
								    		<tr>
								    			<th>Jenis Usaha</th>
								    			<td>:</td>
								    			<td><input type="text" name="jenis_usaha" class="form-control"></td>
								    		</tr>
								    		<tr>
								    			<th>Kapasitas Produksi</th>
								    			<td>:</td>
								    			<td><input type="number" name="kapasitas_produksi" class="form-control"></td>
								    		</tr>
								    		<tr>
								    			<th>Luas Lahan</th>
								    			<td>:</td>
								    			<td><input type="number" name="luas_lahan" class="form-control"></td>
								    		</tr>
								    		<tr>
								    			<th>Luas Bangunan</th>
								    			<td>:</td>
								    			<td><input type="number" name="luas_bangunan" class="form-control"></td>
								    		</tr>
								    		<tr>
								    			<th>Kondisi Lahan Saat Ini</th>
								    			<td>:</td>
								    			<td><input type="text" name="kondisi" class="form-control"></td>
								    		</tr>
							    		</table>
                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
              <div class="box">
                <div class="box-body">
      									
								    		<div class="gllpLatlonPicker" align="center" >
												<div class="gllpMap"><b>Lokasi Perusahaan</b></div><br><br>
												<input type="text" name="lat" class="gllpLatitude" value="-6.59483" placeholder="Latitude" Required>
												<input type="text" name="lng" class="gllpLongitude" value="106.79955" placeholder="Longitude" Required>
											</div>

											<table class="table">
								    		<tr>
								    			<td align="right">
								    				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
													<a href="<?php echo site_url('perusahaan') ?>"><div class="btn btn-danger">Batal</div></a>
												</td>
								    		</tr>
								    	</table>
				 </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  

</form>	
				<script>
					$("#kec").change(function(){
			 				var id = $("#kec").val();
			 				$("#kel").load("<?php echo site_url('pemohon/kel') ?>/"+id);
			 			});
				</script>

