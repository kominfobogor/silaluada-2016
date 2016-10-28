<!--Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $title ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li>Pengelolaan Lingkungan Hidup</li>
    <li class="active"><?php echo $title ?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php
    if($this->session->flashdata('success')) {
      echo '
      <div class="alert alert-success">'.$this->session->flashdata('success').'</div> 
      ';
    }
    if($this->session->flashdata('error')) {
      echo '
      <div class="alert alert-danger">'.$this->session->flashdata('error').'</div> 
      ';
    }
    ?>
  <!-- Default box -->
  <div class="box">
    <div class="box-body">
    <table class="table table-bordered table-hover" id="example1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>NIK</th>
          <th>Gambar KTP</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
      if($sql->num_rows()>0) {
        $no=0;
        foreach ($sql->result() as $rows) {
          $no++;
      ?>

      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $rows->nama_member ?></td>
        <td><?php echo $rows->alamat_member ?></td>
        <td><?php echo $rows->email ?></td>
        <td><?php echo $rows->nik_member ?></td>
        <td><img width="100" height="70" src="<?php echo base_url('uploads/perizinan/image_ktp')."/".$rows->image_ktp ?>"></td>
        <td><?php echo ($rows->status_member==1 ? "Aktif" : "Belum Aktif") ?></td>
        <td align="center">
          <a href="<?php echo site_url()."/adm_perizinan_member/hapus/".$rows->member_id ?>" class="btn btn-xs bg-red" data-toggle="tooltip" title="Hapus Data" onclick="return confirm('Menghapus member juga menghapus seluruh data yang di urus oleh member tersebut, Anda yakin ingin menghapus member <?php echo $rows->nama_member; ?> ?')"><i class="fa fa-trash-o"></i></a>
        </td>
      </tr>
      <?php }} ?>
      </tbody>
    </table>   
    </div><!-- /.box-body -->
  </div><!-- /.box -->

</section><!-- /.content