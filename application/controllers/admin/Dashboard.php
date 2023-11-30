<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('hak_akses') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('login/logout');
		}
	}
	public function index()
	{
		$data['title'] = "Dashboard";
		$data['dinpermasdes'] = $this->db->query("SELECT * FROM perangkat_desa WHERE hak_akses = '2'")->num_rows();
		$data['perangkat'] = $this->db->query("SELECT * FROM perangkat_desa WHERE hak_akses = '3'")->num_rows();
		$data['superadmin'] = $this->db->query("SELECT * FROM perangkat_desa WHERE hak_akses = '4'")->num_rows();
		$data['perangkat_per_jenis_kelamin'] = $this->ModelPerangkat->get_perangkat_per_jenis_kelamin();
		$data['perangkat_per_jabatan'] = $this->ModelPerangkat->get_perangkat_per_jabatan();
		$data['hak_akses'] = $this->ModelPerangkat->get_data('hak_akses')->result();


		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_admin/footer');
	}
}
