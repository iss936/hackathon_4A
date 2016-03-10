<div id="main">
    <div class="row">

        <?php
            $user = new user();
            $listUser = $user->getAll('user');
        ?>

        <div class="col-md-8 col-lg-8 blocNews">
            <!-- Half Page Image Background Carousel Header -->
            <h1>Annuaire</h1>
            <hr>
            <table class="table forum table-striped">
                <thead>
                  <tr>
                    <th class="cell-stat"></th>
                    <th>Contact</th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Mail</th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Téléphone</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($listUser as $value){


                  ?>
                  <tr>
                    <td class="text-center"><i class="fa fa-user fa-2x text-primary"></i></td>
                    <td>
                     <h4><a href=""> <?php echo $value['prenom']." ".$value['nom'];?> </a></h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm">
                        <h4><a href=""> <?php echo $value['mailPro']; ?> </a></h4>
                    </td>
                    <td class="hidden-xs hidden-sm">
                        <h4><a href=""><?php echo $value['telPro']; ?> </a></h4>
                    </td>
                  </tr>

                  <?php
                    }
                  ?>

                </tbody>
            </table>
            
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