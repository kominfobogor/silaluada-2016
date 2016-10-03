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
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Perusahaan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                   
							    	<table class="table">
							    			<tr>
							    				<td><a href="<?php echo site_url('perusahaan/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></td>
							    			</tr>
							    			<tr>
							    				<td></td>
							    			</tr>
							    	</table>
							    	<div style="height:auto;width:auto; overflow:scroll;">
							    		<table class="table table-bordered table-striped" id="example1">
								    		<thead>
								    			<tr>
								    				<th>No</th>
								    				<th>Nama Perusahaan</th>
								    				<th>Status</th>
								    				<th>Alamat</th>
								    				<th>Kecamatan</th>
								    				<th>Kelurahan</th>
								    				<th>Nomor Telp</th>
								    				<th>Jenis Usaha</th>
								    				<th>Kapasitas Produksi</th>
								    				<th>Luas Lahan</th>
								    				<th>Luas Bangunan</th>
								    				<th>Kondisi Lahan Saat Ini</th>
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
								    				<td><?php echo $r->nama_perusahaan ?></td>
								    				<td><?php echo $r->status_perusahaan ?></td>
								    				<td><?php echo $r->alamat_perusahaan ?></td>
								    				<td><?php echo $r->kecamatan_nama; ?></td>
								    				<td><?php echo $r->kelurahan_nama ?></td>
								    				<td><?php echo $r->notelp_perusahaan ?></td>
								    				<td><?php echo $r->jenis_usaha ?></td>
								    				<td><?php echo $r->kapasitas_produksi ?> Unit</td>
								    				<td><?php echo $r->luas_lahan ?> M</td>
								    				<td><?php echo $r->luas_bangunan ?> M</td>
								    				<td><?php echo $r->kondisi ?></td>
								    				<td><a href="<?php echo site_url()."/perusahaan/edit/".$r->perusahaan_id ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></td>
								    			</tr>
								    		<?php }} ?>
							    		</table>
							    	</div>
							    	<!-- END -->		
                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
