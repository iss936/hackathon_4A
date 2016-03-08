<?php
class catArticle extends bdd{
    
    protected $id;
    protected $nom;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function setFromBdd($var = []){
        foreach($var as $key => $value){
            $this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
        }
    }
    
    public function save($table = "catArticle"){
        parent::save("catArticle");
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

}
?>