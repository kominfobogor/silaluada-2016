<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
     <?php echo $title ?>
  </h1>
  <ol class="breadcrumb">
    <li>
        <a href="<?php echo site_url('adminweb'); ?>">
            <i class="fa fa-dashboard"></i> Dashboard
        </a>
    </li>
    <li>Pengelolaan Lingkungan Hidup</li>
    <li class="active"><?php echo $title ?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">
          Pesan Masuk
      </h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body">

        <a class="send-message btn btn-sm btn-warning"><i class="fa fa-edit"></i> Buat Pesan</a>
        <a href="<?php echo site_url('adm_pesan/kirim')?>" class="btn btn-sm btn-default"> Lihat Pesan Terkirim </a>

        <br>
        <br>

        <?php
          if($this->session->flashdata('delete'))
          {
            echo $this->session->flashdata('delete');
          }
          ?>

        <br>


        <table class="table table-bordered table-hover datatables">
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
                  <td><?php echo $get_member_name($row->pesan_dari_id); ?></td>
                  <td><?php echo $row->pesan_text; ?></td>
                  <td><?php echo $row->pesan_tanggal; ?></td>
                  <td>
                    <a class="btn btn-danger btn-sm" href="<?php echo site_url('pesan/hapus/'.$row->pesan_id.'/adm_pesan'); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">
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
    <div class="box-footer">
    </div>
    <!-- /.box-footer-->
  </div><!-- /.box -->
</section><!-- /.content -->

<?php $this->load->view('admin/pesan/modal'); ?>

<script src="<?php echo base_url(); ?>asset_app/js/perizinan/pesan.js"></script>
<script type="text/javascript">
  window.PESAN.init();
</script>