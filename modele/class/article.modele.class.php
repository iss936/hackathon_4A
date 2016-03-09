<?php
class article extends bdd{

	protected $id;
	protected $titre;
	protected $createdAt;
	protected $updatedAt;
	protected $contenu;
	protected $authorId;
  protected $catArticleId;

	public function __construct($titre='', $createdAt='', $contenu='', $authorId='', $catArticleId=''){
		parent::__construct();
		//$this->setId($id);
		$this->setTitre($titre);
		$this->setCreatedAt($createdAt);
		$this->setUpdatedAt(date('Y-m-d H:i:s'));
		$this->setContenu($contenu);
		$this->setauthorId($authorId);
		$this->setCatArticleId($catArticleId);
	}

	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}

	public function save($table = "article"){
		parent::save("article");
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
     * Gets the value of titre.
     *
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Sets the value of titre.
     *
     * @param mixed $titre the titre
     *
     * @return self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

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
     * Gets the value of authorId.
     *
     * @return mixed
     */
    public function getauthorId()
    {
        return $this->authorId;
    }

    /**
     * Sets the value of authorId.
     *
     * @param mixed $authorId the user id
     *
     * @return self
     */
    public function setauthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Gets the value of catArticleId.
     *
     * @return mixed
     */
    public function getCatArticleId()
    {
        return $this->catArticleId;
    }

    /**
     * Sets the value of catArticleId.
     *
     * @param mixed $catArticleId the cat article id
     *
     * @return self
     */
    public function setCatArticleId($catArticleId)
    {
        $this->catArticleId = $catArticleId;

        return $this;
    }
}
?>
