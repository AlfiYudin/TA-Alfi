<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Semua_calon extends CI_Controller
{
    public function index(){
        $data['konten'] = "semua_calon/v_semua_calon";
        $this->load->view('template/template', $data);
    }
}
