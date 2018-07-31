<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Edit extends CI_Controller
{

	public function index($id)
	{
		$row = $this->m_weight->get_by_id($id);
		if($row){
			$data = array(
				'id_weight' => set_value('id_weight', $row->id_weight),
				'min_weight' => set_value('min_weight', $row->min_weight),
				'max_weight' => set_value('max_weight', $row->max_weight),
			);

			$this->load->view('template/header');
			$this->load->view('update',$data);
			$this->load->view('template/footer');
		} else {
			$this->session->set_flashdata('gagal', 'Failed Insert Data!');
	        redirect('welcome');
		}
	}

	public function act()
	{
		date_default_timezone_set('Asia/Jakarta');
		$id = $this->input->post('id_weight',true);
		$data = array(
			'min_weight' => $this->input->post('min_weight', true),
			'max_weight' => $this->input->post('max_weight', true)
		);

		$this->m_weight->update($id,$data);
		$this->session->set_flashdata('sukses', 'Success Insert Data!');
        redirect('welcome');
	}

}