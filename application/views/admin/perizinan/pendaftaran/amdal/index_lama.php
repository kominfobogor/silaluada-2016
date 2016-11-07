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
      <!--
      <a href="<?php echo site_url('adm_sppl/tambah')?>" class="btn btn-sm bg-light-blue"><i class="fa fa-plus"></i> Tambah</a>
      -->
    </div>
    <div class="box-body">
    <table class="table table-bordered table-hover" id="example1">
      <thead>
        <tr>
          <th>No</th>
      <th>No Amdal</th>
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
            if ($row->status_perizinan=="0")
            {
              echo 'Pengajuan Izin dan Verifikasi Data';
            }
      else if ($row->status_perizinan=="1")
            {
              echo 'Proses Penerbitan Izin';
            } 
      else if ($row->status_perizinan=="2")
            {
              echo 'Penerbitan Izin dan Publikasi Web';
            }
          ?>
         
        </td>
          <td align="center">
    
         <!-- <a href="<?php echo site_url('adm_sppl/approve?tabel=sppl_lama&primary='.$rows->sppl_lama_id.'&url=adm_sppl')?>" class="btn btn-xs bg-blue" data-toggle="tooltip" title="Ubah Status Permohonan" onclick="return confirm('Ini akan merubah status permohonan menjadi sudah diterima, lanjutkan?')"><i class="fa fa-check-square"></i></a> 
      <a href="#popup" class="btn btn-xs bg-blue" data-toggle="tooltip" title="Edit Data" onclick="myFunction(<?php echo "'".$rows->sppl_lama_id."'".","."'".$rows->status."'".","."'".$rows->keterangan."'";?>)"><i class="fa fa-pencil"></i></a>
     -->
      <a class="btn btn-xs bg-blue change-status" data-toggle="tooltip" title="Ubah Status Permohonan" href="javascript:;"
        data-id="<?php echo $row->permohonan_id; ?>"
        data-status="<?php echo $row->status_perizinan; ?>"
        data-email="<?php echo $row->email; ?>"
        data-nama="<?php echo $row->nama_perizinan; ?>"
        >
          <i class="fa fa-check-square"></i>
      </a>
          
      <!--<a href="<?php echo site_url('adm_sppl/edit/'.$row->permohonan_id)?>" class="btn btn-xs bg-green" data-toggle="tooltip" title="Edit Data"><i class="fa fa-pencil"></i></a>-->


      <a href="javascript:;" data-id="<?php echo $row->permohonan_id; ?>" class="detail-izin btn btn-xs bg-orange" data-toggle="tooltip" title="Lihat Permohonan" asonclick="myFunction1(<?php echo "'".$row->nama_member."'".","."'".$row->alamat_member."'".","."'".$row->nik_member."'".","."'".$row->email."'".","."'".$row->nama_pemohon."'".","."'".$row->jabatan."'".","."'".$row->alamat_pemohon."'".","."'".$row->nik_pemohon."'".","."'".$row->notelp_pemohon."'".","."'".$row->nama_perizinan."'".","."'".$row->permohonan_id."'".","."'".$row->tgl_permohonan."'".","."'".$row->status_perizinan."'".","."'".$row->nama_perusahaan."'".","."'".$row->status_perusahaan."'".","."'".$row->nama_kegiatan."'".","."'".$row->alamat_perusahaan."'".","."'".$row->lat."'".","."'".$row->lng."'".","."'".$row->rencana_lokasi."'".","."'".$row->notelp_perusahaan."'".","."'".$row->jenis_usaha."'".","."'".$row->kapasitas_produksi."'".","."'".$row->luas_lahan."'".","."'".$row->luas_bangunan."'".","."'".$row->kondisi."'";
      ?>)"><i class="fa fa-file-text-o"></i></a>
      
      <a href="<?php echo site_url('trash/proses?tabel=amdal&primary='.$row->permohonan_id.'&url=adm_perizinan_amdal')?>" class="btn btn-xs bg-red" data-toggle="tooltip" title="Hapus Data" onclick="return confirm('Anda yakin??')"><i class="fa fa-trash-o"></i></a>
        

        <div class="modal fade" tabindex="-1" role="dialog" id="sppl<?php echo $row->permohonan_id; ?>" style="width: 100%">
      <div class="modal-dialog modal-lg" style="width: 100%">
        <div class="modal-content">
            

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">
              Detail Perizinan
            </h4>
          </div>
          <div class="modal-body" style="text-align: left;">

              <div class="col-md-2">
                <h5>Data Member</h5>

                <div class="form-group">
                  <label>
                    Nama Member
                  </label>
                  <input class="form-control" value="<?php echo $row->nama_member; ?>" type="text">
                </div>

                <div class="form-group">
                  <label>
                    NIK Member
                  </label>
                  <input class="form-control" value="<?php echo $row->nik_member; ?>" type="text">
                </div>

                <div class="form-group">
                  <label>
                    Email Member
                  </label>
                  <input class="form-control" value="<?php echo $row->email; ?>" type="text">
                </div>

                <div class="form-group">
                  <label>
                    Alamat Member
                  </label>
                  <textarea class="form-control"><?php echo $row->alamat_member; ?></textarea>
                </div>

              </div>

              <div class="col-md-2">
                <h5>Data pemohon</h5>

                <div class="form-group">
                  <label>
                    Nama Pemohon
                  </label>
                  <input class="form-control" value="<?php echo $row->nama_pemohon; ?>" type="text">
                </div>

                <div class="form-group">
                  <label>
                    NIK Pemohon
                  </label>
                  <input class="form-control" value="<?php echo $row->nik_pemohon; ?>" type="text">
                </div>

                <div class="form-group">
                  <label>
                    Alamat Pemohon
                  </label>
                  <textarea class="form-control"><?php echo $row->alamat_pemohon; ?></textarea>
                </div>
              </div>

              <div class="col-md-2">
                <h5>Data Perusahaan</h5>

                <div class="form-group">
                  <label>
                    Nama Perusahaan
                  </label>
                  <input class="form-control" value="<?php echo $row->nama_perusahaan; ?>" type="text">
                </div>

                <div class="form-group">
                  <label>
                    Alamat Perusahaan
                  </label>
                  <textarea class="form-control"><?php echo $row->alamat_perusahaan; ?></textarea>
                </div>

              </div>

              <div class="col-md-2">
                <h5>Data Perizinan</h5>

                
                <div class="form-group">
                  <label>
                    Nama Kegiatan
                  </label>
                  <input class="form-control" value="<?php echo $row->nama_kegiatan; ?>" type="text">
                </div>

                <div class="form-group">
                  <label>
                    Rencana Lokasi
                  </label>
                  <input class="form-control" value="<?php echo $row->rencana_lokasi; ?>" type="text">
                </div>

              </div>

              <div class="col-md-4">
                <h5>Persyaratan</h5>

                <?php
                  $sql2 = $this->supermodel->queryManual("SELECT
                                                a.*,b.*,c.* 
                                                FROM izin_persyaratan a,jenisizin b, persyaratan c
                                                WHERE 
                                                a.jenisizin_id = b.jenisizin_id AND 
                                                a.persyaratan_id = c.persyaratan_id AND
                                                a.jenisizin_id = '".$row->jenisizin_id."'");
                  if($sql2->result())
                  foreach($sql2->result() as $persyaratan)
                  {
                      ?>

                      <?php 
                      $check_dokumen = $check_upload_syarat($row->permohonan_id, $persyaratan->persyaratan_id);
                      $dokumennya = ($check_dokumen) ? $check_dokumen->dokumen_id : '';
                      ?>

                      <div class="col-md-6">
                        <?php echo $persyaratan->persyaratan; ?>
                      </div>
                      <div class="col-md-6">
                        <?php echo $nama_dokumen($dokumennya); ?>
                      </div>
                      <div style="clear: both;"> &nbsp; </div>
                      <?php
                  }
                ?>

              </div>

              <div style="clear: both;"> &nbsp; </div>

          </div>

          <div class="modal-footer">
            <button class="btn btn-sm btn-default" data-dismiss="modal" aria-label="Close">
              <i class="fa fa-times"></i> Tutup
            </button>
          </div>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
        



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
  
  
</section><!-- /.content -->
  

  <?php $this->load->view('admin/perizinan/pendaftaran/amdal/modal'); ?>

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

    var optionOther = $('.options-terbit');

    optionOther.hide();

    $('.detail-izin').click(function() {
        var _this = this;
        $('#sppl'+$(this).attr('data-id')).modal('show');
    });

    $('.change-status').click(function() {

        var _this = this;
        $('.modal-status').modal('show');

        var select = $('[name=status_perizinan]');
        var formStatus = $('.form-status');

        select.val($(this).attr('data-status'));

        select.change(function() {
            if(this.value == 2) {
              optionOther.show();

              formStatus.find('[name=no_reg]').attr('required', 'required');
              formStatus.find('[name=no_izin]').attr('required', 'required');
            } else {
              optionOther.hide();
              formStatus.find('[name=no_reg]').removeAttr('required');
              formStatus.find('[name=no_izin]').removeAttr('required');
            }
        });


        formStatus.ajaxForm({
            dataType: 'json',
            data: {
                permohonan_id: $(this).attr('data-id'),
                email: $(this).attr('data-email'),
                nama_izin: $(this).attr('data-nama')
            },
            beforeSend: function() {
                formStatus.find('[type=submit]').html('Harap tunggu..');
            },
            success: function(response) {
                formStatus.find('[type=submit]').html('Simpan');
                toastr.options = {
                        "closeButton": true,
                    };
                toastr[response.status](response.message);

                setTimeout(function() {
                    window.location.reload();
                }, 2000);
            }
        });
    });


</script>
</section><!-- /.content -->
