<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['konten'] = "template/index";
		$data['judul'] = "Dashboard";
		$this->load->view('template/template', $data);
	}
}
