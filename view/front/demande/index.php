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
            </table>
            
        </div>        
    </div>
</div>

<div class="modal fade" id="dataConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
      </div>
      <div class="modal-body" id="myModalContent" style='color: #000'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <a class="btn btn-primary" id="dataConfirmOK">Valider</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        // setInterval ( "get()", 5000 );
        $('a[data-confirm]').click(function(ev) {
            var href = $(this).attr('href');

            $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
            $('#dataConfirmOK').attr('href', href);
            $('#dataConfirmModal').modal({show:true});
            return false;
        });
   
    });
</script>