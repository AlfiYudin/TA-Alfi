<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Import extends CI_Controller
{
    public function index(){
        $data['konten'] = "import_camaba/v_import_camaba";
        $this->load->view('template/template', $data);
    }
}