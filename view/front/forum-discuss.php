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
        ?>

        <div class="col-md-8 col-lg-8 blocNews">

            <h1 class="page-header"><i class="fa fa-pencil"></i> Commentaires <a class="btn btn-default" href="<?php echo ADRESSE_SITE; ?>index/forum"><i class="fa fa-backward"></i> Back to Home</a></h1>          
            <ul class="media-list forum">

                <strong>Sujet : <?php echo $article->getTitre(); ?></strong><br>   
                <?php echo $article->getContenu();?>  
                <hr><br>
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
                    <strong><a href="user.html"> <?php echo $user->getNom()." ".$user->getPrenom(); ?> </a></strong>
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
                      <a href="#" class="btn btn-default"><i class="fa fa-clock-o"></i><?php echo $value['createdAt'] ?></a>
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

                    <form method="POST" action="/index/addComment/<?php echo $idArticle; ?>/2">
                        <h5><b>Commenter</b></h5>
                        <hr>
                        <div class="form-group">
                          <textarea name="contenu" id="comment" class="form-control" rows="5" placeholder="Ne postez pas d'insultes, évitez les majuscules, faites une recherche avant de poster pour voir si la question n'a pas déjà été posée... Tout message d'incitation au piratage est strictement interdit et sera puni d'un bannissement."></textarea>
                        </div>
                        <button type="submit" class="btn btn-default alert-info">Envoyer</button>
                  </form>
                </li>
                <!-- Form add comment END-->
        </ul>
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
