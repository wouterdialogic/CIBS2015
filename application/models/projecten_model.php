<?php
	class Projecten_Model extends CI_Model {
		
		public function __construct()
        {
			$this->load->database();
			$this->load->helper('url');
		}
		
		public function get_projecten($slug = FALSE)
		{
			if ($slug === FALSE)
			{
                $query = $this->db->get('projecten');
                return $query->result_array();
			}
			
			$query = $this->db->get_where('projecten', array('slug' => $slug));
			return $query->row_array();
		}
		
		public function get_mappings($mapping_id = FALSE)
		{
			//will be true allways...
			if ($mapping_id === FALSE)
			{
                $query = $this->db->get('csv');
                return $query->result_array();
			}
			
			//$this->db->select("*");
			//$this->db->select("*");
			$this->db->select("csv_name, db_name, db_type, transform_function" );
			$this->db->from("mappings");
			//$this->db->where('mapping_id', $mapping_id);
			$this->db->where('mapping_id', $mapping_id);
			$query = $this->db->get();       
			//$query = $this->db->get_where('mappings', array('mapping_id' => $mapping_id));
		    //$query = $this->db->query("SELECT * from mappings WHERE `mappings_id` = ".$mapping$_id.'"');
			//return $query->result();
			
			return $query->result();
		}
		
		public function set_csv()
		{
			$this->load->helper('url');
			
			$slug = url_title($this->input->post('mapping_name'), 'dash', TRUE);
			
			$data = array(
			'mapping_name' => $this->input->post('mapping_name'),
			'slug' => $slug,
			'mapping_information' => $this->input->post('mapping_information')
			);
			
			return $this->db->insert('csv', $data);
		}
		
		public function delete_csv()
		{
			$this->load->helper('url');
			
			$slug = url_title($this->input->post('mapping_name'), 'dash', TRUE);
			
			$data = array(
			'mapping_name' => $this->input->post('mapping_name'),
			'slug' => $slug,
			'mapping_information' => $this->input->post('mapping_information')
			);
			
			return $this->db->delete('csv', $data);
			//$this->db->where('id', $id);
			//$this->db->delete('mytable'); 
		}
		
		
	}
?>