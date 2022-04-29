<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lptp extends CI_Controller
{
	public function index()
	{
		$this->load->view("files_preview/lptp.php");
	}
}
