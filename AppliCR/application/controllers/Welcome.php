<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Contrôleur du module VISITEUR de l'application
*/
class C_visiteur extends CI_Controller {

	/**
	 * @param $action : l'action demandée par le visiteur
	 * @param $params : les éventuels paramètres transmis pour la réalisation de cette action
	*/
	public function _remap($action, $params = array())
	{
		// chargement du modèle d'authentification
		$this->load->model('authentif');
		
		// contrôle de la bonne authentification de l'utilisateur
		if (!$this->authentif->estConnecte()) 
		{
			// l'utilisateur n'est pas authentifié, on envoie la vue de connexion
			$data = array();
			$this->views->load('welcome_message', $data);
		}
	}
}