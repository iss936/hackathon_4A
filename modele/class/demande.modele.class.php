<?php
class demande extends bdd{

	protected $id;
    protected $sujet;
    protected $contenu;
	protected $dateEnvoie;
	protected $emmeteurId;
	protected $destinataireId;
    protected $catDemandeId;

	public function __construct(){
        parent::__construct();
/*		$this->setId($id);
		$this->setDateEnvoie($dateEnvoie);
		$this->setEmmeteurId($emmeteurId);
		$this->setDestinataireId($destinataireId);
		$this->setCatDemandeId($catDemandeId);*/
	}

	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}

	public function save($table = "demande"){
		parent::save("demande");
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
     * Gets the value of sujet.
     *
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Sets the value of sujet.
     *
     * @param mixed $sujet the sujet
     *
     * @return self
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Gets the value of contenu.
     *
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Sets the value of contenu.
     *
     * @param mixed $contenu the contenu
     *
     * @return self
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Gets the value of dateEnvoie.
     *
     * @return mixed
     */
    public function getDateEnvoie()
    {
        return $this->dateEnvoie;
    }

    /**
     * Sets the value of dateEnvoie.
     *
     * @param mixed $dateEnvoie the dateEnvoie
     *
     * @return self
     */
    public function setDateEnvoie($dateEnvoie)
    {
        $this->dateEnvoie = $dateEnvoie;

        return $this;
    }

    /**
     * Gets the value of emmeteurId.
     *
     * @return mixed
     */
    public function getEmmeteurId()
    {
        return $this->emmeteurId;
    }

    /**
     * Sets the value of emmeteurId.
     *
     * @param mixed $emmeteurId the emmeteur id
     *
     * @return self
     */
    public function setEmmeteurId($emmeteurId)
    {
        $this->emmeteurId = $emmeteurId;

        return $this;
    }

    /**
     * Gets the value of destinataireId.
     *
     * @return mixed
     */
    public function getDestinataireId()
    {
        return $this->destinataireId;
    }

    /**
     * Sets the value of destinataireId.
     *
     * @param mixed $destinataireId the destinataire id
     *
     * @return self
     */
    public function setDestinataireId($destinataireId)
    {
        $this->destinataireId = $destinataireId;

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
     * @param mixed $catDemandeId the cat demande id
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
