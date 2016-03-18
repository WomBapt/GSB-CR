...<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Mod�le qui impl�mente les fonctions d'acc�s aux donn�es 
*/
class DataAccess extends CI_Model {
// TODO : Transformer toutes les requ�tes en requ�tes param�tr�es

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /**
	 * Retourne les informations d'un visiteur
	 * 
	 * @param $login 
	 * @param $mdp
	 * @return l'id, le nom et le pr�nom sous la forme d'un tableau associatif 
	*/
	public function getInfosVisiteur($login, $mdp){
		$req = "select visiteur.VIS_MATRICULE as id, visiteur.VIS_NOM as nom, visiteur.Vis_PRENOM as prenom
				from visiteur 
				where visiteur.VIS_NOM=? and visiteur.VIS_DATEEMBAUCHE=?";
		$rs = $this->db->query($req, array ($login, $mdp));
		$ligne = $rs->first_row('array'); 
		return $ligne;
	}
}