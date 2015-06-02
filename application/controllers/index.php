<?php
class Index extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('elements_model');
        }
		
        public function index()
		{
			echo "index";

		
			//$data['surveys'] = $this->elements_model->get_elements();
			$data['title'] = 'ZElements';
			
			//foreach ($data['artikelen'] as $key => $artikel) {
			$this->load->view('header', $data);
			$this->load->view('elements', $data);
			$this->load->view('footer');
			
			
		}
        public function all()
		{
			echo "helllo ALL";
			
			$data['surveys'] = $this->elements_model->get_elements();
			$data['title'] = 'Elements';
			
			//foreach ($data['artikelen'] as $key => $artikel) {
			$this->load->view('header', $data);
			$this->load->view('elements', $data);
			$this->load->view('footer');
			
			
		}

        public function sortable()
		{
			echo "helllo SORTABLE IN INDEX";
			$data['surveys'] = $this->elements_model->get_elements();
			$data['title'] = 'jquery';
			
			//foreach ($data['artikelen'] as $key => $artikel) {
			$this->load->view('header', $data);
			$this->load->view('jquery', $data);
			$this->load->view('footer');
		}

        public function jquery()
		{
			echo "helllo JQUERY IN INDEX";
			//$data['surveys'] = $this->elements_model->get_elements();
			$data['title'] = 'Jquery test page';
			
			//foreach ($data['artikelen'] as $key => $artikel) {
			$this->load->view('jqueryheader', $data);
			$this->load->view('jquery', $data);
			$this->load->view('footer');
		}

        public function view($slug = NULL)
        {
                $data['element'] = $this->index_model->elements_model($slug);
        }
		
}

?>