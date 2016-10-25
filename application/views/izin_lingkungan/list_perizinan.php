<div class="w3-container" style="padding: 10px 10px 20px 10px;">
  <h2>Data Perizinan</h2>
  <br />
  <br />

  Pencarian : <input class="search-datatable" type="text">
  <button class="btn btn-default btn-search-datatable">
      Cari
  </button>
  <br>
  <br>
  <ul class="w3-navbar">
    <li>
        <a href="javascript:void(0)" class="tablink" id="active-first" onclick="openCity(event, 'sppl');">SPPL</a>
    </li>
    <li>
        <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'uklupl');">UKL-UPL</a>
    </li>
    <li>
        <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'amdal');">Amdal</a>
    </li>
  </ul>

  <div id="sppl" class="w3-container w3-border city">
    <p>
        <div style="overflow: auto;">
          <table class="datatables table-border table-striped" id="table-sppl">
              <thead>
                <tr>
                    <td>
                        No.
                    </td>
                    <td>
                        Nomor SPPL
                    </td>
                    <td>
                        Tanggal
                    </td>
                    <td>
                        Jenis Kegiatan / Usaha  
                    </td>
                    <td>
                        Alamat Kegiatan Usaha 
                    </td>
                    <td>
                        Nama Pemilik/Pengelola  
                    </td>
                    <td>
                        Alamat Pemilik/Pengelola
                    </td>
                </tr>
              </thead>
          </table>
        </div>
    </p>
  </div>

  <div id="uklupl" class="w3-container w3-border city">
    <p>
        <div style="overflow: auto;">
              <table class="datatables table-border table-striped" id="table-uklupl">
                  <thead>
                    <tr>
                        <td>
                            No.
                        </td>
                        <td>
                            Nomor Surat
                        </td>
                        <td>
                            Tanggal
                        </td>
                        <td>
                            Jenis Kegiatan / Usaha  
                        </td>
                        <td>
                            Alamat Kegiatan / Usaha
                        </td>
                        <td>
                            Nama Pemilik  
                        </td>
                        <td>
                            Alamat Pemilik
                        </td>
                        <td>
                            Keterangan
                        </td>
                    </tr>
                  </thead>
              </table>
          </div>
    </p> 
  </div>

  <div id="amdal" class="w3-container w3-border city">
      <p>
          <div style="overflow: auto;">
              <table class="datatables table-border table-striped" id="table-amdal">
                  <thead>
                    <tr>
                        <td rowspan="2">
                            No.
                        </td>
                        <td rowspan="2">
                            Jenis Kegiatan / Usaha  
                        </td>
                        <td rowspan="2">
                            Alamat Kegiatan 
                        </td>
                        <td colspan="4">
                            Rekomendasi  
                        </td>
                        <td rowspan="2">
                            Keterangan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            KA-ANDAL
                        </td>
                        <td>
                            Andal
                        </td>
                        <td>  
                            AMDAL
                        </td>
                        <td>
                            Tanggal Amdal
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

    $('#active-first').click();

    window.LIST_PERIZINAN.init();

    function openCity(evt, cityName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("city");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.target.className += " w3-blue";
      
    }
</script>