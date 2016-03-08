<?php
class index
{

	public function __construct() {

	}
	
	public function defaultPage($args) {

		$view = new view("front","index");
	}

	public function loginCheck($args) 
	{
		// d033e22ae348aeb5660fc2140aec35850c4da997

		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$tab = $_POST;

			if(isset($tab['login']) && isset($tab['password']))
			{
				// redirige en fonction du succès ou non de l'auth
				security::connected($tab);
			}
		}
		
		header("Location: ".ADRESSE_SITE);

	}

	public function accueil($args) {
		$view = new view("front","accueil");
	}

	public function contactAction($args) {

		$view = new view("front","contact");
	}

	public function not_logged($args){
		
  	}
}