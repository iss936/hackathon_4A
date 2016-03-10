<div id="main">
    <div class="row">

        <?php
            $article = new article();
            //var_dump($catArticle);
            $list = $article->getAll('article');
            //var_dump($list);
            //$test = new user();
            //$test->getOneBy(1,'user');
            //print_r($test);
        ?>

        <div class="col-md-8 col-lg-8 blocNews">
            <!-- Half Page Image Background Carousel Header -->
            <h1>Derniers articles</h1>
            <hr>
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
                    <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
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