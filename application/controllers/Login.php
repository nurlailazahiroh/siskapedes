<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$nik = $this->input->post('nik');
			$password = $this->input->post('password');

			$cek = $this->ModelPerangkat->cek_login($nik, $password);

			if ($cek == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"><strong>Username atau Password Salah!</strong></div>');
				redirect('login');
			} else {
				$this->session->set_userdata('hak_akses', $cek->hak_akses);
				$this->session->set_userdata('nama_perangkat', $cek->nama_perangkat);
				$this->session->set_userdata('photo', $cek->photo);
				$this->session->set_userdata('id_perangkat', $cek->id_perangkat);
				$this->session->set_userdata('nik', $cek->nik);
				$this->session->set_flashdata('message', '<div class="alert alert-success font-weight-bold mb-4" style="width: 65%">Selamat datang, Anda login sebagai perangkat desa</div>');
				switch ($cek->hak_akses) {
					case 1:
						redirect('admin/dashboard');
						break;
					case 2:
						redirect('dinpermasdes/dashboard');
						break;
					case 3:
						redirect('perangkat/dashboard');
						break;
					case 4:
						redirect('superadmin/dashboard');
						break;
					default:
						break;
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_message('required', '%s tidak boleh kosong.');
		$this->form_validation->set_error_delimiters('<div style="text-align: left;"><small style="color: #e74a3b">', '</small></div>');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
