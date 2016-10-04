<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard</li>
				<li class="active">Dokumen Member</li>
			</ol>
		</div><!--/.row-->
		<br>
		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">Data Perusahaan</div>
					<div class="panel-body">
						<div class="canvas-wrapper">

                    <form method="POST" action="<?php echo site_url('dokumen_member/tampil')?>" enctype="multipart/form-data"> 
								    		<table class="table">
								    			<tr>
								    				<th>Pilih</th>
								    				<td>:</td>
								    				<td>
								    					<select name="perusahaan" class="form-control" id="optionPerusahaan">
												    		<option value=""></option>
															<?php 
															 	$id = $this->session->userdata('member_id');
																$sql = $this->supermodel->queryManual("SELECT * FROM perusahaan WHERE member_id = '".$id."' ORDER BY perusahaan_id DESC");
														       	if($sql->num_rows()>0) {
																	foreach ($sql->result() as $r) {
																		$s = "";
																		if ($perusahaan_id == md5($r->perusahaan_id)) {
																			$s = "selected";
																		}
														   	?>
														    	<option value="<?php echo $r->perusahaan_id ?>" <?php echo $s; ?>><?php echo $r->nama_perusahaan; ?></option>
															<?php }} ?>
														</select>
								    				</td>
								    			</tr>
									    		<tr>
									    			<td colspan="3"></td>
									    		</tr>
								    		</table>
								    	</form>
                		</div>
					</div>
				</div>
			</div>

          

					<div id="aksiPerusahaan"></div>

		</div><!--/.row-->



	<script>
		$(document).ready(function(){
			$.post("<?php echo site_url('dokumen_member/tampil') ?>",{perusahaan_id:$("#optionPerusahaan option:selected").val() }, function(aksi){
				console.log(aksi);
				$("#aksiPerusahaan").html(aksi);
			});

			$("#optionPerusahaan").change(function(){
				$.post("<?php echo site_url('dokumen_member/tampil') ?>",{perusahaan_id:$("#optionPerusahaan option:selected").val() }, function(aksi){
					console.log(aksi);
					$("#aksiPerusahaan").html(aksi);
				});
			});

		});
	</script>
