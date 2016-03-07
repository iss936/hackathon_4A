<?php
class user extends bdd{
	
	protected $id;
	protected $nom;
	protected $prenom;
    protected $telPro;
    protected $mailPro;
    protected $roles;
    protected $photo;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}
	
	public function save(){
		parent::save("user");
	}

  
}
?>