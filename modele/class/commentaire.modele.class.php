<?php
class commentaire extends bdd{

	protected $id;
	protected $createdAt;
	protected $updatedAt;
	protected $contenu;
	protected $authorId;
  protected $articleId;

	public function __construct( $createdAt, $updatedAt, $contenu, $authorId, $articleId){
//		this->setId($id);
		$this->setCreatedAt($createdAt);
		$this->setUpdatedAt($updatedAt);
		$this->setContenu($contenu);
		$this->setauthorId($authorId);
		$this->setArticleId($articleId);
	}

	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}

	public function save($table = "commentaire"){
		parent::save("commentaire");
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
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Sets the value of authorId.
     *
     * @param mixed $authorId the author id
     *
     * @return self
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Gets the value of articleId.
     *
     * @return mixed
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Sets the value of articleId.
     *
     * @param mixed $articleId the article id
     *
     * @return self
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }
}
?>
