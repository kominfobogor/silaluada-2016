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
                  <h3 class="box-title">Data Pemohon</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

          
							    		<table class="table">
							    			<tr>
							    				<td><a href="<?php echo site_url('pemohon/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a></td>
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
											    				<th>Nama Lengkap</th>
											    				<th>Jabatan</th>
											    				<th>Alamat</th>
											    				<th>Kecamatan</th>
											    				<th>Kelurahan</th>
											    				<th>NIK</th>
											    				<th>No Telp</th>
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
											    				<td><?php echo $r->nama_pemohon ?></td>
											    				<td><?php echo $r->jabatan ?></td>
											    				<td><?php echo $r->alamat_pemohon ?></td>
											    				<td><?php echo $r->kecamatan_nama ?></td>
											    				<td><?php echo $r->kelurahan_nama ?></td>
											    				<td><?php echo $r->nik_pemohon ?></td>
											    				<td><?php echo $r->notelp_pemohon ?></td>
											    				<td><a href="<?php echo site_url()."/pemohon/edit/".$r->pemohon_id?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></td>
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