<?php
class demandeDiscution extends bdd{

	protected $id;
    protected $idDemande;
    protected $emmeteurId;
    protected $destinataireId;
    protected $createdAt;
    protected $updatedAt;
    protected $terminer;

	public function __construct(){
        parent::__construct();
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
	}

	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}

	public function save($table = "demandeDiscution"){
		parent::save("demandeDiscution");
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
     * Gets the value of idDemande.
     *
     * @return mixed
     */
    public function getIdDemande()
    {
        return $this->idDemande;
    }

    /**
     * Sets the value of idDemande.
     *
     * @param mixed $idDemande the id demande
     *
     * @return self
     */
    public function setIdDemande($idDemande)
    {
        $this->idDemande = $idDemande;

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
     * Gets the value of createdAt.
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the value of createdAt.
     *
     * @param mixed $createdAt the created at
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Gets the value of updatedAt.
     *
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Sets the value of updatedAt.
     *
     * @param mixed $updatedAt the updated at
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Gets the value of terminer.
     *
     * @return mixed
     */
    public function getTerminer()
    {
        return $this->terminer;
    }

    /**
     * Sets the value of terminer.
     *
     * @param mixed $terminer the terminer
     *
     * @return self
     */
    public function setTerminer($terminer)
    {
        $this->terminer = $terminer;

        return $this;
    }
}
?>
