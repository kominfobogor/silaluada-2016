	  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="margin:0">
        <!-- Content Header (Page header) -->


        <section class="content-header">
          <h1>
            Aplikasi Perizinan Lingkungan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dokumen Member</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-4">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Perusahaan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                    <form method="POST" action="<?php echo site_url('dokumen_member/tampil')?>" enctype="multipart/form-data"> 
								    		<table class="table">
								    			<tr>
								    				<th>Pilih Perusahaan</th>
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
                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->


					<div id="aksiPerusahaan"></div>

                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->



	<script>
		$(document).ready(function(){
			$.post("<?php echo site_url('dokumen_member/tampil') ?>",{perusahaan_id:$("#optionPerusahaan option:selected").val() }, function(aksi){
				$("#aksiPerusahaan").html(aksi);
			});

			$("#optionPerusahaan").change(function(){
				$.post("<?php echo site_url('dokumen_member/tampil') ?>",{perusahaan_id:$("#optionPerusahaan option:selected").val() }, function(aksi){
					$("#aksiPerusahaan").html(aksi);
				});
			});

		});
	</script>
