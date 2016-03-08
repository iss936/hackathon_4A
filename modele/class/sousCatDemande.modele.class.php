<?php
class sousCatDemande extends bdd{
	
	protected $id;
	protected $nom;
    protected $catDemandeId;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}
	
	public function save($table = "sousCatDemande"){
		parent::save("sousCatDemande");
	}
  
    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the value of nom.
     *
     * @param mixed $nom the nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Gets the value of catDemandeId.
     *
     * @return mixed
     */
    public function getCatDemandeId()
    {
        return $this->catDemandeId;
    }

    /**
     * Sets the value of catDemandeId.
     *
     * @param mixed $catDemandeId the catDemandeId
     *
     * @return self
     */
    public function setCatDemandeId($catDemandeId)
    {
        $this->catDemandeId = $catDemandeId;

        return $this;
    }
}
?>