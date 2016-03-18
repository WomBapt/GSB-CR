<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Contr�leur du module VISITEUR de l'application
*/
class C_visiteur extends CI_Controller {

	/**
	 * @param $action : l'action demand�e par le visiteur
	 * @param $params : les �ventuels param�tres transmis pour la r�alisation de cette action
	*/
	public function _remap($action, $params = array())
	{
		// chargement du mod�le d'authentification
		$this->load->model('authentif');
		
		// contr�le de la bonne authentification de l'utilisateur
		if (!$this->authentif->estConnecte()) 
		{
			// l'utilisateur n'est pas authentifi�, on envoie la vue de connexion
			$data = array();
			$this->views->load('welcome_message', $data);
		}
	}
}