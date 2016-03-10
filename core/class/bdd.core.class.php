<?php
class bdd {
	
	private $bddhost = "localhost";
	private $bddlogin = "root";
	private $bddpass = "";
	private $bddname = "hackathon";
	private $classe;
	public $result = [];
	protected $connexion;
	
	public function __construct(){
		self::Connection();
		$this->classe = get_called_class();
	}

	public function Connection(){
		$conn = NULL;
		try{
			$conn = new PDO("mysql:dbname=".$this->bddname.";host=".$this->bddhost, $this->bddlogin, $this->bddpass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Connexion échouée : '.$e->getMessage();
		}
			$this->connexion = $conn;
			// self::$connexionStatic = $conn;
	}
  
  	public function save($table){
		$all_vars = array_keys(get_object_vars($this));
		$pdo_vars = array_keys(get_class_vars(get_class()));
		$child_vars = array_diff($all_vars, $pdo_vars);
		if (is_numeric($this->id)){
			foreach($child_vars as $var){
				$array_to_execute[$var] = $this->$var;
				$set_sql[] = $var."=:".$var;
			}
			$sql = "UPDATE ".$table." SET ".implode(", ", $set_sql). " where id = :id;";
			$query = $this->connexion->prepare($sql);
			$query->execute($array_to_execute);
		}else{
			foreach($child_vars as $var){
				$array_to_execute[$var] = $this->$var;
			}
			$sql = "INSERT INTO ".$table."
					( ". implode(", ", $child_vars). ") 
					VALUES ( :" . implode(", :", $child_vars). ");";
			$query = $this->connexion->prepare($sql);
			$query->execute($array_to_execute);
			$_SESSION['lastInsertId'] = $this->connexion->lastInsertId();
		}
	}
	
	public function getOneBy($value, $column = "id", $table){
		$sql = "SELECT * FROM ".$table." WHERE ".$column."=:".$column." limit 1";
		$query = $this->connexion->prepare($sql);
		$query->execute([$column=>$value]);
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$data = $query->fetch(PDO::FETCH_ASSOC);	
		if (!empty($data)){
			foreach($data as $propName => $propValue){
				$this->result[$propName] = $propValue;
			}
		}
	}
	
	public function getResults($value, $column = "id", $table, $order){
		$requete = (empty($column))?"":" WHERE ".$column."=:".$column;
		$sql = "SELECT * FROM ".$table.$requete." ".$order;
 		$query = $this->connexion->prepare($sql);
		$query->execute([$column=>$value]);
		$query->setFetchMode(PDO::FETCH_ASSOC);
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getAll($table)
    {
        $sql = "SELECT * FROM " .$table;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);
        //On retourne le résultat de la requête dans la variable data sous forme de tableau
        $data = $query->fetchAll();
        return $data;
    }
	
	public function requete($requete){
		$query = $this->connexion->prepare($requete);
		$query->execute();
		$query->setFetchMode(PDO::FETCH_ASSOC);
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function requeteDelete($requete){
		$query = $this->connexion->prepare($requete);
		$query->execute();
	}

/*	public static function lastId()
	{
		return self::$connexionStatic->lastInsertId();
	}*/

	public function getLastId()
	{
		var_dump($this->connexion->lastInsertId());
		die();
		return $this->connexion->lastInsertId();
	}
}
?>