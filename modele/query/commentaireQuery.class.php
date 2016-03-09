<?php 

class commentaireQuery
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
	public static function getAllCommentsByIdArticle($id)
	{
		$commentaire = new commentaire();
		$commentaires = $commentaire->requete("SELECT * FROM commentaire Where articleId =".$id." ORDER BY createdAt");

		return $commentaires;
	}


	public static function countAllCommentsById($id)
	{
		$commentaire = new commentaire();
		$commentTab = $commentaire->requete("SELECT * FROM commentaire Where id =".$id);
		$count = count($commentTab);
		return $count;
	}

	/**
	 * [find récupère un user dont l'id est passé en param]
	 * @param  integer $id = id du User
	 * @return object $user
	 */
	public static function find($id)
	{
		$commentaire = new commentaire;
		$commentaire->getOneBy($id, "id", "commentaire");
		$commentaire->setFromBdd($commentaire->result);

		return $commentaire;
	}
	
}

?>