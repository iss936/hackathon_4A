
<div id="main">
    <div class="row">
    
        <div class="col-md-8 col-lg-8 blocNews">
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
    
        <div class="col-md-3 col-lg-3 blocTop">
        <!-- Half Page Image Background Carousel Header -->
        <h3>Top Hôtels</h3>
        <hr>
        <table class="table table-striped ">
            <ul class="list-group">
                <li class="list-group-item row"><a href="http://www.bestwestern.fr/fr/hotel-paris-1er,BEST-WESTERN-PREMIER-Opera-Faubourg,93808"><img class="col-md-5 col-sm-5" src="<?php echo ADRESSE_SITE; ?>view/css/img/HotelOperaParis.jpg" width=100 height=50><h6 class='col-md-7 col-sm-7'>BEST WESTERN PREMIER Hotel Opera Faubourg, Paris</h6></a></li>
                <li class="list-group-item row"><a href="http://www.bestwestern.fr/fr/hotel-Lyon,Best-Western-Hotel-Charlemagne,93451"><img class="col-md-5 col-sm-5" src="<?php echo ADRESSE_SITE; ?>view/css/img/HotelCharlemagneLyon.jpg" width=100 height=50><h6 class='col-md-7 col-sm-7'>BEST WESTERN Hotel Charlemagne, Lyon</h6></a></li>
                <li class="list-group-item row"><a href="http://www.bestwestern.fr/fr/hotel-Cannes,Best-Western-Hotel-Univers,93694"><img class="col-md-5 col-sm-5" src="<?php echo ADRESSE_SITE; ?>view/css/img/HotelUniversCannes.jpg" width=100 height=50><h6 class='col-md-7 col-sm-7'>BEST WESTERN Hotel Univers, Cannesb</h6></a></li>

            </ul>
        </table>
    </div>
</div>
</div>

