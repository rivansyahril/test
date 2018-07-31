<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daily_weight extends CI_Controller {

	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = $this->input->post('create_date');
		if($date != ""){
			$date1 = $date;
		}  else {
			$date1 = date("Y-m-d");
		}
		$dat = $this->m_weight->get_by_date($date1);
		if($dat){
			$data = array(
				'dat' => $dat
			);
		} else {
			redirect('welcome');
		}
		
		$this->load->view('template/header');
		$this->load->view('view',$data);
		$this->load->view('template/footer');
	}
}
