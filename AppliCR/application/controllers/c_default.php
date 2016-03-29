<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ContrÃ´leur par dÃ©faut de l'application
 * Si aucune spÃ©cification de contrÃ´leur n'est prÃ©cisÃ©e dans l'URL du navigateur
 * c'est le contrÃ´leur par dÃ©faut qui sera invoquÃ©. Son rÃ´le est :
 * 		+ d'orienter vers le bon contrÃ´leur selon la situation
 * 		+ de traiter le retour du formulaire de connexion 
*/
class C_default extends CI_Controller {

	/**
	 * FonctionnalitÃ© par dÃ©faut du contrÃ´leur. 
	 * VÃ©rifie l'existence d'une connexion :
	 * Soit elle existe et on redirige vers le contrÃ´leur de VISITEUR, 
	 * soit elle n'existe pas et on envoie la vue de connexion
	*/
	public function index()
	{
		$this->load->model('authentif');
		//$this->load->view('welcome_message', $data);
		if (!$this->authentif->estConnecte()) 
		{
			$data = array();
			$this->load->view('v_connexion', $data); 
		}
		else
		{
			$this->load->helper('url');
			redirect('/Welcome/');
		}
	}
	
	/**
	 * Traite le retour du formulaire de connexion afin de connecter l'utilisateur
	 * s'il est reconnu
	*/
	public function connecter () 
	{	// TODO : conrÃ´ler que l'obtention des donnÃ©es postÃ©es ne rend pas d'erreurs 

		$this->load->model('authentif');

		$login = $this->input->post('login');
		$mdp = $this->input->post('mdp');
		$authUser = $this->authentif->authentifier($login, $mdp);

		if(empty($authUser))
		{
			$data = array('erreur'=>'Login ou mot de passe incorrect');
			$this->load->view('v_connexion', $data);
		}
		else
		{
			$this->authentif->connecter($authUser['VIS_NOM'], $authUser['Vis_PRENOM']);
			$this->index();
		}
	}
	
}
