<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function cek($username, $password){
		$this->db->select('id,username,password');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('anggota');
		$this->session->set_userdata('ses_username', $data ['username']);
	}

	public function insertAkun($id)
	{
		$object = array
		('id' =>$this->input->post('id'),
	     'username' =>$this->input->post('username'),
	     'Jabatan' =>$this->input->post('Jabatan'),
	     'golongan' =>$this->input->post('golongan'),
	     'password' =>$this->input->post('password'),
	     'NIP' =>$this->input->post('NIP'));
		$this->db->insert('anggota', $object);
	}

	public function tampilAkun()
	{	
		$query=$this->db->query('Select * from anggota');
		return $query->result();
	}

	public function getAnggota($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('anggota');
		return $query->result(); 
	}

	public function UpdateById($id)
	{
		$data = array
		('id' =>$this->input->post('id'),
	     'username' =>$this->input->post('username'),
	     'Jabatan' =>$this->input->post('Jabatan'),
	     'golongan' =>$this->input->post('golongan'),
	     'password' =>$this->input->post('password'),
	     'NIP' =>$this->input->post('NIP'));
		$this->db->where('id', $id);
		$this->db->update('anggota', $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('anggota');
	}

	public function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
}