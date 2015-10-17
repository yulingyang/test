<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public function index(){
		echo 1111;
		$this->load->view('load');
	}
}