<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Contr�leur du module VISITEUR de l'application
*/
class Welcome extends CI_Controller {

	/**
	 * @param $action : l'action demand�e par le visiteur
	 * @param $params : les �ventuels param�tres transmis pour la r�alisation de cette action
	*/
	public function ajouteCR($VIS_MATRICUL, $RAP_NUM, $PRA_NUM, $RAP_DATE, $RAP_BILAN, $RAP_MOTIF)
	{
		$this->load->model('functionCR');
		
		// obtention de l'id du visiteur et du mois concerné
		$VIS_MATRICUL = $this->session->userdata('idUser');
		
		// obtention des données postées
		$uneLigne = array(
				'VIS_MATRICUL' => $this->input>post('VIS_MATRICUL'),
				'RAP_NUM' => $this->input>post('RAP_NUM'),
				'PRA_NUM' => $this->input>post('PRA_NUM'),
				'RAP_DATE' => $this->input>post('RAP_DATE'),
				'RAP_BILAN' => $this->input>post('RAP_BILAN'),
				'RAP_MOTIF' => $this->input>post('RAP_MOTIF')
		);
		
		$this->functionCR->ajouteFrais($VIS_MATRICUL, $RAP_NUM, $PRA_NUM, $RAP_DATE, $RAP_BILAN, $RAP_MOTIF);
		
	}
}