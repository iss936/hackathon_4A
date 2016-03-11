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
                          <textarea name="contenu" id="comment" class="form-control js-editor" rows="5" placeholder="Ne postez pas d'insultes, évitez les majuscules, faites une recherche avant de poster pour voir si la question n'a pas déjà été posée... Tout message d'incitation au piratage est strictement interdit et sera puni d'un bannissement."></textarea>
                        </div>
                        <button type="submit" class="btn btn-default alert-info">Envoyer</button>
                  </form>
                </li>
                <!-- Form add comment END-->
        </ul>
    </div>

 <div class="col-md-3 col-lg-3">
        <!-- Half Page Image Background Carousel Header -->
         <div class = "list-group">
            <a class = "list-group-item active">
               <h4 class = "list-group-item-heading">
                  Top hôtels
               </h4>
                
            </a>
   
            <a href = "http://www.bestwestern.fr/fr/hotel-paris-1er,BEST-WESTERN-PREMIER-Opera-Faubourg,93808" class = "list-group-item">
               <h4 class = "list-group-item-heading">
                   BEST WESTERN PREMIER <small>Hotel Opera Faubourg</small>
               </h4>
            </a>
   
            <a href = "http://www.bestwestern.fr/fr/hotel-Lyon,Best-Western-Hotel-Charlemagne,93451" class = "list-group-item">
               <h4 class = "list-group-item-heading">
                   BEST WESTERN <small>Hotel Charlemagne</small>
               </h4>
            </a>
             
            <a href = "http://www.bestwestern.fr/fr/hotel-Cannes,Best-Western-Hotel-Univers,93694" class = "list-group-item">
               <h4 class = "list-group-item-heading">
                   BEST WESTERN <small>Hotel Univers</small>
               </h4>
            </a>
             
             <a href = "http://www.bestwestern.fr/recherche.jsp?primarylangid=fr-FR&countrycode=&RequestedCurrencyCode=EUR&locationLat=48.856614&locationLng=2.3522219000000177&distance=30&cityname=Paris%2C+France&SearchByLatLng=gplace&corp_id=&xiti_state=%CEle-de-France&xiti_area=%CEle-de-France&xiti_district=&xiti_department=Paris&xiti_city=Paris&xiti_country=France&city=Paris%2C+France&DateRangeStart=11/03/2016&DateRangeEnd=12/03/2016&duration=1&roomQuantity=1&adultQuantity_1=1&childQuantity_1=0&room_1_child_1=1&room_1_child_2=1&adultQuantity_2=1&childQuantity_2=0&room_2_child_1=1&room_2_child_2=1&adultQuantity_3=1&childQuantity_3=0&room_3_child_1=1&room_3_child_2=1&sob=A42&iata=00158510#hotelname93578" class = "list-group-item">
               <h4 class = "list-group-item-heading">
                   BEST WESTERN <small>Quartier Latin Panthéon</small>
               </h4>
            </a>
             
             <a href = "http://www.bestwestern.fr/recherche.jsp?primarylangid=fr-FR&countrycode=&RequestedCurrencyCode=EUR&locationLat=48.856614&locationLng=2.3522219000000177&distance=30&cityname=Paris%2C+France&SearchByLatLng=gplace&corp_id=&xiti_state=%CEle-de-France&xiti_area=%CEle-de-France&xiti_district=&xiti_department=Paris&xiti_city=Paris&xiti_country=France&city=Paris%2C+France&DateRangeStart=11/03/2016&DateRangeEnd=12/03/2016&duration=1&roomQuantity=1&adultQuantity_1=1&childQuantity_1=0&room_1_child_1=1&room_1_child_2=1&adultQuantity_2=1&childQuantity_2=0&room_2_child_1=1&room_2_child_2=1&adultQuantity_3=1&childQuantity_3=0&room_3_child_1=1&room_3_child_2=1&sob=A42&iata=00158510#hotelname93546" class = "list-group-item">
               <h4 class = "list-group-item-heading">
                   BEST WESTERN <small>Hotel Aurore</small>
               </h4>
            </a>
        </div>
    </div>

    </div>
</div>
