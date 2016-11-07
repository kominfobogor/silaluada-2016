<?php
/**
* Author M.Febriansyah
*/
class Dashboard_member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_global');
		$this->load->model('supermodel');
		 if($this->session->userdata('getLoginAct')==FALSE) {
		 		echo"<script>alert('Anda belum login !!!');document.location.href='".site_url('login_daftar_member/index')."'</script>";
		 }
	}

	function index(){
		$data['konten'] = "izin_lingkungan/dashboard_member";
		$this->load->view('izin_lingkungan/template',$data);
	}

	function vdetail($jenisizin_id,$permohonan_id){

		if($jenisizin_id == "1" || $jenisizin_id == "2" || $jenisizin_id == "3"){
				$tabel = "sppl";
			}elseif ($jenisizin_id == "4"){
				$tabel = "ukl_upl";
			}elseif ($jenisizin_id == "5"){
				$tabel = "amdal";
			}

		$r = $this->supermodel->queryManual("SELECT 
										    a.*,
											b.nama_pemohon,
											c.nama_perusahaan,
											d.*
										    from 
										    $tabel a,pemohon b,perusahaan c,jenisizin d 
										    WHERE 
										    a.pemohon_id = b.pemohon_id AND
										    a.perusahaan_id = c.perusahaan_id AND
										    a.jenisizin_id = d.jenisizin_id AND
										    a.permohonan_id = '".$permohonan_id."' ORDER BY a.permohonan_id DESC")->row_array();
		$data=array('permohonan_id' => $r['permohonan_id'],
					'nama_perizinan' => $r['nama_perizinan'],
					'nama_pemohon' => $r['nama_pemohon'],
					'nama_perusahaan' => $r['nama_perusahaan'],
					'tgl_permohonan' => $r['tgl_permohonan'],
					'nama_kegiatan' => $r['nama_kegiatan'],
					'rencana_lokasi' => $r['rencana_lokasi'],
					'no_reg' => $r['no_reg'],
					'no_izin' => $r['no_izin'],
					'tgl_terbit' => $r['tgl_terbit']);


		$data['syarat'] = $this->supermodel->queryManual("SELECT 
													    a.*,
														b.*,
														c.*
													   	from 
													   	upload_syarat a,persyaratan b,direktori_member c
													   	WHERE 
													   	a.persyaratan_id = b.persyaratan_id AND
													   	a.dokumen_id = c.dokumen_id AND
													   	a.permohonan_id = '".$permohonan_id."'");

		$data['konten'] = "izin_lingkungan/vdetail_izin_selesai";
		$this->load->view('izin_lingkungan/template',$data);
	}

	/** 
	 *	Notification
	 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
	 */
	public function notification(){
		$jml_pesan = $this->supermodel->queryManual("
			SELECT COUNT(*) as jml FROM pesan 
			WHERE pesan_untuk_id = ".$this->session->userdata('member_id')."
			AND pesan_status = 0
		")->row();

		if($jml_pesan->jml > 0) {
        echo '
        	<li class="dropdown pull-right">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
            		<i class="fa fa-bell-o"></i> '.$jml_pesan->jml.'
	          		&nbsp;&nbsp;&nbsp;
	          	</a>

            	<ul class="dropdown-menu" role="menu">
              		<li>
              			<a href="'.site_url('pesan').'"> Ada '.$jml_pesan->jml.' Pesan Baru</a></li>
            	</ul>
          </li>

         ';
		}
        
  	}
 }
?>