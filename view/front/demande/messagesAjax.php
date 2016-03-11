<?php include 'view/front/flashMessage.php'; ?>

        <h1><?php echo $demande->getSujet(); ?></h1>
        <div id="getMessages" class="chat-container">
            <div class="chat-scroll">
                <ol class="chat">
                <?php foreach ($messages as $oneMessage): ?>
                    <?php if ($oneMessage['emmeteurId'] == $oneMessage['auteurId']): ?>
                        <li class="self">
                            <?php $auteur = userQuery::find($oneMessage['emmeteurId']); ?>
                            
                            <div class="avatar"><img class="avatar img-circle img-thumbnail" width="64" alt="<?php echo $auteur->getNom(); ?>" title="<?php echo $auteur->getNom(); ?>" src="http://snipplicious.com/images/guest.png"></div>
                            <div class="msg">
                                <p><?php echo $oneMessage['contenu']; ?></p>
                                <time><?php echo $oneMessage['dateMessage']; ?></time>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="other">
                            <?php $destinataire = userQuery::find($oneMessage['destinataireId']); ?>

                            <div class="avatar"><img class="avatar img-circle img-thumbnail" width="64" alt="<?php echo $destinataire->getNom(); ?>" title="<?php echo $destinataire->getNom(); ?>"src="http://snipplicious.com/images/guest.png"></div>
                            <div class="msg">
                                <p><?php echo $oneMessage['contenu']; ?></p>
                                <time><?php echo $oneMessage['dateMessage']; ?></time>
                            </div>
                        </li>
                    <?php endif ?>

                <?php endforeach ?>
                
                </ol>
            </div>
        </div>