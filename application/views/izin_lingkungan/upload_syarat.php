	<script type="text/javascript">
		var i;
		var o;

		function show_modal(dok_element,file_name_element){
			i = dok_element;
			o = file_name_element;
			console.log(i);
			console.log(o);
		}

		function get_file(dok_element,file_name_element){
			i.val(dok_element);
			o.html(file_name_element);
		}

	</script>

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard</li>
				<li class="active">Kirim Persyaratan Perizinan</li>
			</ol>
		</div><!--/.row-->
		<br>
       <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-heading">Kirim Persyaratan</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
								<form method="POST" id="urus-perizinan" action="<?php echo site_url('upload_syarat/simpan/'.$permohonan_id)?>" enctype="multipart/form-data">
								    <input type="hidden" value="<?php echo $permohonan_id; ?>" name="permohonan_id">
								    <input type="hidden" value="<?php echo $pemohon_id; ?>" name="pemohon_id">
								    <input type="hidden" value="<?php echo $perusahaan_id; ?>" name="perusahaan_id">
								    <input type="hidden" value="<?php echo $jenisizin_id; ?>" name="jenisizin_id">
								    		<table class="table">
								    			<?php
								    			$sql1 = $this->supermodel->queryManual("SELECT 
														    							a.*,
																						b.nama_pemohon,
																						c.nama_perusahaan,
																						d.*
														    							from 
														    							".$tabel." a,pemohon b,perusahaan c,jenisizin d 
														    							WHERE 
														    							a.pemohon_id = b.pemohon_id AND
														    							a.perusahaan_id = c.perusahaan_id AND
														    							a.jenisizin_id = d.jenisizin_id AND
														    							a.permohonan_id = '".$permohonan_id."'");
								    			if($sql1->num_rows()>0) {
													$no=1;
													foreach ($sql1->result() as $r) {
								    			?>
								    			<tr>
								    				<th>Kode Permohonan Izin</th>
								    				<td>:</td>
								    				<th><?php echo $permohonan_id; ?></th>
								    			</tr>
								    			<tr>
								    				<th>Nama Pemohon</th>
								    				<td>:</td>
								    				<td><?php echo $r->nama_pemohon; ?></td>
								    			</tr>
								    			<tr>
								    				<th>Nama Perusahaan</th>
								    				<td>:</td>
								    				<td><?php echo $r->nama_perusahaan; ?></td>
								    			</tr>
								    			<tr>
								    				<th>Nama Perizinan</th>
								    				<td>:</td>
								    				<td><?php echo $r->nama_perizinan; ?></td>
								    			</tr>
								    			<tr>
								    				<th>Nama Kegiatan</th>
								    				<td>:</td>
								    				<td><?php echo $r->nama_kegiatan; ?></td>
								    			</tr>
								    			<tr>
								    				<th>Rencana Lokasi</th>
								    				<td>:</td>
								    				<td><?php echo $r->rencana_lokasi; ?></td>
								    			</tr>
								    			<?php }} ?>
								    		</table>
											
											<?php
												$idpemohon_expl = explode('-', $permohonan_id);
												//echo $idpemohon_expl[0];
												if($idpemohon_expl[0] == "SPPL"):
											?>
											
												<br />
												<div class="alert alert-info">
													
													Silahkan <b>Download</b> Form <b>Surat Permohonan Penerbitan SPPL</b> 
													dan <b>Surat Pernyataan Kesanggupan Pengelolaan Pemantauan Lingkungan Hidup (SPPL)</b>, <br /> 
													Isi sesuai pengajuan Izin Anda, Kemudian Upload pada Halaman ini
												</div>
												
											<?php endif; ?>
											<br />
											

								    		<table class="table table-bordered table-striped">
									    		<thead>
									    			<tr>
									    				<th>No</th>
									    				<th>Persyaratan</th>
									    				<th></th>
									    				<th colspan="2">File</th>
									    			</tr>
									    		</thead>
									    		<?php
									    			$sql2 = $this->supermodel->queryManual("SELECT
									    													a.*,b.*,c.* 
									    													FROM izin_persyaratan a,jenisizin b, persyaratan c
									    												 	WHERE 
									    												 	a.jenisizin_id = b.jenisizin_id AND 
									    												 	a.persyaratan_id = c.persyaratan_id AND
									    												 	a.jenisizin_id = '".$jenisizin_id."'");
													
													if($sql2->num_rows()>0) {
														$no=0;
														foreach ($sql2->result() as $r) {
									    				$no++
									    		?>
									    			<tr>
									    				<td><?php echo $no ?></td>
									    				<td>
									    					<?php echo $r->persyaratan; ?>
															<?php if($r->persyaratan == 'Surat Permohonan Penerbitan SPPL'): ?>
																&nbsp;&nbsp; 
																<a href="<?php echo base_url(); ?>asset_app/dokumen/surat-permohonan-penerbitan.docx" target="_blank">
																	Download Dokumen
																</a>
															<?php endif; ?>
															
															<?php if($r->persyaratan == 'Surat Pernyataan Kesanggupan Pengelolaan Pemantauan Lingkungan Hidup (SPPL)'): ?>
																&nbsp;&nbsp; 
																<a href="<?php echo base_url(); ?>asset_app/dokumen/surat-pernyataan-kesanggupan-sppl.docx" target="_blank">
																	Download Dokumen
																</a>
															<?php endif; ?>

									    					<?php 
									    					$check_dokumen = $check_upload_syarat($permohonan_id, $r->persyaratan_id);
									    					$dokumennya = ($check_dokumen) ? $check_dokumen->dokumen_id : '';
									    					?>

									    				</td>
									    				<td>:</td>
									    				<td>
									    					<input class="dokumen-perizinan" type="hidden" id="dok_<?php echo $no; ?>" name="dok_id[]" value="<?php echo $dokumennya; ?>" required>
									    					<input class="persyaratan-perizinan" type="hidden" value="<?php echo $r->persyaratan_id ?>" name="persyaratan_id[]">
									    					<span id="file_name<?php echo $no; ?>">
									    						<?php echo $nama_dokumen($dokumennya); ?>
									    					</span>
									    					</td>
									    				<td>
									    					<a class="btn btn-primary" onclick="show_modal($('#dok_<?php echo $no; ?>'),$('#file_name<?php echo $no; ?>'))" data-toggle="modal" data-target="#myModal" >Pilih File</a>
									    				</td>
									    			</tr>
									    		<?php }} ?>
								    		</table>   
								    		<input type="submit" name="simpan" class="btn btn-success" value="Simpan" style="float:right">
								  </div>
								</form>
								</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->


							    		<!-- MODAL -->
										  <div class="modal fade" id="myModal" role="dialog">
										    <div class="modal-dialog"><!-- Modal content-->
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <h4 class="modal-title"><b>Pilih File</h4>
										        </div>
										        <div class="modal-body">
														<table class="table">
									  	    				<tr>
									  	    					<td>
									  	    						<select name="perus" class="form-control" id="perus" ruquired>
									  	    							<?php
									  	    								$sql3 = $this->supermodel->queryManual("SELECT * FROM perusahaan WHERE member_id = '".$member_id."'");
									  	    								if($sql3->num_rows()>0){
									  	    									foreach ($sql3->result() as $r) {
									  	    										$s="";
									  	    										if ($perusahaan_id == $r->perusahaan_id) {
									  	    											$s="selected";
									  	    										}
									  	    							?>
									  	    								<option value="<?php echo $r->perusahaan_id ?>" <?php echo $s ?>><?php echo $r->nama_perusahaan ?></option>
									  	    							<?php }} ?>
														        	</select>
									  	    					</td>
									  	    					<td align="right"><a href="<?php echo site_url('dokumen_member/index/'.md5($perusahaan_id)) ?>" class="btn btn-info">Upload Dokumen Member</a></td>
									  	    				</tr>
									  	    				<tr>
									  	    					<td colspan="2" id="dokumen">
												  	    		</td>
												  	    	</tr>
												  	    </table>
										        </div>
										      </div>
										    </div>
										  </div>
										<!-- END MODAL -->

<script>
$(document).ready(function(){

	$.post("<?php echo site_url('upload_syarat/dokumen') ?>",{perusahaan_id:$("#perus option:selected").val() }, function(dokumen){
					// alert(#optionPemohon.val);
					//console.log("ini dok =>",dokumen);
					$("#dokumen").html(dokumen);
	});

	$("#perus").change(function(){
				$.post("<?php echo site_url('upload_syarat/dokumen') ?>",{perusahaan_id:$("#perus option:selected").val() }, function(dokumen){
					// alert(#optionPemohon.val);
					//console.log("ini dok =>",dokumen);
					$("#dokumen").html(dokumen);
				});
			}); 
});
</script>


<script type="text/javascript" src="<?php echo base_url('asset_app/js/perizinan/index.js'); ?>"></script>
<script type="text/javascript">

	var formEl = 'form#urus-perizinan';
	var dokEl = '.dokumen-perizinan';
	var syaratEl = '.persyaratan-perizinan';

	window.PERIZINAN.handleSavePerizinan(formEl, dokEl, syaratEl);
</script>
