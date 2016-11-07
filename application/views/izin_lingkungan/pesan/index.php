<div class="row">
	<ol class="breadcrumb">
		<li>
			<a href="<?php echo site_url('dashboard_member'); ?>">
				<svg class="glyph stroked home">
					<use xlink:href="#stroked-home"></use>
				</svg>
			</a>
		</li>

		<li class="active">Dashboard</li>
		<li class="active">Perpesanan</li>
	</ol>
</div><!--/.row-->
<br>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Pesan Masuk</div>
			<div class="panel-body">
				
				<div class="canvas-wrapper">

					<a href="javascript:;" class="btn btn-primary send-message">
						<i class="fa fa-edit"></i>&nbsp; Buat Pesan
					</a>

					<a href="<?php echo site_url('pesan/kirim')?>" class="btn btn-default">
						<i class="fa fa-sad"></i>&nbsp; Lihat Pesan Terkirim
					</a>
					<br>
					<br>

					<?php
					if($this->session->flashdata('delete'))
					{
						echo $this->session->flashdata('delete');
					}
					?>

					<br>
					<div style="overflow:auto;">

						<table class="table table-bordered table-striped datatables">
							<thead>
								<tr>
									<th style="width: 30px;">No.</th>
									<th>Dari</th>
									<th>Isi Pesan</th>
									<th>Tanggal Kirim</th>
									<th style="width: 150px;">Tools</th>
								</tr>
							</thead>
							<tbody>
							<?php $no = 1; ?>
							<?php if($diterima): ?>
							<?php foreach($diterima as $row): ?>
								<tr class="<?php echo ($row->pesan_status == 0) ? 'info-new': ''; ?>">
									<td><?php echo $no; ?></td>
									<td><?php echo $get_user_name($row->pesan_dari_id); ?></td>
									<td><?php echo $row->pesan_text; ?></td>
									<td><?php echo $row->pesan_tanggal; ?></td>
									<td>
										<a class="btn btn-danger btn-sm" href="<?php echo site_url('pesan/hapus/'.$row->pesan_id.'/pesan'); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">
											<i class="fa fa-times"></i> Hapus
										</a>
										<a class="btn btn-primary btn-sm send-message" data-id="<?php echo $row->pesan_dari_id; ?>">
											<i class="fa fa-check"></i> Balas
										</a>
									</td>
								</tr>
							<?php $no++; ?>
							<?php endforeach; ?>
							<?php endif;?>
						</tbody>
						</table>
					</div>
				</div>
		<!-- END -->
		</div>
	</div>
</div>

<?php $this->load->view('izin_lingkungan/pesan/modal'); ?>

<script src="<?php echo base_url(); ?>asset_app/js/perizinan/pesan.js"></script>
<script type="text/javascript">
	window.PESAN.init();
</script>