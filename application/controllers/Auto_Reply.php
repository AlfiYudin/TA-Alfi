<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auto_reply extends CI_Controller
{
    public function index(){
        $data['konten'] = "Whatsapp/v_auto_reply";
        $this->load->view('template/template', $data);
    }
}
