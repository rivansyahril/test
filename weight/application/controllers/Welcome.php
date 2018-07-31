<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$d_weight = $this->m_weight->get_all();
		$data = array(
			'd_weight' => $d_weight
		);
		$this->load->view('template/header');
		$this->load->view('home',$data);
		$this->load->view('template/footer');
	}
}
