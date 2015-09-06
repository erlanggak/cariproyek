<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cari extends CI_Controller {
	public function index(){
		$this->load->view('vw_cari');
	}
}