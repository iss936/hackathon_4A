<?php
class etablissement extends bdd{
	
	protected $id;
	protected $nom;
	protected $adresse;
	protected $ville;
	protected $codePostal;
    protected $pays;
    protected $photo;
    protected $isSiege;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}
	
	public function save($table = "etablissement"){
		parent::save("etablissement");
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
     * Gets the value of adresse.
     *
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets the value of adresse.
     *
     * @param mixed $adresse the adresse
     *
     * @return self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Gets the value of ville.
     *
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Sets the value of ville.
     *
     * @param mixed $ville the ville
     *
     * @return self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Gets the value of codePostal.
     *
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Sets the value of codePostal.
     *
     * @param mixed $codePostal the code postal
     *
     * @return self
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Gets the value of pays.
     *
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Sets the value of pays.
     *
     * @param mixed $pays the pays
     *
     * @return self
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Gets the value of photo.
     *
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the value of photo.
     *
     * @param mixed $photo the photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Gets the value of isSiege.
     *
     * @return mixed
     */
    public function getIsSiege()
    {
        return $this->isSiege;
    }

    /**
     * Sets the value of isSiege.
     *
     * @param mixed $isSiege the is siege
     *
     * @return self
     */
    public function setIsSiege($isSiege)
    {
        $this->isSiege = $isSiege;

        return $this;
    }
}
?>