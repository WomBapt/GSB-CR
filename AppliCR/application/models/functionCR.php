<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class functionCR extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		// chargement du modèle d'accès aux données qui est utile à toutes les méthodes
		$this->load->model('dataAccess');
    }
    
	
public function ajouterCR($matricule, $praticien, $dateRapport, $motif, $bilan)
	{
		$this->load->model('dataAccess');
		$this->dataAccess->creeCR($matricule, $praticien, $dateRapport, $motif, $bilan);
		
	}
	
public function getPraticiens()
	{
		$this->load->model('dataAccess');
		$this->dataAccess->getPraticiens($praticiens);
	}
	

}