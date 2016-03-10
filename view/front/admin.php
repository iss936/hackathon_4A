<?php 


$article = new article();
$user = new user();
$demande = new demande();

$list = $article->getAll('article');
$listUser = $user->getAll('user');
$listDemande = $demande->getAll('demande');

$compte;
$cptUser;
$cptDemande;

foreach ($list as $cpt) {
    $compte +=1;
}

foreach ($listUser as $cpt) {
    $cptUser +=1;
}

foreach ($listDemande as $cpt) {
    $cptDemande +=1;
}
//echo "compte : ".$compte;
?>

<div id="wrapper">
    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active"><i class="fa fa-dashboard"></i> Espace Admin </li>
                        </ol>
                    </div>
                </div><!-- /.row -->

                <div id="dashboard-panel">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="panel panel-violet">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-commenting fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $cptDemande; ?></div>
                                            <div class="titleAdmin">Demandes envoyées</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-image-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $compte; ?></div>
                                            <div class="titleAdmin">Articles </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="panel panel-blue">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $cptUser; ?></div>
                                            <div class="titleAdmin">Membres</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /#dashboard-panel -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Gérer les articles </h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="col-md-12 col-lg-12 blocNews">
                                    <!-- Half Page Image Background Carousel Header -->
                                    <h1>Articles</h1>
                                    <hr>
                                    <table class="table forum table-striped">
                                        <thead>
                                          <tr>
                                            <th class="cell-stat"></th>
                                            <th>Sujet</th>
                                            <th class="cell-stat text-center hidden-xs hidden-sm">Commentaires</th>
                                            <th class="cell-stat-2x hidden-xs hidden-sm">Supprimer</th>
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
                                            <td class="text-center"><i class="text-primary"></i></td>
                                            <td>
                                              <h4><a href="<?php echo ADRESSE_SITE; ?>index/forumDiscuss/<?php echo $value['id']?>"> <?php echo $value['titre'] ?></a></h4>
                                            </td>
                                            <td class="text-center hidden-xs hidden-sm"><a href="#"><?php  echo $listCommentaire;  ?></a></td>
                                            <td class="hidden-xs hidden-sm"><a href="#" class='btn btn-primary'>Supprimer</a></td>
                                          </tr>

                                          <?php
                                          }
                                          ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Ajouter un membre </h3>
                            </div>
                            <div class="panel-body" style="height:360px; overflow: scroll;">
                                <form method="POST" action="/index/insertMember">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Prénom</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">login</label>
                                        <input type="text" class="form-control" name="login" id="login" placeholder="Login">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mot de passe</label>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Téléphone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="téléphone">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mail</label>
                                        <input type="text" class="form-control" name="mail" id="mail" placeholder="mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Type Admin</label>
                                        <input type="text" class="form-control" name="typeAdmin" id="typeAdmin" placeholder="type Admin">
                                    </div>
                                    
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                              </form>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
