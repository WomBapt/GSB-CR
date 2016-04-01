<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class functionsCR extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		// chargement du modèle d'accès aux données qui est utile à toutes les méthodes
		$this->load->model('dataAccess');
    }
    
	public function ajouteFrais($VIS_MATRICUL, $uneLigne)
	{

		$VIS_MATRICUL = $uneLigne['VIS_MATRICUL'];
		$RAP_NUM = $uneLigne['RAP_NUM'];
		$PRA_NUM = $uneLigne['PRA_NUM'];
		$RAP_DATE = $uneLigne['RAP_DATE'];
		$RAP_BILAN = $uneLigne['RAP_BILAN'];
		$RAP_MOTIF = $uneLigne['RAP_MOTIF'];

		$this->dataAccess->creeCR($VIS_MATRICUL, $RAP_NUM, $PRA_NUM, $RAP_DATE, $RAP_BILAN, $RAP_MOTIF);
	}
	
}