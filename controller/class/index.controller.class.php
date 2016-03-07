<?php
class index {

	public function __construct() {
	}
	
	public function defaultPage($args) {

		$view = new view("front","accueil");
	}
	
	public function participerAction($args) {

		$view = new view("front","participation");
	}

	public function voterAction($args) {

		$view = new view("front","voter");
	}

	public function not_logged($args){
		
  	}
}