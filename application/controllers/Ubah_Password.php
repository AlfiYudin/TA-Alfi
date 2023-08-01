<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ubah_password extends CI_Controller
{
    public function index(){
        $data['konten'] = "ubah_password/v_ubah_password";
        $this->load->view('template/template', $data);
    }
}
