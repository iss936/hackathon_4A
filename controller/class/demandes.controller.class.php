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
			$demande->setDateEnvoie(date("Y-m-d H:i:s"));
			$demande->setEmmeteurId($this->idUser);
			$demande->setSujet($tabDemande['sujet']);
			$demande->setDestinataireId($tabDemande['destinataire']);
			$demande->setContenu($tabDemande['message']);
			$demande->setCatDemandeId($tabDemande['categorie']);
			
			$user = security::getUser();
			$destinataire = userQuery::find($demande->getDestinataireId());
			// envoie mail
		/*	$to = $destinataire->getEmailPro();
			$subject = $demande->getSujet();
			$txt = $demande->getContenu();
			$headers = "From:".$user->getEmailPro();
			// "\r\n" ."CC: somebodyelse@example.com";

			mail($to,$subject,$txt,$headers);*/
			
			// on retourne à la liste des demande
			// $demande->save("demande");
			$_SESSION['flash_messageValidate'] = "Une nouvelle demande a été envoyé";

			if (isset($_POST['save-and-list'])) 
			{
				header("Location: ".ADRESSE_SITE."demandes");
				exit();
			} 

/*			die('ok');
			$view = new view("front/demande","addDemande");*/
		}
		

		header("Location: ".ADRESSE_SITE."demandes/addDemande");

	}
}