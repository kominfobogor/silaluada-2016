<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Dashboard</li>
        <li class="active">Detail</li>
      </ol>
    </div><!--/.row-->
    <br>
    <div class="row">
      <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="<?php echo site_url('dashboard_member/index'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>&nbsp;Detail Permohonan Yang Selesai</div>
           <div class="panel-body">
            <div class="canvas-wrapper">
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
							   
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading">Persyaratan</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
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
                 </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->

