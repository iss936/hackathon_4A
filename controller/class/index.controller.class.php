<?php
class index
{

	public function __construct() {
           
                
	}

	public function defaultPage($args) {
		if(security::is_connected()){
                    header("Location: ".ADRESSE_SITE."index/accueil");
                }
			

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
             if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
		$view = new view("front","accueil");
	}

        public function addArticle($args) {
             if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
		$view = new view("front","addArticle");
	}


        public function addDemande($args) {
             if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
		$view = new view("front","addDemande");
	}

        public function forum($args) {
             if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
		$view = new view("front","forum");
	}

	public function admin($args) {
             if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
		$view = new view("front","admin");
	}
    
    public function forumDiscuss($args) {
         if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
			$view = new view("front","forum-discuss");
			$view->assign('idArticle',$args[0]);
	}

	public function contactAction($args) {

             if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
            $view = new view("front","contact");
//            $to      = 'adama_sakho@hotmail.com';
//            $subject = 'the subject';
//            $message = 'hello';
//            $headers = 'From: webmaster@example.com' . "\r\n" .
//            'Reply-To: webmaster@example.com' . "\r\n" .
//            'X-Mailer: PHP/' . phpversion();
//
//            mail($to, $subject, $message, $headers);
	}
        
        

        public function faq($args) {
             if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
            $view = new view("front","faq");
        }

        public function insertArticle($args) {

					$titre = $_POST['sujet'];
					$contenu = $_POST['message'];
					$categorie = 2;
					$author = 2;
					$dateCreated = date("Y-m-d H:i:s");
					$articleObj = new article($titre, $dateCreated, $contenu, $author, $categorie);
					$articleObj->save('article');
					header("Location:forum");
	}

	public function insertMember($args) {

					$nom = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$login = $_POST['login'];
					$password = $_POST['password'];
					$phone = $_POST['phone'];
					$mail = $_POST['mail'];
					$typeAdmin = $_POST['typeAdmin'];

					$memberObj = new user();
					$memberObj->setAll($nom, $prenom, $login, $password, $phone, $mail, $typeAdmin);
					$memberObj->save('user');
					header("Location:admin");
	}

	public function addComment($args){
	 	$contenu = $_POST['contenu'];
	 	$articleId = $args[0];
		$authorId = $args[1];

     	$commentaireObj = new commentaire($contenu, $authorId ,$articleId);
     	$commentaireObj->save('commentaire');
     	header("Location:/index/forumDiscuss/".$articleId);
	}


	public function annuaire($args) {
             if(!security::is_connected()){
                    header("Location: ".ADRESSE_SITE);
            }
		$view = new view("front","annuaire");
	}

	public function disconnect($args){
		if(security::is_connected())
			security::disconnect();
  	}
}
