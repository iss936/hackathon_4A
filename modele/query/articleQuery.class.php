<?php 

class articleQuery
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
		$article = new article();
		$articles = $article->requete("SELECT * FROM article Where id !=".$id." ORDER BY nom");

		return $articles;
	}

	/**
	 * [find récupère un user dont l'id est passé en param]
	 * @param  integer $id = id du User
	 * @return object $user
	 */
	public static function find($id)
	{
		$article = new article;
		$article->getOneBy($id, "id", "article");
		$article->setFromBdd($article->result);

		return $article;
	}
	
}

?>