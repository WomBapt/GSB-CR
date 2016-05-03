<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Contr�leur du module VISITEUR de l'application
*/
class Welcome extends CI_Controller {

	/**
	 * @param $action : l'action demand�e par le visiteur
	 * @param $params : les �ventuels param�tres transmis pour la r�alisation de cette action
	*/
	
	public function ajouterCR() {
		
		$this->load->model('functionCR');
		
		// obtention de l'id du visiteur et du mois concerné
		$matricule = $this->session->userdata('idUser');
		
		// obtention des données postées
			$praticien = $this->input->post('praticien');
			$dateRapport = $this->input->post('dateRapport');
			$motif = $this->input->post('motif');
			$bilan = $this->input->post('bilan');
			
		$this->functionCR->ajouterCR($matricule, $praticien, $dateRapport, $motif, $bilan);
		
		
		$this->index();//rediriger vers une page
				
		
	}
}