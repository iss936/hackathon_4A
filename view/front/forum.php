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