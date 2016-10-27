<?php
/**
 * List Perizinan Controller
 *
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */
 
class List_perizinan extends CI_Controller {
    
    public function __construct()
    {
    	parent::__construct();
		$this->load->model('Perizinan_model');
    }

    public function index()
    {
        $data['name_site'] = 'BPLH';
        $data['konten'] = 'izin_lingkungan/list_perizinan';
        $this->load->view('template', $data);
    }

    public function limbah_cair()
    {
        $data['name_site'] = 'BPLH';
        $data['konten'] = 'izin_lingkungan/list_limbah_cair';
        $this->load->view('template', $data);
    }

    public function data_limbah_cair()
    {
    	$data_limbah_cair = $this->Perizinan_model->get_limbah_cair();
    	$data = array();

    	$no = 1;

    	if($data_limbah_cair)
    	{
	    	foreach($data_limbah_cair as $row)
	    	{
	    		$data[] = array(
	    			'no' => $no,
	    			'no_izin' => $row->no_izin,
	    			'jenis_kegiatan' => $row->jenis_kegiatan,
	    			'nama_kegiatan' => $row->nama_kegiatan,
	    			'tanggal' => $row->tgl_terbitizin,
	    			'alamat' => $row->alamat,
	    			'pimpinan' => $row->pimpinan,
	    			'kontak' => $row->kontak,
	    			'masa_berlaku' => $row->masa_berlaku,
	    			'status' => $row->status,
	    			'tanggal' => $row->tgl_terbitizin,
	    		);
	    		$no++;
	    	}
    	}

    	$response = array(
    		'data' => $data,
    		'recordsTotal' => count($data)
    	);

    	echo json_encode($response);
    }

    public function data_sppl()
    {
    	$data_sppl_baru = $this->Perizinan_model->get_sppl_publish();
    	$data_sppl_lampau = $this->Perizinan_model->get_sppl_lampau_publish();

    	$data = array();
    	$data_lampau = array();
    	$no = 1;

    	if($data_sppl_baru)
    	{
	    	foreach($data_sppl_baru as $row_sppl)
	    	{
	    		$data[] = array(
	    			'no' => '',
	    			'no_sppl' => $row_sppl->permohonan_id,
	    			'tanggal' => $row_sppl->tgl_terbit,
	    			'nama_kegiatan' => $row_sppl->nama_kegiatan,
	    			'alamat_kegiatan' => $row_sppl->rencana_lokasi,
	    			'nama_pemohon' => $row_sppl->nama_pemohon,
	    			'alamat_pemohon' => $row_sppl->alamat_pemohon,
	    		);

	    		$no++;
	    	}
    	}

    	if($data_sppl_lampau)
    	{
	    	foreach($data_sppl_lampau as $row_sppl)
	    	{
	    		$data_lampau[] = array(
	    			'no' => '',
	    			'no_sppl' => $row_sppl->no_sppl,
	    			'tanggal' => ($this->replace_month($row_sppl->tanggal) == '0000-00-00') ? '-' : $this->replace_month($row_sppl->tanggal),
	    			'nama_kegiatan' => $row_sppl->nama_kegiatan,
	    			'alamat_kegiatan' => $row_sppl->alamat_kegiatan,
	    			'nama_pemohon' => $row_sppl->nama_pemilik,
	    			'alamat_pemohon' => $row_sppl->alamat_pemilik,
	    		);

	    		$no++;
	    	}
    	}

    	$data_fix = array_merge($data, $data_lampau);

    	//var_dump($data_fix);

    	$response = array(
    		'data' => $data_fix,
    		'recordsTotal' => count($data_fix)
    	);

    	echo json_encode($response);
    }

    public function data_uklupl()
    {
    	$data_baru = $this->Perizinan_model->get_uklupl_publish();
    	$data_lampau = $this->Perizinan_model->get_uklupl_lampau_publish();

    	$data = array();
    	$data_lam = array();
    	$no = 1;

    	if($data_baru)
    	{
	    	foreach($data_baru as $row)
	    	{
	    		$data[] = array(
	    			'no' => $no,
	    			'no_uklupl' => $row->no_izin,
	    			'tanggal' => $row->tgl_terbit,
	    			'nama_kegiatan' => $row->nama_kegiatan,
	    			'alamat_kegiatan' => $row->rencana_lokasi,
	    			'nama_pemohon' => $row->nama_pemohon,
	    			'alamat_pemohon' => $row->alamat_pemohon,
	    			'keterangan' => $row->keterangan,
	    		);

	    		$no++;
	    	}
    	}

    	if($data_lampau)
    	{
	    	foreach($data_lampau as $row)
	    	{
	    		$data_lam[] = array(
	    			'no' => $no,
	    			'no_uklupl' => $row->no_surat,
	    			'tanggal' => ($this->replace_month($row->tanggal) == '0000-00-00') ? '-' : $this->replace_month($row->tanggal),
	    			//'tanggal' => $row->tanggal,
	    			'nama_kegiatan' => $row->nama_kegiatan,
	    			'alamat_kegiatan' => $row->alamat_kegiatan,
	    			'nama_pemohon' => $row->nama_pemilik,
	    			'alamat_pemohon' => $row->alamat_pemilik,
	    			'keterangan' => $row->keterangan,
	    		);

	    		$no++;
	    	}
    	}

    	$data_fix = array_merge($data, $data_lam);

    	$response = array(
    		'data' => $data_fix,
    		'recordsTotal' => count($data_fix)
    	);

    	echo json_encode($response);
    }

    public function data_amdal()
    {
    	$data_baru = $this->Perizinan_model->get_amdal_publish();
    	$data_lampau = $this->Perizinan_model->get_amdal_lampau_publish();

    	$data = array();
    	$data_lama = array();

    	$no = 1;

    	if($data_baru)
    	{
	    	foreach($data_baru as $row)
	    	{
	    		$data[] = array(
	    			'no' => '',
	    			'nama_kegiatan' => $row->nama_kegiatan,
	    			'alamat_kegiatan' => $row->rencana_lokasi,
	    			'ka_andal' => '-',
	    			'andal' => '-',
	    			'amdal' => '-',
	    			'tanggal' => $row->tgl_terbit,
	    			'keterangan' => $row->keterangan,
	    		);

	    		$no++;
	    	}
    	}

    	if($data_lampau)
    	{
	    	foreach($data_lampau as $row)
	    	{
	    		$data_lama[] = array(
	    			'no' => '',
	    			'nama_kegiatan' => $row->nama_kegiatan,
	    			'alamat_kegiatan' => $row->alamat_kegiatan,
	    			'ka_andal' => $row->ka_andal,
	    			'amdal' => $row->amdal,
	    			'andal' => ($this->replace_month($row->tanggal_ka_andal) == '0000-00-00') ? '-' : $this->replace_month($row->tanggal_ka_andal),
	    			//'tanggal' => '-',
	    			'tanggal' => ($this->replace_month($row->tanggal_amdal) == '0000-00-00') ? '-' : $this->replace_month($row->tanggal_amdal),
	    			'keterangan' => $row->keterangan,
	    		);

	    		$no++;
	    	}
    	}

    	$data_fix = array_merge($data, $data_lama);

    	$response = array(
    		'data' => $data_fix,
    		'recordsTotal' => count($data_fix)
    	);

    	echo json_encode($response);
    }

    private function replace_month($date_text)
    {

    	$text = '00';
		$hari = '00';
		$tahun = '0000';

		if($date_text != '')
		{	
			$date_text = str_replace('-', ' ', $date_text);
			
			$data_expl = explode(' ', $date_text);

			if(isset($data_expl[0]) && isset($data_expl[1]) && isset($data_expl[2]))
			{


				list($hari,$month_string,$tahun) = $data_expl;

				$text = $month_string;
		    	
		    	if($month_string == 'Januari') {
		    		$text = '01';
		    	}
		    	if($month_string == 'Pebuari' || $month_string == 'Febuari' || $month_string == 'Feruari' || $month_string == 'Februari' || $month_string == 'Pebruari') {
		    		$text = '02';
		    	}
		    	if($month_string == 'Maret') {
		    		$text = '03';
		    	}
		    	if($month_string == 'April' || $month_string == 'Apr') {
		    		$text = '04';
		    	}
		    	if($month_string == 'Mei') {
		    		$text = '05';
		    	}
		    	if($month_string == 'Juni') {
		    		$text = '06';
		    	}
		    	if($month_string == 'Juli') {
		    		$text = '07';
		    	}
		    	if($month_string == 'Agustus') {
		    		$text = '08';
		    	}
		    	if($month_string == 'September' || $month_string == 'september') {
		    		$text = '09';
		    	}
		    	if($month_string == 'Oktober') {
		    		$text = '10';
		    	}
		    	if($month_string == 'November' || $month_string == 'Nopember' || $month_string == 'Nov') {
		    		$text = '11';
		    	}
		    	if($month_string == 'Desember') {
		    		$text = '12';
		    	}

		    	if(strlen($hari) == 1)
		    	{
		    		$hari = '0'.$hari;
		    	}
			}
		}

    	$date_fix = $tahun.'-'.$text.'-'.$hari;

    	return  $date_fix;
    }

	public function hitung_umur($tgl_lahir,$delimiter='-') {
	
		list($hari,$bulan,$tahun) = explode($delimiter, $tgl_lahir);
		
		$selisih_hari = date('d') - $hari;
		$selisih_bulan = date('m') - $bulan;
		$selisih_tahun = date('Y') - $tahun;
		
		if ($selisih_hari < 0 || $selisih_bulan < 0) {
			$selisih_tahun--;
		}
		
		return $selisih_tahun;
	}
    
}

?>