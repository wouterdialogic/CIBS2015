<?php 
	
Class Projecten extends CI_Controller {
	
	function __construct() {
		//
		parent::__construct();
		$this->load->model('projecten_model');
		$data = array();
		
		$data['title'] = "bekijk projecten";
		
		$projectName = "eerste project";
		$data['projecten'][$projectName]['title'] = $projectName;
		$data['projecten'][$projectName]['omschrijving'] = "project 1 omschrijving";
		
		$projectName = "tweede Project";
		$data['projecten'][$projectName]['title'] = "project 2";
		$data['projecten'][$projectName]['omschrijving'] = "project 2 omschrijving";
		
		//$data = get_projecten
		
		//later:
		//$this->load->model('csv_model');
	}
	
	function index() {
		echo "projecten";
		
	}
	
	function bekijkProjecten() {
		$data['title'] = "bekijk projecten";
		$data['projecten'] = $this->projecten_model->get_projecten();
		
		$this->load->view('header');
		$this->load->view('bekijkprojecten', $data);
		$this->load->view('footer');
		
	}
		
	function voegProjectToe() {
		
	}
	
	function verwijderProject() {
		
	}	
	
	function bewerkProject() {
		
	}	
}	

	
	
?>