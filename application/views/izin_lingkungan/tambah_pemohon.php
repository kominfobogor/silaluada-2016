<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard</li>
				<li class="active">Data Pemohon</li>
				<li class="active">Tambah Data Pemohon</li>
			</ol>
		</div><!--/.row-->
		<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Tambah Data Pemohon</div>
					<div class="panel-body">
						<div class="canvas-wrapper">

							<form method="POST" action="<?php echo site_url('pemohon/simpan')?>" enctype="multipart/form-data"> 
							    		<table class="table">
								    		<tr>
								    			<th>NIK</th>
								    			<td>:</td>
								    			<td><input type="number" name="nik" class="form-control" required=""></td>
								    		</tr>
								    		<tr>
								    			<th>Nama Lengkap</th>
								    			<td>:</td>
								    			<td><input type="text" name="nama" class="form-control" required=""></td>
								    		</tr>
								    		<tr>
								    			<th>Jabatan</th>
								    			<td>:</td>
								    			<td><input type="text" name="jabatan" class="form-control"></td>
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
								    			<th></th>
								    			<td></td>
								    			<td align="right">
								    				<a href="<?php echo site_url('pemohon') ?>" class="btn btn-danger">Batal</a>
								    				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
													
												</td>
								    		</tr>
							    		</table>
							</form>	<!-- END -->	
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	

				<script>
					$("#kec").change(function(){
			 				var id = $("#kec").val();
			 				$("#kel").load("<?php echo site_url('pemohon/kel') ?>/"+id);
			 			});
				</script>

