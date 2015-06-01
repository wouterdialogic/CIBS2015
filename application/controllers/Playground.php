<?php
class Playground extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('elements_model');
        }
		
        public function index()
		{

			echo "hello PLAYGROUND";
			$data['surveys'] = $this->elements_model->get_elements();
			$data['title'] = 'Elements';
			
			//foreach ($data['artikelen'] as $key => $artikel) {
			$this->load->view('header', $data);
			$this->load->view('sortable', $data);
			$this->load->view('footer');
		}

        public function view($slug = NULL)
        {
                $data['element'] = $this->index_model->elements_model($slug);
        }
		
}



?>