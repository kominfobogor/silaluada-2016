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
        foreach ($sppl->result() as $row) {
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
		  <a href="#popup1" class="btn btn-xs bg-orange" data-toggle="tooltip" title="Ubah Status Permohonan" onclick="myFunction1(<?php echo "'".$row->nama_member."'".","."'".$row->alamat_member."'".","."'".$row->nik_member."'".","."'".$row->email."'".","."'".$row->nama_pemohon."'".","."'".$row->jabatan."'".","."'".$row->alamat_pemohon."'".","."'".$row->nik_pemohon."'".","."'".$row->notelp_pemohon."'".","."'".$row->nama_perizinan."'".","."'".$row->permohonan_id."'".","."'".$row->tgl_permohonan."'".","."'".$row->status_perizinan."'".","."'".$row->nama_perusahaan."'".","."'".$row->status_perusahaan."'".","."'".$row->nama_kegiatan."'".","."'".$row->alamat_perusahaan."'".","."'".$row->lat."'".","."'".$row->lng."'".","."'".$row->rencana_lokasi."'".","."'".$row->notelp_perusahaan."'".","."'".$row->jenis_usaha."'".","."'".$row->kapasitas_produksi."'".","."'".$row->luas_lahan."'".","."'".$row->luas_bangunan."'".","."'".$row->kondisi."'";
			?>)"><i class="fa fa-file-text-o"></i></a>
        
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
  <div id="popup1">
  <div class="window1">
  <a href="#" class="close-button" title="Close">X</a>
  <?php
			echo form_open_multipart('adm_cerobong/tmb_lokasiuji');
?>
<div class="box">
  <div class="box-header text-right">
      <button type="submit" class="btn btn-sm bg-orange"><i class="fa fa-save"></i> Simpan</button>
   
  </div>
</div>
<div class="row">

  <div class="col-md-2">
  <h6> Data Member</h6>
    <div class="box">
	
      <div class="box-body">
	 
       <div class="form-group">
          <label>Nama Member*</label>
          <input type="text" name="nama_member" value="" class="form-control"  id="nama_member">
        </div>
		<div class="form-group">
          <label>Alamat Member*</label>
          <input type="text" name="alamat_member" value="" class="form-control" id="alamat_member">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Nik Member*</label>
          <input type="text" name="nik_member" value="" class="form-control" id="nik_member" >
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>email*</label>
          <input type="text" name="nama_lokasi" value="" class="form-control" id="email">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Nama Lokasi*</label>
          <input type="text" name="nama_lokasi" value="" class="form-control">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Nama Lokasi*</label>
          <input type="text" name="nama_lokasi" value="" class="form-control">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		
      </div>
    </div>
  </div>
  <div class="col-md-2">
  <h6> Data Pemohon</h6>
    <div class="box">
      <div class="box-body">
	 
       <div class="form-group">
          <label>Nama Pemohon*</label>
          <input type="text" name="nama_pemohon" value="" class="form-control" id="nama_pemohon">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Jabatan*</label>
          <input type="text" name="jabatan" value="" class="form-control" id="jabatan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Alamat Pemohon*</label>
          <input type="text" name="alamat_pemohon" value="" class="form-control" id="alamat_pemohon">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Nik Pemohon*</label>
          <input type="text" name="nik_pemohon" value="" class="form-control" id="nik_pemohon">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>NoTelp Pemohon*</label>
          <input type="text" name="notelp_pemohon" value="" class="form-control" id="notelp_pemohon">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		
      </div>
    </div>
  </div>
  <div class="col-md-2">
  <h6> Data Perusahaan</h6>
    <div class="box">
      <div class="box-body">
	 
       <div class="form-group">
          <label>Nama Perusahaan*</label>
          <input type="text" name="nama_perusahaan" value="" class="form-control" id="nama_perusahaan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Status Perusahaan*</label>
          <input type="text" name="status_perusahaan" value="" class="form-control" id="status_perusahaan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Nama Kegiatan*</label>
          <input type="text" name="nama_kegiatan" value="" class="form-control" id="nama_kegiatan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Alamat Perusahaan*</label>
          <input type="text" name="alamat_perusahaan" value="" class="form-control" id="alamat_perusahaan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Lat*</label>
          <input type="text" name="lat" value="" class="form-control" id="lat">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Lng*</label>
          <input type="text" name="lng" value="" class="form-control" id="lng">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Lokasi*</label>
          <input type="text" name="lokasi" value="" class="form-control" id="lokasi">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2">
  <h6> Data Perizinan</h6>
    <div class="box">
      <div class="box-body">
	 
       <div class="form-group">
          <label>Nama Perizinan*</label>
          <input type="text" name="nama_perizinan" value="" class="form-control" id="nama_perizinan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Permohonan Id*</label>
          <input type="text" name="permohonan_id" value="" class="form-control" id="permohonan_id">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Tgl Permohonan*</label>
          <input type="text" name="tgl_permohonan" value="" class="form-control" id="tgl_permohonan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		<div class="form-group">
          <label>Status Perizinan*</label>
          <input type="text" name="status_perizinan" value="" class="form-control" id="status_perizinan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2">
  <h6> Data Perizinan</h6>
    <div class="box">
      <div class="box-body">
	 
       <div class="form-group">
          <label>Nama Perizinan*</label>
          <input type="text" name="nama_perizinan" value="" class="form-control" id="nama_perizinan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		
      </div>
    </div>
  </div>
  <div class="col-md-2">
  <h6> Data Perizinan</h6>
    <div class="box">
      <div class="box-body">
	 
       <div class="form-group">
          <label>Nama Perizinan*</label>
          <input type="text" name="nama_perizinan" value="" class="form-control" id="nama_perizinan">
          <p class="help-block text-red"><?php echo form_error('nama_lokasi', ' ')?></p>
        </div>
		
      </div>
    </div>
  </div>

  
</div>
  
</div>
</form>

  </div>
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
		
  </div>
  </div>


  
</section><!-- /.content -->
	

<script>
	function myFunction(x,m,z){
	if (m==="1")
            {
              var stat =  'Kelengkapan Dokumen';
            }
			else if (m==="2")
            {
              var stat =  'verifikasi Dokumen';
            } 
			else if (m==="3")
            {
              var stat =  'Proses';
            }
            else
            {
             var stat =  'Penerbitan Izin Dan Publikasi Web';
            } 
	document.getElementById("sppl_id").value = x;
	document.getElementById("status").value = stat;
	document.getElementById("keterangan").value = z;
	}
</script>
<script>
	
	function myFunction1(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z){
		if (m==="1")
            {
              var stat =  'Kelengkapan Dokumen';
            }
			else if (m==="2")
            {
              var stat =  'verifikasi Dokumen';
            } 
			else if (m==="3")
            {
              var stat =  'Proses';
            }
            else
            {
             var stat =  'Penerbitan Izin Dan Publikasi Web';
            } 
	
	document.getElementById("nama_member").value = a;
	document.getElementById("alamat_member").value = b;
	document.getElementById("nik_member").value = c;
	document.getElementById("email").value = d;
	document.getElementById("nama_pemohon").value = e;
	document.getElementById("jabatan").value = f;
	document.getElementById("alamat_pemohon").value = g;
	document.getElementById("nik_pemohon").value = h;
	document.getElementById("notelp_pemohon").value = i;
	document.getElementById("nama_perizinan").value = j;
	document.getElementById("permohonan_id").value = k;
	document.getElementById("tgl_permohonan").value = l;
	document.getElementById("status_perizinan").value = stat;
	document.getElementById("nama_perusahaan").value = n;
	document.getElementById("status_perusahaan").value = o;
	document.getElementById("nama_kegiatan").value = p;
	document.getElementById("alamat_perusahaan").value = q;
	document.getElementById("lat").value = r;
	document.getElementById("lng").value = s;
	document.getElementById("lokasi").value = t;
	document.getElementById("notelp_perusahaan").value = u;
	document.getElementById("jenis_usaha").value = v;
	document.getElementById("kapasitas_produksi").value = w;
	document.getElementById("luas_lahan").value = x;
	document.getElementById("luas_bangunan").value = y;
	document.getElementById("kondisi").value = z;
	
	}
</script>
</section><!-- /.content -->
