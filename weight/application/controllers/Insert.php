<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Insert extends CI_Controller
{

	function __construct()
	{
	  parent::__construct();
	  $this->load->helper('form'); 
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('insert');
		$this->load->view('template/footer');
	}

	public function act()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'min_weight' => $this->input->post('min_weight'),
			'max_weight' => $this->input->post('max_weight'),
			'create_date' => date("Y-m-d"),
		);

		$this->m_weight->insert($data);
		$this->session->set_flashdata('sukses', 'Success Insert Data!');
        redirect('welcome');
	}

}