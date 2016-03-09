
<div id="main">
    <div class="row">
       <?php
            $catArticle = new catArticle();
            //var_dump($catArticle);
            $list = $catArticle->getAll('catarticle');
            //var_dump($list);
        ?>  

        <div class="col-md-8 col-lg-8 blocNews">
            <!-- Half Page Image Background Carousel Header -->
            <h1>Ajouter un article</h1>
            <hr>
            <div>
                <form method="POST" action="/index/insertArticle">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Catégorie</label>
                       <select type="email" class="form-control" id="categorie" name="categorie">
                          <?php
                            foreach ($list as  $value) {
                            
                            

                          ?>
                          <option name="categorie" selected><?php echo $value['nom']; ?></option>
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
            <h3>Top Hôtels</h3>
            <hr>
            <table class="table table-striped">
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </table>
        </div>
</div>
</div>
