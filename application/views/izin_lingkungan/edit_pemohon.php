<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="margin:0">
        <!-- Content Header (Page header) -->


        <section class="content-header">
          <h1>
           Aplikasi Perizinan Lingkungan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pemohon</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Pemohon</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

							<form method="POST" action="<?php echo site_url('pemohon/update')?>" enctype="multipart/form-data"> 
							    	<input type="hidden" name="pemohon_id" value="<?php echo $pemohon_id; ?>">
							    		<table class="table">
								    		<tr>
								    			<th>NIK</th>
								    			<td>:</td>
								    			<td><input type="number" name="nik" class="form-control" value="<?php echo $nik ?>"></td>
								    		</tr>
								    		<tr>
								    			<th>Nama Lengkap</th>
								    			<td>:</td>
								    			<td><input type="text" name="nama" class="form-control" value="<?php echo $nama ?>"></td>
								    		</tr>
								    		<tr>
								    			<th>Jabatan</th>
								    			<td>:</td>
								    			<td><input type="text" name="jabatan" class="form-control" value="<?php echo $jabatan ?>"></td>
								    		</tr>
								    		<tr>
								    			<th>Alamat</th>
								    			<td>:</td>
								    			<td><textarea name="alamat" class="form-control"><?php echo $alamat ?></textarea></td>
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
																	$s = "";
																	if ($kec == $r->kecamatan_id){
																		$s="selected";
																	}
														 ?>
														<option value="<?php echo $r->kecamatan_id ?>" <?php echo $s ?>><?php echo $r->kecamatan_nama ?></option>
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
							        					<?php 
															$sql = $this->supermodel->queryManual('select * from kelurahan');
															if($sql->num_rows()>0) {
																foreach ($sql->result() as $r) {
																	$s = "";
																	if ($kel == $r->kelurahan_id){
																		$s="selected";
																	}
														 ?>
														<option value="<?php echo $r->kelurahan_id ?>" <?php echo $s ?>><?php echo $r->kelurahan_nama ?></option>
														<?php }} ?>
							        				</select>
							        			</td>
							        		</tr>
								    		<tr>
								    			<th>No. Telp</th>
								    			<td>:</td>
								    			<td><input type="number" name="no_telp" class="form-control" value="<?php echo $no_telp ?>"></td>
								    		</tr>
								    		<tr>
								    			<th></th>
								    			<td></td>
								    			<td>
								    				<input type="submit" name="update" value="Update" class="btn btn-success">
													<a href="<?php echo site_url('pemohon') ?>"><div class="btn btn-danger">Batal</div></a>
												</td>
								    		</tr>
							    		</table>
							</form>	<!-- END -->		
					
             

                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

				<script>
						$("#kec").change(function(){
			 				var id = $("#kec").val();
			 				$("#kel").load("<?php echo site_url('pemohon/kel') ?>/"+id);
			 			});
				</script>

