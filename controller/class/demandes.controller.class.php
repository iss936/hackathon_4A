<?php
class demandes
{
	public function __construct() {
		if(!security::is_connected())
			header("Location: ".ADRESSE_SITE);
	}
	
	public function defaultPage($args) {

		$view = new view("front/demande","index");
	}

	public function addDemande() {
		
		$view = new view("front/demande","addDemande");
	}
}