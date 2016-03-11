<?php include 'view/front/flashMessage.php'; ?>

        <h1><?php echo $demande->getSujet(); ?></h1>
        <div id="getMessages" class="chat-container">

            <div class="chat-scroll">
                <ol class="chat">

                <?php foreach ($messages as $oneMessage): ?>
                    <?php if ($oneMessage['emmeteurId'] == $oneMessage['auteurId']): ?>
                        <li class="self">
                            <div class="avatar"><img src="" draggable="false"/></div>
                            <div class="msg">
                                <p><?php echo $oneMessage['contenu']; ?></p>
                                <time><?php echo $oneMessage['dateMessage']; ?></time>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="other">
                            <div class="avatar"><img src="" draggable="false"/></div>
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