<?php
class user extends bdd{

	protected $id;
	protected $nom;
	protected $prenom;
	protected $login;
	protected $password;
	protected $isExpired;
  protected $telPro;
  protected $mailPro;
  protected $roles;
  protected $photo;
    // protected $etablissementId;

/*	public function __construct($id=-1, $nom, $prenom, $login, $password, $isExpired, $telPro, $mailPro, $roles, $photo){
		parent::__construct();
		$this->setId($id);
		$this->setNom($nom);
		$this->setPrenom($prenom);
		$this->setLogin($login);
		$this->setPassword($password);
		$this->setIsExpired($isExpired);
		$this->setTelPro($telPro);
		$this->setMailPro($mailPro);
		$this->setRoles($roles);
		$this->setPhoto($photo);
	}*/

	public function __construct(){
		parent::__construct();
		
	}

	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = (fonctions::is_serialized($value))?unserialize($value):$value;
		}
	}

	public function save($table = "user"){
		parent::save("user");
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
     * Gets the value of prenom.
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Sets the value of prenom.
     *
     * @param mixed $prenom the prenom
     *
     * @return self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Gets the value of login.
     *
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets the value of login.
     *
     * @param mixed $login the login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets the value of isExpired.
     *
     * @return mixed
     */
    public function getIsExpired()
    {
        return $this->isExpired;
    }

    /**
     * Sets the value of isExpired.
     *
     * @param mixed $isExpired the is expired
     *
     * @return self
     */
    public function setIsExpired($isExpired)
    {
        $this->isExpired = $isExpired;

        return $this;
    }

    /**
     * Gets the value of telPro.
     *
     * @return mixed
     */
    public function getTelPro()
    {
        return $this->telPro;
    }

    /**
     * Sets the value of telPro.
     *
     * @param mixed $telPro the tel pro
     *
     * @return self
     */
    public function setTelPro($telPro)
    {
        $this->telPro = $telPro;

        return $this;
    }

    /**
     * Gets the value of mailPro.
     *
     * @return mixed
     */
    public function getMailPro()
    {
        return $this->mailPro;
    }

    /**
     * Sets the value of mailPro.
     *
     * @param mixed $mailPro the mail pro
     *
     * @return self
     */
    public function setMailPro($mailPro)
    {
        $this->mailPro = $mailPro;

        return $this;
    }

    /**
     * Gets the value of roles.
     *
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Sets the value of roles.
     *
     * @param mixed $roles the roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

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
}
?>
