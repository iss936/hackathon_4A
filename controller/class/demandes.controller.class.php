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

		$demandes = demandeQuery::getListInfo();

		$user = security::getUser();
		$mesDemandesDiscutions = userQuery::getDemandeDiscutions($user->getId());

		$view = new view("front/demande","index");
		$view->assign("demandes",$demandes);
		$view->assign("user",$user);
		$view->assign("mesDemandesDiscutions",$mesDemandesDiscutions);


	}

	public function voirDemande($args) 
	{
		if(!isset($args[0]))
		{
			header("Location: ".ADRESSE_SITE."demandes");
			exit();
		}
		else // on a un argument
		{
			$demandeDiscution = demandeDiscutionQuery::find($args[0]);
			if($demandeDiscution->getId() == null)
			{
				header("Location: ".ADRESSE_SITE."demandes");
				exit();
			}
		}


		// l'argument est valide
		$messages = demandeDiscutionQuery::joinMessages($args[0]);
		$idDemande = $demandeDiscution->getIdDemande();
		$demande = demandeQuery::find($idDemande);
		
		$view = new view("front/demande","discussion");
		$view->assign('demande',$demande);
		$view->assign('demandeDiscution',$demandeDiscution);
		$view->assign('messages',$messages);

		// $view->assign('users',$users);
	}

	public function addMessageAjax($args) {
		
		
		// requête ajax
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && isset($args[0]))
		{	

			$idDemandeDiscution = $args[0];
			$demandeDiscution = demandeDiscutionQuery::find($args[0]);

			if($demandeDiscution)
			{
				$message = $_POST['message'];
				
				$messageDemande = new messageDemande();
				$messageDemande->setIdDemandeDiscution($idDemandeDiscution);
	        	$messageDemande->setCreatedAt(date('Y-m-d H:i:s'));
				$messageDemande->setContenu($message);
				$messageDemande->setAuteurId($this->idUser);
				$messageDemande->save("messageDemande");

				// envoi mail
				// 
				
				$idDemande = $demandeDiscution->getIdDemande();
				$demande = demandeQuery::find($idDemande);

				$messages = demandeDiscutionQuery::joinMessages($args[0]);
				
				$_SESSION['flash_messageValidate'] = "Un nouveau message a été envoyé";

             	include '/view/front/demande/messagesAjax.php';


			}
		}
	}

	public function getMessagesAjax($args) {
		// requête ajax
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && isset($args[0]))
		{	
			$idDemandeDiscution = $args[0];
			$demandeDiscution = demandeDiscutionQuery::find($args[0]);

			if($demandeDiscution)
			{
				$messages = demandeDiscutionQuery::joinMessages($args[0]);
				$view = new view("front/demande","messagesAjax");
				$view->assign('messages',$messages);
			}
		}
	}


/*	public function getMessages($args) {
		
		$messages = demandeDiscutionQuery::joinMessages($args[0]);
		$view = new view("front/demande","messagesAjax");
		$view->assign('messages',$messages);
	}*/

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
			$tabDemande = $_POST;
			// var_dump($tabDemande);
			$user = security::getUser();
			$demande = new demande();
			$demande->setSujet($tabDemande['sujet']);
			$demande->setCreatedBy($user->getNom());
			$demande->setCreatedAt(date("Y-m-d H:i:s"));
			$demande->setCatDemandeId($tabDemande['categorie']);
			$demande->save("demande");

			$demandeDiscution = new demandeDiscution();
			$demandeDiscution->setIdDemande($_SESSION['lastInsertId']);
			$demandeDiscution->setEmmeteurId($this->idUser);
			$demandeDiscution->setDestinataireId($tabDemande['destinataire']);
        	$demandeDiscution->setCreatedAt(date('Y-m-d H:i:s'));
			$demandeDiscution->setTerminer(0);
			$demandeDiscution->save("demandeDiscution");
			
			$messageDemande = new messageDemande();
			$messageDemande->setIdDemandeDiscution($_SESSION['lastInsertId']);
        	$messageDemande->setCreatedAt(date('Y-m-d H:i:s'));
			$messageDemande->setContenu($tabDemande['message']);
			$messageDemande->setAuteurId($this->idUser);
			$messageDemande->save("messageDemande");

			// envoie mail
		/*	
			$destinataire = userQuery::find($demande->getDestinataireId());
			$to = $destinataire->getEmailPro();
			$subject = $demande->getSujet();
			$txt = $demande->getContenu();
			$headers = "From:".$user->getEmailPro();
			// "\r\n" ."CC: somebodyelse@example.com";

			mail($to,$subject,$txt,$headers);*/
			
			// on retourne à la liste des demande
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