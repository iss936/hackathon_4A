<?php 

class userQuery
{
	
	function __construct()
	{
		# code...
	}

	/**
	 * [getOthers récupère les autres user que le User connecté]
	 * @param  [integer] $id = id du User
	 * @return array
	 */
	public static function getOthers($id)
	{
		$user = new user();
		$users = $user->requete("SELECT * FROM user Where id !=".$id." ORDER BY nom");

		return $users;
	}

	/**
	 * [find récupère un user dont l'id est passé en param]
	 * @param  integer $id = id du User
	 * @return object $user
	 */
	public static function find($id)
	{
		$user = new user;
		$user->getOneBy($id, "id", "user");
		$user->setFromBdd($user->result);

		return $user;
	}
	
}

?>