<?php
	
class Sortable3 extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('elements_model');
	}
	
	public function index()
	{
		
		echo "hello SORTABLE CLASS INDEX";
		$data['surveys'] = $this->elements_model->get_elements();
		$data['title'] = 'Elements';
		
		//foreach ($data['artikelen'] as $key => $artikel) {
		$this->load->view('header', $data);
		$this->load->view('elements', $data);
		$this->load->view('footer');
		
		
	}
}
?>