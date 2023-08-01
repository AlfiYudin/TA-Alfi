<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trafic extends CI_Controller
{
    public function index(){
        $data['konten'] = "trafic/v_trafic";
        $this->load->view('template/template', $data);
    }
}