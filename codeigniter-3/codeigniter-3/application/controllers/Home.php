<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('m_modelv');
	$this->load->helper('my_helper');
   }
	
	public function index()
	{
		$data['user'] = $this->m_model->get_data('admin')->result();
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$data['title'] = 'Home page';
		$this->load->view('home',$data);
	}

}
?>