<?php
defined('BASEPATH') or exit  ('no direct script acces allowed');

class  web extends CI_controller
{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$data['judul'] = "Halaman Depan";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);

	}
}
