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
	
}

?>