<?php include 'view/front/flashMessage.php'; ?>
<div id="main">
	<a href="/demandes/addDemande" class="btn btn-info">Ajouter une Demande</a>
    
    <div class="row">
        <div class="col-md-12 col-lg-12 blocNews">
            <h1>Les dernières demandes</h1>
            <hr>
            <table class="table forum table-striped">
                <thead>
                  <tr>
                    <th>Auteur</th>
                    <th>Catégorie</th>
                    <th>Sujet</th>
                    <th>Destinataire</th>
                    <th>Statut</th>
                    <th>Date de création</th>
                  </tr>
                </thead>
                <tbody>
             	<?php foreach ($demandes as $oneDemande): ?>
             		<!-- <i class="fa fa-question fa-2x text-primary"></i> -->
             		<?php  $destinataire = userQuery::find($oneDemande['destinataireId']); ?>
             		<?php $terminer = ($oneDemande['terminer'] == 0)? "En cours": "terminer"; ?>
             		
	                  <tr>
	                  	<a href="#">
		                    <td class="text-center"><?php echo $oneDemande['createdBy']; ?></td>
							<td class="text-center hidden-xs hidden-sm"><?php echo $oneDemande['nom']; ?></td>
							<td class="text-center hidden-xs hidden-sm"><?php echo $oneDemande['sujet']; ?></td>
							<td class="text-center hidden-xs hidden-sm"><?php echo $destinataire->getNom(); ?></td>
							<td class="text-center hidden-xs hidden-sm"><?php echo $terminer; ?></td>
		                   
		                    <td class="hidden-xs hidden-sm"><?php echo $oneDemande['createdAt']; ?></td>
                  		</a>

	                  </tr>
             	<?php endforeach ?>
				
                </tbody>
            </table>
            
        </div>        
    </div>
</div>