<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

		$this->load->database();
		$query = $this->db->query("SELECT * FROM visiteur WHERE VIS_NOM = '" .$mdp."' AND VIS_MATRICULE = '" .$login. "'");

		return $query->first_row('array');
		return $ligne;
		
	}
	
	public function creeCR($matricule, $praticiens, $dateRapport, $motif, $bilan){
		
		$req = "insert into rapport_visite
		values('$matricule', '', '$praticiens', '$dateRapport', '$bilan', '$motif')";
		$this->db->simple_query($req);

	}
	public function getLesLignesRapportVisite($VIS_MATRICUL){
	
		$req = "select *
		from rapport_visite
		where lignefraishorsforfait.idvisiteur ='$VIS_MATRICUL'";
		$rs = $this->db->query($req);
		$lesLignes = $rs->result_array();
		$nbLignes = $rs->num_rows();
		return $lesLignes;
	}
		
	public function getPraticiens(){
		
		$this->load->database();
		$req = ("select * from praticien;");
		$rs = $this->db->query($req, array());
		$praticiens = $rs->result_array();
		return $praticiens;
	}
	
		
}
