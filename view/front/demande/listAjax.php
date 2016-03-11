<thead>
                  <tr>
                    <th>Auteur</th>
                    <th>Catégorie</th>
                    <th>Sujet</th>
                    <th>Destinataire</th>
                    <th>Statut</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
             	<?php foreach ($demandes as $oneDemande): ?>
             		<!-- <i class="fa fa-question fa-2x text-primary"></i> -->
             		<?php  $destinataire = userQuery::find($oneDemande['destinataireId']); ?>
             		<?php $terminer = ($oneDemande['terminer'] == 0)? "En cours": "terminer"; ?>
             		
	                  <tr>
	                    <td class="text-center"><?php echo $oneDemande['createdBy']; ?></td>
						<td class="text-center hidden-xs hidden-sm"><?php echo $oneDemande['nom']; ?></td>
						<td class="text-center hidden-xs hidden-sm"><?php echo $oneDemande['sujet']; ?></td>
						<td class="text-center hidden-xs hidden-sm"><?php echo $destinataire->getNom(); ?></td>
						<td class="text-center hidden-xs hidden-sm"><?php echo $terminer; ?></td>
	                   
	                    <td class="hidden-xs hidden-sm"><?php echo $oneDemande['createdAt']; ?></td>
						<td class="inline"><a href="<?php echo '/demandes/voirDemande/'.$oneDemande['idd']; ?>" class="btn btn-info">Voir</a> 
						<?php if(($user->getRoles() == "ROLE_ADMIN" || $oneDemande['emmeteurId'] == $user->getId()) && ($oneDemande['terminer'] == 0)) : ?>

							 <a href="<?php echo '/demandes/terminer/'.$oneDemande['idd']; ?>" class="btn btn-warning" data-original-title="Terminer la discussion" data-confirm="Etes-vous sur de vouloir terminer la discussion ? Il ne vous sera plus possible de communiquer avec votre destinataire">Terminer</a>
							<!-- <a href="#" class="btn btn-danger">Supprimer</a> -->
            			<?php endif; ?>
						<a href=""></a></td>

                		
	                  </tr>
             	<?php endforeach ?>
				
                </tbody>