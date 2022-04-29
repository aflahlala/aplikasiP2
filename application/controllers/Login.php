<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login_view');
	}

	public function cekLogin()
	{	$this->load->model('akun_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->akun_model->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['username'] = $data->username;
				$this->session->set_userdata($sess_data);
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('Dashboard');
		}
	}}
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('username', 'Username', 'trim|required');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		// if($this->form_validation->run() == FALSE) {
		// $this->load->view('login_view');
		// redirect('login','refresh');
		// }else {
		// 	redirect('pembeli', 'refresh');
		// }

	public function cekDb($password)
	{
		$this->load->model('akun_model');
		$username = $this->input->post('username');
		// $level= $this->input->post('level');
		$result = $this->user->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id'=>$row->id,
					'username'=>$row->username,
					);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb', "Login Gagal Username dan Password tidak valid");
			return false;
		}
	}
	public function logout()
	{	
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		echo '<script>alert("KELUAR DULU YA SAYANG")</script>';
		redirect('login','refresh');
	}
}
