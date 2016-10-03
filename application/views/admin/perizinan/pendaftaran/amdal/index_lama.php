<!-- Content Header (Page header) -->
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
    <div class="box-header with-border">
      <a href="<?php echo site_url('adm_sppl/tambah')?>" class="btn btn-sm bg-light-blue"><i class="fa fa-plus"></i> Tambah</a>
    </div>
    <div class="box-body">
    <table class="table table-bordered table-hover" id="example1">
      <thead>
        <tr>
          <th>No</th>
		  <th>No SPPL</th>
          <th>Nama Pemohon</th>
          <th>Nama Member</th>
          <th>Nama Perusahaan</th>
          <th>Status Permohonan</th>
          <th>Tools</th>
        </tr>
      </thead>
      <tbody>
	  
        <?php
        $no = 1;
        foreach ($amdal->result() as $row) {
        ?>
        <tr>
          <td><?php echo $no ?></td>
		  <td><?php echo $row->permohonan_id ?></td>
        <td><?php echo $row->nama_pemohon ?></td>
        <td><?php echo $row->nama_member ?></td>
        <td><?php echo $row->nama_perusahaan ?></td>
        <td>
          <?php 
            if ($row->status_perizinan=="1")
            {
              echo 'Kelengkapan Dokumen';
            }
			else if ($row->status_perizinan=="2")
            {
              echo 'verifikasi Dokumen';
            } 
			else if ($row->status_perizinan=="3")
            {
              echo 'Proses';
            }
            else
            {
              echo 'Penerbitan Izin Dan Publikasi Web';
            } 
          ?>
         
        </td>
          <td align="center">
		
         <!-- <a href="<?php echo site_url('adm_sppl/approve?tabel=sppl_lama&primary='.$rows->sppl_lama_id.'&url=adm_sppl')?>" class="btn btn-xs bg-blue" data-toggle="tooltip" title="Ubah Status Permohonan" onclick="return confirm('Ini akan merubah status permohonan menjadi sudah diterima, lanjutkan?')"><i class="fa fa-check-square"></i></a> 
		  <a href="#popup" class="btn btn-xs bg-blue" data-toggle="tooltip" title="Edit Data" onclick="myFunction(<?php echo "'".$rows->sppl_lama_id."'".","."'".$rows->status."'".","."'".$rows->keterangan."'";?>)"><i class="fa fa-pencil"></i></a>
		 -->
		  <a href="#popup" class="btn btn-xs bg-blue" data-toggle="tooltip" title="Ubah Status Permohonan" onclick="myFunction(<?php echo "'".$row->permohonan_id."'".","."'".$row->status_perizinan."'".","."'".$row->keterangan."'";?>)"><i class="fa fa-check-square"></i></a>
          <a href="<?php echo site_url('adm_sppl/edit/'.$row->permohonan_id)?>" class="btn btn-xs bg-green" data-toggle="tooltip" title="Edit Data"><i class="fa fa-pencil"></i></a>
		 
          <a href="<?php echo site_url('trash/proses?tabel=sppl_lama&primary='.$row->permohonan_id.'&url=adm_sppl')?>" class="btn btn-xs bg-red" data-toggle="tooltip" title="Hapus Data" onclick="return confirm('Anda yakin??')"><i class="fa fa-trash-o"></i></a>
        </td>
        </tr>
        <?php
        $no++;
        }
        ?>
      </tbody>
    </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
<div id="popup">
			<div class="window">
				<a href="#" class="close-button" title="Close">X</a>
				<label>ID SPPL*</label>
		  <input type="text" name="id_sppl"  class="form-control" id="sppl_id">
		  <?php
				
		  ?>
				<label>Status SPPL*</label>
				<input type="text" name="tgl_sppl"  class="form-control" id="status">
				<select name="tgl_sppl" >
				
     <option value="0" >Select Manufacturer</option>
     <option value="1">--Any--</option>
     <option value="2">Toyota</option>
     <option value="3">Nissan</option>
  </select>
		  <label>Keterangan*</label>
          <input type="text" name="tahun" class="form-control" id="keterangan">
				<!--<h1>Jendela Pop Up</h1>
				<p>Ini adalah jendela Pop Up sederhana tanpa javasript<br/>
				Jendela ini dimunculkan oleh CSS<br/>
				Untuk menutup jendela ini, klik tombol close di kanan atas</p>
				<label> ini aplikasi </label>-->
				
  
        
				
  </div><!-- /.box -->

</section><!-- /.content -->
	
<script>
	function myFunction(x,y,z){
	if (y==="1")
            {
              var stat = 'Sudah Diterima';
            }
            else
            {
              var stat = 'Belum Diterima';
            } 
	document.getElementById("sppl_id").value = x;
	document.getElementById("status").value = stat;
	document.getElementById("keterangan").value = z;
	}
</script>
</section><!-- /.content -->
