<?php
class sousCatArticle extends bdd{
	
	protected $id;
	protected $nom;
    protected $catArticleId;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}
	
	public function save($table = "sousCatArticle"){
		parent::save("sousCatArticle");
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
     * @param mixed $catArticleId the catArticleId
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