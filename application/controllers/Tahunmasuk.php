<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahunmasuk extends CI_Controller
{
    public function index(){
        $data['konten'] = "tahun_masuk/v_tahun_masuk";
        $this->load->view('template/template', $data);
    }
}
