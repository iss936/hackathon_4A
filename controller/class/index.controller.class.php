<?php
class index
{

	public function __construct() {

	}
	
	public function defaultPage($args) {
		if(security::is_connected())
			header("Location: ".ADRESSE_SITE."index/accueil");

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
        
        public function addArticle($args) {
		$view = new view("front","addArticle");
	}
        

        public function addDemande($args) {
		$view = new view("front","addDemande");
	}
        
        public function forum($args) {
		$view = new view("front","forum");
	}
        
        public function forumDiscuss($args) {
		$view = new view("front","forum-discuss");
	}
        
	public function contactAction($args) {

		$view = new view("front","contact");
	}
        
        public function insertArticleAction($args) {
            $sujet = $_POST['sujet'];
            $message = $_POST['message'];
            $categorie = $_POST['categorie'];
            
            $articleObj = new ArticleModel($sujet,$message,$categorie);
            $articleObj->save();
	}
        
	public function disconnect($args){
		if(security::is_connected())
			security::disconnect();
  	}
}