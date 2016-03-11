<div id="main">
    <div class="row">

        <?php
            $article = new article();
            //var_dump($catArticle);
            $list = $article->getAll('article');
        ?>

        <div class="col-md-8 col-lg-8 blocNews">
            <!-- Half Page Image Background Carousel Header -->
            <div class="row">
                <h2 class="col-lg-7 col-md-7 col-sm-7">Derniers articles</h2> 
                <a href="/index/addArticle" class="btn btn-primary col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-sm-3" style='top:18px;'>Ajouter un article</a><br>
            </div>
            <hr><br>
            <table class="table forum table-striped">
                <thead>
                  <tr>
                    <th class="cell-stat"></th>
                    <th>Sujet</th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($list as $value) {
                    $listCommentaire = commentaireQuery::countAllCommentsById($value['id']);
                    $id = $value['authorId']; 
                    $user = userQuery::find($id);
                  ?>
                  <tr>
                    <td class="text-center"><i class="fa fa-file-o fa-2x text-primary"></i></td>
                    <td>
                      <h4><a href="<?php echo ADRESSE_SITE; ?>index/forumDiscuss/<?php echo $value['id']?>"> <?php echo $value['titre'] ?></a></h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#"><?php  echo $listCommentaire;  ?></a></td>
                    <td class="hidden-xs hidden-sm">by <a href="#"><?php echo $user->getNom();?></a><br><small><i class="fa fa-clock-o"></i> <?php echo $value['createdAt'] ?></small></td>
                  </tr>

                  <?php
                  }
                  ?>

                </tbody>
            </table>
            
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