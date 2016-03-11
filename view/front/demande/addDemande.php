
<div id="main">
    <div class="row">
    
        <div class="col-md-10 col-lg-10 blocNews">
            <?php include 'view/front/flashMessage.php'; ?>

            <!-- Half Page Image Background Carousel Header -->
            <h1>Envoyer une demande</h1>
            <hr>
            <div>
                <form method="POST" action="/demandes/addDemandeCheck">
                    <div class="form-group">
                      <select name="categorie" class="form-control" id="categorie" required="Veuillez sélectionner une catégorie">
                          <option value="" selected>Choisir une catégorie de demande</option>
                          <?php foreach ($categories as $oneCategorie): ?>
                            <option value="<?php echo $oneCategorie['id'] ?>"><?php echo $oneCategorie['nom']; ?></option>
                          <?php endforeach ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Sujet</label>
                      <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Sujet" required="Veuillez saisir un sujet">
                    </div>
                    <div class="form-group">
                      <label>Destinataire</label>
                      <select name="destinataire" class="form-control" id="destinataire" required="Sélectionner un destinataire">
                          <option value="" selected>Sélectionner un destinataire</option>
                           <?php foreach ($users as $oneUser): ?>
                            <option value="<?php echo $oneUser['id'] ?>"><?php echo $oneUser['nom']; ?></option>
                          <?php endforeach ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Message</label>
                      <textarea id="message" name="message" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="row">
                      <button type="submit" name="save-and-list" class="btn btn-success">Envoyer et retourner à la liste</button>
                      <button type="submit" name="save" class="btn btn-default">Envoyer et continuer</button>
                      
                      <a href="/demandes" class="btn btn-info">Retourner à la liste des demandes</a>
                    </div>
                    
                  </form>
            </div>
        </div>
</div>
</div>

