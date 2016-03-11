<?php 

class demandeQuery
{
	
	function __construct()
	{
	}

	/**
	 * [getAll récupère toutes les catégories de demande]
	 * @param  none
	 * @return array
	 */
	public static function getAll()
	{
		$demandes = new demande();
		$demandes = $demandes->requete("SELECT * FROM demande ORDER BY sujet");

		return $demandes;
	}

	/**
	 * [récupère les infos importantes pour la liste des demandes jointure de 3 tables (demande,catdemande,demandediscution)]
	 * @param  none
	 * @return array
	 */
	public static function getListInfo()
	{
		$demandes = new demande();
		$demandes = $demandes->requete("SELECT catdemande.nom,demande.*, demandediscution.id as idd, demandediscution.terminer,demandediscution.destinataireId, demandediscution.emmeteurId
		FROM demande,demandediscution,catdemande
		WHERE demande.catDemandeId = catdemande.id
		And demande.id = demandediscution.idDemande
		Order by demande.createdBy DESC;");

		return $demandes;
	}

	/**
	 * [find récupère une demande dont l'id est passé en param]
	 * @param  integer $id = id de la demande
	 * @return object $demande
	 */
	public static function find($id)
	{
		$demande = new demande();
		$demande->getOneBy($id, "id", "demande");
		$demande->setFromBdd($demande->result);

		return $demande;
	}
}

?>