<?php
class demande extends bdd{

	protected $id;
    protected $sujet;
    protected $createdBy;
    protected $createdAt;
    protected $catDemandeId;

	public function __construct(){
        parent::__construct();
/*		$this->setId($id);
		$this->setSujet($sujet);
        setCatDemandeId($catDemandeId);*/
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
     * Gets the value of createdBy.
     *
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets the value of createdBy.
     *
     * @param mixed $createdBy the created by
     *
     * @return self
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

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
     * @param mixed $createdAt the cat demande id
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

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
