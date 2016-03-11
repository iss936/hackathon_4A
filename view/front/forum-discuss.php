<div id="main">
    <div class="row">

         <?php
            $article = new article();
            //var_dump($catArticle);
          //  echo $idArticle;
            $article = articleQuery::find($idArticle);
           // var_dump($article);
            //$test = new user();
            //$test->getOneBy(1,'user');
            //print_r($test);

            $idUser = $_SESSION['id'];

        ?>

        <div class="col-md-8 col-lg-8 blocNews">

            <h1 class="page-header"><i class="fa fa-pencil"></i> Commentaires <a class="btn btn-default" href="<?php echo ADRESSE_SITE; ?>index/forum"><i class="fa fa-backward"></i> Back to Home</a></h1>          
            <ul class="media-list forum">

                <strong>Sujet : <?php echo $article->getTitre(); ?></strong><br>
                <small><i>Dernière modification le : <?php echo $article->getUpdatedAt(); ?></i></small><br><br>   
                <?php echo $article->getContenu();?>  
                <hr>
                <!-- Forum Post -->
                <?php
                    $listCommentaire = commentaireQuery::getAllCommentsByIdArticle($idArticle);
                    // print_r($listCommentaire);   
                    foreach ($listCommentaire as $value) {

                    $id = $value['authorId']; 
                    $user = userQuery::find($id);
                ?>

                <li class="media well">
                  <div class="pull-left user-info" href="#">
                    <img class="avatar img-circle img-thumbnail" src="http://snipplicious.com/images/guest.png"
                      width="64" alt="Generic placeholder image">
                    <strong><a href="user.html"> <?php echo $user->getPrenom()." ".$user->getNom(); ?> </a></strong>
                    <br>
                    <small><b>Member</b></small>
                    <br>
                    <small class="btn-group btn-group-xs">
                    <a class="btn btn-default"><i class="fa fa-thumbs-o-up"></i></a>
                    <a class="btn btn-default"><i class="fa fa-thumbs-o-down"></i></a>
                    <strong class="btn btn-success">+451</strong>
                    </small>
                  </div>
                  <div class="media-body">
                    <!-- Post Info Buttons -->
                    <div class="forum-post-panel btn-group btn-group-xs">
                      <a href="#" class="btn btn-default"><i class="fa fa-clock-o"></i> Dernière modification le : <?php echo  $value['createdAt'] ?></a>
                    </div>
                    <hr>
                    <!-- Post Info Buttons END -->
                    <!-- Post Text -->
                    <p><?php echo $value['contenu']; ?></p>
                     <!-- Post Text EMD -->
                  </div>
                </li>

                <?php
                    }
                  //}
                ?>

                <!-- Form add comment-->
                <li class="media well">

                    <form method="POST" action="/index/addComment/<?php echo $idArticle; ?>/<?php echo $idUser; ?>">
                        <h5><b>Commenter</b></h5>
                        <hr>
                        <div class="form-group">
                          <textarea class="js-editor" name="contenu" id="comment" class="form-control" rows="5" placeholder="Ne postez pas d'insultes, évitez les majuscules, faites une recherche avant de poster pour voir si la question n'a pas déjà été posée... Tout message d'incitation au piratage est strictement interdit et sera puni d'un bannissement."></textarea>
                        </div>
                        <button type="submit" class="btn btn-default alert-info">Envoyer</button>
                  </form>
                </li>
                <!-- Form add comment END-->
        </ul>
    </div>

  <div class="col-md-3 col-lg-3 blocTop">
        <!-- Half Page Image Background Carousel Header -->
        <h3 class='tophotel'></h3>
       
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
