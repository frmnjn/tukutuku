<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index(){
		$data['iklan'] = $this->m_data->tampil_data()->result();
		if($this->session->userdata('status') != "login"){
			$data['kiw'] = "n";
		} else {
			$data['kiw'] = "y";
		}
		$this->load->view('home',$data);
	}
}
