<?php 

//include("dashboardHead.php"); 

/* Count Member 
$memberCountObj = new memberModel();
$nbMember = $memberCountObj->countRow();

/* Count Picture 
$pictureCountObj = new pictureModel();
$nbPicture = $pictureCountObj->countRow();

/* Count Contest 
$contestCountObj = new contestModel();
$nbContest = $contestCountObj->countRow();

// Select user limit 8
$memberListObj = new memberModel();
$members = $memberListObj->getUserByLimit();

// Select contest limit 8
$contestListObj = new contestModel();
$contests = $contestListObj->getContestByLimit();
*/
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
                                            <i class="fa fa-trophy fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $nbContest; ?></div>
                                            <div>Demandes envoyées</div>
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
                                            <div class="huge"><?php //echo $nbPicture; ?></div>
                                            <div>Articles </div>
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
                                            <div class="huge"><?php //echo $nbMember; ?></div>
                                            <div>Membres</div>
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
                                <div id="statistics-chart"></div>
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
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Photo</label>
                                        <input type="text" class="form-control" name="photo" id="photo" placeholder="photo">
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
