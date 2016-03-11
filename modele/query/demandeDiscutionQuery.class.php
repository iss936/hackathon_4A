<?php 

class demandeDiscutionQuery
{
	
	function __construct()
	{
	}

	/**
	 * [getAll récupère toutes les demandediscution de demande]
	 * @param  none
	 * @return array
	 */
	public static function getAll()
	{
		$demandes = new demandeDiscution();
		$demandes = $demandes->requete("SELECT * FROM demandediscution ORDER BY updatedAt");

		return $demandes;
	}

	/**
	 * []
	 * @param  this pk
	 * @return array avec la discution et ses messages
	 */
	public static function joinMessages($id)
	{
		$demandes = new demande();
		$demandes = $demandes->requete("SELECT demandediscution.*, messagedemande.id as idMessage, messagedemande.idDemandeDiscution, messagedemande.contenu, messagedemande.auteurId, messagedemande.createdAt as dateMessage
		FROM demandediscution, messagedemande 
		WHERE demandediscution.id = messagedemande.idDemandeDiscution
		AND demandediscution.id =".$id."
		Order by messagedemande.createdAt;");

		return $demandes;
	}

	/**
	 * [find récupère une demandediscution dont l'id est passé en param]
	 * @param  integer $id = id de la demandeDiscution
	 * @return object $demande
	 */
	public static function find($id)
	{
		$demande = new demandeDiscution();
		$demande->getOneBy($id, "id", "demandediscution");
		$demande->setFromBdd($demande->result);

		return $demande;
	}
}

?>