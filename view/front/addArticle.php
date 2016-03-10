
<div id="main">
    <div class="row">
       <?php
            $catArticle = new catArticle();
            //var_dump($catArticle);
            $list = $catArticle->getAll('catarticle');
            //var_dump($list);

            $idUser = $_SESSION['id'];
        ?>  

        <div class="col-md-8 col-lg-8 blocNews">
            <!-- Half Page Image Background Carousel Header -->
            <h1>Ajouter un article</h1>
            <hr>
            <div>
                <form method="POST" action="/index/insertArticle/<?php echo $idUser;?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Catégorie</label>
                       <select type="email" class="form-control" id="categorie" name="categorie">
                          <?php
                            foreach ($list as  $value) {
                            
                            

                          ?>
                          <option value="<?php echo $value['id']; ?>" selected><?php echo $value['nom']; ?></option>
                          <?php
                          }
                          ?>
                     
                      </select>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Sujet</label>
                      <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Sujet">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Message</label>
                      <textarea id="message" class="form-control" name="message" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Envoyer</button>
                  </form>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 blocTop">
        <!-- Half Page Image Background Carousel Header -->
            <h3 class="tophotel"></h3>
            
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
