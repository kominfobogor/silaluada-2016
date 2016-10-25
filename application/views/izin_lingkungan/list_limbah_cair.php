<div class="w3-container" style="padding: 10px 10px 20px 10px;">
  <h2>Data Limbah Cair</h2>
  <br />
  <br />

  Pencarian : <input class="search-datatable" type="text">
  <button class="btn btn-default btn-search-datatable">
      Cari
  </button>
  <br>
  <br>
  <div class="w3-container w3-border city">
    <p>
        <div style="overflow: auto;">
          <table class="datatables table-border table-striped" id="table-limbah-cair">
              <thead>
                <tr>
                    <td>
                        No.
                    </td>
                    <td>
                        No. Izin  
                    </td>
                    <td>
                        Jenis Kegiatan
                    </td>
                    <td>
                        Nama Kegiatan
                    </td>
                    <td>
                        Alamat
                    </td>
                    <td>
                        Pimpinan  
                    </td>
                    <td>
                        Kontak Person 
                    </td>
                    <td>
                        Masa Berlaku
                    </td>
                    <td>
                        Status
                    </td>
                </tr>
              </thead>
          </table>
        </div>
    </p>
  </div>
</div>

<link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables/media/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>asset_app/css/style.css">
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset_app/js/perizinan/list.js"></script>

<script>
    window.LIST_PERIZINAN.init();
</script>