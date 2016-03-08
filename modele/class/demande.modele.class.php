<?php
class demande extends bdd{

	protected $id;
	protected $createdAt;
	protected $updatedAt;
	protected $emmeteurId;
	protected $destinataireId;
  protected $catDemandeId;

	public function __construct(){
		parent::__construct();
	}

	public function __construct($id=-1, $createdAt, $updatedAt, $emmeteurId, $destinataireId, $catDemandeId){
		this->setId($id);
		this->setCreatedAt($createdAt);
		this->setUpdatedAt($updatedAt);
		this->setEmmeteurId($emmeteurId);
		this->setDestinataireId($destinataireId);
		this->setCatDemandeId($catDemandeId);
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
