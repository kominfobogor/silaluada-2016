	


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="margin:0">
        <!-- Content Header (Page header) -->


        <section class="content-header">
          <h1>
           	Aplikasi Perizinan Lingkungan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Dashboard</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                   <!-- Dashboard -->
							    		<div style="text-align:left;">
							    			<a data-toggle="modal" data-target="#myModal" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Buat Izin Baru</a>
							    		</div><br>

							    		<ul class="nav nav-tabs nav-justified">
								    		<li class="active"><a data-toggle="tab" href="#sppl" style="color:black;">SPPL</a></li>
								   	 		<li><a data-toggle="tab" href="#uklupl" style="color:black;">UKL-UPL</a></li>
								   	 		<li><a data-toggle="tab" href="#amdal" style="color:black;">AMDAL</a></li>
								  		</ul>
								  		<div class="tab-content">
									  	    <div id="sppl" class="tab-pane fade in active">
									    		<table class="table">
									    			<tr>
										    			<td align="center"><label>Permohonan SPPL yang sedang di urus</label></td>
										    		</tr>
										    		<tr>
										    			<td>
												    		<table class="table table-bordered table-striped" id="example1">
													    		<thead>
													    			<tr>
													    				<th>No</th>
													    				<th>Kode Permohonan Izin</th>
													    				<th>Pemohon Izin</th>
													    				<th>Perusahaan</th>
													    				<th>Jenis Izin</th>
													    				<th>Tanggal Pengajuan</th>
													    				<th>Aksi</th>
													    			</tr>
													    		</thead>
													    		<?php
													    			$id = $this->session->userdata('member_id');
													    			$sql = $this->supermodel->queryManual("SELECT 
													    													a.*,
																											b.nama_pemohon as nama_pemohon,
																											c.nama_perusahaan as nama_perusahaan,
																											d.*
													    													from 
													    													sppl a,pemohon b,perusahaan c,jenisizin d 
													    													WHERE 
													    													a.pemohon_id = b.pemohon_id AND
													    													a.perusahaan_id = c.perusahaan_id AND
													    													a.jenisizin_id = d.jenisizin_id AND
													    													a.status_perizinan = '0' AND
													    													a.member_id = '".$id."' ORDER BY a.permohonan_id DESC");
																	if($sql->num_rows()>0) {
																		$no=1;
																		foreach ($sql->result() as $r) {
																			$thn = substr($r->tgl_permohonan, 0,4);
																			$bln = substr($r->tgl_permohonan, 5,2);
																			$tgl = substr($r->tgl_permohonan, 8,2);
													    		?>
													    			<tr>
													    				<td><?php echo $no++ ?></td>
													    				<td><?php echo $r->permohonan_id ?></td>
													    				<td><?php echo $r->nama_pemohon ?></td>
													    				<td><?php echo $r->nama_perusahaan ?></td>
													    				<td><?php echo $r->nama_perizinan; ?></td>
													    				<td><?php echo $tgl."-".$bln."-".$thn;  ?></td>
													    				<td>
													    					<a href="<?php echo site_url()."/perizinan_lingkungan/edit/".$r->permohonan_id."/".$r->jenisizin_id?>"  class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
													    					<a href="<?php echo site_url()."/upload_syarat/index/".$r->pemohon_id."/".$r->perusahaan_id."/".$r->jenisizin_id."/".$r->permohonan_id?>" class="btn btn-info btn-xs"><i class="fa fa-arrow-circle-right "></i></a>
													    				</td>
													    			</tr>
													    		<?php }} ?>
												    		</table>
												    	</td>
										    		</tr>

										    		<tr>
										    			<td align="center"><label>Permohonan SPPL yang telah selesai</label></td>
										    		</tr>
										    		<tr>
										    			<td>
												    		<table class="table table-bordered table-striped" id="example1">
													    		<thead>
													    			<tr>
													    				<th>No</th>
													    				<th>Kode Permohonan Izin</th>
													    				<th>No. Reg</th>
													    				<th>No. Izin</th>
													    				<th>Pemohon Izin</th>
													    				<th>Perusahaan</th>
													    				<th>Jenis Izin</th>
													    				<th>Tanggal Terbit</th>
													    				<th>Aksi</th>
													    			</tr>
													    		</thead>
													    		<?php
													    			$id = $this->session->userdata('member_id');
													    			$sql = $this->supermodel->queryManual("SELECT 
													    													a.*,
																											b.nama_pemohon as nama_pemohon,
																											c.nama_perusahaan as nama_perusahaan,
																											d.*
													    													from 
													    													sppl a,pemohon b,perusahaan c,jenisizin d 
													    													WHERE 
													    													a.pemohon_id = b.pemohon_id AND
													    													a.perusahaan_id = c.perusahaan_id AND
													    													a.jenisizin_id = d.jenisizin_id AND
													    													a.status_perizinan = '1' AND
													    													a.member_id = '".$id."' ORDER BY a.permohonan_id DESC");
																	if($sql->num_rows()>0) {
																		$no=1;
																		foreach ($sql->result() as $r) {
																			$thn = substr($r->tgl_terbit, 0,4);
																			$bln = substr($r->tgl_terbit, 5,2);
																			$tgl = substr($r->tgl_terbit, 8,2);
													    		?>
													    			<tr>
													    				<td><?php echo $no++ ?></td>
													    				<td><?php echo $r->permohonan_id ?></td>
													    				<td><?php echo $r->no_reg ?></td>
													    				<td><?php echo $r->no_izin ?></td>
													    				<td><?php echo $r->nama_pemohon ?></td>
													    				<td><?php echo $r->nama_perusahaan ?></td>
													    				<td><?php echo $r->nama_perizinan; ?></td>
													    				<td><?php echo $tgl."-".$bln."-".$thn;  ?></td>
													    				<td>
													    					<a href="<?php echo site_url('dashboard_member/vdetail/'.$r->jenisizin_id."/".$r->permohonan_id) ?>" class="btn btn-info btn-xs"><i class="fa fa-search"></i></a>
													    				</td>
													    			</tr>
													    		<?php }} ?>
												    		</table>
												    	</td>
										    		</tr>
												</table>
											</div>

											<div id="uklupl" class="tab-pane fade">
												<table class="table">
									    			<tr>
										    			<td align="center"><label>Permohonan UKL-UPL yang sedang di urus</label></td>
										    		</tr>
										    		<tr>
										    			<td>
															<table class="table">
													    		<tr>
													    			<td>
															    		<table class="table table-bordered table-striped" id="example2">
																    		<thead>
																    			<tr>
																    				<th>No</th>
																    				<th>Kode Permohonan Izin</th>
																    				<th>Pemohon Izin</th>
																    				<th>Perusahaan</th>
																    				<th>Jenis Izin</th>
																    				<th>Tanggal Pengajuan</th>
																    				<th>Aksi</th>
																    			</tr>
																    		</thead>
																    		<?php
																    			$id = $this->session->userdata('member_id');
																    			$sql = $this->supermodel->queryManual("SELECT 
																    													a.*,
																														b.nama_pemohon as nama_pemohon,
																														c.nama_perusahaan as nama_perusahaan,
																														d.*
																    													from 
																    													ukl_upl a,pemohon b,perusahaan c,jenisizin d 
																    													WHERE 
																    													a.pemohon_id = b.pemohon_id AND
																    													a.perusahaan_id = c.perusahaan_id AND
																    													a.jenisizin_id = d.jenisizin_id AND
																    													a.member_id = '".$id."' ORDER BY a.permohonan_id DESC");
																				if($sql->num_rows()>0) {
																					$no=1;
																					foreach ($sql->result() as $r) {
																						$thn = substr($r->tgl_permohonan, 0,4);
																						$bln = substr($r->tgl_permohonan, 5,2);
																						$tgl = substr($r->tgl_permohonan, 8,2);
																    		?>
																    			<tr>
																    				<td><?php echo $no++ ?></td>
																    				<td><?php echo $r->permohonan_id ?></td>
																    				<td><?php echo $r->nama_pemohon ?></td>
																    				<td><?php echo $r->nama_perusahaan ?></td>
																    				<td><?php echo $r->nama_perizinan; ?></td>
																    				<td><?php echo $tgl."-".$bln."-".$thn;  ?></td>
																    				<td>
																    					<a href="<?php echo site_url()."/perizinan_lingkungan/edit/".$r->permohonan_id."/".$r->jenisizin_id?>"  class="btn btn-warning btn-xs"><i class="fa fa-edit "></i></a>
																    					<a href="<?php echo site_url()."/upload_syarat/index/".$r->pemohon_id."/".$r->perusahaan_id."/".$r->jenisizin_id."/".$r->permohonan_id?>"  class="btn btn-info btn-xs"><i class="fa fa-arrow-circle-right"></i></a>
																    				</td>
																    			</tr>
																    		<?php }} ?>
															    		</table>
															    	</td>
															    </tr>
															    <tr>
										    			<td align="center"><label>Permohonan UKL-UPL yang telah selesai</label></td>
										    		</tr>
										    		<tr>
										    			<td>
												    		<table class="table table-bordered table-striped" id="example1">
													    		<thead>
													    			<tr>
													    				<th>No</th>
													    				<th>Kode Permohonan Izin</th>
													    				<th>No. Reg</th>
													    				<th>No. Izin</th>
													    				<th>Pemohon Izin</th>
													    				<th>Perusahaan</th>
													    				<th>Jenis Izin</th>
													    				<th>Tanggal Terbit</th>
													    				<th>Aksi</th>
													    			</tr>
													    		</thead>
													    		<?php
													    			$id = $this->session->userdata('member_id');
													    			$sql = $this->supermodel->queryManual("SELECT 
													    													a.*,
																											b.nama_pemohon as nama_pemohon,
																											c.nama_perusahaan as nama_perusahaan,
																											d.*
													    													from 
													    													ukl_upl a,pemohon b,perusahaan c,jenisizin d 
													    													WHERE 
													    													a.pemohon_id = b.pemohon_id AND
													    													a.perusahaan_id = c.perusahaan_id AND
													    													a.jenisizin_id = d.jenisizin_id AND
													    													a.status_perizinan = '1' AND
													    													a.member_id = '".$id."' ORDER BY a.permohonan_id DESC");
																	if($sql->num_rows()>0) {
																		$no=1;
																		foreach ($sql->result() as $r) {
																			$thn = substr($r->tgl_terbit, 0,4);
																			$bln = substr($r->tgl_terbit, 5,2);
																			$tgl = substr($r->tgl_terbit, 8,2);
													    		?>
													    			<tr>
													    				<td><?php echo $no++ ?></td>
													    				<td><?php echo $r->permohonan_id ?></td>
													    				<td><?php echo $r->no_reg ?></td>
													    				<td><?php echo $r->no_izin ?></td>
													    				<td><?php echo $r->nama_pemohon ?></td>
													    				<td><?php echo $r->nama_perusahaan ?></td>
													    				<td><?php echo $r->nama_perizinan; ?></td>
													    				<td><?php echo $tgl."-".$bln."-".$thn;  ?></td>
													    				<td>
													    					<a href="" class="btn btn-info btn-xs"><i class="fa fa-search"></i></a>
													    				</td>
													    			</tr>
													    		<?php }} ?>
												    		</table>
												    	</td>
										    		</tr>
															</table>
														</td>
													</tr>
												</table>
											</div>

											<div id="amdal" class="tab-pane fade">
												<table class="table">
									    			<tr>
										    			<td align="center"><label>Permohonan AMDAL yang sedang di urus</label></td>
										    		</tr>
										    		<tr>
										    			<td>
												    		<table class="table table-bordered table-striped" id="example3">
													    		<thead>
													    			<tr>
													    				<th>No</th>
													    				<th>Kode Permohonan Izin</th>
													    				<th>Pemohon Izin</th>
													    				<th>Perusahaan</th>
													    				<th>Jenis Ijin</th>
													    				<th>Tanggal Pengajuan</th>
													    				<th>Aksi</th>
													    			</tr>
													    		</thead>
													     		<?php
													    			$id = $this->session->userdata('member_id');
													    			$sql = $this->supermodel->queryManual("SELECT 
													    													a.*,
																											b.nama_pemohon as nama_pemohon,
																											c.nama_perusahaan as nama_perusahaan,
																											d.*
													    													from 
													    													amdal a,pemohon b,perusahaan c,jenisizin d 
													    													WHERE 
													    													a.pemohon_id = b.pemohon_id AND
													    													a.perusahaan_id = c.perusahaan_id AND
													    													a.jenisizin_id = d.jenisizin_id AND
													    													a.member_id = '".$id."' ORDER BY a.permohonan_id DESC");
																	if($sql->num_rows()>0) {
																		$no=1;
																		foreach ($sql->result() as $r) {
																			$thn = substr($r->tgl_permohonan, 0,4);
																			$bln = substr($r->tgl_permohonan, 5,2);
																			$tgl = substr($r->tgl_permohonan, 8,2);
													    		?>
													    			<tr>
													    				<td><?php echo $no++ ?></td>
													    				<td><?php echo $r->permohonan_id ?></td>
													    				<td><?php echo $r->nama_pemohon ?></td>
													    				<td><?php echo $r->nama_perusahaan ?></td>
													    				<td><?php echo $r->nama_perizinan; ?></td>
													    				<td><?php echo $tgl."-".$bln."-".$thn;  ?></td>
													    				<td>
													    					<a href="<?php echo site_url()."/perizinan_lingkungan/edit/".$r->permohonan_id."/".$r->jenisizin_id?>"  class="btn btn-warning btn-xs"><i class="fa fa-edit "></i></a>
													    					<a href="<?php echo site_url()."/upload_syarat/index/".$r->pemohon_id."/".$r->perusahaan_id."/".$r->jenisizin_id."/".$r->permohonan_id?>"  class="btn btn-info btn-xs"><i class="fa fa-arrow-circle-right "></i></a>
													    				</td>
													    			</tr>
													    		<?php }} ?>
												    		</table>
												    	</td>
												    </tr>
												    <tr>
										    			<td align="center"><label>Permohonan AMDAL yang telah selesai</label></td>
										    		</tr>
										    		<tr>
										    			<td>
												    		<table class="table table-bordered table-striped" id="example1">
													    		<thead>
													    			<tr>
													    				<th>No</th>
													    				<th>Kode Permohonan Izin</th>
													    				<th>No. Reg</th>
													    				<th>No. Izin</th>
													    				<th>Pemohon Izin</th>
													    				<th>Perusahaan</th>
													    				<th>Jenis Izin</th>
													    				<th>Tanggal Terbit</th>
													    				<th>Aksi</th>
													    			</tr>
													    		</thead>
													    		<?php
													    			$id = $this->session->userdata('member_id');
													    			$sql = $this->supermodel->queryManual("SELECT 
													    													a.*,
																											b.nama_pemohon as nama_pemohon,
																											c.nama_perusahaan as nama_perusahaan,
																											d.*
													    													from 
													    													amdal a,pemohon b,perusahaan c,jenisizin d 
													    													WHERE 
													    													a.pemohon_id = b.pemohon_id AND
													    													a.perusahaan_id = c.perusahaan_id AND
													    													a.jenisizin_id = d.jenisizin_id AND
													    													a.status_perizinan = '1' AND
													    													a.member_id = '".$id."' ORDER BY a.permohonan_id DESC");
																	if($sql->num_rows()>0) {
																		$no=1;
																		foreach ($sql->result() as $r) {
																			$thn = substr($r->tgl_terbit, 0,4);
																			$bln = substr($r->tgl_terbit, 5,2);
																			$tgl = substr($r->tgl_terbit, 8,2);
													    		?>
													    			<tr>
													    				<td><?php echo $no++ ?></td>
													    				<td><?php echo $r->permohonan_id ?></td>
													    				<td><?php echo $r->no_reg ?></td>
													    				<td><?php echo $r->no_izin ?></td>
													    				<td><?php echo $r->nama_pemohon ?></td>
													    				<td><?php echo $r->nama_perusahaan ?></td>
													    				<td><?php echo $r->nama_perizinan; ?></td>
													    				<td><?php echo $tgl."-".$bln."-".$thn;  ?></td>
													    				<td>
													    					<a href="" class="btn btn-info btn-xs"><i class="fa fa-search"></i></a>
													    				</td>
													    			</tr>
													    		<?php }} ?>
												    		</table>
												    	</td>
										    		</tr>
												</table>
											</div>
										</div>				   

                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


	<!-- MODAL -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    <form method="POST" action="<?php echo site_url('perizinan_lingkungan/index')?>" enctype="multipart/form-data">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title"><b>Pilih Jenis Izin</b></h4>
	        </div>
	        <div class="modal-body">
	        	<select name="jenisizin_id" class="form-control">
	        		<?php 
			        	$sql = $this->supermodel->queryManual('select * from jenisizin');
			        	if($sql->num_rows()>0) {
							foreach ($sql->result() as $r) {
			       	?>
			       	<option value="<?php echo $r->jenisizin_id ?>"><?php echo $r->nama_perizinan; ?></option>
			       	<?php }} ?>
	        	</select>

	        </div>
	        <div class="modal-footer">
	          <input type="submit" class="btn btn-success" name="buat" value="Buat">
	        </div>
	      </div>
	      </form> 
	    </div>
	  </div>
	<!-- END MODAL -->



