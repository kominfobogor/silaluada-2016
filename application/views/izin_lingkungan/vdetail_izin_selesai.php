	


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
            <li class="active">Detail</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><a href="<?php echo site_url('dashboard_member/index'); ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>&nbsp;Detail Permohonan Yang Selesai</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  	<table class="table table-striped">
                  		<tr>
                  			<th>Kode Permohonan</th>
                  			<td>:</td>
                  			<th><?php echo $permohonan_id ?></th>
                  		</tr>
                  		<tr>
                  			<th>Nama Perizinan</th>
                  			<td>:</td>
                  			<td><?php echo $nama_perizinan ?></td>
                  		</tr>
                  		<tr>
                  			<th>Nama Pemohon</th>
                  			<td>:</td>
                  			<td><?php echo $nama_pemohon; ?></td>
                  		</tr>
                  		<tr>
                  			<th>Nama Perusahaan</th>
                  			<td>:</td>
                  			<td><?php echo $nama_perusahaan; ?></td>
                  		</tr>
                  		<tr>
                  			<th>Tanggal Pengajuan Permohonan</th>
                  			<td>:</td>
                  			<td><?php echo $tgl_permohonan; ?></td>
                  		</tr>
                  		<tr>
                  			<th>Nama Kegiatan</th>
                  			<td>:</td>
                  			<td><?php echo $nama_kegiatan; ?></td>
                  		</tr>
                  		<tr>
                  			<th>Lokasi Kegiatan</th>
                  			<td>:</td>
                  			<td><?php echo $rencana_lokasi; ?></td>
                  		</tr>
                  		<tr>
                  			<th>No. Reg</th>
                  			<td>:</td>
                  			<td><?php echo $no_reg; ?></td>
                  		</tr>
                  		<tr>
                  			<th>No. Izin Terbit</th>
                  			<td>:</td>
                  			<td><?php echo $no_izin; ?></td>
                  		</tr>
                  		<tr>
                  			<th>Tanggal Terbit Izin</th>
                  			<td>:</td>
                  			<td><?php echo $tgl_terbit; ?></td>
                  		</tr>
                  	</table>
							   

                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Persyaratan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <table class="table table-bordered table-striped">
                	<thead>
                	<tr>
                		<th>No</th>
                		<th>Persyaratan</th>
                		<th>File</th>
                		<th>Aksi</th>
                	</tr>
                	</thead>
                <?php
                	$no = 0;
                	foreach ($syarat->result() as $r) {
                		$no++;
                ?>
                	<tr>
                		<td><?php echo $no; ?></td>
                		<td><?php echo $r->persyaratan; ?></td>
                		<td><?php echo $r->file_name; ?></td>
                		<td><a href="<?php echo site_url('dokumen_member/view_dok/'.$r->file); ?>" target="_blank" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a></td>
                	</tr>
                <?php } ?>
                </table>
                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->


          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

