<?php
class index {

	public function __construct() {
	}
	
	public function defaultPage($args) {

		$view = new view("front","accueil");
	}
	
	public function loginAction($args) {

		die('ok');
		$view = new view("front","faq");
	}

	public function contactAction($args) {

		$view = new view("front","contact");
	}

	public function not_logged($args){
		
  	}
}