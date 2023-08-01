<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wa_blast extends CI_Controller
{
    public function index(){
        $data['konten'] = "Whatsapp/v_wa_blast";
        $this->load->view('template/template', $data);
    }
}
