<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('akun_model');
	}

	public function index()
	{
		$data['anggota']= $this->akun_model->tampilAkun();
		$this->load->view('superadmin/tambah_akun', $data, 'refresh');
	}

	public function Tambah_Akun()
	{

		$id=$this->input->post('id');
		$this->load->helper('url','form');
		$this->load->model('akun_model');
		$data['anggota']= $this->akun_model->tampilAkun();
		# code...
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('Jabatan','Jabatan','trim|required');
		$this->form_validation->set_rules('golongan','golongan','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('NIP','NIP','trim|required|numeric');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('superadmin/tambah_akun', $data);
		}
		else
		{
			$this->akun_model->insertAkun($id);
			echo '<script>alert("Data Anggota Telah Di Tambah :) ")</script>';
			$data['anggota']= $this->akun_model->tampilAkun();
			$this->load->view('superadmin/tambah_akun', $data, 'refresh');
		}
	}

	public function Update($id)
	{
		# code...
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('Jabatan','Jabatan','trim|required');
		$this->form_validation->set_rules('golongan','golongan','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('NIP','NIP','trim|required|numeric');

		$this->load->model('akun_model'); 

		$data['anggota']=$this->akun_model->getAnggota($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('superadmin/edit_akun_view', $data);
		}
		else
		{
			$this->akun_model->UpdateById($id);
			// echo '<script>alert("Data Telah Di Update :) ")</script>';
			$data['anggota']= $this->akun_model->tampilAkun();
			$this->load->view('superadmin/tabel_akun', $data);
		}
	}

	public function Tabel_Akun()
	{
		$this->load->helper('url','form');
		$this->load->model('akun_model');
		$data['anggota']= $this->akun_model->tampilAkun();
		$this->load->view('superadmin/tabel_akun', $data);
	}

	public function delete($id)
	{
		# code...
		$this->load->model('akun_model');
		$this->akun_model->delete($id);
		echo '<script>alert("Data Telah Di hapus :) ")</script>';
		$data['anggota']= $this->akun_model->tampilAkun();
		redirect('Akun');
	}
	public function datatable()
	{
		$data['anggota']=$this->akun_model->getDataakun();
		$this->load->view('akun_datatable', $data);
	}
	public function akun_ajax()
	{
		$this->load->view('akun_datatable_ajax');
	}
	public function data_server()
	{
		$this->load->library('Datatables');
		$this->Datatables
			->select('id,username,Jabatan,golongan,password,NIP')
			->from('akun');
			echo $this->datatables->generate();
	}
	public function cancel()
	{
		redirect('Dashboard');
	}
}
