<?php 

class catDemandeQuery
{
	
	function __construct()
	{
		# code...
	}

	/**
	 * [getOthers récupère toutes les catégories de demande]
	 * @param  none
	 * @return array
	 */
	public static function getAll()
	{
		$categorie = new catDemande;
		$categories = $categorie->requete("SELECT * FROM catdemande ORDER BY nom");

		return $categories;
	}

}

?>