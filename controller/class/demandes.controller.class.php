<?php

class demandes
{
	protected $idUser;

	public function __construct() {
		if(!security::is_connected())
			header("Location: ".ADRESSE_SITE);
		$this->idUser = $_SESSION["id"];
	}
	
	public function defaultPage($args) {

		$view = new view("front/demande","index");
	}

	public function addDemande() {
		
		$categories = catDemandeQuery::getAll();
		$users = userQuery::getOthers($this->idUser);

		$view = new view("front/demande","addDemande");
		$view->assign('categories',$categories);
		$view->assign('users',$users);
	}

	public function addDemandeCheck() {

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{	
			// Ajouter verif form
			
			//
			
			$tabDemande = $_POST;
			// var_dump($tabDemande);
			$demande = new demande();
			$demande->setCreatedAt(date("Y-m-d H:i:s"));
			$demande->setEmmeteurId($this->idUser);
			$demande->setSujet($tabDemande['sujet']);
			$demande->setDestinataireId($tabDemande['destinataire']);
			$demande->setContenu($tabDemande['message']);
			$demande->setCatDemandeId($tabDemande['categorie']);
			
			// envoie mail
			// 
			
			$demande->save("demande");
			$_SESSION['flash_messageValidate'] = "Une nouvelle demande a été envoyé";
/*
			die('ok');
			$view = new view("front/demande","addDemande");*/
		}
		

		header("Location: ".ADRESSE_SITE."demandes/addDemande");

	}
}