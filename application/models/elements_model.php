<?php
	class Elements_Model extends CI_Model {
		
        public function __construct()
        {
			$this->load->database();
		}
		
		public function get_elements($slug = FALSE)
		{
			if ($slug === FALSE)
			{
				$query = $this->db->get('elements');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('elements', array('name' => $slug));
			return $query->row_array();
		}
		
		
		//INSERT INTO `www`.`artikelen` (`artikel_id`, `artikel_titel`, `artikel_slug`, `artikel_auteur`, `artikel_tekst`, `artikel_datum_gewijzigd`, `artikel_categorie`, `artikel_actief`) VALUES (NULL, 'Eerste post', 'eerste post', 'Wouter Koppers', 'wer wef wef wefwe wef ', '2015-05-04', 'muziek', '1');
		
		public function save_artikel($slug = FALSE)
		{
			if ($slug === FALSE)
			{
				$query = $this->db->get('artikelen');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('artikelen', array('artikel_slug' => $slug));
			return $query->row_array();
		}
		
		public function set_news()
		{
			$this->load->helper('url');
			
			$slug = url_title($this->input->post('title'), 'dash', TRUE);
			
			$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
			);
			
			return $this->db->insert('news', $data);
		}
		
		public function saveJsonArray() {
			//DIT SCRIPT IS EENMALIG NODIG OM JSON ARRAY IN TE LADEN IN DATABASE
			//$this->load->helper('url');
			
			/* DIT ZIJN ALLE VELDEN ZOALS ZE IN DE DB MOETEN KOMEN TE STAAN:
			 *  artikel_id	
				artikel_titel	Geen index gedefinieerd! Maak hieronder er een aan
				artikel_slug	Geen index gedefinieerd! Maak hieronder er een aan
				artikel_auteur	Geen index gedefinieerd! Maak hieronder er een aan
				artikel_tekst	Geen index gedefinieerd! Maak hieronder er een aan
				artikel_datum_gewijzigd	Geen index gedefinieerd! Maak hieronder er een aan
				artikel_categorie	Geen index gedefinieerd! Maak hieronder er een aan
				artikel_actief	Geen index gedefinieerd! Maak hieronder er een aan */
			
			//ALLES OPHALEN UIT JSON BESTAND EN DECODEREN
			//$jsonArray = json_decode(file_get_contents(base_url('assets/json/my_array.json')));
			
			//PER ARTIKEL IN DB WEGSCHRIJVEN
			/*foreach($jsonArray as $key => $artikel) {
				$data = array(
					'artikel_categorie' => $artikel[1],
					'artikel_auteur' => $artikel[2],
					'artikel_titel' => $artikel[3],
					'artikel_slug' => $artikel[3],
					'artikel_tekst' => $artikel[4],
					'artikel_actief' => $artikel[5]
					);
				$this->db->insert('artikelen', $data);	
				}*/
			
			
			
			//return; 
		}
		
		
	}
	
	
	
?>