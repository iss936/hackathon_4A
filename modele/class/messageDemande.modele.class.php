<?php
class messageDemande extends bdd{

	protected $id;
    protected $idDemandeDiscution;
    protected $createdAt;
    protected $contenu;
    protected $auteurId;

	public function __construct(){
        parent::__construct();
	}

	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}

	public function save($table = "messageDemande"){
		parent::save("messageDemande");
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
     * Gets the value of idDemandeDiscution.
     *
     * @return mixed
     */
    public function getIdDemandeDiscution()
    {
        return $this->idDemandeDiscution;
    }

    /**
     * Sets the value of idDemandeDiscution.
     *
     * @param mixed $idDemandeDiscution the id demande discution
     *
     * @return self
     */
    public function setIdDemandeDiscution($idDemandeDiscution)
    {
        $this->idDemandeDiscution = $idDemandeDiscution;

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
     * Gets the value of auteurId.
     *
     * @return mixed
     */
    public function getAuteurId()
    {
        return $this->auteurId;
    }

    /**
     * Sets the value of auteurId.
     *
     * @param mixed $auteurId the auteurId
     *
     * @return self
     */
    public function setAuteurId($auteurId)
    {
        $this->auteurId = $auteurId;

        return $this;
    }
}
?>
