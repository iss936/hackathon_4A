
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
